<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Point d'entrée de configuration de l'application Laravel : déclare les fichiers de routes,
// la route de vérification de santé, ainsi que les middlewares et la gestion des exceptions
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        // Routes web publiques du site
        web: __DIR__.'/../routes/web.php',
        // Commandes Artisan personnalisées
        commands: __DIR__.'/../routes/console.php',
        // Route de contrôle de santé de l'application (utilisée par les outils de monitoring)
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Fait confiance au proxy inverse (Render, etc.) : lit les en-têtes X-Forwarded-*
        // pour que Laravel sache que la requête d'origine est en HTTPS, et genere donc
        // des URLs (assets, canonical, etc.) en https:// au lieu de http:// (evite le
        // blocage "contenu mixte" par le navigateur).
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Emplacement pour personnaliser la gestion des exceptions (aucune personnalisation pour l'instant)
    })->create();
