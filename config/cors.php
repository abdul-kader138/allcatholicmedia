<?php

/*
|--------------------------------------------------------------------------
| Cross-Origin Resource Sharing (CORS) Configuration
|--------------------------------------------------------------------------
|
| The mobile app talks to /api/* with a Sanctum bearer token and sends no
| Origin header, so it is unaffected by these rules. They exist to constrain
| which *browser* origins may call the API. Set CORS_ALLOWED_ORIGINS to a
| comma-separated allow-list (e.g. "https://allcatholicmedia.com") in any
| environment where a first-party web client calls the API; it defaults to
| "*" so nothing breaks before that list is defined.
|
| supports_credentials stays false: the API is token-based, never cookie-
| based, so there is no reason to let arbitrary origins ride a session.
|
*/

$allowedOrigins = array_values(array_filter(array_map(
    'trim',
    explode(',', (string) env('CORS_ALLOWED_ORIGINS', '*'))
)));

return [

    'paths' => ['api/*'],

    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],

    'allowed_origins' => $allowedOrigins ?: ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Accept', 'Authorization', 'Content-Type', 'X-Requested-With'],

    // Let the app read the deprecation signalling emitted by LegacyApiDeprecation.
    'exposed_headers' => ['Deprecation', 'Sunset', 'Link'],

    'max_age' => 3600,

    'supports_credentials' => false,

];
