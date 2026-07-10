<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Disque de fichiers par défaut
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici spécifier le disque de fichiers par défaut qui doit
    | être utilisé par le framework. Le disque "local", ainsi qu'une
    | variété de disques basés sur le cloud, sont disponibles pour le
    | stockage de fichiers de votre application.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Disques de fichiers
    |--------------------------------------------------------------------------
    |
    | Vous pouvez configurer ci-dessous autant de disques de fichiers que
    | nécessaire, et vous pouvez même configurer plusieurs disques pour un
    | même pilote. Des exemples pour la plupart des pilotes de stockage
    | pris en charge sont configurés ici à titre de référence.
    |
    | Pilotes pris en charge : "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        // Disque privé : les fichiers ne sont pas accessibles publiquement via une URL directe.
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
            'report' => false,
        ],

        // Disque public : les fichiers sont accessibles via une URL, notamment après `php artisan storage:link`.
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => rtrim(env('APP_URL', 'http://localhost'), '/').'/storage',
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'report' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Liens symboliques
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici configurer les liens symboliques qui seront créés
    | lors de l'exécution de la commande Artisan `storage:link`. Les clés
    | du tableau doivent être les emplacements des liens et les valeurs
    | doivent être leurs cibles.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
