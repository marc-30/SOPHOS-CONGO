# --- Stage 1: build front-end assets (Tailwind/Vite) ---
FROM node:20-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY vite.config.js ./
COPY resources/css resources/css
COPY resources/js resources/js
RUN npm run build

# --- Stage 2: PHP application ---
FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo_sqlite mbstring zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --optimize-autoloader

COPY . .
COPY --from=assets /app/public/build public/build

RUN composer dump-autoload --optimize --no-dev \
    && mkdir -p storage/framework/{cache,sessions,testing,views} storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 10000
CMD php artisan migrate --force && php artisan serve --host 0.0.0.0 --port ${PORT:-10000}
