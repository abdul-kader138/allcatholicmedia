<?php

namespace App\Http\Controllers\Admin;

use App\Models\FeedSource;
use App\Models\PodcastShow;
use App\Services\RssFeedImporter;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Supports\Breadcrumb;
use Botble\Blog\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FeedSourceController extends BaseController
{
    public function __construct(private RssFeedImporter $importer) {}

    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()->add('Feed Sources', route('admin.feed-sources.index'));
    }

    public function index()
    {
        $this->pageTitle('Feed Sources');

        $sources = FeedSource::query()
            ->withCount('importLogs')
            ->orderByDesc('is_active')
            ->orderBy('name')
            ->get();

        return view('admin.feed-sources.index', compact('sources'));
    }

    public function create()
    {
        $this->pageTitle('Add Feed Source');

        $categories   = Category::query()->orderBy('name')->pluck('name', 'id');
        $podcastShows = PodcastShow::query()->orderBy('name')->pluck('name', 'id');

        return view('admin.feed-sources.form', compact('categories', 'podcastShows'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);

        FeedSource::query()->create($data);

        return redirect()->route('admin.feed-sources.index')
            ->with('success_msg', 'Feed source added successfully.');
    }

    public function edit(FeedSource $feedSource)
    {
        $this->pageTitle('Edit Feed Source');

        $categories   = Category::query()->orderBy('name')->pluck('name', 'id');
        $podcastShows = PodcastShow::query()->orderBy('name')->pluck('name', 'id');

        return view('admin.feed-sources.form', compact('feedSource', 'categories', 'podcastShows'));
    }

    public function update(Request $request, FeedSource $feedSource): RedirectResponse
    {
        $data = $this->validated($request);

        $feedSource->update($data);

        return redirect()->route('admin.feed-sources.index')
            ->with('success_msg', 'Feed source updated successfully.');
    }

    public function destroy(FeedSource $feedSource): RedirectResponse
    {
        $feedSource->delete();

        return redirect()->route('admin.feed-sources.index')
            ->with('success_msg', 'Feed source deleted.');
    }

    public function sync(FeedSource $feedSource): JsonResponse
    {
        try {
            $results = $this->importer->sync($feedSource);

            return response()->json([
                'success' => true,
                'message' => "Imported {$results['imported']}, skipped {$results['skipped']}, errors {$results['errors']}.",
                'results' => $results,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function seedCatholic(): JsonResponse
    {
        $sources = config('feeds.sources', []);
        $seeded  = 0;
        $skipped = 0;

        foreach ($sources as $def) {
            if (FeedSource::where('url', $def['url'])->exists()) {
                $skipped++;
                continue;
            }

            FeedSource::create([
                'name'         => $def['name'],
                'url'          => $def['url'],
                'type'         => $def['type'],
                'category'     => $def['category'] ?? null,
                'related_id'   => $def['related_id'] ?? null,
                'auto_publish' => $def['auto_publish'] ?? true,
                'is_active'    => $def['is_active'] ?? true,
            ]);

            $seeded++;
        }

        return response()->json([
            'success' => true,
            'message' => "{$seeded} feed source(s) added, {$skipped} already existed.",
            'data'    => ['seeded' => $seeded, 'skipped' => $skipped],
        ]);
    }

    public function syncAllNow(): JsonResponse
    {
        $sources = FeedSource::query()->active()->get();

        if ($sources->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No active feed sources. Add and seed feeds first.',
            ]);
        }

        $total  = ['imported' => 0, 'skipped' => 0, 'errors' => 0, 'feeds' => 0];
        $failed = [];

        foreach ($sources as $source) {
            try {
                $result = $this->importer->sync($source);
                $total['imported'] += $result['imported'];
                $total['skipped']  += $result['skipped'];
                $total['errors']   += $result['errors'];
                $total['feeds']++;
            } catch (\Throwable $e) {
                $failed[] = $source->name;
            }
        }

        $msg = "{$total['feeds']} feed(s) synced — {$total['imported']} imported, {$total['skipped']} skipped.";
        if ($failed) {
            $msg .= ' Failed: ' . implode(', ', $failed) . '.';
        }

        return response()->json([
            'success' => true,
            'message' => $msg,
            'data'    => $total,
        ]);
    }

    public function itunesSearch(Request $request): JsonResponse
    {
        $term    = trim($request->input('term', 'Catholic'));
        $results = $this->importer->searchItunes($term, 20);

        return response()->json($results);
    }

    private function validated(Request $request): array
    {
        $rules = [
            'name'         => ['required', 'string', 'max:255'],
            'url'          => ['required', 'url', 'max:500'],
            'type'         => ['required', 'in:post,podcast_episode'],
            'category'     => ['nullable', 'string', 'max:120'],
            'related_id'   => ['nullable', 'integer'],
            'auto_publish' => ['boolean'],
            'is_active'    => ['boolean'],
        ];

        $data = $request->validate($rules);

        $data['auto_publish'] = $request->boolean('auto_publish');
        $data['is_active']    = $request->boolean('is_active', true);

        if ($data['type'] === 'post') {
            $data['related_id'] = null;
        }

        if ($data['type'] === 'podcast_episode') {
            $data['category'] = null;
        }

        return $data;
    }
}
