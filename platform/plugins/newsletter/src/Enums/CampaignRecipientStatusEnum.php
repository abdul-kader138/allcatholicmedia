<?php

namespace Botble\Newsletter\Enums;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Supports\Enum;
use Illuminate\Support\HtmlString;

/**
 * @method static CampaignRecipientStatusEnum PENDING()
 * @method static CampaignRecipientStatusEnum SENT()
 * @method static CampaignRecipientStatusEnum FAILED()
 * @method static CampaignRecipientStatusEnum SKIPPED()
 */
class CampaignRecipientStatusEnum extends Enum
{
    public const PENDING = 'pending';

    public const SENT = 'sent';

    public const FAILED = 'failed';

    public const SKIPPED = 'skipped';

    public static $langPath = 'plugins/newsletter::newsletter.campaigns.recipient_statuses';

    public function toHtml(): HtmlString|string
    {
        $color = match ($this->value) {
            self::SENT => 'success',
            self::FAILED => 'danger',
            self::SKIPPED => 'warning',
            default => 'secondary',
        };

        return BaseHelper::renderBadge($this->label(), $color);
    }
}
