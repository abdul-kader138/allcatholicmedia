@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
@php
    $editing    = isset($feedSource);
    $action     = $editing
        ? route('admin.feed-sources.update', $feedSource->id)
        : route('admin.feed-sources.store');
    $prefillUrl  = request('url', $editing ? $feedSource->url : '');
    $prefillName = request('name', $editing ? $feedSource->name : '');
    $prefillType = request('type', $editing ? $feedSource->type : 'post');
@endphp

<style>
.fs-form-card{border-radius:16px;border:0;box-shadow:0 4px 24px rgba(15,23,42,.07);overflow:hidden}
.fs-form-header{background:linear-gradient(135deg,#046bd2 0%,#0f172a 100%);color:#fff;padding:1.25rem 1.5rem}
.fs-section{background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:1.1rem 1.25rem;margin-bottom:1rem}
.fs-section-title{font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:#64748b;margin-bottom:.85rem}
.fs-feed-examples{display:flex;flex-direction:column;gap:.4rem;margin-top:.5rem}
.fs-example{font-size:.76rem;color:#64748b;cursor:pointer;padding:.2rem .5rem;border-radius:6px;transition:background .15s}
.fs-example:hover{background:#e2e8f0;color:#0f172a}
.fs-example code{font-size:.74rem;color:#046bd2}
</style>

<div class="row justify-content-center">
    <div class="col-xl-8 col-lg-10">
        <x-core::card class="fs-form-card mb-3">
            <div class="fs-form-header">
                <h5 class="mb-0 text-white fw-bold">{{ $editing ? 'Edit Feed Source' : 'Add Feed Source' }}</h5>
                <div class="small text-white-50 mt-1">Configure an RSS feed to auto-import content</div>
            </div>
            <x-core::card.body>
                @if ($errors->any())
                    <div class="alert alert-danger mb-3">
                        <ul class="mb-0">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
                    </div>
                @endif

                <form method="POST" action="{{ $action }}">
                    @csrf
                    @if ($editing) @method('PUT') @endif

                    {{-- Basic info --}}
                    <div class="fs-section">
                        <div class="fs-section-title">Feed Details</div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Feed Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $prefillName) }}" placeholder="e.g. Catholic News Agency" required>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">RSS Feed URL <span class="text-danger">*</span></label>
                            <input type="url" name="url" id="feed-url" class="form-control @error('url') is-invalid @enderror"
                                   value="{{ old('url', $prefillUrl) }}" placeholder="https://example.com/feed.xml" required>
                            @error('url')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            <div class="fs-feed-examples mt-2">
                                <div class="small text-secondary mb-1">Popular Catholic RSS feeds (click to fill):</div>
                                <span class="fs-example" onclick="fillUrl('https://www.catholicnewsagency.com/feed', 'Catholic News Agency')">
                                    <code>catholicnewsagency.com</code> — Catholic News Agency
                                </span>
                                <span class="fs-example" onclick="fillUrl('https://www.vaticannews.va/en/rss.xml', 'Vatican News')">
                                    <code>vaticannews.va</code> — Vatican News (English)
                                </span>
                                <span class="fs-example" onclick="fillUrl('https://www.ncregister.com/feed/', 'National Catholic Register')">
                                    <code>ncregister.com</code> — National Catholic Register
                                </span>
                                <span class="fs-example" onclick="fillUrl('https://www.ewtn.com/news/rss', 'EWTN News')">
                                    <code>ewtn.com</code> — EWTN News
                                </span>
                                <span class="fs-example" onclick="fillUrl('https://www.catholicculture.org/news/rss/', 'Catholic Culture')">
                                    <code>catholicculture.org</code> — Catholic Culture
                                </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Content Type <span class="text-danger">*</span></label>
                            <select name="type" id="feed-type" class="form-select @error('type') is-invalid @enderror" onchange="toggleTypeFields()">
                                <option value="post"            {{ old('type', $prefillType) === 'post'            ? 'selected' : '' }}>Blog Post</option>
                                <option value="podcast_episode" {{ old('type', $prefillType) === 'podcast_episode' ? 'selected' : '' }}>Podcast Episodes</option>
                            </select>
                            @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    {{-- Post-specific --}}
                    <div class="fs-section" id="post-options">
                        <div class="fs-section-title">Blog Post Options</div>
                        <div class="mb-0">
                            <label class="form-label fw-semibold">Assign to Category</label>
                            <select name="category" class="form-select @error('category') is-invalid @enderror">
                                <option value="">— No category —</option>
                                @foreach ($categories as $id => $name)
                                    <option value="{{ $name }}" {{ old('category', $editing ? $feedSource->category : '') === $name ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-hint">Imported posts will be assigned to this blog category.</div>
                            @error('category')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    {{-- Podcast-specific --}}
                    <div class="fs-section" id="podcast-options" style="display:none">
                        <div class="fs-section-title">Podcast Episode Options</div>
                        <div class="mb-0">
                            <label class="form-label fw-semibold">Podcast Show <span class="text-danger">*</span></label>
                            <select name="related_id" class="form-select @error('related_id') is-invalid @enderror">
                                <option value="">— Select a show —</option>
                                @foreach ($podcastShows as $id => $name)
                                    <option value="{{ $id }}" {{ (int) old('related_id', $editing ? $feedSource->related_id : 0) === $id ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-hint">Episodes from this RSS feed will be imported under the selected show.</div>
                            @error('related_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    {{-- Behaviour --}}
                    <div class="fs-section">
                        <div class="fs-section-title">Behaviour</div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="auto_publish" id="auto_publish" value="1"
                                           {{ old('auto_publish', $editing ? $feedSource->auto_publish : true) ? 'checked' : '' }}>
                                    <label class="form-check-label fw-semibold" for="auto_publish">Publish immediately</label>
                                </div>
                                <div class="form-hint">When off, imported posts are saved as drafts for review.</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1"
                                           {{ old('is_active', $editing ? $feedSource->is_active : true) ? 'checked' : '' }}>
                                    <label class="form-check-label fw-semibold" for="is_active">Active (auto-sync enabled)</label>
                                </div>
                                <div class="form-hint">Inactive feeds are skipped during scheduled sync.</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <x-core::button type="submit" color="primary">
                            {{ $editing ? 'Update Feed Source' : 'Add Feed Source' }}
                        </x-core::button>
                        <a href="{{ route('admin.feed-sources.index') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </x-core::card.body>
        </x-core::card>
    </div>
</div>

<script>
function toggleTypeFields() {
    const type    = document.getElementById('feed-type').value;
    document.getElementById('post-options').style.display    = type === 'post'            ? '' : 'none';
    document.getElementById('podcast-options').style.display = type === 'podcast_episode' ? '' : 'none';
}

function fillUrl(url, name) {
    document.getElementById('feed-url').value = url;
    const nameInput = document.querySelector('input[name="name"]');
    if (! nameInput.value) nameInput.value = name;
}

toggleTypeFields();
</script>
@endsection
