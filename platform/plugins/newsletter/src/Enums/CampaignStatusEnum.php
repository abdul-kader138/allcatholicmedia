<?php

namespace Botble\Newsletter\Enums;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Supports\Enum;
use Illuminate\Support\HtmlString;

/**
 * @method static CampaignStatusEnum DRAFT()
 * @method static CampaignStatusEnum SCHEDULED()
 * @method static CampaignStatusEnum SENDING()
 * @method static CampaignStatusEnum PAUSED()
 * @method static CampaignStatusEnum SENT()
 * @method static CampaignStatusEnum CANCELED()
 * @method static CampaignStatusEnum FAILED()
 */
class CampaignStatusEnum extends Enum
{
    public const DRAFT = 'draft';

    public const SCHEDULED = 'scheduled';

    public const SENDING = 'sending';

    public const PAUSED = 'paused';

    public const SENT = 'sent';

    public const CANCELED = 'canceled';

    public const FAILED = 'failed';

    public static $langPath = 'plugins/newsletter::newsletter.campaigns.statuses';

    public function toHtml(): HtmlString|string
    {
        $color = match ($this->value) {
            self::SENT => 'success',
            self::SENDING => 'info',
            self::SCHEDULED => 'primary',
            self::PAUSED => 'warning',
            self::FAILED, self::CANCELED => 'danger',
            default => 'secondary',
        };

        return BaseHelper::renderBadge($this->label(), $color);
    }
}
