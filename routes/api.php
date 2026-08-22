<?php

use App\Http\Controllers\Api\AppContentController;
use App\Http\Controllers\Api\PrayerRequestController;
use Illuminate\Support\Facades\Route;

Route::prefix('app')->group(function (): void {
    Route::get('home', [AppContentController::class, 'home']);
    Route::get('channels', [AppContentController::class, 'channels']);
    Route::get('channels/{slug}', [AppContentController::class, 'channelDetail']);
    Route::get('listen', [AppContentController::class, 'listen']);
    Route::get('listen/{slug}', [AppContentController::class, 'listenDetail']);
    Route::get('live-now', [AppContentController::class, 'liveNow']);
    Route::get('read', [AppContentController::class, 'read']);
    Route::get('saints', [AppContentController::class, 'saints']);
    Route::get('donate/config', [AppContentController::class, 'donateConfig']);
    Route::post('prayer-requests', [PrayerRequestController::class, 'store']);
});
