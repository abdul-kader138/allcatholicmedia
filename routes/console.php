<?php

use App\Models\FeedSource;
use App\Services\RssFeedImporter;
use App\YouTubeChannelService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
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

Schedule::command('feeds:sync')->everySixHours();

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
