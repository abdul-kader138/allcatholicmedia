<?php

namespace Acm\LiveStream\Http\Controllers\Admin;

use Acm\LiveStream\Forms\LiveStreamForm;
use Acm\LiveStream\Http\Requests\LiveStreamRequest;
use Acm\LiveStream\Models\LiveStream;
use Acm\LiveStream\Tables\LiveStreamTable;
use App\YouTubeChannelService;
use Botble\Base\Events\BeforeUpdateContentEvent;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Forms\FormBuilder;
use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Base\Supports\Breadcrumb;
use Botble\Setting\Facades\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class LiveStreamController extends BaseController
{
    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add(trans('plugins/live-stream::live-streams.name'), route('live-streams.index'));
    }

    public function index(LiveStreamTable $table): View|JsonResponse
    {
        $this->pageTitle(trans('plugins/live-stream::live-streams.name'));

        $heroImage = setting('live_page_hero_image');

        $table->setView('admin.live-streams.index');

        return $table->renderTable(['heroImage' => $heroImage]);
    }

    public function updateHero(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'live_page_hero_image'      => ['nullable', 'string', 'max:500'],
            'live_page_hero_image_file' => ['nullable', 'image', 'max:5120'],
        ]);

        if ($request->hasFile('live_page_hero_image_file')) {
            $file = $request->file('live_page_hero_image_file');
            $directory = public_path('uploads/live-hero');

            if (! File::isDirectory($directory)) {
                File::makeDirectory($directory, 0755, true);
            }

            $filename = 'live-hero-' . now()->format('YmdHis') . '-' . Str::random(6) . '.' . $file->getClientOriginalExtension();
            $file->move($directory, $filename);

            $data['live_page_hero_image'] = url('uploads/live-hero/' . $filename);
        }

        Setting::set(['live_page_hero_image' => $data['live_page_hero_image'] ?? '']);
        Setting::save();

        return redirect()
            ->route('live-streams.index')
            ->with('success_msg', 'Live page hero background updated successfully.');
    }

    public function saveSettings(Request $request): RedirectResponse
    {
        $request->validate([
            'youtube_api_key' => ['nullable', 'string', 'max:200'],
        ]);

        Setting::set(['youtube_api_key' => trim((string) $request->input('youtube_api_key'))]);
        Setting::save();

        return redirect()
            ->route('live-streams.index')
            ->with('success_msg', 'YouTube API key saved successfully.');
    }

    public function fetchLive(BaseHttpResponse $response): BaseHttpResponse
    {
        try {
            $result = app(YouTubeChannelService::class)->syncLiveStreams();

            return $response->setMessage(
                "{$result['synced']} live stream(s) found, {$result['expired']} expired."
            )->setData($result);
        } catch (\Throwable $e) {
            return $response->setError()->setMessage('Fetch failed: ' . $e->getMessage());
        }
    }

    public function seedChannels(BaseHttpResponse $response): BaseHttpResponse
    {
        try {
            $service = app(YouTubeChannelService::class);
            $seeded = $service->syncConfiguredChannels();
            $resolved = $service->resolveChannelIds();

            return $response->setMessage(
                "{$seeded} channel(s) seeded from config, {$resolved} channel ID(s) resolved via YouTube API."
            )->setData(['seeded' => $seeded, 'resolved' => $resolved]);
        } catch (\Throwable $e) {
            return $response->setError()->setMessage('Seed failed: ' . $e->getMessage());
        }
    }

    public function create(FormBuilder $formBuilder): string
    {
        $this->pageTitle(trans('plugins/live-stream::live-streams.create'));

        return $formBuilder->create(LiveStreamForm::class)->renderForm();
    }

    public function store(LiveStreamRequest $request): BaseHttpResponse
    {
        $stream = LiveStream::query()->create($request->validated());

        event(new CreatedContentEvent('live-stream', $request, $stream));

        return $this->httpResponse()
            ->setPreviousUrl(route('live-streams.index'))
            ->setNextUrl(route('live-streams.edit', $stream->getKey()))
            ->withCreatedSuccessMessage();
    }

    public function edit(LiveStream $liveStream, FormBuilder $formBuilder): string
    {
        $this->pageTitle(trans('core/base::forms.edit_item', ['name' => $liveStream->title]));

        return $formBuilder->create(LiveStreamForm::class, ['model' => $liveStream])->renderForm();
    }

    public function update(LiveStream $liveStream, LiveStreamRequest $request): BaseHttpResponse
    {
        event(new BeforeUpdateContentEvent($request, $liveStream));

        $liveStream->update($request->validated());

        event(new UpdatedContentEvent('live-stream', $request, $liveStream));

        return $this->httpResponse()
            ->setPreviousUrl(route('live-streams.index'))
            ->withUpdatedSuccessMessage();
    }

    public function destroy(LiveStream $liveStream): DeleteResourceAction
    {
        return DeleteResourceAction::make($liveStream);
    }
}
