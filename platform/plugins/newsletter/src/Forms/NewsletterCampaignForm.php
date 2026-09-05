<?php

namespace Botble\Newsletter\Forms;

use Botble\Base\Forms\FieldOptions\DatePickerFieldOption;
use Botble\Base\Forms\FieldOptions\EditorFieldOption;
use Botble\Base\Forms\FieldOptions\EmailFieldOption;
use Botble\Base\Forms\FieldOptions\HtmlFieldOption;
use Botble\Base\Forms\FieldOptions\MediaImageFieldOption;
use Botble\Base\Forms\FieldOptions\NameFieldOption;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\DatePickerField;
use Botble\Base\Forms\Fields\EditorField;
use Botble\Base\Forms\Fields\EmailField;
use Botble\Base\Forms\Fields\HtmlField;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\FormAbstract;
use Botble\Newsletter\Enums\CampaignStatusEnum;
use Botble\Newsletter\Http\Requests\NewsletterCampaignRequest;
use Botble\Newsletter\Models\NewsletterCampaign;

class NewsletterCampaignForm extends FormAbstract
{
    public function setup(): void
    {
        $isScheduled = $this->getStatusValue() === CampaignStatusEnum::SCHEDULED;

        $this
            ->model(NewsletterCampaign::class)
            ->setValidatorClass(NewsletterCampaignRequest::class)

            ->add('name', TextField::class, NameFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.name'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.name_helper'))
                ->required())
            ->add('subject', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.subject'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.subject_helper'))
                ->maxLength(255)
                ->required())
            ->add('preheader', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.preheader'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.preheader_helper'))
                ->maxLength(255))
            ->add('content', EditorField::class, EditorFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.content'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.content_helper'))
                ->required())
            ->add('personalisation_hint', HtmlField::class, HtmlFieldOption::make()
                ->content(view('plugins/newsletter::campaigns.partials.merge-tags')->render()))

            // --- Sidebar: scheduling -------------------------------------------------
            ->add('status', SelectField::class, SelectFieldOption::make()
                ->label(trans('core/base::tables.status'))
                ->choices([
                    CampaignStatusEnum::DRAFT => trans('plugins/newsletter::newsletter.campaigns.statuses.draft'),
                    CampaignStatusEnum::SCHEDULED => trans('plugins/newsletter::newsletter.campaigns.statuses.scheduled'),
                ])
                ->selected($this->getStatusValue())
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.status_helper'))
                ->addAttribute('data-newsletter-status', '1')
                ->required())
            ->add(
                'scheduled_at',
                DatePickerField::class,
                DatePickerFieldOption::make()
                    ->label(trans('plugins/newsletter::newsletter.campaigns.form.scheduled_at'))
                    ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.scheduled_at_helper', [
                        'timezone' => config('app.timezone'),
                    ]))
                    ->value(optional($this->getModel()->scheduled_at)->format('Y-m-d H:i:s'))
                    ->wrapperAttributes([
                        'class' => 'mb-3',
                        'data-newsletter-schedule' => '1',
                        'style' => $isScheduled ? '' : 'display: none;',
                    ])
                    ->withTimePicker()
            )
            ->add('scheduled_at_script', HtmlField::class, HtmlFieldOption::make()
                ->content(view('plugins/newsletter::campaigns.partials.schedule-toggle')->render()))

            ->add('image', MediaImageField::class, MediaImageFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.banner'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.banner_helper')))

            ->add('from_name', TextField::class, TextFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.from_name'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.from_name_helper'))
                ->placeholder((string) setting('email_from_name', config('mail.from.name')))
                ->maxLength(120))
            ->add('from_address', EmailField::class, EmailFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.from_address'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.from_address_helper'))
                ->placeholder((string) setting('email_from_address', config('mail.from.address')))
                ->maxLength(120))
            ->add('reply_to', EmailField::class, EmailFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.reply_to'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.reply_to_helper'))
                ->maxLength(120))

            ->add('track_opens', OnOffField::class, OnOffFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.track_opens'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.track_opens_helper'))
                ->defaultValue((bool) config('plugins.newsletter.campaign.tracking.opens', true)))
            ->add('track_clicks', OnOffField::class, OnOffFieldOption::make()
                ->label(trans('plugins/newsletter::newsletter.campaigns.form.track_clicks'))
                ->helperText(trans('plugins/newsletter::newsletter.campaigns.form.track_clicks_helper'))
                ->defaultValue((bool) config('plugins.newsletter.campaign.tracking.clicks', true)))

            ->setBreakFieldPoint('status');

        // Delivery controls only make sense once the campaign has been saved.
        if ($this->getModel()->exists) {
            $this->addMetaBoxes([
                'newsletter-campaign-delivery' => [
                    'title' => trans('plugins/newsletter::newsletter.campaigns.delivery.title'),
                    'content' => view(
                        'plugins/newsletter::campaigns.partials.delivery',
                        ['campaign' => $this->getModel()]
                    )->render(),
                    'priority' => 10,
                ],
            ]);
        }
    }

    protected function getStatusValue(): string
    {
        $status = $this->getModel()->status;

        return $status ? $status->getValue() : CampaignStatusEnum::DRAFT;
    }
}
