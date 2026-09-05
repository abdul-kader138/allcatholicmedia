<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Run history retention
    |--------------------------------------------------------------------------
    | Rows in `scheduled_task_runs` older than this many days are pruned by the
    | hourly sweep inside the `scheduler:heartbeat` command.
    */
    'retention_days' => (int) env('SCHEDULED_TASKS_RETENTION_DAYS', 30),

    /*
    |--------------------------------------------------------------------------
    | How stale the scheduler heartbeat may be before we warn
    |--------------------------------------------------------------------------
    | The admin page shows a red banner when the last `schedule:run` tick is
    | older than this. It should comfortably exceed one minute.
    */
    'heartbeat_grace_seconds' => (int) env('SCHEDULED_TASKS_HEARTBEAT_GRACE', 180),

    /*
    |--------------------------------------------------------------------------
    | Tasks the run recorder should ignore
    |--------------------------------------------------------------------------
    | Task keys (usually the artisan command name) that should not create rows
    | in the run history. The heartbeat runs every minute and would otherwise
    | swamp the log.
    */
    'ignore' => [
        'scheduler:heartbeat',
    ],

    /*
    |--------------------------------------------------------------------------
    | ACL permissions
    |--------------------------------------------------------------------------
    | Registered into Botble's role editor via the `core_acl_role_permissions`
    | filter in AppServiceProvider.
    */
    'permissions' => [
        [
            'name' => 'Scheduled Tasks',
            'flag' => 'scheduled-tasks.index',
        ],
        [
            'name' => 'Run manually',
            'flag' => 'scheduled-tasks.run',
            'parent_flag' => 'scheduled-tasks.index',
        ],
    ],
];
