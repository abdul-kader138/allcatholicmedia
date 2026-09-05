<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        // Catalogue of every task currently registered on the scheduler. Synced
        // once a minute by `scheduler:heartbeat` (which runs in console context,
        // where routes/console.php and the Schedule are actually loaded).
        Schema::create('scheduled_tasks', function (Blueprint $table): void {
            $table->id();
            $table->string('key')->unique();                 // stable identifier, usually the artisan command name
            $table->string('name');                          // human label
            $table->string('command_name')->nullable();      // artisan name, when the task can be run on demand
            $table->text('command')->nullable();             // full invocation string as the scheduler sees it
            $table->string('expression', 120);               // cron expression
            $table->string('expression_label')->nullable();  // "Every minute", "Hourly", ...
            $table->string('timezone', 64)->nullable();
            $table->text('description')->nullable();
            $table->boolean('runnable')->default(false);
            $table->boolean('runs_in_background')->default(false);
            $table->boolean('without_overlapping')->default(false);
            $table->timestamp('last_synced_at')->nullable();
            $table->timestamps();
        });

        // One row per execution (scheduled or manual).
        Schema::create('scheduled_task_runs', function (Blueprint $table): void {
            $table->id();
            $table->string('task_key')->index();
            $table->string('name');
            $table->string('trigger', 20)->default('schedule');   // schedule | manual
            $table->unsignedBigInteger('triggered_by')->nullable();
            $table->string('status', 20)->default('running');      // running | success | failed | skipped
            $table->unsignedInteger('exit_code')->nullable();
            $table->unsignedBigInteger('runtime_ms')->nullable();
            $table->longText('output')->nullable();
            $table->text('exception')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();
            $table->timestamps();

            $table->index(['task_key', 'started_at']);
            $table->index(['status', 'started_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scheduled_task_runs');
        Schema::dropIfExists('scheduled_tasks');
    }
};
