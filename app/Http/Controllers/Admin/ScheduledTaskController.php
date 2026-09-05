<?php

namespace App\Http\Controllers\Admin;

use App\Console\Commands\SchedulerHeartbeatCommand;
use App\Models\ScheduledTask;
use App\Models\ScheduledTaskRun;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Supports\Breadcrumb;
use Cron\CronExpression;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class ScheduledTaskController extends BaseController
{
    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add('Scheduled Tasks', route('admin.scheduled-tasks.index'));
    }

    public function index()
    {
        $this->pageTitle('Scheduled Tasks');

        $tasks = ScheduledTask::query()
            ->orderBy('name')
            ->get()
            ->each(function (ScheduledTask $task): void {
                // A handful of tasks — a per-row lookup for the latest run is fine.
                $task->setAttribute('last_run', $task->runs()->latest('started_at')->first());
                $task->setAttribute('next_run_at', $this->nextRun($task));
            });

        $heartbeat = $this->heartbeat();

        $stats = [
            'total' => $tasks->count(),
            'runnable' => $tasks->where('runnable', true)->count(),
            'failing' => $tasks->filter(fn ($t) => optional($t->last_run)->status === ScheduledTaskRun::STATUS_FAILED)->count(),
            'runs_24h' => ScheduledTaskRun::query()->where('started_at', '>=', Carbon::now()->subDay())->count(),
        ];

        return view('admin.scheduled-tasks.index', compact('tasks', 'heartbeat', 'stats'));
    }

    public function show(string $task)
    {
        $scheduledTask = ScheduledTask::query()->where('key', $task)->firstOrFail();

        $this->pageTitle('Scheduled Task: ' . $scheduledTask->name);

        $runs = ScheduledTaskRun::query()
            ->where('task_key', $scheduledTask->key)
            ->orderByDesc('started_at')
            ->paginate(30);

        $scheduledTask->setAttribute('next_run_at', $this->nextRun($scheduledTask));

        return view('admin.scheduled-tasks.show', [
            'task' => $scheduledTask,
            'runs' => $runs,
        ]);
    }

    public function run(Request $request): JsonResponse
    {
        $request->validate(['task' => ['required', 'string']]);

        $task = ScheduledTask::query()->where('key', $request->string('task'))->first();

        if (! $task) {
            return response()->json(['success' => false, 'message' => 'Unknown task.'], 404);
        }

        if (! $task->runnable || ! $task->command_name) {
            return response()->json([
                'success' => false,
                'message' => 'This task is a closure and cannot be triggered from here.',
            ], 422);
        }

        $run = ScheduledTaskRun::query()->create([
            'task_key' => $task->key,
            'name' => $task->name,
            'trigger' => 'manual',
            'triggered_by' => $request->user()?->getKey(),
            'status' => ScheduledTaskRun::STATUS_RUNNING,
            'started_at' => Carbon::now(),
        ]);

        $startedAt = microtime(true);

        try {
            $exitCode = Artisan::call($task->command_name);
            $output = trim(Artisan::output());

            $run->forceFill([
                'status' => $exitCode === 0 ? ScheduledTaskRun::STATUS_SUCCESS : ScheduledTaskRun::STATUS_FAILED,
                'exit_code' => $exitCode,
                'runtime_ms' => (int) round((microtime(true) - $startedAt) * 1000),
                'output' => $output !== '' ? mb_substr($output, 0, 65535) : null,
                'finished_at' => Carbon::now(),
            ])->save();

            return response()->json([
                'success' => $exitCode === 0,
                'message' => $exitCode === 0
                    ? "Ran \"{$task->command_name}\" — exit code 0."
                    : "\"{$task->command_name}\" finished with exit code {$exitCode}.",
                'run_id' => $run->getKey(),
                'output' => $output,
            ]);
        } catch (\Throwable $throwable) {
            $run->forceFill([
                'status' => ScheduledTaskRun::STATUS_FAILED,
                'runtime_ms' => (int) round((microtime(true) - $startedAt) * 1000),
                'exception' => mb_substr($throwable->getMessage(), 0, 5000),
                'finished_at' => Carbon::now(),
            ])->save();

            return response()->json([
                'success' => false,
                'message' => $throwable->getMessage(),
                'run_id' => $run->getKey(),
            ], 500);
        }
    }

    /**
     * @return array{healthy: bool, last_tick_at: \Illuminate\Support\Carbon|null, age_seconds: int|null, grace: int}
     */
    protected function heartbeat(): array
    {
        $raw = Cache::get(SchedulerHeartbeatCommand::CACHE_KEY);
        $lastTick = $raw ? Carbon::parse($raw) : null;
        $grace = (int) config('scheduled-tasks.heartbeat_grace_seconds', 180);
        $age = $lastTick ? (int) $lastTick->diffInSeconds(Carbon::now()) : null;

        return [
            'healthy' => $age !== null && $age <= $grace,
            'last_tick_at' => $lastTick,
            'age_seconds' => $age,
            'grace' => $grace,
        ];
    }

    protected function nextRun(ScheduledTask $task): ?Carbon
    {
        try {
            $next = (new CronExpression($task->expression))->getNextRunDate(
                Carbon::now($task->timezone ?: config('app.timezone'))
            );

            return Carbon::instance($next);
        } catch (\Throwable) {
            return null;
        }
    }
}
