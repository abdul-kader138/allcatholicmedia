<?php

namespace App\Console\Commands;

use App\Models\ScheduledTask;
use App\Models\ScheduledTaskRun;
use App\Support\Scheduling\ScheduledTaskInspector;
use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

/**
 * The one task guaranteed to run every minute. It exists so the admin panel can
 * tell "the cron entry is firing" from "the cron entry is dead", and it doubles
 * as the moment we refresh the task catalogue (which can only be read here, in
 * console context, where routes/console.php and the Schedule are loaded).
 */
class SchedulerHeartbeatCommand extends Command
{
    protected $signature = 'scheduler:heartbeat';

    protected $description = 'Record a scheduler heartbeat and sync the scheduled-task catalogue';

    public const CACHE_KEY = 'acm.scheduler.last_tick';

    public function handle(Schedule $schedule, ScheduledTaskInspector $inspector): int
    {
        Cache::forever(self::CACHE_KEY, Carbon::now()->toIso8601String());

        if (! Schema::hasTable('scheduled_tasks')) {
            return self::SUCCESS;
        }

        $this->syncCatalogue($schedule, $inspector);

        // Hourly housekeeping — keep the run log from growing without bound.
        if ((int) Carbon::now()->minute === 0) {
            $this->prune();
        }

        return self::SUCCESS;
    }

    protected function syncCatalogue(Schedule $schedule, ScheduledTaskInspector $inspector): void
    {
        $now = Carbon::now();
        $seen = [];

        foreach ($inspector->events($schedule) as $event) {
            $data = $inspector->describe($event);
            $seen[] = $data['key'];

            ScheduledTask::query()->updateOrCreate(
                ['key' => $data['key']],
                array_merge($data, ['last_synced_at' => $now])
            );
        }

        // Drop catalogue rows for tasks that are no longer registered; their run
        // history is left untouched.
        if ($seen) {
            ScheduledTask::query()->whereNotIn('key', $seen)->delete();
        }
    }

    protected function prune(): void
    {
        $days = (int) config('scheduled-tasks.retention_days', 30);

        if ($days > 0) {
            ScheduledTaskRun::query()
                ->where('started_at', '<', Carbon::now()->subDays($days))
                ->delete();
        }
    }
}
