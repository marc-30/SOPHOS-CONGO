<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    /*
    |--------------------------------------------------------------------------
    | Canal de journalisation par défaut
    |--------------------------------------------------------------------------
    |
    | Cette option définit le canal de journalisation par défaut utilisé
    | pour écrire les messages dans vos journaux (logs). La valeur fournie
    | ici doit correspondre à l'un des canaux présents dans la liste des
    | "channels" configurés ci-dessous.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Canal de journalisation des dépréciations
    |--------------------------------------------------------------------------
    |
    | Cette option contrôle le canal de journalisation qui doit être utilisé
    | pour consigner les avertissements concernant les fonctionnalités PHP et
    | de bibliothèques dépréciées. Cela vous permet de préparer votre
    | application aux prochaines versions majeures des dépendances.
    |
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Canaux de journalisation
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici configurer les canaux de journalisation de votre
    | application. Laravel utilise la bibliothèque de journalisation PHP
    | Monolog, qui inclut une variété de gestionnaires (handlers) et de
    | formateurs puissants que vous êtes libre d'utiliser.
    |
    | Pilotes disponibles : "single", "daily", "slack", "syslog",
    |                       "errorlog", "monolog", "custom", "stack"
    |
    */

    'channels' => [

        // Canal composite : envoie chaque message vers plusieurs canaux à la fois (voir LOG_STACK).
        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', (string) env('LOG_STACK', 'single')),
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        // Écrit un fichier de log distinct par jour, conservé pendant le nombre de jours indiqué.
        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => env('LOG_DAILY_DAYS', 14),
            'replace_placeholders' => true,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        // Écrit les logs sur la sortie d'erreur standard (utile notamment dans les conteneurs Docker).
        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'handler_with' => [
                'stream' => 'php://stderr',
            ],
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        // Ignore tous les messages de log (aucune écriture).
        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        // Canal utilisé en dernier recours si aucun autre canal configuré n'est utilisable.
        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],

    ],

];
