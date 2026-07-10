<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Store de cache par défaut
    |--------------------------------------------------------------------------
    |
    | Cette option contrôle le store de cache par défaut qui sera utilisé
    | par le framework. Cette connexion est utilisée si aucune autre n'est
    | explicitement spécifiée lors de l'exécution d'une opération de cache
    | au sein de l'application.
    |
    */

    'default' => env('CACHE_STORE', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Stores de cache
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici définir tous les "stores" de cache de votre application
    | ainsi que leurs pilotes. Vous pouvez même définir plusieurs stores pour
    | un même pilote de cache afin de regrouper des types d'éléments stockés
    | dans vos caches.
    |
    | Pilotes pris en charge : "array", "database", "file", "memcached",
    |                          "redis", "dynamodb", "octane",
    |                          "failover", "null"
    |
    */

    'stores' => [

        // Stocke le cache en mémoire, uniquement pour la durée de la requête (utile pour les tests).
        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_CACHE_CONNECTION'),
            'table' => env('DB_CACHE_TABLE', 'cache'),
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
            'lock_table' => env('DB_CACHE_LOCK_TABLE'),
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
            'lock_path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
        ],

        // Bascule automatiquement vers le store suivant de la liste en cas d'échec du premier.
        'failover' => [
            'driver' => 'failover',
            'stores' => [
                'database',
                'array',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Préfixe des clés de cache
    |--------------------------------------------------------------------------
    |
    | Lors de l'utilisation des stores de cache APC, database, memcached,
    | Redis et DynamoDB, il se peut que d'autres applications utilisent le
    | même cache. Pour cette raison, vous pouvez préfixer chaque clé de
    | cache afin d'éviter les collisions.
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-cache-'),

];
