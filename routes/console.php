<?php

use App\Models\FeedSource;
use App\Models\YouTubeChannel;
use App\Services\RssFeedImporter;
use App\YouTubeChannelService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('youtube:sync-channels {--seed-config}', function (YouTubeChannelService $service) {
    if ($this->option('seed-config')) {
        $seeded = $service->syncConfiguredChannels();
        $this->info("Seeded/updated {$seeded} configured channels.");
    }

    $synced = $service->syncAllActiveChannels();
    $this->info("Synced {$synced} YouTube channels.");

    // After syncing video metadata, immediately push any newly-detected live videos to LiveStream
    try {
        $result = $service->syncLiveStreams();
        $this->info("Live streams updated: {$result['synced']} active, {$result['expired']} expired.");
    } catch (\Throwable $e) {
        $this->warn('Live stream sync after channel sync failed: ' . $e->getMessage());
    }
})->purpose('Sync configured YouTube channels and their latest videos');

Schedule::command('youtube:sync-channels')->hourly();

Artisan::command('youtube:fetch-live', function (YouTubeChannelService $service) {
    try {
        $result = $service->syncLiveStreams();
        $this->info("Live: {$result['synced']} active, {$result['expired']} expired.");
    } catch (\Throwable $e) {
        $this->error('Fetch failed: ' . $e->getMessage());
    }
})->purpose('Fetch current live broadcasts from active Catholic YouTube channels');

Schedule::command('youtube:fetch-live')->everyTenMinutes();

Artisan::command('feeds:seed-catholic', function () {
    $sources = config('feeds.sources', []);
    $seeded  = 0;
    $skipped = 0;

    foreach ($sources as $def) {
        if (\App\Models\FeedSource::where('url', $def['url'])->exists()) {
            $skipped++;
            continue;
        }

        \App\Models\FeedSource::create([
            'name'         => $def['name'],
            'url'          => $def['url'],
            'type'         => $def['type'],
            'category'     => $def['category'] ?? null,
            'related_id'   => $def['related_id'] ?? null,
            'auto_publish' => $def['auto_publish'] ?? true,
            'is_active'    => $def['is_active'] ?? true,
        ]);

        $this->line("  + {$def['name']}");
        $seeded++;
    }

    $this->info("Seeded: {$seeded}, skipped (already exist): {$skipped}.");
})->purpose('Seed pre-configured Catholic RSS feed sources (news + saints) from config/feeds.php');

Artisan::command('feeds:sync {--source= : Sync a specific feed source ID}', function (RssFeedImporter $importer) {
    $sourceId = $this->option('source');

    $query = FeedSource::query()->active();

    if ($sourceId) {
        $query->where('id', $sourceId);
    }

    $sources = $query->get();

    if ($sources->isEmpty()) {
        $this->warn('No active feed sources found.');
        return;
    }

    foreach ($sources as $source) {
        $this->info("Syncing: {$source->name} ({$source->url})");

        try {
            $results = $importer->sync($source);
            $this->line("  → Imported: {$results['imported']}, Skipped: {$results['skipped']}, Errors: {$results['errors']}");
        } catch (\Throwable $e) {
            $this->error("  ✗ Failed: " . $e->getMessage());
            Log::error("feeds:sync failed for source #{$source->id}: " . $e->getMessage());
        }
    }

    $this->info('Done.');
})->purpose('Sync all active RSS feed sources (posts & podcast episodes)');

