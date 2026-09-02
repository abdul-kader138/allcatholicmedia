<?php

namespace Database\Seeders\Themes\Politics;

use Botble\Base\Facades\Html;
use Botble\Page\Models\Page;
use Database\Seeders\Themes\Main\PageSeeder as BasePageSeeder;

class PageSeeder extends BasePageSeeder
{
    public function run(): void
    {
        parent::run();
        $this->uploadFiles('backgrounds', 'politics');

        $homepage = Page::query()->where('name', 'Homepage')->firstOrFail();

        $homepage->update(['content' =>
            Html::tag('div', '[hero-intro title="Watch, Learn, Pray." show_cards="yes"][/hero-intro]') .
            Html::tag('div', '[watch-learn-pray heading="A Catholic home for the journey of faith."][/watch-learn-pray]') .
            Html::tag('div', '[live-streams-section title="Live Catholic Streams"][/live-streams-section]') .
            Html::tag('div', '[latest-daily-saint title="Daily Saint" subtitle="Meet today’s saint"][/latest-daily-saint]') .
            Html::tag('div', '[latest-daily-rosary title="Daily Rosary" subtitle="Pray with the Church"][/latest-daily-rosary]') .
            Html::tag('div', '[channel-spotlight title="Vatican News"][/channel-spotlight]') .
            Html::tag('div', '[video-posts title="Catholic Videos" limit="6"][/video-posts]') .
            Html::tag('div', '[podcast-shows title="Listen & Learn" limit="6"][/podcast-shows]') .
            Html::tag('div', '[newsletter title="Stay Connected" subtitle="Receive a thoughtful Catholic moment in your inbox."][/newsletter]'),
        ]);
    }
}
