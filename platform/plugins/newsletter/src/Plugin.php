<?php

namespace Botble\Newsletter;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Botble\Setting\Facades\Setting;
use Illuminate\Support\Facades\Schema;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        // Child table first so the foreign key does not block the drop.
        Schema::dropIfExists('newsletter_campaign_recipients');
        Schema::dropIfExists('newsletter_campaigns');
        Schema::dropIfExists('newsletters');

        Setting::delete([
            'newsletter_mailchimp_api_key',
            'newsletter_mailchimp_list_id',
            'newsletter_sendgrid_api_key',
            'newsletter_sendgrid_list_id',
            'enable_newsletter_contacts_list_api',
            'newsletter_sender_postal_address',
        ]);
    }
}
