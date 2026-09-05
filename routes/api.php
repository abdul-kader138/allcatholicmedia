<?php

use App\Http\Controllers\Api\AppContentController;
use App\Http\Controllers\Api\PrayerRequestController;
use App\Http\Controllers\Api\V1\Account\AccountController as V1AccountController;
use App\Http\Controllers\Api\V1\AppContentController as V1AppContentController;
use App\Http\Controllers\Api\V1\Auth\AuthController as V1AuthController;
use App\Http\Controllers\Api\V1\PrayerRequestController as V1PrayerRequestController;
use App\Http\Middleware\LegacyApiDeprecation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Legacy (un-versioned) mobile API — frozen
|--------------------------------------------------------------------------
| Kept byte-compatible for already-shipped app builds. New work goes on
| /api/v1/*; responses here carry Deprecation + successor-version headers.
*/
Route::prefix('app')
    ->middleware([LegacyApiDeprecation::class, 'throttle:api-read'])
    ->group(function (): void {
        Route::get('home', [AppContentController::class, 'home']);
        Route::get('channels', [AppContentController::class, 'channels']);
        Route::get('channels/{slug}', [AppContentController::class, 'channelDetail']);
        Route::get('listen', [AppContentController::class, 'listen']);
        Route::get('listen/{slug}', [AppContentController::class, 'listenDetail']);
        Route::get('live-now', [AppContentController::class, 'liveNow']);
        Route::get('read', [AppContentController::class, 'read']);
        Route::get('saints', [AppContentController::class, 'saints']);
        Route::get('donate/config', [AppContentController::class, 'donateConfig']);

        Route::post('prayer-requests', [PrayerRequestController::class, 'store'])
            ->withoutMiddleware('throttle:api-read')
            ->middleware('throttle:api-write');
    });

/*
|--------------------------------------------------------------------------
| Mobile API v1 — authentication (Botble members, Sanctum bearer tokens)
|--------------------------------------------------------------------------
*/
Route::prefix('v1/auth')->group(function (): void {
    Route::middleware('throttle:api-auth')->group(function (): void {
        Route::post('register', [V1AuthController::class, 'register']);
        Route::post('login', [V1AuthController::class, 'login']);
        Route::post('forgot-password', [V1AuthController::class, 'forgotPassword']);
        Route::post('reset-password', [V1AuthController::class, 'resetPassword']);
    });

    Route::middleware(['auth:sanctum', 'throttle:api-read'])->group(function (): void {
        Route::get('me', [V1AuthController::class, 'me']);
        Route::post('logout', [V1AuthController::class, 'logout']);
        Route::post('change-password', [V1AuthController::class, 'changePassword']);
    });
});

/*
|--------------------------------------------------------------------------
| Mobile API v1 — member account & activity (auth required)
|--------------------------------------------------------------------------
*/
Route::prefix('v1/account')
    ->middleware(['auth:sanctum', 'throttle:api-read'])
    ->group(function (): void {
        Route::get('/', [V1AccountController::class, 'show']);
        Route::put('/', [V1AccountController::class, 'update']);
        Route::delete('/', [V1AccountController::class, 'destroy'])
            ->withoutMiddleware('throttle:api-read')->middleware('throttle:api-write');
        Route::post('avatar', [V1AccountController::class, 'updateAvatar'])
            ->withoutMiddleware('throttle:api-read')->middleware('throttle:api-write');
        Route::get('activities', [V1AccountController::class, 'activities']);
        Route::get('donations', [V1AccountController::class, 'donations']);
        Route::get('prayer-requests', [V1AccountController::class, 'prayerRequests']);
    });

/*
|--------------------------------------------------------------------------
| Mobile API v1 — content
|--------------------------------------------------------------------------
| Standard { data, meta } / { error } envelope, absolute media URLs,
| updated_at on every resource, list controls (page, per_page, q, sort),
| short-lived response caching + ETag.
*/
Route::prefix('v1/app')
    ->middleware('throttle:api-read')
    ->group(function (): void {
        Route::get('home', [V1AppContentController::class, 'home']);

        Route::get('channels', [V1AppContentController::class, 'channels']);
        Route::get('channels/{slug}', [V1AppContentController::class, 'channelDetail']);

        Route::get('videos', [V1AppContentController::class, 'videos']);
        Route::get('videos/{id}', [V1AppContentController::class, 'videoDetail'])->whereNumber('id');

        Route::get('listen', [V1AppContentController::class, 'listen']);
        Route::get('listen/{slug}', [V1AppContentController::class, 'listenDetail']);
        Route::get('episodes/{id}', [V1AppContentController::class, 'episodeDetail'])->whereNumber('id');

        Route::get('live-now', [V1AppContentController::class, 'liveNow']);

        Route::get('read', [V1AppContentController::class, 'read']);
        Route::get('read/{slug}', [V1AppContentController::class, 'articleDetail']);

        Route::get('saints', [V1AppContentController::class, 'saints']);
        Route::get('saints/{slug}', [V1AppContentController::class, 'saintDetail']);

        Route::get('search', [V1AppContentController::class, 'search']);
        Route::get('pages/{slug}', [V1AppContentController::class, 'page']);
        Route::get('donate/config', [V1AppContentController::class, 'donateConfig']);

        Route::post('prayer-requests', [V1PrayerRequestController::class, 'store'])
            ->withoutMiddleware('throttle:api-read')->middleware('throttle:api-write');
        Route::post('newsletter/subscribe', [V1AppContentController::class, 'newsletterSubscribe'])
            ->withoutMiddleware('throttle:api-read')->middleware('throttle:api-write');
    });
