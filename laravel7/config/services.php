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

    'firebase' => [
        'api_key' => 'AIzaSyCr-ogqkeMUOI3Gy9J1bYANotlz7iLFP2E',
        'auth_domain' => 'monmemoire-61a0d.firebaseapp.com',
        'database_url' => 'https://monmemoire-61a0d-default-rtdb.firebaseio.com/',
        'project_id' => 'monmemoire-61a0d',
        'storage_bucket' => 'monmemoire-61a0d.appspot.com"',
        'messaging_sender_id' => '21839538455',
        'app_id' => '1:21839538455:web:0fb854977296c0ad61ef52',
        'measurement_id' => 'G-C7ZX6E578C',
    ],
    

];
