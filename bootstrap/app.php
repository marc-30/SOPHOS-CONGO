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
        // Emplacement pour enregistrer ou configurer des middlewares personnalisés (aucun pour l'instant)
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Emplacement pour personnaliser la gestion des exceptions (aucune personnalisation pour l'instant)
    })->create();
