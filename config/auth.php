<?php

use App\Models\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Valeurs par défaut de l'authentification
    |--------------------------------------------------------------------------
    |
    | Cette option définit le "garde" (guard) d'authentification par défaut
    | ainsi que le "broker" de réinitialisation de mot de passe par défaut
    | pour votre application. Vous pouvez modifier ces valeurs si besoin,
    | mais elles constituent un excellent point de départ pour la plupart
    | des applications.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Gardes d'authentification (guards)
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ensuite définir chaque garde d'authentification pour votre
    | application. Bien entendu, une excellente configuration par défaut a
    | été définie pour vous, utilisant le stockage en session ainsi que le
    | fournisseur d'utilisateurs Eloquent.
    |
    | Chaque garde d'authentification possède un fournisseur d'utilisateurs,
    | qui définit comment les utilisateurs sont réellement récupérés depuis
    | votre base de données ou tout autre système de stockage utilisé par
    | l'application. En général, Eloquent est utilisé.
    |
    | Pris en charge : "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Fournisseurs d'utilisateurs (providers)
    |--------------------------------------------------------------------------
    |
    | Chaque garde d'authentification possède un fournisseur d'utilisateurs,
    | qui définit comment les utilisateurs sont réellement récupérés depuis
    | votre base de données ou tout autre système de stockage utilisé par
    | l'application. En général, Eloquent est utilisé.
    |
    | Si vous avez plusieurs tables ou modèles d'utilisateurs, vous pouvez
    | configurer plusieurs fournisseurs pour représenter chaque modèle /
    | table. Ces fournisseurs peuvent ensuite être associés à n'importe
    | quel garde d'authentification supplémentaire que vous avez défini.
    |
    | Pris en charge : "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Réinitialisation des mots de passe
    |--------------------------------------------------------------------------
    |
    | Ces options de configuration spécifient le comportement de la
    | fonctionnalité de réinitialisation de mot de passe de Laravel, y
    | compris la table utilisée pour le stockage des jetons et le
    | fournisseur d'utilisateurs invoqué pour récupérer les utilisateurs.
    |
    | Le délai d'expiration correspond au nombre de minutes pendant
    | lesquelles chaque jeton de réinitialisation sera considéré comme
    | valide. Cette fonctionnalité de sécurité maintient les jetons à
    | courte durée de vie afin de limiter le temps disponible pour les
    | deviner. Vous pouvez modifier cette valeur selon vos besoins.
    |
    | Le paramètre de limitation (throttle) correspond au nombre de
    | secondes qu'un utilisateur doit attendre avant de générer d'autres
    | jetons de réinitialisation de mot de passe. Cela empêche l'utilisateur
    | de générer très rapidement un grand nombre de jetons.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Délai d'expiration de la confirmation de mot de passe
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici définir le nombre de secondes avant qu'une fenêtre de
    | confirmation de mot de passe n'expire et que les utilisateurs soient
    | invités à ressaisir leur mot de passe via l'écran de confirmation.
    | Par défaut, ce délai est de trois heures.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
