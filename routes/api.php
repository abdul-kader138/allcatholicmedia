<?php

use App\Http\Controllers\Api\AppContentController;
use App\Http\Controllers\Api\PrayerRequestController;
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
| /api/v1/app/*; responses here carry Deprecation + successor-version headers.
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
| Mobile API v1
|--------------------------------------------------------------------------
| Standard envelope ({ data, meta } / { error }), absolute media URLs,
| updated_at on every resource, short-lived response caching + ETag.
*/
/*
|--------------------------------------------------------------------------
| Mobile API v1 — authentication (Botble members, Sanctum tokens)
|--------------------------------------------------------------------------
*/
Route::prefix('v1/auth')->group(function (): void {
    Route::post('register', [V1AuthController::class, 'register'])->middleware('throttle:api-auth');
    Route::post('login', [V1AuthController::class, 'login'])->middleware('throttle:api-auth');

    Route::middleware(['auth:sanctum', 'throttle:api-read'])->group(function (): void {
        Route::get('me', [V1AuthController::class, 'me']);
        Route::post('logout', [V1AuthController::class, 'logout']);
        Route::post('change-password', [V1AuthController::class, 'changePassword']);
    });
});

Route::prefix('v1/app')
    ->middleware('throttle:api-read')
    ->group(function (): void {
        Route::get('home', [V1AppContentController::class, 'home']);
        Route::get('channels', [V1AppContentController::class, 'channels']);
        Route::get('channels/{slug}', [V1AppContentController::class, 'channelDetail']);
        Route::get('listen', [V1AppContentController::class, 'listen']);
        Route::get('listen/{slug}', [V1AppContentController::class, 'listenDetail']);
        Route::get('live-now', [V1AppContentController::class, 'liveNow']);
        Route::get('read', [V1AppContentController::class, 'read']);
        Route::get('saints', [V1AppContentController::class, 'saints']);
        Route::get('donate/config', [V1AppContentController::class, 'donateConfig']);

        Route::post('prayer-requests', [V1PrayerRequestController::class, 'store'])
            ->withoutMiddleware('throttle:api-read')
            ->middleware('throttle:api-write');
    });
