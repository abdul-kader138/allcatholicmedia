<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduledTaskRun extends Model
{
    public const STATUS_RUNNING = 'running';
    public const STATUS_SUCCESS = 'success';
    public const STATUS_FAILED = 'failed';
    public const STATUS_SKIPPED = 'skipped';

    protected $fillable = [
        'task_key',
        'name',
        'trigger',
        'triggered_by',
        'status',
        'exit_code',
        'runtime_ms',
        'output',
        'exception',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'triggered_by' => 'integer',
        'exit_code' => 'integer',
        'runtime_ms' => 'integer',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function task()
    {
        return $this->belongsTo(ScheduledTask::class, 'task_key', 'key');
    }

    public function getRuntimeForHumansAttribute(): ?string
    {
        if ($this->runtime_ms === null) {
            return null;
        }

        return $this->runtime_ms >= 1000
            ? number_format($this->runtime_ms / 1000, 2) . ' s'
            : $this->runtime_ms . ' ms';
    }

    public function isFailure(): bool
    {
        return $this->status === self::STATUS_FAILED;
    }
}
