<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mailer par défaut
    |--------------------------------------------------------------------------
    |
    | Cette option contrôle le mailer par défaut qui est utilisé pour
    | envoyer tous les e-mails, à moins qu'un autre mailer ne soit
    | explicitement spécifié lors de l'envoi du message. Tous les mailers
    | supplémentaires peuvent être configurés dans le tableau "mailers".
    | Des exemples pour chaque type de mailer sont fournis.
    |
    */

    'default' => env('MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Configurations des mailers
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici configurer tous les mailers utilisés par votre
    | application ainsi que leurs paramètres respectifs. Plusieurs
    | exemples ont été configurés pour vous et vous êtes libre d'ajouter
    | les vôtres selon les besoins de votre application.
    |
    | Laravel prend en charge une variété de pilotes de "transport" d'e-mail
    | pouvant être utilisés lors de l'envoi d'un e-mail. Vous pouvez
    | spécifier celui que vous utilisez pour vos mailers ci-dessous. Vous
    | pouvez également ajouter des mailers supplémentaires si nécessaire.
    |
    | Pris en charge : "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    |                  "postmark", "resend", "log", "array",
    |                  "failover", "roundrobin"
    |
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'scheme' => env('MAIL_SCHEME'),
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url((string) env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        // Écrit les e-mails dans les logs au lieu de les envoyer réellement (utile en développement).
        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        // Conserve les e-mails en mémoire au lieu de les envoyer (utile pour les tests automatisés).
        'array' => [
            'transport' => 'array',
        ],

        // Bascule vers le mailer suivant de la liste en cas d'échec du premier.
        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
            'retry_after' => 60,
        ],

        // Répartit l'envoi des e-mails entre les mailers listés, à tour de rôle.
        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
            'retry_after' => 60,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Adresse d'expédition globale ("From")
    |--------------------------------------------------------------------------
    |
    | Vous pouvez souhaiter que tous les e-mails envoyés par votre
    | application le soient depuis la même adresse. Vous pouvez ici
    | spécifier un nom et une adresse qui seront utilisés globalement pour
    | tous les e-mails envoyés par votre application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', env('APP_NAME', 'Laravel')),
    ],

];
