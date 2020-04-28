<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' =>[
        'client_id'=>env('236739717588157'),
        'client_secret'=>env('a2ddb6fc4b794820b483aafa0d5cdd46'),
        'redirect'=>env('http://localhost/tintuc/N2-TTTN/public/login/facebook/callback'),

    ],
    'google' =>[
        'client_id'=>env('506988879427-504p7b8r1f9udmng2dnu9s5ji1ukcl24.apps.googleusercontent.com'),
        'client_secret'=>env('drBv5rulUgY55bTUnsBxX2Ru'),
        'redirect'=>env('http://localhost/tintuc/N2-TTTN/public/login/google/callback'),
    ],

];
