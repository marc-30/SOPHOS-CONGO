<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Fournisseur de services principal de l'application, utilisé pour enregistrer
// et initialiser des services personnalisés au démarrage de Laravel
class AppServiceProvider extends ServiceProvider
{
    /**
     * Enregistre les services de l'application (liaisons dans le conteneur de services).
     */
    public function register(): void
    {
        //
    }

    /**
     * Initialise les services de l'application (exécuté après l'enregistrement de tous les providers).
     */
    public function boot(): void
    {
        //
    }
}
