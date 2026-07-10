<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nom de la connexion de file d'attente par défaut
    |--------------------------------------------------------------------------
    |
    | Le système de files d'attente de Laravel prend en charge une variété
    | de moteurs (backends) via une API unique et unifiée, vous donnant un
    | accès pratique à chaque moteur avec une syntaxe identique. La
    | connexion de file d'attente par défaut est définie ci-dessous.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Connexions de files d'attente
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici configurer les options de connexion pour chaque
    | moteur de file d'attente utilisé par votre application. Un exemple
    | de configuration est fourni pour chaque moteur pris en charge par
    | Laravel. Vous êtes également libre d'en ajouter d'autres.
    |
    | Pilotes : "sync", "database", "beanstalkd", "sqs", "redis",
    |           "deferred", "background", "failover", "null"
    |
    */

    'connections' => [

        // Exécute les jobs immédiatement et de manière synchrone (pas de véritable file d'attente).
        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],

        // Exécute le job de manière asynchrone différée, sans passer par un moteur de file d'attente classique.
        'deferred' => [
            'driver' => 'deferred',
        ],

        // Exécute le job en arrière-plan (background) après la réponse envoyée au client.
        'background' => [
            'driver' => 'background',
        ],

        // Bascule vers la connexion suivante de la liste en cas d'échec de la première.
        'failover' => [
            'driver' => 'failover',
            'connections' => [
                'database',
                'deferred',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Regroupement de jobs (Job Batching)
    |--------------------------------------------------------------------------
    |
    | Les options suivantes configurent la base de données et la table qui
    | stockent les informations de regroupement de jobs. Ces options
    | peuvent être mises à jour vers n'importe quelle connexion et table
    | de base de données définie par votre application.
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
    | Jobs de file d'attente échoués
    |--------------------------------------------------------------------------
    |
    | Ces options configurent le comportement de la journalisation des jobs
    | de file d'attente échoués, afin que vous puissiez contrôler comment
    | et où les jobs échoués sont stockés. Laravel prend en charge le
    | stockage des jobs échoués dans un simple fichier ou dans une base de
    | données.
    |
    | Pilotes pris en charge : "database-uuids", "dynamodb", "file", "null"
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],

];
