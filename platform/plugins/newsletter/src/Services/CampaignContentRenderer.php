<?php

namespace Botble\Newsletter\Services;

use Botble\Base\Supports\EmailHandler;
use Botble\Base\Supports\TwigCompiler;
use Botble\Media\Facades\RvMedia;
use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Newsletter\Models\NewsletterCampaignRecipient;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Symfony\Component\Mime\Header\Headers;
use Throwable;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;
use Twig\Extension\DebugExtension;

/**
 * Turns a campaign plus one recipient into the exact bytes that go on the wire:
 * a personalised, CSS-inlined HTML part, a plain-text alternative, and the
 * RFC 8058 unsubscribe headers that Gmail and Yahoo require of bulk senders.
 */
class CampaignContentRenderer
{
    protected TwigCompiler $twig;

    /**
     * A dedicated handler rather than the shared singleton: the singleton
     * memoises values like {{ date_time }} for its whole lifetime, which on a
     * long-running queue worker would stamp every campaign with the time the
     * worker booted.
     */
    protected EmailHandler $emailHandler;

    public function __construct()
    {
        $this->twig = new TwigCompiler(['autoescape' => false, 'debug' => true]);
        $this->twig->addExtension(new DebugExtension());
        $this->emailHandler = new EmailHandler();
    }

    /**
     * Fully rendered HTML body for a specific recipient.
     */
    public function renderHtml(NewsletterCampaign $campaign, NewsletterCampaignRecipient $recipient): string
    {
        $content = $this->personalise((string) $campaign->content, $campaign, $recipient);

        if ($campaign->track_clicks) {
            $content = $this->rewriteLinksForTracking($content, $recipient);
        }

        $wrapper = get_setting_email_template_content('plugins', NEWSLETTER_MODULE_SCREEN_NAME, 'campaign');

        $html = $this->compile($wrapper, $this->variables($campaign, $recipient, $content));

        // Most mail clients discard <style> blocks, so every rule is folded into
        // style="" attributes before the message leaves the application.
        $html = (new CssToInlineStyles())->convert($html, $this->emailHandler->getCssContent());

        if ($campaign->track_opens) {
            $html = $this->appendTrackingPixel($html, $recipient);
        }

        return $html;
    }

