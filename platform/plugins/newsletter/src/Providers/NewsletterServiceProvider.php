<?php

namespace Botble\Newsletter\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Facades\EmailHandler;
use Botble\Base\Facades\PanelSectionManager;
use Botble\Base\PanelSections\PanelSectionItem;
use Botble\Base\Supports\DashboardMenuItem;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Newsletter\Console\ProcessNewsletterCampaignsCommand;
use Botble\Newsletter\Contracts\Factory;
use Botble\Newsletter\Forms\Fronts\NewsletterForm;
use Botble\Newsletter\Http\Requests\NewsletterRequest;
use Botble\Newsletter\Models\Newsletter;
use Botble\Newsletter\NewsletterManager;
use Botble\Newsletter\Repositories\Eloquent\NewsletterRepository;
use Botble\Newsletter\Repositories\Interfaces\NewsletterInterface;
use Botble\Setting\PanelSections\SettingOthersPanelSection;
use Botble\Theme\FormFrontManager;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Support\DeferrableProvider;

class NewsletterServiceProvider extends ServiceProvider implements DeferrableProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this->app->singleton(NewsletterInterface::class, function () {
            return new NewsletterRepository(new Newsletter());
        });

        $this->app->singleton(Factory::class, function ($app) {
            return new NewsletterManager($app);
        });
    }

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/newsletter')
            ->loadHelpers()
            ->loadAndPublishConfigurations(['email'])
            ->loadAndPublishConfigurations(['campaign'])
            ->loadAndPublishConfigurations(['permissions'])
            ->loadAndPublishTranslations()
            ->loadRoutes()
            ->publishAssets()
            ->loadAndPublishViews()
            ->loadMigrations();

        $this->app->register(EventServiceProvider::class);

        DashboardMenu::default()->beforeRetrieving(function (): void {
            DashboardMenu::make()
                ->registerItem(
                    DashboardMenuItem::make()
                        ->id('cms-plugins-newsletter')
                        ->priority(430)
                        ->name('plugins/newsletter::newsletter.name')
                        ->icon('ti ti-mail')
                        ->route('newsletter.index')
                )
                ->registerItem(
                    DashboardMenuItem::make()
                        ->id('cms-plugins-newsletter-subscribers')
                        ->parentId('cms-plugins-newsletter')
                        ->priority(10)
                        ->name('plugins/newsletter::newsletter.name')
                        ->route('newsletter.index')
                )
                ->registerItem(
                    DashboardMenuItem::make()
                        ->id('cms-plugins-newsletter-campaigns')
                        ->parentId('cms-plugins-newsletter')
                        ->priority(20)
                        ->name('plugins/newsletter::newsletter.campaigns.name')
                        ->route('newsletter.campaigns.index')
                );
        });

        PanelSectionManager::default()->beforeRendering(function (): void {
            PanelSectionManager::registerItem(
                SettingOthersPanelSection::class,
                fn () => PanelSectionItem::make('newsletter')
                    ->setTitle(trans('plugins/newsletter::newsletter.settings.title'))
                    ->withIcon('ti ti-mail-cog')
                    ->withDescription(trans('plugins/newsletter::newsletter.settings.panel_description'))
                    ->withPriority(140)
                    ->withRoute('newsletter.settings')
            );
        });

        $this->app->booted(function (): void {
            EmailHandler::addTemplateSettings(NEWSLETTER_MODULE_SCREEN_NAME, config('plugins.newsletter.email', []));
        });

        if ($this->app->runningInConsole()) {
            $this->commands([ProcessNewsletterCampaignsCommand::class]);
        }

        // The heartbeat that starts scheduled campaigns and feeds the queue.
        // Registered here rather than in routes/console.php so that disabling
        // the plugin also removes the schedule.
        $this->callAfterResolving(Schedule::class, function (Schedule $schedule): void {
            $schedule
                ->command(ProcessNewsletterCampaignsCommand::class)
                ->everyMinute()
                ->withoutOverlapping()
                ->runInBackground();
        });

        FormFrontManager::register(NewsletterForm::class, NewsletterRequest::class);
    }

    public function provides(): array
    {
        return [Factory::class];
    }
}
