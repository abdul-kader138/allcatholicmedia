<?php

namespace Botble\Newsletter\Http\Controllers;

use Botble\Base\Events\BeforeUpdateContentEvent;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Forms\FormBuilder;
use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Base\Supports\Breadcrumb;
use Botble\Newsletter\Enums\CampaignStatusEnum;
use Botble\Newsletter\Enums\NewsletterStatusEnum;
use Botble\Newsletter\Forms\NewsletterCampaignForm;
use Botble\Newsletter\Http\Requests\NewsletterCampaignRequest;
use Botble\Newsletter\Http\Requests\SendTestNewsletterRequest;
use Botble\Newsletter\Mail\NewsletterCampaignMail;
use Botble\Newsletter\Models\Newsletter;
use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Newsletter\Services\CampaignContentRenderer;
use Botble\Newsletter\Services\CampaignDispatcher;
use Botble\Newsletter\Tables\NewsletterCampaignRecipientTable;
use Botble\Newsletter\Tables\NewsletterCampaignTable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Throwable;

class NewsletterCampaignController extends BaseController
{
    public function __construct(
        protected CampaignDispatcher $dispatcher,
        protected CampaignContentRenderer $renderer
    ) {
    }

    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add(trans('plugins/newsletter::newsletter.name'), route('newsletter.index'))
            ->add(trans('plugins/newsletter::newsletter.campaigns.name'), route('newsletter.campaigns.index'));
    }

    public function index(NewsletterCampaignTable $table): View|JsonResponse
    {
        $this->pageTitle(trans('plugins/newsletter::newsletter.campaigns.name'));

        return $table->renderTable();
    }

    public function create(FormBuilder $formBuilder): string
    {
        $this->pageTitle(trans('plugins/newsletter::newsletter.campaigns.create'));

        return $formBuilder->create(NewsletterCampaignForm::class)->renderForm();
    }

    public function store(NewsletterCampaignRequest $request): BaseHttpResponse
    {
        $campaign = NewsletterCampaign::query()->create([
            ...$request->validated(),
            'scheduled_at' => $this->resolveScheduledAt($request),
            'created_by' => Auth::guard()->id(),
        ]);

        event(new CreatedContentEvent('newsletter-campaign', $request, $campaign));

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('newsletter.campaigns.index'))
            ->setNextUrl(route('newsletter.campaigns.edit', $campaign->getKey()))
            ->withCreatedSuccessMessage();
    }

    public function edit(NewsletterCampaign $campaign, FormBuilder $formBuilder): string
    {
        $this->pageTitle(trans('core/base::forms.edit_item', ['name' => $campaign->name]));

        return $formBuilder
            ->create(NewsletterCampaignForm::class, ['model' => $campaign])
            ->renderForm();
    }

    public function update(NewsletterCampaign $campaign, NewsletterCampaignRequest $request): BaseHttpResponse
    {
        // Editing a campaign that is already going out would change the message
        // half-way through the send, so the door is closed once it starts.
        if (! $campaign->is_editable) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(trans('plugins/newsletter::newsletter.campaigns.cannot_edit'));
        }

        event(new BeforeUpdateContentEvent($request, $campaign));

        $campaign->update([
            ...$request->validated(),
            'scheduled_at' => $this->resolveScheduledAt($request),
        ]);

        event(new UpdatedContentEvent('newsletter-campaign', $request, $campaign));

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('newsletter.campaigns.index'))
            ->withUpdatedSuccessMessage();
    }

    public function destroy(NewsletterCampaign $campaign): DeleteResourceAction
    {
        return DeleteResourceAction::make($campaign);
    }

    /**
     * Render the campaign exactly as a subscriber would receive it.
     */
    public function preview(NewsletterCampaign $campaign): Response
    {
        return response($this->renderer->renderPreview($campaign))
            ->header('Content-Type', 'text/html; charset=UTF-8');
    }

    /**
     * Seed check: always send yourself one before committing to the list.
     */
    public function sendTest(NewsletterCampaign $campaign, SendTestNewsletterRequest $request): BaseHttpResponse
    {
        $recipient = $this->renderer->sampleRecipient(
            $campaign,
            $request->input('email'),
            trans('plugins/newsletter::newsletter.campaigns.email.sample_name')
        );

        try {
            Mail::to($recipient->email)->send(
                new NewsletterCampaignMail($campaign, $recipient, $this->renderer)
            );
        } catch (Throwable $throwable) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage($throwable->getMessage());
        }

        return $this
            ->httpResponse()
            ->setMessage(trans('plugins/newsletter::newsletter.campaigns.test_sent', [
                'email' => $recipient->email,
            ]));
    }

    public function sendNow(NewsletterCampaign $campaign): BaseHttpResponse
    {
        if (! $campaign->is_dispatchable) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(trans('plugins/newsletter::newsletter.campaigns.cannot_send'));
        }

        if (! $this->subscriberCount()) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(trans('plugins/newsletter::newsletter.campaigns.no_subscribers'));
        }

        $campaign = $this->dispatcher->start($campaign);

        // Release the first slice immediately; the scheduler takes it from here.
        $this->dispatcher->dispatchPending($campaign);

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('newsletter.campaigns.index'))
            ->setMessage(trans('plugins/newsletter::newsletter.campaigns.sending_started', [
                'count' => number_format($campaign->total_recipients),
            ]));
    }

    public function pause(NewsletterCampaign $campaign): BaseHttpResponse
    {
        $this->dispatcher->pause($campaign);

        return $this
            ->httpResponse()
            ->setMessage(trans('plugins/newsletter::newsletter.campaigns.paused'));
    }

    public function resume(NewsletterCampaign $campaign): BaseHttpResponse
    {
        $this->dispatcher->resume($campaign);

        return $this
            ->httpResponse()
            ->setMessage(trans('plugins/newsletter::newsletter.campaigns.resumed'));
    }

    public function cancel(NewsletterCampaign $campaign): BaseHttpResponse
    {
        if (! $campaign->is_cancellable) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(trans('plugins/newsletter::newsletter.campaigns.cannot_cancel'));
        }

        $this->dispatcher->cancel($campaign);

        return $this
            ->httpResponse()
            ->setMessage(trans('plugins/newsletter::newsletter.campaigns.canceled'));
    }

    public function report(NewsletterCampaign $campaign, NewsletterCampaignRecipientTable $table): View|JsonResponse
    {
        $this->pageTitle(trans('plugins/newsletter::newsletter.campaigns.report_for', ['name' => $campaign->name]));

        $table->forCampaign($campaign);

        if (request()->ajax()) {
            return $table->renderTable();
        }

        $stats = $this->dispatcher->recalculateStats($campaign);

        return view('plugins/newsletter::campaigns.report', [
            'campaign' => $campaign->refresh(),
            'stats' => $stats,
            'table' => $table,
        ]);
    }

    /**
     * A campaign saved as "scheduled" without a date goes out on the next tick.
     */
    protected function resolveScheduledAt(NewsletterCampaignRequest $request): ?Carbon
    {
        if ($request->input('status') !== CampaignStatusEnum::SCHEDULED) {
            return null;
        }

        return $request->input('scheduled_at')
            ? Carbon::parse($request->input('scheduled_at'))
            : Carbon::now();
    }

    protected function subscriberCount(): int
    {
        return Newsletter::query()
            ->where('status', NewsletterStatusEnum::SUBSCRIBED)
            ->count();
    }
}
