<?php

use Botble\Base\Facades\AdminHelper;
use Botble\Base\Http\Middleware\RequiresJsonRequestMiddleware;
use Botble\Newsletter\Http\Controllers\CampaignTrackingController;
use Botble\Newsletter\Http\Controllers\NewsletterCampaignController;
use Botble\Theme\Facades\Theme;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Botble\Newsletter\Http\Controllers'], function (): void {
    AdminHelper::registerRoutes(function (): void {
        Route::group(['prefix' => 'newsletters', 'as' => 'newsletter.'], function (): void {
            Route::group(['prefix' => 'campaigns', 'as' => 'campaigns.'], function (): void {
                Route::resource('', NewsletterCampaignController::class)
                    ->except(['show'])
                    ->parameters(['' => 'campaign']);

                Route::get('{campaign}/preview', [NewsletterCampaignController::class, 'preview'])
                    ->name('preview')
                    ->permission('newsletter.campaigns.index');

                Route::get('{campaign}/report', [NewsletterCampaignController::class, 'report'])
                    ->name('report')
                    ->permission('newsletter.campaigns.index');

                Route::post('{campaign}/test', [NewsletterCampaignController::class, 'sendTest'])
                    ->name('test')
                    ->permission('newsletter.campaigns.send');

                Route::post('{campaign}/send', [NewsletterCampaignController::class, 'sendNow'])
                    ->name('send')
                    ->permission('newsletter.campaigns.send');

                Route::post('{campaign}/pause', [NewsletterCampaignController::class, 'pause'])
                    ->name('pause')
                    ->permission('newsletter.campaigns.send');

                Route::post('{campaign}/resume', [NewsletterCampaignController::class, 'resume'])
                    ->name('resume')
                    ->permission('newsletter.campaigns.send');

                Route::post('{campaign}/cancel', [NewsletterCampaignController::class, 'cancel'])
                    ->name('cancel')
                    ->permission('newsletter.campaigns.send');
            });

            Route::resource('', 'NewsletterController')->only(['index', 'destroy'])->parameters(['' => 'newsletter']);
        });

        Route::group(['prefix' => 'settings'], function (): void {
            Route::get('newsletter', [
                'as' => 'newsletter.settings',
                'uses' => 'Settings\NewsletterSettingController@edit',
            ]);

            Route::put('newsletter', [
                'as' => 'newsletter.settings.update',
                'uses' => 'Settings\NewsletterSettingController@update',
                'permission' => 'newsletter.settings',
            ]);
        });
    });

    if (defined('THEME_MODULE_SCREEN_NAME')) {
        Theme::registerRoutes(function (): void {
            Route::post('newsletter/subscribe', [
                'as' => 'public.newsletter.subscribe',
                'uses' => 'PublicController@postSubscribe',
            ]);

            Route::get('newsletter/unsubscribe/{user}', [
                'as' => 'public.newsletter.unsubscribe',
                'uses' => 'PublicController@getUnsubscribe',
            ]);

            Route::get('ajax/newsletter/popup', 'PublicController@ajaxLoadPopup')
                ->middleware(RequiresJsonRequestMiddleware::class)
                ->name('public.ajax.newsletter-popup');

            // Endpoints referenced from inside delivered campaign emails.
            Route::group(['prefix' => 'newsletter/campaign', 'as' => 'public.newsletter.campaign.'], function (): void {
                Route::get('open/{token}', [CampaignTrackingController::class, 'open'])->name('open');

                Route::get('click/{token}', [CampaignTrackingController::class, 'click'])->name('click');

                Route::get('view/{token}', [CampaignTrackingController::class, 'viewInBrowser'])->name('view');

                // GET for the link in the footer, POST for RFC 8058 one-click.
                Route::match(['GET', 'POST'], 'unsubscribe/{token}', [CampaignTrackingController::class, 'unsubscribe'])
                    ->name('unsubscribe');
            });
        });
    }
});
