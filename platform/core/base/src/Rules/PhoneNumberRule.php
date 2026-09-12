<?php

namespace Botble\Base\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberUtil;

/**
 * Validates a phone number against the numbering-plan rules of its own
 * country rather than a one-size-fits-all length/character check, so e.g. a
 * US number is held to US rules and a UK number to UK rules.
 *
 * The intl-tel-input widget (see phone-number-script.blade.php) sends the
 * number pre-combined with its dial code in E.164 form (e.g. "+14155552671"),
 * which is enough on its own to identify the country. A bare national number
 * (no leading "+", e.g. typed straight into a plain text field) is validated
 * against the same default-country fallback the widget itself uses.
 */
class PhoneNumberRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || trim($value) === '') {
            $fail(trans('validation.string'));

            return;
        }

        $phoneUtil = PhoneNumberUtil::getInstance();

        try {
            $number = $phoneUtil->parse($value, $this->getDefaultRegion());
        } catch (NumberParseException) {
            $fail(trans('core/base::forms.phone_number_invalid'));

            return;
        }

        if (! $phoneUtil->isValidNumber($number)) {
            $fail(trans('core/base::forms.phone_number_invalid'));
        }
    }

    /**
     * Mirrors phone-number-script.blade.php's own getDefaultCountry(): prefer
     * "US" among the configured countries, or the first configured country,
     * or "US" when no restriction is configured at all.
     */
    protected function getDefaultRegion(): string
    {
        $countries = array_map(
            'strtoupper',
            json_decode((string) setting('phone_number_available_countries', '[]'), true) ?: []
        );

        if (! $countries) {
            return 'US';
        }

        return in_array('US', $countries, true) ? 'US' : $countries[0];
    }
}
