<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Services tiers
    |--------------------------------------------------------------------------
    |
    | Ce fichier sert à stocker les identifiants des services tiers tels que
    | Mailgun, Postmark, AWS et bien d'autres. Ce fichier constitue
    | l'emplacement de facto pour ce type d'information, permettant aux
    | packages de disposer d'un fichier conventionnel où localiser les
    | différents identifiants de service.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    // Mailtrap Sending API : utilisé à la place du SMTP, qui refusait l'authentification sur ce compte
    'mailtrap' => [
        'token' => env('MAILTRAP_API_TOKEN'),
        'url' => env('MAILTRAP_API_URL', 'https://send.api.mailtrap.io/api/send'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // Identifiants utilisés pour l'envoi des notifications vers Slack (canal de notifications applicatives).
    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
