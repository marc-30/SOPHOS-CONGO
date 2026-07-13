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
    zlib1g-dev \
    libonig-dev \
    pkg-config \
    unzip \
    && docker-php-ext-install pdo_sqlite mbstring zip opcache \
    && { \
        echo 'opcache.enable=1'; \
        echo 'opcache.memory_consumption=128'; \
        echo 'opcache.max_accelerated_files=10000'; \
        echo 'opcache.validate_timestamps=0'; \
    } > /usr/local/etc/php/conf.d/opcache-recommended.ini \
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
# config:cache et view:cache evitent de reparser le .env et de recompiler les
# vues Blade a chaque requete (route:cache impossible : routes/web.php utilise
# des closures, non serialisables par Laravel).
CMD php artisan config:cache \
    && php artisan view:cache \
    && php artisan migrate --force \
    && php artisan serve --host 0.0.0.0 --port ${PORT:-10000}
