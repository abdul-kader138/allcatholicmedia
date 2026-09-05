<?php

namespace Botble\Newsletter\Http\Controllers;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Newsletter\Enums\NewsletterStatusEnum;
use Botble\Newsletter\Events\UnsubscribeNewsletterEvent;
use Botble\Newsletter\Models\NewsletterCampaignRecipient;
use Botble\Newsletter\Services\CampaignContentRenderer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

/**
 * Endpoints that live inside a delivered email: open pixel, click redirect,
 * view-in-browser and RFC 8058 one-click unsubscribe.
 */
class CampaignTrackingController extends BaseController
{
    /**
     * 1x1 transparent GIF. Always returns the image, even for an unknown token,
     * so a broken pixel never appears in a subscriber's inbox.
     */
    public function open(string $token): Response
    {
        $recipient = $this->findRecipient($token);

        if ($recipient) {
            $recipient->forceFill([
                'opened_at' => $recipient->opened_at ?: Carbon::now(),
            ])->save();

            $recipient->increment('open_count');
        }

        return response(
            base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'),
            200,
            [
                'Content-Type' => 'image/gif',
                'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
                'Pragma' => 'no-cache',
            ]
        );
    }

    /**
     * Record the click, then hand the subscriber straight on to the real URL.
     */
    public function click(string $token, Request $request): RedirectResponse
    {
        $target = base64_decode((string) $request->query('url'), true);

        // Only ever redirect to a well-formed absolute http(s) URL - an open
        // redirect here would be handed to every subscriber on the list.
        if (! $target || ! filter_var($target, FILTER_VALIDATE_URL) || ! Str::startsWith($target, ['http://', 'https://'])) {
            return redirect()->to(BaseHelper::getHomepageUrl());
        }

        $recipient = $this->findRecipient($token);

        if ($recipient) {
            $recipient->forceFill([
                'clicked_at' => $recipient->clicked_at ?: Carbon::now(),
                'opened_at' => $recipient->opened_at ?: Carbon::now(),
            ])->save();

            $recipient->increment('click_count');
        }

        return redirect()->away($target);
    }

    public function viewInBrowser(string $token, Request $request, CampaignContentRenderer $renderer): Response
    {
        abort_unless(URL::hasValidSignature($request), 404);

        $recipient = $this->findRecipient($token);

        abort_unless($recipient && $recipient->campaign, 404);

        return response($renderer->renderHtml($recipient->campaign, $recipient))
            ->header('Content-Type', 'text/html; charset=UTF-8');
    }

    /**
     * RFC 8058 one-click unsubscribe. Mailbox providers POST here without any
     * user interaction, so it must succeed silently and idempotently.
     */
    public function unsubscribe(string $token, Request $request)
    {
        abort_unless(URL::hasValidSignature($request), 404);

        $recipient = $this->findRecipient($token);

        abort_unless((bool) $recipient, 404);

        $subscriber = $recipient->subscriber;

        if ($subscriber && $subscriber->status->getValue() === NewsletterStatusEnum::SUBSCRIBED) {
            $subscriber->update(['status' => NewsletterStatusEnum::UNSUBSCRIBED]);

            UnsubscribeNewsletterEvent::dispatch($subscriber);
        }

        if ($request->isMethod('POST')) {
            return response()->noContent();
        }

        return $this
            ->httpResponse()
            ->setNextUrl(BaseHelper::getHomepageUrl())
            ->setMessage(trans('plugins/newsletter::newsletter.unsubscribe_success'));
    }

    protected function findRecipient(string $token): ?NewsletterCampaignRecipient
    {
        if (strlen($token) !== 40) {
            return null;
        }

        return NewsletterCampaignRecipient::query()
            ->with(['campaign', 'subscriber'])
            ->where('token', $token)
            ->first();
    }
}
