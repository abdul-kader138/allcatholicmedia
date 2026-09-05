<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('newsletter_campaign_recipients', function (Blueprint $table): void {
            $table->id();

            $table->foreignId('campaign_id')
                ->constrained('newsletter_campaigns')
                ->cascadeOnDelete();

            // Kept nullable so the delivery log survives a subscriber being deleted.
            $table->unsignedBigInteger('subscriber_id')->nullable();

            $table->string('email', 120);
            $table->string('name', 120)->nullable();

            $table->string('status', 40)->default('pending');
            $table->text('error')->nullable();
            $table->unsignedTinyInteger('attempts')->default(0);

            // Opaque per-recipient token used by the open pixel, click redirect
            // and one-click unsubscribe endpoints.
            $table->string('token', 64)->nullable();

            $table->timestamp('sent_at')->nullable();
            $table->timestamp('opened_at')->nullable();
            $table->timestamp('clicked_at')->nullable();
            $table->unsignedInteger('open_count')->default(0);
            $table->unsignedInteger('click_count')->default(0);

            $table->timestamps();

            // Hard guarantee that one address can never be mailed twice for the
            // same campaign, no matter how often the dispatcher is re-run.
            $table->unique(['campaign_id', 'email'], 'newsletter_campaign_recipients_unique');
            $table->index(['campaign_id', 'status'], 'newsletter_campaign_recipients_status_index');
            $table->unique('token', 'newsletter_campaign_recipients_token_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('newsletter_campaign_recipients');
    }
};
