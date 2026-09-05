<?php

namespace App\Listeners;

use App\Models\ScheduledTaskRun;
use App\Support\Scheduling\ScheduledTaskInspector;
use Illuminate\Console\Events\ScheduledBackgroundTaskFinished;
use Illuminate\Console\Events\ScheduledTaskFailed;
use Illuminate\Console\Events\ScheduledTaskFinished;
use Illuminate\Console\Events\ScheduledTaskSkipped;
use Illuminate\Console\Events\ScheduledTaskStarting;
use Illuminate\Console\Scheduling\Event as SchedulingEvent;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

/**
 * Writes a row to `scheduled_task_runs` for every scheduled execution.
 *
 * Tasks in one `schedule:run` invocation execute sequentially, so a simple map
 * of "task key => open run id" for the current process is enough to pair each
 * finish/skip/fail event back to the row its start event created.
 */
class RecordScheduledTaskActivity
{
    /** @var array<string, int> */
    protected static array $open = [];

    public function __construct(protected ScheduledTaskInspector $inspector)
    {
    }

    public function subscribe(Dispatcher $events): array
    {
        return [
            ScheduledTaskStarting::class => 'onStarting',
            ScheduledTaskFinished::class => 'onFinished',
            ScheduledBackgroundTaskFinished::class => 'onBackgroundFinished',
            ScheduledTaskSkipped::class => 'onSkipped',
            ScheduledTaskFailed::class => 'onFailed',
        ];
    }

    public function onStarting(ScheduledTaskStarting $event): void
    {
        $key = $this->keyFor($event->task);

        if ($key === null || $this->ignored($key) || ! $this->tableReady()) {
            return;
        }

        try {
            $event->task->storeOutput();
        } catch (\Throwable) {
            // Output capture is best-effort; never let it break the scheduler.
        }

        $run = ScheduledTaskRun::query()->create([
            'task_key' => $key,
            'name' => $this->inspector->describe($event->task)['name'],
            'trigger' => 'schedule',
            'status' => ScheduledTaskRun::STATUS_RUNNING,
            'started_at' => Carbon::now(),
        ]);

        static::$open[$key] = $run->getKey();
    }

    public function onFinished(ScheduledTaskFinished $event): void
    {
        $runtimeMs = isset($event->runtime) ? (int) round($event->runtime * 1000) : null;

        $this->close($event->task, function (ScheduledTaskRun $run) use ($event, $runtimeMs): void {
            $exitCode = $event->task->exitCode;

            $run->status = ($exitCode === null || $exitCode === 0)
                ? ScheduledTaskRun::STATUS_SUCCESS
                : ScheduledTaskRun::STATUS_FAILED;
            $run->exit_code = $exitCode;
            $run->runtime_ms = $runtimeMs ?? $this->elapsed($run);
            $run->output = $this->readOutput($event->task);
        });
    }

    public function onBackgroundFinished(ScheduledBackgroundTaskFinished $event): void
    {
        $this->close($event->task, function (ScheduledTaskRun $run) use ($event): void {
            $exitCode = $event->task->exitCode;

            $run->status = ($exitCode === null || $exitCode === 0)
                ? ScheduledTaskRun::STATUS_SUCCESS
                : ScheduledTaskRun::STATUS_FAILED;
            $run->exit_code = $exitCode;
            $run->runtime_ms = $this->elapsed($run);
            $run->output = $this->readOutput($event->task);
        });
    }

    public function onSkipped(ScheduledTaskSkipped $event): void
    {
        $key = $this->keyFor($event->task);

        if ($key === null || $this->ignored($key) || ! $this->tableReady()) {
            return;
        }

        // A skipped task never emits "starting", so there may be nothing open.
        if (isset(static::$open[$key])) {
            $this->close($event->task, function (ScheduledTaskRun $run): void {
                $run->status = ScheduledTaskRun::STATUS_SKIPPED;
                $run->runtime_ms = $this->elapsed($run);
            });

            return;
        }

        ScheduledTaskRun::query()->create([
            'task_key' => $key,
            'name' => $this->inspector->describe($event->task)['name'],
            'trigger' => 'schedule',
            'status' => ScheduledTaskRun::STATUS_SKIPPED,
            'started_at' => Carbon::now(),
            'finished_at' => Carbon::now(),
            'exception' => 'Skipped (filter or without-overlapping lock).',
        ]);
    }

    public function onFailed(ScheduledTaskFailed $event): void
    {
        $this->close($event->task, function (ScheduledTaskRun $run) use ($event): void {
            $run->status = ScheduledTaskRun::STATUS_FAILED;
            $run->exit_code = $event->task->exitCode;
            $run->runtime_ms = $this->elapsed($run);
            $run->output = $this->readOutput($event->task);
            $run->exception = mb_substr((string) $event->exception, 0, 5000);
        });
    }

    protected function close(SchedulingEvent $task, callable $mutator): void
    {
        $key = $this->keyFor($task);

        if ($key === null || $this->ignored($key) || ! $this->tableReady() || ! isset(static::$open[$key])) {
            return;
        }

        $run = ScheduledTaskRun::query()->find(static::$open[$key]);
        unset(static::$open[$key]);

        if (! $run) {
            return;
        }

        $mutator($run);
        $run->finished_at = Carbon::now();
        $run->save();
    }

    protected function readOutput(SchedulingEvent $task): ?string
    {
        try {
            $path = $task->output ?? null;

            if (! $path || $path === $task->getDefaultOutput() || ! is_file($path) || ! is_readable($path)) {
                return null;
            }

            $contents = trim((string) file_get_contents($path));

            return $contents === '' ? null : mb_substr($contents, 0, 65535);
        } catch (\Throwable) {
            return null;
        }
    }

    protected function elapsed(ScheduledTaskRun $run): ?int
    {
        return $run->started_at ? (int) $run->started_at->diffInMilliseconds(Carbon::now()) : null;
    }

    protected function keyFor(SchedulingEvent $task): ?string
    {
        try {
            return $this->inspector->keyFor($task);
        } catch (\Throwable) {
            return null;
        }
    }

    protected function ignored(string $key): bool
    {
        return in_array($key, (array) config('scheduled-tasks.ignore', []), true);
    }

    protected function tableReady(): bool
    {
        try {
            return Schema::hasTable('scheduled_task_runs');
        } catch (\Throwable) {
            return false;
        }
    }
}
