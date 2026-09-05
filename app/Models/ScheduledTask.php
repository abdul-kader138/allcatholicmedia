<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScheduledTask extends Model
{
    protected $fillable = [
        'key',
        'name',
        'command_name',
        'command',
        'expression',
        'expression_label',
        'timezone',
        'description',
        'runnable',
        'runs_in_background',
        'without_overlapping',
        'last_synced_at',
    ];

    protected $casts = [
        'runnable' => 'boolean',
        'runs_in_background' => 'boolean',
        'without_overlapping' => 'boolean',
        'last_synced_at' => 'datetime',
    ];

    public function runs(): HasMany
    {
        return $this->hasMany(ScheduledTaskRun::class, 'task_key', 'key');
    }
}
