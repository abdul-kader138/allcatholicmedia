@extends($layout ?? BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <style>
        .ls-admin-shell .yt-settings-card .card-header {
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%);
            color: #fff;
            border-bottom: 0;
            border-radius: 20px 20px 0 0;
            padding: 1.25rem 1.75rem 1rem;
        }
        .ls-admin-shell .sync-btn-wrap .btn { font-size: .875rem; }
        .ls-admin-shell .sync-result { display:none; margin-top:.75rem; }
        .ls-admin-shell .hero-card {
            overflow: hidden;
            border: 0;
            border-radius: 20px;
            box-shadow: 0 18px 48px rgba(15, 23, 42, 0.08);
        }
        .ls-admin-shell .hero-card .card-header {
            border-bottom: 0;
            background: linear-gradient(135deg, rgba(220,38,38,.90) 0%, rgba(15,23,42,.96) 100%);
            color: #fff;
            padding: 1.5rem 1.75rem 1rem;
        }
        .ls-admin-shell .hero-card .card-body {
            padding: 1.5rem 1.75rem 1.75rem;
        }
        .ls-hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.3fr) minmax(300px, 0.9fr);
            gap: 1.25rem;
            align-items: start;
        }
        .ls-upload-box {
            border: 1px dashed #cbd5e1;
            border-radius: 16px;
            padding: 1rem;
            background: #f8fafc;
        }
        .ls-preview {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            min-height: 260px;
            border: 1px solid #dbe3ee;
            background: #0f172a;
        }
        .ls-preview img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            display: block;
        }
        .ls-preview-copy {
            position: absolute;
            inset: auto 0 0 0;
            padding: 1rem 1.1rem;
            background: linear-gradient(180deg, rgba(15,23,42,0) 0%, rgba(15,23,42,.84) 100%);
            color: #fff;
        }
        .ls-preview-copy strong {
            display: block;
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }
        .ls-preview-copy span {
            font-size: 0.88rem;
            color: rgba(255,255,255,.82);
        }
        .ls-table-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 18px 48px rgba(15,23,42,.08);
        }
        @media (max-width: 991px) {
            .ls-hero-grid { grid-template-columns: 1fr; }
        }
    </style>

    <div class="row ls-admin-shell">

        {{-- YouTube Auto-Sync Settings --}}
        <div class="col-12 mb-3">
            <x-core::card class="yt-settings-card" style="border-radius:20px;overflow:hidden;box-shadow:0 18px 48px rgba(15,23,42,.08)">
                <x-core::card.header>
                    <x-core::card.title class="text-white">
                        <i class="ti ti-brand-youtube me-2"></i>YouTube Auto-Sync Settings
                    </x-core::card.title>
                </x-core::card.header>
                <x-core::card.body>
                    <div class="row g-4">

                        {{-- API Key --}}
                        <div class="col-md-5">
                            <form action="{{ route('live-streams.settings') }}" method="POST">
                                @csrf
                                <label class="form-label fw-semibold">YouTube Data API v3 Key</label>
                                <div class="input-group mb-2">
                                    <input type="password" name="youtube_api_key" id="yt-api-key-input"
                                        class="form-control font-monospace"
                                        value="{{ setting('youtube_api_key') }}"
                                        placeholder="AIzaSy...">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="var i=document.getElementById('yt-api-key-input');i.type=i.type==='password'?'text':'password'">
                                        <i class="ti ti-eye"></i>
                                    </button>
                                </div>
                                <div class="form-hint mb-3">
                                    Free quota: <strong>10,000 units/day</strong>.
                                    Enable <em>YouTube Data API v3</em> at
                                    <a href="https://console.cloud.google.com/apis/library/youtube.googleapis.com" target="_blank" rel="noopener">Google Cloud Console</a>.
                                    @if(config('youtube.api_key'))
                                        <span class="badge bg-success ms-1">YOUTUBE_API_KEY env active (overrides this)</span>
                                    @elseif(setting('youtube_api_key'))
                                        <span class="badge bg-primary ms-1">Key saved</span>
                                    @else
                                        <span class="badge bg-warning text-dark ms-1">No key set</span>
                                    @endif
                                </div>
                                <x-core::button type="submit" color="primary" icon="ti ti-device-floppy">
                                    Save API Key
                                </x-core::button>
                            </form>
                        </div>

                        {{-- Divider --}}
                        <div class="col-md-1 d-none d-md-flex justify-content-center">
                            <div style="border-left:1px solid #e2e8f0;height:100%"></div>
                        </div>

                        {{-- Sync Buttons --}}
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Manual Sync Controls</label>
                            <div class="sync-btn-wrap d-flex flex-column gap-2">

                                <div>
                                    <button type="button" class="btn btn-danger w-100 ls-sync-btn"
                                        data-url="{{ route('live-streams.fetch-live') }}"
                                        data-label="Fetching live streams..."
                                        data-icon="ti-live-photo">
                                        <i class="ti ti-live-photo me-1"></i>
                                        Fetch Live Streams Now
                                    </button>
                                    <div class="form-hint">Queries YouTube for currently-broadcasting streams on all configured channels. Runs automatically every 10 min.</div>
                                </div>

                                <div>
                                    <button type="button" class="btn btn-outline-primary w-100 ls-sync-btn"
                                        data-url="{{ route('live-streams.seed-channels') }}"
                                        data-label="Resolving channels..."
                                        data-icon="ti-refresh">
                                        <i class="ti ti-refresh me-1"></i>
                                        Seed &amp; Resolve Channels
                                    </button>
                                    <div class="form-hint">Seeds channels from <code>config/youtube.php</code> into the database and resolves missing YouTube channel IDs via API. Run once after adding the API key.</div>
                                </div>

                            </div>
                            <div class="sync-result alert mb-0 mt-2"></div>
                        </div>

                    </div>
                </x-core::card.body>
            </x-core::card>
        </div>

        {{-- Hero Image Upload Card --}}
        <div class="col-12 mb-3">
            <x-core::card class="hero-card">
                <x-core::card.header>
                    <x-core::card.title class="text-white">Live Page — Hero Background Image</x-core::card.title>
                </x-core::card.header>
                <x-core::card.body>
                    @if (session('success_msg'))
                        <div class="alert alert-success mb-3">{{ session('success_msg') }}</div>
                    @endif

                    <form action="{{ route('live-streams.hero-image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="ls-hero-grid">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Image URL</label>
                                    <input
                                        type="text"
                                        name="live_page_hero_image"
                                        class="form-control @error('live_page_hero_image') is-invalid @enderror"
                                        value="{{ old('live_page_hero_image', $heroImage) }}"
                                        placeholder="https://..."
                                    >
                                    @error('live_page_hero_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-hint">Paste a full image URL, or upload a file below.</div>
                                </div>

                                <div class="ls-upload-box mb-3">
                                    <label class="form-label fw-semibold">Upload Image File</label>
                                    <input
                                        type="file"
                                        name="live_page_hero_image_file"
                                        class="form-control @error('live_page_hero_image_file') is-invalid @enderror"
                                        accept="image/*"
                                    >
                                    @error('live_page_hero_image_file')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                    <div class="form-hint">JPG, PNG, WebP — max 5 MB. Uploading a file overrides the URL above.</div>
                                </div>

                                <x-core::button type="submit" color="primary">
                                    Update Hero Background
                                </x-core::button>
                            </div>

                            <div>
                                <div class="small text-secondary mb-2">Preview</div>
                                <div class="ls-preview">
                                    @if ($heroImage)
                                        <img src="{{ $heroImage }}" alt="Live page hero">
                                    @endif
                                    <div class="ls-preview-copy">
                                        <strong>Live Catholic Streams</strong>
                                        <span>This image appears as the hero background on the /live page.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </x-core::card.body>
            </x-core::card>
        </div>

        {{-- Live Streams Table --}}
        <div class="col-12">
            <x-core::card class="ls-table-card">
                <x-core::card.body class="p-0">
                    @include('core/table::base-table')
                </x-core::card.body>
            </x-core::card>
        </div>

    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var result = document.querySelector('.sync-result');

        document.querySelectorAll('.ls-sync-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var url      = btn.dataset.url;
                var origHtml = btn.innerHTML;

                btn.disabled = true;
                btn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status"></span>' + btn.dataset.label;
                result.style.display = 'none';
                result.className = 'sync-result alert mb-0 mt-2';

                fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json',
                    }
                })
                .then(function (r) { return r.json(); })
                .then(function (data) {
                    result.style.display = '';
                    result.classList.add(data.error ? 'alert-danger' : 'alert-success');
                    result.textContent = data.message;
                    if (!data.error) {
                        setTimeout(function () { window.location.reload(); }, 1800);
                    }
                })
                .catch(function (err) {
                    result.style.display = '';
                    result.classList.add('alert-danger');
                    result.textContent = 'Request failed: ' + err.message;
                })
                .finally(function () {
                    btn.disabled = false;
                    btn.innerHTML = origHtml;
                });
            });
        });
    });
    </script>
@endsection
