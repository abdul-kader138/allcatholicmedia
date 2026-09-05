{{ header }}

{# Preview text: shown by the inbox next to the subject line, never in the body. #}
{% if campaign_preheader %}
    <table class="bb-preheader" cellspacing="0" cellpadding="0" role="presentation">
        <tbody>
            <tr>
                <td>{{ campaign_preheader }}</td>
            </tr>
        </tbody>
    </table>
{% endif %}

<table cellspacing="0" cellpadding="0" role="presentation">
    <tbody>
        <tr>
            <td class="bb-text-center bb-text-muted bb-font-sm bb-pb-sm">
                <a href="{{ view_in_browser_url }}" class="bb-text-muted">{{ 'plugins/newsletter::newsletter.campaigns.email.view_in_browser' | trans }}</a>
            </td>
        </tr>
    </tbody>
</table>

<div class="bb-main-content">
    <table class="bb-box" cellpadding="0" cellspacing="0" role="presentation">
        <tbody>
            {% if campaign_banner %}
                <tr>
                    <td>
                        <img src="{{ campaign_banner }}" alt="{{ campaign_subject }}" class="bb-img-responsive bb-rounded-top" width="100%" />
                    </td>
                </tr>
            {% endif %}

            <tr>
                <td class="bb-content">
                    <h1 class="bb-m-0 bb-mb-md">{{ campaign_subject }}</h1>

                    {{ campaign_content }}
                </td>
            </tr>
        </tbody>
    </table>
</div>

{# CAN-SPAM / GDPR footer: who sent this, why, and how to stop it. #}
<table cellspacing="0" cellpadding="0" role="presentation">
    <tbody>
        <tr>
            <td class="bb-py-lg bb-text-center bb-text-muted bb-font-sm">
                <p class="bb-m-0 bb-mb-xs">
                    {{ 'plugins/newsletter::newsletter.campaigns.email.reason' | trans({'email': subscriber_email, 'site_title': site_title}) }}
                </p>

                {% if sender_postal_address %}
                    <p class="bb-m-0 bb-mb-xs">{{ sender_postal_address }}</p>
                {% endif %}

                <p class="bb-m-0">
                    <a href="{{ unsubscribe_url }}" class="bb-text-muted">{{ 'plugins/newsletter::newsletter.campaigns.email.unsubscribe' | trans }}</a>
                </p>
            </td>
        </tr>
    </tbody>
</table>

{{ footer }}
