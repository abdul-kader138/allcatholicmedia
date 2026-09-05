<?php

namespace Botble\Newsletter\Mail;

use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Newsletter\Models\NewsletterCampaignRecipient;
use Botble\Newsletter\Services\CampaignContentRenderer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mime\Email;

class NewsletterCampaignMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        protected NewsletterCampaign $campaign,
        protected NewsletterCampaignRecipient $recipient,
        protected CampaignContentRenderer $renderer
    ) {
    }

    public function envelope(): Envelope
    {
        $fromAddress = $this->campaign->from_address
            ?: setting('email_from_address', config('mail.from.address'));

        $fromName = $this->campaign->from_name
            ?: setting('email_from_name', config('mail.from.name'));

        return new Envelope(
            from: new Address($fromAddress, $fromName),
            replyTo: array_filter([
                $this->campaign->reply_to
                    ? new Address($this->campaign->reply_to)
                    : null,
            ]),
            subject: $this->renderer->renderSubject($this->campaign, $this->recipient),
        );
    }

    public function build(): static
    {
        $this
            ->html($this->renderer->renderHtml($this->campaign, $this->recipient))
            ->text('plugins/newsletter::emails.campaign-text', [
                'body' => $this->renderer->renderText($this->campaign, $this->recipient),
            ]);

        // Symfony headers are only reachable once the message exists, so the
        // list headers are attached during the build callback.
        $this->withSymfonyMessage(function (Email $message): void {
            $this->renderer->applyListHeaders($message->getHeaders(), $this->campaign, $this->recipient);
        });

        return $this;
    }
}
