<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nom de l'application
    |--------------------------------------------------------------------------
    |
    | Cette valeur correspond au nom de votre application. Elle sera utilisée
    | par le framework lorsqu'il aura besoin d'afficher le nom de l'application
    | dans une notification ou tout autre élément de l'interface utilisateur.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Environnement de l'application
    |--------------------------------------------------------------------------
    |
    | Cette valeur détermine l'"environnement" dans lequel votre application
    | s'exécute actuellement. Cela peut déterminer la façon dont vous préférez
    | configurer les différents services utilisés par l'application. Définissez
    | cette valeur dans votre fichier ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Mode débogage de l'application
    |--------------------------------------------------------------------------
    |
    | Lorsque votre application est en mode débogage, des messages d'erreur
    | détaillés accompagnés de la pile d'appels ("stack trace") seront
    | affichés pour chaque erreur survenant dans l'application. Si ce mode
    | est désactivé, une simple page d'erreur générique est affichée.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL de l'application
    |--------------------------------------------------------------------------
    |
    | Cette URL est utilisée par la console pour générer correctement les URL
    | lors de l'utilisation de l'outil en ligne de commande Artisan. Vous devez
    | définir cette valeur avec la racine de l'application afin qu'elle soit
    | disponible au sein des commandes Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Fuseau horaire de l'application
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici spécifier le fuseau horaire par défaut de votre
    | application, qui sera utilisé par les fonctions PHP de date et
    | d'heure. Le fuseau horaire est défini sur "UTC" par défaut car il
    | convient à la plupart des cas d'usage.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Configuration de la langue (locale) de l'application
    |--------------------------------------------------------------------------
    |
    | La locale de l'application détermine la langue par défaut qui sera
    | utilisée par les méthodes de traduction / localisation de Laravel.
    | Cette option peut être définie pour n'importe quelle langue pour
    | laquelle vous prévoyez d'avoir des chaînes de traduction.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    // Langue de repli utilisée lorsque la traduction n'existe pas dans la langue principale.
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    // Locale utilisée par la bibliothèque Faker (génération de données factices, ex. pour les seeders).
    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Clé de chiffrement
    |--------------------------------------------------------------------------
    |
    | Cette clé est utilisée par les services de chiffrement de Laravel et
    | doit être une chaîne aléatoire de 32 caractères afin de garantir que
    | toutes les valeurs chiffrées soient sécurisées. Vous devez la définir
    | avant de déployer l'application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    // Anciennes clés de chiffrement, conservées pour permettre le déchiffrement
    // de données existantes lors d'une rotation de la clé APP_KEY.
    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Pilote du mode maintenance
    |--------------------------------------------------------------------------
    |
    | Ces options de configuration déterminent le pilote utilisé pour gérer
    | l'état du "mode maintenance" de Laravel. Le pilote "cache" permet de
    | contrôler le mode maintenance sur plusieurs machines à la fois.
    |
    | Pilotes pris en charge : "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
