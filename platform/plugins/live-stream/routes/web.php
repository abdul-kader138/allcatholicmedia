<?php

use Acm\LiveStream\Http\Controllers\Admin\LiveStreamController;
use Botble\Base\Facades\AdminHelper;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function (): void {
    Route::prefix('live-streams')
        ->name('live-streams.')
        ->group(function (): void {
            Route::post('hero-image', [LiveStreamController::class, 'updateHero'])->name('hero-image');
            Route::post('settings', [LiveStreamController::class, 'saveSettings'])->name('settings');
            Route::post('fetch-live', [LiveStreamController::class, 'fetchLive'])->name('fetch-live');
            Route::post('seed-channels', [LiveStreamController::class, 'seedChannels'])->name('seed-channels');
            Route::resource('/', LiveStreamController::class)
                ->parameters(['' => 'liveStream']);
        });
});
