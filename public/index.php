<?php

// Point d'entrée standard de Laravel : toutes les requêtes HTTP passent par ce fichier
// (via la réécriture d'URL du serveur web), qui délègue ensuite le traitement au framework.

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Enregistre l'horodatage de démarrage de l'application, utilisé notamment
// pour mesurer le temps d'exécution (debug bar, profiling, etc.).
define('LARAVEL_START', microtime(true));

// Vérifie si l'application est en mode maintenance...
// Si le fichier de maintenance existe (généré par `php artisan down`), on l'inclut
// et on arrête immédiatement le traitement normal de la requête.
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Enregistre l'autoloader de Composer...
// Il permet de charger automatiquement toutes les classes du projet et des dépendances
// (vendor) sans avoir besoin de "require" manuel pour chaque fichier.
require __DIR__.'/../vendor/autoload.php';

// Démarre (bootstrap) l'application Laravel et traite la requête...
// 1) Le fichier bootstrap/app.php construit et configure l'instance de l'application.
// 2) handleRequest() capture la requête HTTP courante, la fait transiter par le noyau
//    (middlewares, routage, contrôleur) et envoie la réponse au navigateur.
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
