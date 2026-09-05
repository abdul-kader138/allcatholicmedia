@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
<style>
.st-card{border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(15,23,42,.07);border:0}
.st-header{background:linear-gradient(135deg,#046bd2 0%,#0f172a 100%);color:#fff;padding:1.25rem 1.5rem}
.st-meta{display:flex;flex-wrap:wrap;gap:1.25rem;margin-bottom:1.25rem}
.st-meta div span{display:block;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;color:#64748b}
.st-meta div strong{font-size:.95rem;color:#0f172a}
.st-mono{font-family:ui-monospace,SFMono-Regular,Menlo,monospace}
.st-table{width:100%}
.st-table th{font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;color:#64748b;border-bottom:2px solid #e2e8f0;padding:.7rem .9rem}
.st-table td{padding:.75rem .9rem;vertical-align:top;border-bottom:1px solid #f1f5f9}
.st-badge{display:inline-flex;align-items:center;padding:.2rem .6rem;border-radius:999px;font-size:.72rem;font-weight:700;text-transform:uppercase}
.st-b-success{background:#dcfce7;color:#16a34a}
.st-b-failed{background:#fee2e2;color:#dc2626}
.st-b-running{background:#dbeafe;color:#1d4ed8}
.st-b-skipped{background:#f1f5f9;color:#64748b}
.st-out{background:#0f172a;color:#e2e8f0;border-radius:8px;padding:.6rem .8rem;font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.76rem;white-space:pre-wrap;max-height:260px;overflow:auto;margin-top:.4rem}
</style>

<div class="row">
    <div class="col-12 mb-3">
        <x-core::card class="st-card">
            <div class="st-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div>
                    <h5 class="mb-0 text-white fw-bold">{{ $task->name }}</h5>
                    <div class="small text-white-50 mt-1 st-mono">{{ $task->command_name ?: 'Closure' }}</div>
                </div>
                <a href="{{ route('admin.scheduled-tasks.index') }}" class="btn btn-light btn-sm fw-semibold">← All tasks</a>
            </div>
            <x-core::card.body>
                <div class="st-meta">
                    <div><span>Schedule</span><strong>{{ $task->expression_label ?: $task->expression }}</strong></div>
                    <div><span>Cron</span><strong class="st-mono">{{ $task->expression }}</strong></div>
                    <div><span>Timezone</span><strong>{{ $task->timezone ?: config('app.timezone') }}</strong></div>
                    <div><span>Next run</span><strong>{{ $task->next_run_at?->diffForHumans() ?? '—' }}</strong></div>
                    <div><span>Background</span><strong>{{ $task->runs_in_background ? 'yes' : 'no' }}</strong></div>
                    <div><span>Without overlapping</span><strong>{{ $task->without_overlapping ? 'yes' : 'no' }}</strong></div>
                </div>

                @if ($runs->isEmpty())
                    <div class="text-center py-5 text-secondary">
                        <i class="ti ti-history-off fs-1 d-block mb-2"></i>
                        No runs recorded yet.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="st-table">
                            <thead>
                                <tr>
                                    <th>Started</th>
                                    <th>Status</th>
                                    <th>Duration</th>
                                    <th>Exit</th>
                                    <th>Trigger</th>
                                    <th>Output</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($runs as $run)
                                    <tr>
                                        <td>
                                            {{ $run->started_at?->format('Y-m-d H:i:s') }}
                                            <div class="small text-secondary">{{ $run->started_at?->diffForHumans() }}</div>
                                        </td>
                                        <td><span class="st-badge st-b-{{ $run->status }}">{{ $run->status }}</span></td>
                                        <td>{{ $run->runtime_for_humans ?? '—' }}</td>
                                        <td>{{ $run->exit_code === null ? '—' : $run->exit_code }}</td>
                                        <td>{{ $run->trigger }}@if ($run->triggered_by) <span class="small text-secondary">#{{ $run->triggered_by }}</span>@endif</td>
                                        <td style="max-width:420px">
                                            @if ($run->exception)
                                                <div class="text-danger small st-mono">{{ \Illuminate\Support\Str::limit($run->exception, 300) }}</div>
                                            @endif
                                            @if ($run->output)
                                                <pre class="st-out">{{ \Illuminate\Support\Str::limit($run->output, 4000) }}</pre>
                                            @elseif (! $run->exception)
                                                <span class="text-secondary">—</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">{{ $runs->links() }}</div>
                @endif
            </x-core::card.body>
        </x-core::card>
    </div>
</div>
@endsection
