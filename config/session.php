<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Pilote de session par défaut
    |--------------------------------------------------------------------------
    |
    | Cette option détermine le pilote de session par défaut qui est
    | utilisé pour les requêtes entrantes. Laravel prend en charge une
    | variété d'options de stockage pour persister les données de session.
    | Le stockage en base de données est un excellent choix par défaut.
    |
    | Pris en charge : "file", "cookie", "database", "memcached",
    |                  "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Durée de vie de la session
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici spécifier le nombre de minutes pendant lesquelles
    | vous souhaitez que la session puisse rester inactive avant d'expirer.
    | Si vous souhaitez qu'elles expirent immédiatement à la fermeture du
    | navigateur, vous pouvez l'indiquer via l'option de configuration
    | expire_on_close.
    |
    */

    'lifetime' => (int) env('SESSION_LIFETIME', 120),

    // Si activé, la session expire dès la fermeture du navigateur, quelle que soit la durée de vie définie ci-dessus.
    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),

    /*
    |--------------------------------------------------------------------------
    | Chiffrement de la session
    |--------------------------------------------------------------------------
    |
    | Cette option vous permet de spécifier facilement que toutes vos
    | données de session doivent être chiffrées avant d'être stockées.
    | Tout le chiffrement est effectué automatiquement par Laravel et vous
    | pouvez utiliser la session normalement.
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | Emplacement des fichiers de session
    |--------------------------------------------------------------------------
    |
    | Lors de l'utilisation du pilote de session "file", les fichiers de
    | session sont placés sur le disque. L'emplacement de stockage par
    | défaut est défini ici ; toutefois, vous êtes libre de fournir un
    | autre emplacement où ils devraient être stockés.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Connexion à la base de données pour la session
    |--------------------------------------------------------------------------
    |
    | Lors de l'utilisation des pilotes de session "database" ou "redis",
    | vous pouvez spécifier une connexion qui doit être utilisée pour gérer
    | ces sessions. Celle-ci doit correspondre à une connexion dans vos
    | options de configuration de base de données.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Table de base de données pour la session
    |--------------------------------------------------------------------------
    |
    | Lors de l'utilisation du pilote de session "database", vous pouvez
    | spécifier la table à utiliser pour stocker les sessions. Bien
    | entendu, une valeur par défaut sensée est définie pour vous ;
    | toutefois, vous êtes libre de la changer pour une autre table.
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | Store de cache pour la session
    |--------------------------------------------------------------------------
    |
    | Lors de l'utilisation de l'un des moteurs de session basés sur le
    | cache du framework, vous pouvez définir le store de cache qui doit
    | être utilisé pour stocker les données de session entre les requêtes.
    | Celui-ci doit correspondre à l'un de vos stores de cache définis.
    |
    | Concerne : "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Loterie de nettoyage des sessions
    |--------------------------------------------------------------------------
    |
    | Certains pilotes de session doivent balayer manuellement leur
    | emplacement de stockage pour se débarrasser des anciennes sessions.
    | Voici les chances que cela se produise sur une requête donnée. Par
    | défaut, les probabilités sont de 2 sur 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Nom du cookie de session
    |--------------------------------------------------------------------------
    |
    | Vous pouvez ici modifier le nom du cookie de session créé par le
    | framework. En général, vous ne devriez pas avoir besoin de modifier
    | cette valeur, car cela n'apporte pas d'amélioration significative en
    | matière de sécurité.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug((string) env('APP_NAME', 'laravel')).'-session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Chemin du cookie de session
    |--------------------------------------------------------------------------
    |
    | Le chemin du cookie de session détermine le chemin pour lequel le
    | cookie sera considéré comme disponible. En général, ce sera le
    | chemin racine de votre application, mais vous êtes libre de modifier
    | cela si nécessaire.
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | Domaine du cookie de session
    |--------------------------------------------------------------------------
    |
    | Cette valeur détermine le domaine et les sous-domaines pour lesquels
    | le cookie de session est disponible. Par défaut, le cookie sera
    | disponible pour le domaine racine sans les sous-domaines. En
    | général, cela ne devrait pas être modifié.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Cookies HTTPS uniquement
    |--------------------------------------------------------------------------
    |
    | En définissant cette option sur true, les cookies de session ne
    | seront renvoyés au serveur que si le navigateur dispose d'une
    | connexion HTTPS. Cela évite que le cookie ne vous soit envoyé
    | lorsque cela ne peut pas être fait de manière sécurisée.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | Accès HTTP uniquement
    |--------------------------------------------------------------------------
    |
    | Définir cette valeur sur true empêchera JavaScript d'accéder à la
    | valeur du cookie, et le cookie ne sera accessible que via le
    | protocole HTTP. Il est peu probable que vous deviez désactiver cette
    | option.
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Cookies Same-Site
    |--------------------------------------------------------------------------
    |
    | Cette option détermine le comportement de vos cookies lors de
    | requêtes intersites (cross-site), et peut être utilisée pour
    | atténuer les attaques CSRF. Par défaut, nous définissons cette
    | valeur sur "lax" pour permettre les requêtes intersites sécurisées.
    |
    | Voir : https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
    |
    | Pris en charge : "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | Cookies partitionnés
    |--------------------------------------------------------------------------
    |
    | Définir cette valeur sur true liera le cookie au site de premier
    | niveau pour un contexte intersite. Les cookies partitionnés sont
    | acceptés par le navigateur lorsqu'ils sont marqués "secure" et que
    | l'attribut Same-Site est défini sur "none".
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];
