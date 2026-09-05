<?php

namespace Botble\Newsletter\Tables;

use Botble\Newsletter\Models\NewsletterCampaign;
use Botble\Table\Abstracts\TableAbstract;
use Botble\Table\Actions\Action;
use Botble\Table\Actions\DeleteAction;
use Botble\Table\Actions\EditAction;
use Botble\Table\BulkActions\DeleteBulkAction;
use Botble\Table\BulkChanges\CreatedAtBulkChange;
use Botble\Table\BulkChanges\NameBulkChange;
use Botble\Table\Columns\Column;
use Botble\Table\Columns\CreatedAtColumn;
use Botble\Table\Columns\DateTimeColumn;
use Botble\Table\Columns\EnumColumn;
use Botble\Table\Columns\FormattedColumn;
use Botble\Table\Columns\IdColumn;
use Botble\Table\Columns\NameColumn;
use Illuminate\Database\Eloquent\Builder;

class NewsletterCampaignTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->model(NewsletterCampaign::class)
            ->addActions([
                // One click, right from the list: prompts for an address and
                // fires a test send immediately, so an admin can check exactly
                // how a campaign renders and confirm mail is actually going
                // out, without opening the campaign or touching a real
                // subscriber.
                Action::make('send_test')
                    ->url(fn (Action $action) => route('newsletter.campaigns.test', $action->getItem()->getKey()))
                    ->icon('ti ti-mail-fast')
                    ->color('info')
                    ->label(trans('plugins/newsletter::newsletter.campaigns.delivery.send_test'))
                    ->permission('newsletter.campaigns.send')
                    ->addAttribute('onclick', $this->sendTestOnClickScript()),
                Action::make('report')
                    ->url(fn (Action $action) => route('newsletter.campaigns.report', $action->getItem()->getKey()))
                    ->icon('ti ti-chart-bar')
                    ->color('info')
                    ->label(trans('plugins/newsletter::newsletter.campaigns.report'))
                    ->permission('newsletter.campaigns.index'),
                EditAction::make()
                    ->route('newsletter.campaigns.edit')
                    // A campaign that has already started going out is frozen.
                    ->renderUsing(fn (EditAction $action, string $content) => $action->getItem()->is_editable ? $content : ''),
                DeleteAction::make()->route('newsletter.campaigns.destroy'),
            ])
            ->addColumns([
                IdColumn::make(),
                NameColumn::make()->route('newsletter.campaigns.edit')->alignLeft(),
                Column::make('subject')
                    ->title(trans('plugins/newsletter::newsletter.campaigns.form.subject'))
                    ->alignLeft(),
                EnumColumn::make('status')->title(trans('core/base::tables.status')),
                DateTimeColumn::make('scheduled_at')
                    ->title(trans('plugins/newsletter::newsletter.campaigns.form.scheduled_at')),
                FormattedColumn::make('progress')
                    ->title(trans('plugins/newsletter::newsletter.campaigns.progress'))
                    ->alignCenter()
                    ->orderable(false)
                    ->searchable(false)
                    ->getValueUsing(function (FormattedColumn $column): string {
                        /** @var NewsletterCampaign $item */
                        $item = $column->getItem();

                        return trans('plugins/newsletter::newsletter.campaigns.progress_value', [
                            'sent' => number_format($item->sent_count),
                            'total' => number_format($item->total_recipients),
                            'percent' => $item->progress_percentage,
                        ]);
                    }),
                CreatedAtColumn::make(),
            ])
            ->addBulkActions([
                DeleteBulkAction::make()->permission('newsletter.campaigns.destroy'),
            ])
            ->addBulkChanges([
                NameBulkChange::make(),
                CreatedAtBulkChange::make(),
            ])
            ->queryUsing(fn (Builder $query) => $query->select([
                'id',
                'name',
                'subject',
                'status',
                'scheduled_at',
                'sent_count',
                'failed_count',
                'total_recipients',
                'created_at',
            ]));
    }

    public function buttons(): array
    {
        return $this->addCreateButton(route('newsletter.campaigns.create'), 'newsletter.campaigns.create');
    }

    /**
     * Self-contained so it works no matter which view wraps this table (the
     * campaigns list today, potentially an embed later) - no extra script
     * file to enqueue. Every translated string is escaped via jsString() so
     * an apostrophe or quote in a translation can never break the script.
     *
     * The row's href is (ab)used purely as storage for the test-send URL:
     * onclick reads it via getAttribute('href') and prevents the navigation,
     * so the link never actually performs a GET against that POST-only route.
     */
    protected function sendTestOnClickScript(): string
    {
        $prompt = $this->jsString(trans('plugins/newsletter::newsletter.campaigns.delivery.test_email_prompt'));
        $sentFallback = $this->jsString(trans('plugins/newsletter::newsletter.campaigns.delivery.test_email_sent_fallback'));
        $failedFallback = $this->jsString(trans('plugins/newsletter::newsletter.campaigns.delivery.test_email_failed_fallback'));

        // Single-quoted JS string literals throughout: this string ends up as
        // the value of an HTML attribute that is itself wrapped in double
        // quotes, so it must never contain a literal double quote.
        $js = <<<JS
        event.preventDefault();
        var email = window.prompt({$prompt}, '');
        if (!email) { return false; }
        var url = this.getAttribute('href');
        var button = this;
        var formData = new FormData();
        formData.append('email', email);
        button.style.pointerEvents = 'none';
        fetch(url, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': (document.querySelector('meta[name=csrf-token]') || {}).content || '',
                'X-Requested-With': 'XMLHttpRequest',
                Accept: 'application/json'
            }
        })
            .then(function (response) { return response.json(); })
            .then(function (data) {
                button.style.pointerEvents = '';
                window.alert(data.message || (data.error ? {$failedFallback} : {$sentFallback}));
            })
            .catch(function () {
                button.style.pointerEvents = '';
                window.alert({$failedFallback});
            });
        return false;
        JS;

        // Collapse to one line: keeps the rendered HTML attribute tidy and
        // sidesteps any edge case a template minifier has with newlines
        // inside an attribute value.
        return preg_replace('/\s+/', ' ', trim($js));
    }

    /**
     * A translation is rendered here as a single-quoted JS string literal
     * (never json_encode(), which produces double quotes) because the whole
     * script becomes the value of a double-quoted HTML attribute.
     */
    protected function jsString(string $value): string
    {
        return "'" . addcslashes($value, "\\'") . "'";
    }
}
