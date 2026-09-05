<?php

/*
|--------------------------------------------------------------------------
| Mobile app runtime config
|--------------------------------------------------------------------------
| Served by GET /api/v1/app/config so the app can self-configure and enforce
| a minimum supported build. Override any value via .env.
*/

return [
    'latest_version' => env('APP_MOBILE_LATEST_VERSION', '1.0.0'),

    'min_version' => [
        'ios' => env('APP_MOBILE_MIN_VERSION_IOS', '1.0.0'),
        'android' => env('APP_MOBILE_MIN_VERSION_ANDROID', '1.0.0'),
    ],

    'store_url' => [
        'ios' => env('APP_MOBILE_IOS_URL', ''),
        'android' => env('APP_MOBILE_ANDROID_URL', ''),
    ],

    // Static CMS page slugs the app links to.
    'pages' => [
        'about' => env('APP_MOBILE_PAGE_ABOUT', 'about-us'),
        'editorial_policy' => 'editorial-policy',
        'corrections_policy' => 'corrections-policy',
        'privacy_policy' => env('APP_MOBILE_PAGE_PRIVACY', 'privacy-policy'),
        'terms' => env('APP_MOBILE_PAGE_TERMS', 'terms-of-service'),
    ],

    // Theme-option / setting keys probed for the config payload.
    'social_keys' => ['facebook', 'instagram', 'youtube', 'twitter', 'x', 'tiktok', 'linkedin', 'threads'],
];
