<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'facebook' => [
        'client_id' => '114499413304839',
        'client_secret' => 'f66f5187e540bda2ccfb9d75fcf41f8c',
        'redirect' => 'https://sarjanamalam.com/auth/facebook/callback',
    ],
    'twitter' => [
        'client_id' => 'Gz8YhcR2Mdo8v2ZAAh5iA0jYK',
        'client_secret' => 'o9LMtwFQilTEC33pLzgN11v6T1igCzE1GQN7847cSk7IGPPFoR',
        'redirect' => 'https://sarjanamalam.com/auth/twitter/callback',
    ],
    'google' => [
        'client_id' => '544855069309-2msb0e98iq89b93e0d8v4168bme56pd5.apps.googleusercontent.com',
        'client_secret' => 'Kiq5orG2HyDKEPj-on3pqAYQ',
        'redirect' => 'https://sarjanamalam.com/Oauth/google/callback',
    ],
];
