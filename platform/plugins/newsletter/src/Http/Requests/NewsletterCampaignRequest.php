<?php

namespace Botble\Newsletter\Http\Requests;

use Botble\Base\Rules\OnOffRule;
use Botble\Newsletter\Enums\CampaignStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class NewsletterCampaignRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'preheader' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['nullable', 'string', 'max:255'],
            'from_name' => ['nullable', 'string', 'max:120'],
            'from_address' => ['nullable', 'email:rfc', 'max:120'],
            'reply_to' => ['nullable', 'email:rfc', 'max:120'],
            'status' => ['required', Rule::in([
                CampaignStatusEnum::DRAFT,
                CampaignStatusEnum::SCHEDULED,
            ])],
            'scheduled_at' => [
                Rule::requiredIf(fn () => $this->input('status') === CampaignStatusEnum::SCHEDULED),
                'nullable',
                'date',
            ],
            'track_opens' => [new OnOffRule()],
            'track_clicks' => [new OnOffRule()],
        ];
    }

    public function attributes(): array
    {
        return [
            'scheduled_at' => trans('plugins/newsletter::newsletter.campaigns.form.scheduled_at'),
        ];
    }
}
