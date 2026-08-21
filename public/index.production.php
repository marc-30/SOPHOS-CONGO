<?php

// Point d'entrée de production pour l'hébergement LWS : identique à index.php,
// mais avec des chemins absolus car public_html/ est un dossier séparé de
// l'application Laravel (repositories/SOPHOS-CONGO/), copié à chaque déploiement.
// Ce fichier remplace index.php uniquement dans public_html/ (voir .cpanel.yml).

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = '/home/cp2827210p02/repositories/SOPHOS-CONGO/storage/framework/maintenance.php')) {
    require $maintenance;
}

require '/home/cp2827210p02/repositories/SOPHOS-CONGO/vendor/autoload.php';

(require_once '/home/cp2827210p02/repositories/SOPHOS-CONGO/bootstrap/app.php')
    ->handleRequest(Request::capture());