/*
|--------------------------------------------------------------------------
| homepage:refresh-sections
|--------------------------------------------------------------------------
| Pulls fresh content for the three dynamic homepage sections and clears
| their cached output so the next visitor sees the latest:
|   • Vatican News  — [channel-spotlight] latest video from the Vatican News
|                     YouTube channel
|   • Daily Rosary  — [latest-daily-rosary] newest rosary post
|   • Daily Saint   — [latest-daily-saint] newest saint post
|
| Rosary & Saint posts arrive via RSS — only the feed sources whose category
| is listed in config('feeds.homepage_categories') are synced here, not every
| feed. The section output is cached with a version suffix that we bump at the
| end. Scheduled four times a day: 00:00, 06:00, 12:00, 18:00.
*/
Artisan::command('homepage:refresh-sections', function (YouTubeChannelService $youtube, RssFeedImporter $importer) {
    $this->info('Refreshing homepage sections...');

    // 1. Vatican News — pull the latest video for the Vatican News channel.
    try {
        $channel = YouTubeChannel::query()->where('slug', 'vatican-news')->first();

        if ($channel) {
            $youtube->syncChannel($channel);
            $this->line('  ✓ Synced Vatican News YouTube channel');
        } else {
            $this->warn('  ✗ Vatican News channel not found (slug: vatican-news)');
        }
    } catch (\Throwable $e) {
        $this->warn('  ✗ Vatican News sync failed: ' . $e->getMessage());
        Log::warning('homepage:refresh-sections Vatican News sync failed: ' . $e->getMessage());
    }

    // 2. Daily Rosary + Saints & Feast Days — sync only the feed sources that
    //    feed those two homepage sections (not the full feeds:sync run).
    //    Matched on either the feed source name or its category.
    $names = config('feeds.homepage_categories', ['Daily Rosary', 'Saints and Feast Days']);

    try {
        $sources = FeedSource::query()
            ->active()
            ->where('type', 'post')
            ->where(fn ($query) => $query->whereIn('category', $names)->orWhereIn('name', $names))
            ->get();

        if ($sources->isEmpty()) {
            $this->warn('  ✗ No active feed sources found matching: ' . implode(', ', $names));
        }

        foreach ($sources as $source) {
            try {
                $results = $importer->sync($source);
                $this->line("  ✓ {$source->name} [{$source->category}] — imported {$results['imported']}, skipped {$results['skipped']}, errors {$results['errors']}");
            } catch (\Throwable $e) {
                $this->warn("  ✗ {$source->name} sync failed: " . $e->getMessage());
                Log::warning("homepage:refresh-sections feed sync failed for #{$source->id}: " . $e->getMessage());
            }
        }
    } catch (\Throwable $e) {
        $this->warn('  ✗ Feed source lookup failed: ' . $e->getMessage());
        Log::warning('homepage:refresh-sections feed source lookup failed: ' . $e->getMessage());
    }

    // 3. Bump the section cache version so the homepage rebuilds with fresh data
    //    on the next request (store-agnostic — no cache tagging required).
    try {
        $version = (int) Cache::get('acm_homepage_cache_version', 1) + 1;
        Cache::forever('acm_homepage_cache_version', $version);
        $this->line("  ✓ Homepage section cache version bumped to {$version}");
    } catch (\Throwable $e) {
        $this->warn('  ✗ Cache version bump failed: ' . $e->getMessage());
    }

    $this->info('Homepage sections refreshed.');
})->purpose('Refresh homepage sections: Vatican News, Daily Rosary, Daily Saint');

Schedule::command('homepage:refresh-sections')->everySixHours();

Artisan::command('feeds:fix-images', function (App\Services\ImageDownloader $downloader) {
    $disk  = \Illuminate\Support\Facades\Storage::disk('public');
    $fixed = 0;
    $reset = 0;

    // Case 1: image is an external URL (download failed, fallback was stored)
    $external = \Botble\Blog\Models\Post::query()
        ->where('image', 'like', 'http%')
        ->get(['id', 'image']);

    foreach ($external as $post) {
        $local = $downloader->download($post->image, 'posts');
        if ($local) {
            $post->update(['image' => $local]);
            $this->line("  ✓ Fixed post #{$post->id} (was external URL)");
            $fixed++;
        } else {
            $this->warn("  ✗ Could not download for post #{$post->id}: {$post->image}");
        }
    }

    // Case 2: image is a local path but the file does not exist on disk
    // (Storage::put silently failed before — old bug). Delete post + import log so it re-imports.
    $local = \Botble\Blog\Models\Post::query()
        ->whereNotNull('image')
        ->where('image', 'not like', 'http%')
        ->get(['id', 'image']);

    foreach ($local as $post) {
        if (! $disk->exists($post->image)) {
            $this->warn("  ↻ Post #{$post->id} has missing file ({$post->image}) — resetting for re-import");
            \App\Models\FeedImportLog::where('post_id', $post->id)->delete();
            $post->delete();
            $reset++;
        }
    }

    $this->info("Done. Fixed: {$fixed}, Reset for re-import: {$reset}");
    if ($reset > 0) {
        $this->info("Run 'php artisan feeds:sync' to re-import the reset posts.");
    }
})->purpose('Re-download featured images for posts that have external URLs stored (server migration fix)');