    /**
     * Plain-text alternative. Sending multipart/alternative measurably improves
     * inbox placement and is the only body some clients will ever show.
     */
    public function renderText(NewsletterCampaign $campaign, NewsletterCampaignRecipient $recipient): string
    {
        $html = $this->personalise((string) $campaign->content, $campaign, $recipient);

        // Keep the destination of each link visible once the markup is gone.
        $html = preg_replace(
            '/<a\b[^>]*href=(["\'])(.*?)\1[^>]*>(.*?)<\/a>/is',
            '$3 <$2>',
            $html
        );

        $html = preg_replace('/<(br|\/p|\/div|\/h[1-6]|\/li|\/tr)[^>]*>/i', "\n", (string) $html);
        $text = html_entity_decode(strip_tags((string) $html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace("/[ \t]+/", ' ', $text);
        $text = preg_replace("/\n{3,}/", "\n\n", (string) $text);

        $lines = array_map('trim', explode("\n", trim((string) $text)));

        return implode("\n", $lines)
            . "\n\n----\n"
            . trans('plugins/newsletter::newsletter.campaigns.email.text_unsubscribe', [
                'url' => $this->unsubscribeUrl($recipient),
            ])
            . "\n" . $this->postalAddress();
    }

    public function renderSubject(NewsletterCampaign $campaign, NewsletterCampaignRecipient $recipient): string
    {
        return $this->personalise((string) $campaign->subject, $campaign, $recipient);
    }

    /**
     * RFC 2369 + RFC 8058. `List-Unsubscribe-Post` turns the header into a true
     * one-click unsubscribe, which bulk senders to Gmail/Yahoo must support.
     */
    public function applyListHeaders(Headers $headers, NewsletterCampaign $campaign, NewsletterCampaignRecipient $recipient): void
    {
        $headers->addTextHeader('List-Unsubscribe', sprintf('<%s>', $this->oneClickUnsubscribeUrl($recipient)));
        $headers->addTextHeader('List-Unsubscribe-Post', 'List-Unsubscribe=One-Click');
        $headers->addTextHeader('List-Id', sprintf(
            '%s <newsletter.%s>',
            $this->siteTitle(),
            Str::slug((string) parse_url(url('/'), PHP_URL_HOST) ?: 'newsletter', '.')
        ));

        // Tells autoresponders and mailbox providers this is bulk, not personal,
        // mail - it suppresses out-of-office replies bouncing back at the send.
        $headers->addTextHeader('Precedence', 'bulk');
        $headers->addTextHeader('Auto-Submitted', 'auto-generated');
        $headers->addTextHeader('X-Campaign-Id', (string) $campaign->getKey());
        $headers->addTextHeader('X-Entity-Ref-Id', (string) $recipient->token);
    }

    /**
     * Preview rendering for the admin, using a throwaway in-memory recipient so
     * the personalisation tokens resolve to something realistic.
     */
    public function renderPreview(NewsletterCampaign $campaign): string
    {
        $recipient = $this->sampleRecipient($campaign);

        $content = $this->personalise((string) $campaign->content, $campaign, $recipient);

        $wrapper = get_setting_email_template_content('plugins', NEWSLETTER_MODULE_SCREEN_NAME, 'campaign');

        $html = $this->compile($wrapper, $this->variables($campaign, $recipient, $content));

        return (new CssToInlineStyles())->convert($html, $this->emailHandler->getCssContent());
    }

    public function sampleRecipient(NewsletterCampaign $campaign, ?string $email = null, ?string $name = null): NewsletterCampaignRecipient
    {
        $recipient = new NewsletterCampaignRecipient([
            'campaign_id' => $campaign->getKey(),
            'email' => $email ?: 'subscriber@example.com',
            'name' => $name ?: trans('plugins/newsletter::newsletter.campaigns.email.sample_name'),
            'token' => Str::random(40),
        ]);

        $recipient->setRelation('campaign', $campaign);

        return $recipient;
    }

    /**
     * Variables exposed to the campaign wrapper template. Admins can rearrange
     * these freely in Settings -> Email templates without touching code.
     */
    protected function variables(
        NewsletterCampaign $campaign,
        NewsletterCampaignRecipient $recipient,
        string $content
    ): array {
        $unsubscribeUrl = $this->unsubscribeUrl($recipient);

        return [
            ...$this->emailHandler->getCoreVariableValues(),
            'campaign_subject' => $campaign->subject,
            'campaign_preheader' => (string) $campaign->preheader,
            'campaign_content' => $content,
            'campaign_banner' => $campaign->image ? RvMedia::getImageUrl($campaign->image) : '',
            'subscriber_name' => $recipient->name ?: Str::before((string) $recipient->email, '@'),
            'subscriber_email' => (string) $recipient->email,
            'unsubscribe_url' => $unsubscribeUrl,
            'unsubscribe_link' => sprintf(
                '<a href="%s" target="_blank" rel="noopener">%s</a>',
                e($unsubscribeUrl),
                e(trans('plugins/newsletter::newsletter.campaigns.email.unsubscribe'))
            ),
            'view_in_browser_url' => $this->viewInBrowserUrl($recipient),
            'sender_postal_address' => $this->postalAddress(),
        ];
    }

    /**
     * Resolve `{{ subscriber_name }}`-style tokens inside admin-authored copy.
     * A broken token must never abort a send, so failures fall through to the
     * original string and are logged by the caller.
     */
    protected function personalise(string $content, NewsletterCampaign $campaign, NewsletterCampaignRecipient $recipient): string
    {
        if (! str_contains($content, '{{') && ! str_contains($content, '{%')) {
            return $content;
        }

        try {
            return $this->compile($content, [
                ...$this->emailHandler->getCoreVariableValues(),
                'campaign_subject' => $campaign->subject,
                'subscriber_name' => $recipient->name ?: Str::before((string) $recipient->email, '@'),
                'subscriber_email' => (string) $recipient->email,
                'unsubscribe_url' => $this->unsubscribeUrl($recipient),
                'view_in_browser_url' => $this->viewInBrowserUrl($recipient),
            ]);
        } catch (Throwable) {
            return $content;
        }
    }

    protected function compile(string $template, array $data): string
    {
        $data = $this->resolveNestedTemplates($data);

        try {
            return $this->twig->compile($template, $data);
        } catch (Throwable) {
            // Fall back to literal substitution so a template syntax error
            // degrades to a slightly ugly email rather than no email at all.
            foreach ($data as $key => $value) {
                if (! is_string($value)) {
                    continue;
                }

                $template = str_replace(
                    ['{{ ' . $key . ' }}', '{{' . $key . '}}'],
                    $value,
                    $template
                );
            }

            return $template;
        }
    }

    /**
     * Core variables such as {{ header }} and {{ footer }} hold Twig templates
     * of their own, so they have to be rendered before the outer template is -
     * otherwise the site logo and copyright arrive as literal `{{ site_logo }}`
     * text in the subscriber's inbox.
     *
     * `campaign_content` is skipped: it has already been personalised, and
     * running admin-authored HTML through Twig twice would break any literal
     * braces it happens to contain.
     */
    protected function resolveNestedTemplates(array $data): array
    {
        foreach ($data as $key => $value) {
            if ($key === 'campaign_content' || ! is_string($value) || ! str_contains($value, '{')) {
                continue;
            }

            try {
                $data[$key] = $this->twig->compile($value, $data);
            } catch (Throwable) {
                // Leave the raw value in place; a broken sub-template must not
                // take the whole campaign down.
            }
        }

        return $data;
    }

    protected function rewriteLinksForTracking(string $content, NewsletterCampaignRecipient $recipient): string
    {
        $ignored = (array) config('plugins.newsletter.campaign.untracked_link_patterns', []);

        return (string) preg_replace_callback(
            '/href=(["\'])(.*?)\1/i',
            function (array $matches) use ($recipient, $ignored): string {
                $url = html_entity_decode($matches[2], ENT_QUOTES | ENT_HTML5, 'UTF-8');

                foreach ($ignored as $pattern) {
                    if (Str::startsWith($url, $pattern) || Str::contains($url, $pattern)) {
                        return $matches[0];
                    }
                }

                if (! Str::startsWith($url, ['http://', 'https://'])) {
                    return $matches[0];
                }

                return sprintf('href="%s"', e($this->clickUrl($recipient, $url)));
            },
            $content
        );
    }

    protected function appendTrackingPixel(string $html, NewsletterCampaignRecipient $recipient): string
    {
        $pixel = sprintf(
            '<img src="%s" width="1" height="1" alt="" style="display:block;width:1px;height:1px;border:0;outline:none;" />',
            e($this->openUrl($recipient))
        );

        if (stripos($html, '</body>') !== false) {
            return preg_replace('/<\/body>/i', $pixel . '</body>', $html, 1) ?: $html . $pixel;
        }

        return $html . $pixel;
    }

    public function unsubscribeUrl(NewsletterCampaignRecipient $recipient): string
    {
        if ($recipient->subscriber_id) {
            return URL::signedRoute('public.newsletter.unsubscribe', ['user' => $recipient->subscriber_id]);
        }

        return url('/');
    }

    public function oneClickUnsubscribeUrl(NewsletterCampaignRecipient $recipient): string
    {
        return URL::signedRoute('public.newsletter.campaign.unsubscribe', ['token' => $recipient->token]);
    }

    public function openUrl(NewsletterCampaignRecipient $recipient): string
    {
        return route('public.newsletter.campaign.open', ['token' => $recipient->token]);
    }

    public function clickUrl(NewsletterCampaignRecipient $recipient, string $target): string
    {
        return route('public.newsletter.campaign.click', [
            'token' => $recipient->token,
            'url' => base64_encode($target),
        ]);
    }

    public function viewInBrowserUrl(NewsletterCampaignRecipient $recipient): string
    {
        return URL::signedRoute('public.newsletter.campaign.view', ['token' => $recipient->token]);
    }

    protected function postalAddress(): string
    {
        return (string) (
            config('plugins.newsletter.campaign.sender_postal_address')
            ?: setting('newsletter_sender_postal_address')
            ?: setting('contact_address')
            ?: ''
        );
    }

    protected function siteTitle(): string
    {
        return (string) (setting('admin_title') ?: config('app.name'));
    }
}
