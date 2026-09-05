<?php

namespace Botble\Newsletter\Jobs;

use Botble\Newsletter\Enums\CampaignRecipientStatusEnum;
use Botble\Newsletter\Enums\CampaignStatusEnum;
use Botble\Newsletter\Mail\NewsletterCampaignMail;
use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Newsletter\Models\NewsletterCampaignRecipient;
use Botble\Newsletter\Services\CampaignContentRenderer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

/**
 * Delivers exactly one message to exactly one recipient.
 *
 * One job per recipient (rather than per chunk) is what makes a partial failure
 * cheap: a bad address retries or fails on its own without taking the rest of
 * the batch with it, and every outcome lands in the delivery log.
 */
class SendNewsletterCampaignJob implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public int $tries = 3;

    public int $timeout = 120;

    public function __construct(
        public int $campaignId,
        public int $recipientId
    ) {
    }

    /**
     * Guards against the dispatcher queueing the same recipient twice if a tick
     * overlaps a slow queue.
     */
    public function uniqueId(): string
    {
        return 'newsletter-campaign-recipient-' . $this->recipientId;
    }

    public function uniqueFor(): int
    {
        return 3600;
    }

    /**
     * @return int[]
     */
    public function backoff(): array
    {
        return (array) config('plugins.newsletter.campaign.backoff', [60, 300, 900]);
    }

    public function handle(CampaignContentRenderer $renderer): void
    {
        $campaign = NewsletterCampaign::query()->find($this->campaignId);
        $recipient = NewsletterCampaignRecipient::query()->find($this->recipientId);

        if (! $campaign || ! $recipient) {
            return;
        }

        // The admin may have paused or cancelled between queueing and running.
        if ($campaign->status->getValue() !== CampaignStatusEnum::SENDING) {
            return;
        }

        // Idempotency: never re-send a recipient that already has an outcome.
        if ($recipient->status->getValue() !== CampaignRecipientStatusEnum::PENDING) {
            return;
        }

        $recipient->increment('attempts');

        try {
            Mail::to($recipient->email, $recipient->name)
                ->send(new NewsletterCampaignMail($campaign, $recipient, $renderer));

            $recipient->forceFill([
                'status' => CampaignRecipientStatusEnum::SENT,
                'sent_at' => Carbon::now(),
                'error' => null,
            ])->save();

            $campaign->increment('sent_count');
        } catch (Throwable $throwable) {
            // Let the queue retry until the attempt budget is spent; only then
            // is the recipient recorded as permanently failed.
            if ($this->attempts() < $this->tries) {
                throw $throwable;
            }

            $this->markFailed($recipient, $campaign, $throwable);
        }
    }

    public function failed(Throwable $throwable): void
    {
        $campaign = NewsletterCampaign::query()->find($this->campaignId);
        $recipient = NewsletterCampaignRecipient::query()->find($this->recipientId);

        if ($campaign && $recipient && $recipient->status->getValue() === CampaignRecipientStatusEnum::PENDING) {
            $this->markFailed($recipient, $campaign, $throwable);
        }
    }

    protected function markFailed(
        NewsletterCampaignRecipient $recipient,
        NewsletterCampaign $campaign,
        Throwable $throwable
    ): void {
        $recipient->forceFill([
            'status' => CampaignRecipientStatusEnum::FAILED,
            'error' => mb_substr($throwable->getMessage(), 0, 1000),
        ])->save();

        $campaign->increment('failed_count');

        Log::warning(sprintf(
            'Newsletter campaign #%d failed to send to %s: %s',
            $campaign->getKey(),
            $recipient->email,
            $throwable->getMessage()
        ));
    }
}
