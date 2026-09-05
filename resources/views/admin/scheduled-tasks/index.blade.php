@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
<style>
.st-card{border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(15,23,42,.07);border:0}
.st-header{background:linear-gradient(135deg,#046bd2 0%,#0f172a 100%);color:#fff;padding:1.25rem 1.5rem}
.st-hb{border-radius:12px;padding:.85rem 1.1rem;margin-bottom:1.25rem;display:flex;align-items:flex-start;gap:.7rem;font-size:.88rem}
.st-hb-ok{background:#dcfce7;border:1px solid #86efac;color:#166534}
.st-hb-bad{background:#fee2e2;border:1px solid #fca5a5;color:#991b1b}
.st-hb code{background:rgba(15,23,42,.08);padding:.1rem .4rem;border-radius:5px;font-size:.82em}
.st-stat-row{display:flex;gap:1rem;flex-wrap:wrap;margin-bottom:1.25rem}
.st-stat{flex:1;min-width:130px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:.9rem 1.1rem}
.st-stat-label{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:#64748b;margin-bottom:.25rem}
.st-stat-value{font-size:1.6rem;font-weight:700;color:#0f172a;line-height:1}
.st-table{width:100%}
.st-table th{font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;color:#64748b;border-bottom:2px solid #e2e8f0;padding:.75rem 1rem}
.st-table td{padding:.85rem 1rem;vertical-align:middle;border-bottom:1px solid #f1f5f9}
.st-table tr:last-child td{border-bottom:0}
.st-mono{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.8rem;color:#475569}
.st-badge{display:inline-flex;align-items:center;gap:.35rem;padding:.2rem .6rem;border-radius:999px;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em}
.st-b-success{background:#dcfce7;color:#16a34a}
.st-b-failed{background:#fee2e2;color:#dc2626}
.st-b-running{background:#dbeafe;color:#1d4ed8}
.st-b-skipped{background:#f1f5f9;color:#64748b}
.st-b-never{background:#fef9c3;color:#a16207}
.st-out{background:#0f172a;color:#e2e8f0;border-radius:10px;padding:.85rem 1rem;font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.78rem;white-space:pre-wrap;max-height:320px;overflow:auto;margin-top:.75rem;display:none}
</style>

<div class="row">
    <div class="col-12 mb-3">
        <x-core::card class="st-card">
            <div class="st-header">
                <h5 class="mb-0 text-white fw-bold">Scheduled Tasks</h5>
                <div class="small text-white-50 mt-1">Everything registered on Laravel's scheduler, when it last ran, and what it printed</div>
            </div>
            <x-core::card.body>
                @if (session('success_msg'))
                    <div class="alert alert-success mb-3">{{ session('success_msg') }}</div>
                @endif

                {{-- Heartbeat --}}
                @if ($heartbeat['healthy'])
                    <div class="st-hb st-hb-ok">
                        <i class="ti ti-heartbeat fs-5"></i>
                        <div>
                            <strong>Scheduler is running.</strong>
                            Last tick {{ $heartbeat['last_tick_at']?->diffForHumans() }}
                            ({{ $heartbeat['age_seconds'] }}s ago).
                        </div>
                    </div>
                @else
                    <div class="st-hb st-hb-bad">
                        <i class="ti ti-alert-triangle fs-5"></i>
                        <div>
                            <strong>Scheduler has not ticked recently.</strong>
                            @if ($heartbeat['last_tick_at'])
                                Last tick was {{ $heartbeat['last_tick_at']->diffForHumans() }}
                                ({{ $heartbeat['age_seconds'] }}s ago; grace is {{ $heartbeat['grace'] }}s).
                            @else
                                No heartbeat has ever been recorded.
                            @endif
                            <div class="mt-1">Add this to the server crontab:
                                <code>* * * * * cd {{ base_path() }} &amp;&amp; php artisan schedule:run &gt;&gt; /dev/null 2&gt;&amp;1</code>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Stats --}}
                <div class="st-stat-row">
                    <div class="st-stat"><div class="st-stat-label">Tasks</div><div class="st-stat-value">{{ $stats['total'] }}</div></div>
                    <div class="st-stat"><div class="st-stat-label">Runnable</div><div class="st-stat-value">{{ $stats['runnable'] }}</div></div>
                    <div class="st-stat"><div class="st-stat-label">Failing</div><div class="st-stat-value">{{ $stats['failing'] }}</div></div>
                    <div class="st-stat"><div class="st-stat-label">Runs (24h)</div><div class="st-stat-value">{{ number_format($stats['runs_24h']) }}</div></div>
                </div>

                @if ($tasks->isEmpty())
                    <div class="text-center py-5 text-secondary">
                        <i class="ti ti-clock-off fs-1 d-block mb-2"></i>
                        <p class="mb-1">No tasks catalogued yet.</p>
                        <p class="small mb-0">The list fills in the next time <code>scheduler:heartbeat</code> runs (within a minute of the cron being active).</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="st-table">
                            <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Schedule</th>
                                    <th>Last run</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    @php $run = $task->last_run; @endphp
                                    <tr>
                                        <td>
                                            <div class="fw-semibold text-dark">{{ $task->name }}</div>
                                            <div class="st-mono">{{ $task->command_name ?: ($task->command ? \Illuminate\Support\Str::limit($task->command, 60) : 'Closure') }}</div>
                                            @if ($task->runs_in_background)
                                                <span class="badge bg-light text-secondary border mt-1" style="font-size:.66rem">background</span>
                                            @endif
                                            @if ($task->without_overlapping)
                                                <span class="badge bg-light text-secondary border mt-1" style="font-size:.66rem">no-overlap</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div>{{ $task->expression_label ?: $task->expression }}</div>
                                            <div class="st-mono">{{ $task->expression }}</div>
                                            <div class="small text-secondary mt-1">
                                                next {{ $task->next_run_at?->diffForHumans() ?? '—' }}
                                            </div>
                                        </td>
                                        <td>
                                            @if (! $run)
                                                <span class="st-badge st-b-never">never</span>
                                            @else
                                                <span class="st-badge st-b-{{ $run->status }}">{{ $run->status }}</span>
                                                <div class="small text-secondary mt-1">
                                                    {{ $run->started_at?->diffForHumans() }}
                                                    @if ($run->runtime_for_humans) · {{ $run->runtime_for_humans }} @endif
                                                    @if ($run->trigger === 'manual') · manual @endif
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-flex gap-2 align-items-center">
                                                <a href="{{ route('admin.scheduled-tasks.show', ['task' => $task->key]) }}" class="btn btn-sm btn-outline-secondary">History</a>
                                                @if ($task->runnable && auth()->user()->hasPermission('scheduled-tasks.run'))
                                                    <button type="button" class="btn btn-sm btn-outline-success st-run-btn"
                                                            data-task="{{ $task->key }}">Run now</button>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr><td colspan="4" style="padding:0;border:0">
                                        <pre class="st-out" id="st-out-{{ $loop->index }}" data-for="{{ $task->key }}"></pre>
                                    </td></tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </x-core::card.body>
        </x-core::card>
    </div>
</div>

<script>
(function () {
    var CSRF = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    var RUN_URL = @json(route('admin.scheduled-tasks.run'));

    document.querySelectorAll('.st-run-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var key = btn.dataset.task;
            var out = document.querySelector('.st-out[data-for="' + CSS.escape(key) + '"]');
            var orig = btn.innerHTML;

            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span>Running…';
            if (out) { out.style.display = 'block'; out.textContent = 'Running ' + key + ' …'; }

            fetch(RUN_URL, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': CSRF,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ task: key }),
            })
            .then(function (r) { return r.json().then(function (d) { return { ok: r.ok, d: d }; }); })
            .then(function (res) {
                var d = res.d;
                if (out) {
                    out.textContent = (d.message || '') + '\n\n' + (d.output || '(no output)');
                }
                btn.disabled = false;
                btn.innerHTML = orig;
                setTimeout(function () { window.location.reload(); }, 2500);
            })
            .catch(function (err) {
                if (out) { out.textContent = 'Request failed: ' + err.message; }
                btn.disabled = false;
                btn.innerHTML = orig;
            });
        });
    });
})();
</script>
@endsection
