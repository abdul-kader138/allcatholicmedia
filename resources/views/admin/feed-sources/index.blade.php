@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
<style>
.fs-card{border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(15,23,42,.07);border:0}
.fs-header{background:linear-gradient(135deg,#046bd2 0%,#0f172a 100%);color:#fff;padding:1.25rem 1.5rem}
.fs-stat-row{display:flex;gap:1rem;flex-wrap:wrap;margin-bottom:1.25rem}
.fs-stat{flex:1;min-width:140px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:.9rem 1.1rem}
.fs-stat-label{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:#64748b;margin-bottom:.25rem}
.fs-stat-value{font-size:1.6rem;font-weight:700;color:#0f172a;line-height:1}
.fs-table th{font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;color:#64748b;border-bottom:2px solid #e2e8f0;padding:.75rem 1rem}
.fs-table td{padding:.85rem 1rem;vertical-align:middle;border-bottom:1px solid #f1f5f9}
.fs-table tr:last-child td{border-bottom:0}
.fs-badge{display:inline-flex;align-items:center;gap:.35rem;padding:.25rem .65rem;border-radius:999px;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em}
.fs-badge-post{background:#dbeafe;color:#1d4ed8}
.fs-badge-podcast{background:#f3e8ff;color:#7c3aed}
.fs-url{font-size:.8rem;color:#64748b;max-width:280px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:block}
.fs-sync-btn{min-width:90px}
.fs-itunes-panel{background:#f8fafc;border:1px solid #e2e8f0;border-radius:14px;padding:1.1rem 1.25rem;margin-bottom:1.25rem}
.fs-itunes-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:.75rem;margin-top:.85rem}
.fs-itunes-card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:.85rem;display:flex;gap:.75rem;align-items:flex-start;cursor:pointer;transition:border-color .2s}
.fs-itunes-card:hover{border-color:#046bd2}
.fs-itunes-art{width:52px;height:52px;border-radius:8px;object-fit:cover;flex-shrink:0;background:#e2e8f0}
.fs-itunes-name{font-size:.88rem;font-weight:600;color:#0f172a;margin-bottom:.2rem}
.fs-itunes-meta{font-size:.75rem;color:#64748b}
.fs-itunes-use{font-size:.72rem;color:#046bd2;font-weight:700;margin-top:.35rem;display:block}
</style>

<div class="row">
    <div class="col-12 mb-3">
        <x-core::card class="fs-card">
            <div class="fs-header">
                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                    <div>
                        <h5 class="mb-0 text-white fw-bold">RSS Feed Sources</h5>
                        <div class="small text-white-50 mt-1">Auto-import posts &amp; podcast episodes from external RSS feeds</div>
                    </div>
                    <div class="d-flex gap-2 flex-wrap">
                        <button id="seed-btn" class="btn btn-warning btn-sm fw-semibold" type="button">
                            <i class="ti ti-seeding me-1"></i> Seed Catholic Feeds
                        </button>
                        <button id="sync-all-btn" class="btn btn-outline-light btn-sm fw-semibold" type="button">
                            <i class="ti ti-refresh me-1"></i> Sync All Now
                        </button>
                        <a href="{{ route('admin.feed-sources.create') }}" class="btn btn-light btn-sm fw-semibold">
                            + Add Feed
                        </a>
                    </div>
                </div>
                <div id="fs-action-result" class="mt-2" style="display:none">
                    <div class="alert alert-sm mb-0 py-2 px-3 fs-action-msg" style="font-size:.85rem;border-radius:8px"></div>
                </div>
            </div>
            <x-core::card.body>
                @if (session('success_msg'))
                    <div class="alert alert-success mb-3">{{ session('success_msg') }}</div>
                @endif

                {{-- Stats --}}
                <div class="fs-stat-row">
                    <div class="fs-stat">
                        <div class="fs-stat-label">Total Feeds</div>
                        <div class="fs-stat-value">{{ $sources->count() }}</div>
                    </div>
                    <div class="fs-stat">
                        <div class="fs-stat-label">Active</div>
                        <div class="fs-stat-value">{{ $sources->where('is_active', true)->count() }}</div>
                    </div>
                    <div class="fs-stat">
                        <div class="fs-stat-label">Total Imported</div>
                        <div class="fs-stat-value">{{ number_format($sources->sum('total_imported')) }}</div>
                    </div>
                    <div class="fs-stat">
                        <div class="fs-stat-label">Post Feeds</div>
                        <div class="fs-stat-value">{{ $sources->where('type', 'post')->count() }}</div>
                    </div>
                    <div class="fs-stat">
                        <div class="fs-stat-label">Podcast Feeds</div>
                        <div class="fs-stat-value">{{ $sources->where('type', 'podcast_episode')->count() }}</div>
                    </div>
                </div>

                {{-- iTunes Search --}}
                <div class="fs-itunes-panel">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#046bd2" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                        <span class="fw-semibold" style="color:#0f172a">Discover Podcasts via Apple Podcasts</span>
                    </div>
                    <div class="small text-secondary mb-2">Search the iTunes catalogue to find podcast RSS feed URLs.</div>
                    <div class="d-flex gap-2">
                        <input id="itunes-term" type="text" class="form-control form-control-sm" placeholder="e.g. Catholic, EWTN, Rosary..." value="Catholic" style="max-width:280px">
                        <button id="itunes-search-btn" class="btn btn-outline-primary btn-sm fw-semibold" type="button">Search</button>
                    </div>
                    <div id="itunes-results" class="fs-itunes-grid" style="display:none!important"></div>
                </div>

                {{-- Table --}}
                @if ($sources->isEmpty())
                    <div class="text-center py-5 text-secondary">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="mb-2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                        <p class="mb-2">No feed sources yet.</p>
                        <a href="{{ route('admin.feed-sources.create') }}" class="btn btn-primary btn-sm">Add your first feed</a>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table fs-table mb-0">
                            <thead>
                                <tr>
                                    <th>Name / URL</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Last Synced</th>
                                    <th>Imported</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sources as $source)
                                    <tr id="source-row-{{ $source->id }}">
                                        <td>
                                            <div class="fw-semibold text-dark" style="font-size:.9rem">{{ $source->name }}</div>
                                            <span class="fs-url" title="{{ $source->url }}">{{ $source->url }}</span>
                                            @if ($source->type === 'post' && $source->category)
                                                <span class="badge bg-light text-secondary border mt-1" style="font-size:.68rem">Category: {{ $source->category }}</span>
                                            @endif
                                            @if ($source->type === 'podcast_episode' && $source->related_id)
                                                @php $show = $source->podcastShow() @endphp
                                                @if ($show)
                                                    <span class="badge bg-light text-secondary border mt-1" style="font-size:.68rem">Show: {{ $show->name }}</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            <span class="fs-badge {{ $source->type === 'post' ? 'fs-badge-post' : 'fs-badge-podcast' }}">
                                                {{ $source->getTypeLabel() }}
                                            </span>
                                        </td>
                                        <td>
                                            @if (! $source->is_active)
                                                <span class="fs-badge" style="background:#f1f5f9;color:#64748b">Paused</span>
                                            @elseif ($source->last_error)
                                                <span class="fs-badge" style="background:#fee2e2;color:#dc2626" title="{{ $source->last_error }}">Error</span>
                                            @elseif ($source->last_synced_at)
                                                <span class="fs-badge" style="background:#dcfce7;color:#16a34a">OK</span>
                                            @else
                                                <span class="fs-badge" style="background:#f1f5f9;color:#64748b">Never synced</span>
                                            @endif
                                        </td>
                                        <td style="font-size:.82rem;color:#64748b">
                                            {{ $source->last_synced_at ? $source->last_synced_at->diffForHumans() : '—' }}
                                        </td>
                                        <td style="font-weight:700;color:#0f172a">
                                            {{ number_format($source->total_imported) }}
                                        </td>
                                        <td class="text-end">
                                            <div class="d-inline-flex gap-2 align-items-center">
                                                <button
                                                    class="btn btn-sm btn-outline-success fs-sync-btn"
                                                    data-sync-url="{{ route('admin.feed-sources.sync', $source->id) }}"
                                                    data-source-id="{{ $source->id }}"
                                                    onclick="syncFeed(this)"
                                                >Sync Now</button>
                                                <a href="{{ route('admin.feed-sources.edit', $source->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <form method="POST" action="{{ route('admin.feed-sources.destroy', $source->id) }}"
                                                      onsubmit="return confirm('Delete this feed source?')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                                </form>
                                            </div>
                                            <div id="sync-msg-{{ $source->id }}" class="small mt-1" style="display:none"></div>
                                        </td>
                                    </tr>
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
var CSRF = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

function showActionResult(msg, ok) {
    var wrap = document.getElementById('fs-action-result');
    var box  = wrap.querySelector('.fs-action-msg');
    box.className = 'alert mb-0 py-2 px-3 fs-action-msg alert-' + (ok ? 'success' : 'danger');
    box.textContent = msg;
    wrap.style.display = '';
}

function postAction(url, btn, loadingText, doneText) {
    var orig = btn.innerHTML;
    btn.disabled  = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span>' + loadingText;

    return fetch(url, {
        method: 'POST',
        headers: { 'X-CSRF-TOKEN': CSRF, 'Accept': 'application/json' },
    })
    .then(function (r) { return r.json(); })
    .then(function (data) {
        showActionResult(data.message, data.success !== false);
        btn.disabled  = false;
        btn.innerHTML = orig;
        return data;
    })
    .catch(function (err) {
        showActionResult('Request failed: ' + err.message, false);
        btn.disabled  = false;
        btn.innerHTML = orig;
    });
}

document.getElementById('seed-btn').addEventListener('click', function () {
    postAction('{{ route("admin.feed-sources.seed-catholic") }}', this, 'Seeding…', 'Seed Catholic Feeds')
        .then(function (data) {
            if (data && data.data && data.data.seeded > 0) {
                setTimeout(function () { location.reload(); }, 1800);
            }
        });
});

document.getElementById('sync-all-btn').addEventListener('click', function () {
    postAction('{{ route("admin.feed-sources.sync-all-now") }}', this, 'Syncing…', 'Sync All Now')
        .then(function (data) {
            if (data && data.success) {
                setTimeout(function () { location.reload(); }, 2000);
            }
        });
});

function syncFeed(btn) {
    const url = btn.dataset.syncUrl;
    const id  = btn.dataset.sourceId;
    const msg = document.getElementById('sync-msg-' + id);

    btn.disabled = true;
    btn.textContent = 'Syncing…';
    msg.style.display = 'none';

    fetch(url, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json',
        },
    })
    .then(r => r.json())
    .then(data => {
        msg.style.display = 'block';
        msg.style.color   = data.success ? '#16a34a' : '#dc2626';
        msg.textContent   = data.message;
        btn.disabled      = false;
        btn.textContent   = 'Sync Now';

        if (data.success) {
            setTimeout(() => location.reload(), 2000);
        }
    })
    .catch(() => {
        msg.style.display = 'block';
        msg.style.color   = '#dc2626';
        msg.textContent   = 'Request failed.';
        btn.disabled      = false;
        btn.textContent   = 'Sync Now';
    });
}

// iTunes search
document.getElementById('itunes-search-btn').addEventListener('click', function () {
    const term    = document.getElementById('itunes-term').value.trim();
    const results = document.getElementById('itunes-results');

    if (! term) return;

    this.disabled    = true;
    this.textContent = 'Searching…';
    results.innerHTML = '<div class="col-12 text-secondary small py-2">Loading…</div>';
    results.style.setProperty('display', 'grid', 'important');

    fetch('{{ route('admin.feed-sources.itunes-search') }}?term=' + encodeURIComponent(term))
    .then(r => r.json())
    .then(data => {
        this.disabled    = false;
        this.textContent = 'Search';

        if (! data.length) {
            results.innerHTML = '<div class="col-12 text-secondary small py-2">No results found.</div>';
            return;
        }

        results.innerHTML = data.map(p => `
            <div class="fs-itunes-card" onclick="useFeed('${p.feed_url.replace(/'/g,"\\'")}', '${p.name.replace(/'/g,"\\'")}')">
                ${p.artwork ? `<img class="fs-itunes-art" src="${p.artwork}" alt="">` : '<div class="fs-itunes-art"></div>'}
                <div>
                    <div class="fs-itunes-name">${p.name}</div>
                    <div class="fs-itunes-meta">${p.artist}${p.genre ? ' · ' + p.genre : ''}</div>
                    <div class="fs-itunes-meta">${p.episode_count} episodes</div>
                    <span class="fs-itunes-use">+ Use this feed →</span>
                </div>
            </div>
        `).join('');
    })
    .catch(() => {
        this.disabled    = false;
        this.textContent = 'Search';
        results.innerHTML = '<div class="col-12 text-danger small py-2">Search failed. Try again.</div>';
    });
});

function useFeed(feedUrl, name) {
    window.location.href = '{{ route('admin.feed-sources.create') }}?url=' + encodeURIComponent(feedUrl) + '&name=' + encodeURIComponent(name) + '&type=podcast_episode';
}
</script>
@endsection
