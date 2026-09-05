<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('newsletter_campaigns', function (Blueprint $table): void {
            $table->id();

            // Content
            $table->string('name', 255);
            $table->string('subject', 255);
            $table->string('preheader', 255)->nullable();
            $table->longText('content')->nullable();
            $table->string('image', 255)->nullable();

            // Envelope
            $table->string('from_name', 120)->nullable();
            $table->string('from_address', 120)->nullable();
            $table->string('reply_to', 120)->nullable();

            // Lifecycle
            $table->string('status', 60)->default('draft');
            $table->timestamp('scheduled_at')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            // Aggregated statistics (denormalised for fast listing)
            $table->unsignedInteger('total_recipients')->default(0);
            $table->unsignedInteger('sent_count')->default(0);
            $table->unsignedInteger('failed_count')->default(0);
            $table->unsignedInteger('open_count')->default(0);
            $table->unsignedInteger('click_count')->default(0);

            $table->boolean('track_opens')->default(true);
            $table->boolean('track_clicks')->default(true);

            $table->unsignedBigInteger('created_by')->nullable();

            $table->timestamps();

            // The scheduler polls on exactly this pair every minute.
            $table->index(['status', 'scheduled_at'], 'newsletter_campaigns_dispatch_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('newsletter_campaigns');
    }
};
