@if ($paginator->hasPages())
    <nav class="acm-pagination" aria-label="{{ __('Pagination') }}">
        <ul class="pagination justify-content-center gap-1 flex-wrap mb-0">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link rounded-pill px-3">‹</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link rounded-pill px-3" href="{{ $paginator->previousPageUrl() }}" rel="prev">‹</a>
                </li>
            @endif

            {{-- Page numbers --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link rounded-pill px-3">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <span class="page-link rounded-pill px-3">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link rounded-pill px-3" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link rounded-pill px-3" href="{{ $paginator->nextPageUrl() }}" rel="next">›</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link rounded-pill px-3">›</span>
                </li>
            @endif

        </ul>
    </nav>
@endif

<style>
    .acm-pagination { display: flex; justify-content: center; margin: 32px 0 8px; width: 100%; }
    .acm-pagination .pagination { align-items: center; gap: 8px !important; margin: 0; }
    .acm-pagination .page-link {
        align-items: center;
        background: rgba(255, 255, 255, .86);
        border: 1px solid #d8e0ec;
        border-radius: 999px !important;
        color: #0d1f3c;
        display: inline-flex;
        font-size: .84rem;
        font-weight: 700;
        justify-content: center;
        min-height: 38px;
        min-width: 38px;
        padding: 7px 13px !important;
        transition: background .2s ease, border-color .2s ease, color .2s ease, transform .2s ease;
    }
    .acm-pagination .page-link:hover,
    .acm-pagination .page-link:focus { background: #fff8dc; border-color: #c9a227; color: #8b6b0b; transform: translateY(-1px); }
    .acm-pagination .page-item.active .page-link { background: #c9a227; border-color: #c9a227; color: #07111d; }
    .acm-pagination .page-item.disabled .page-link { background: rgba(226, 232, 240, .56); border-color: #e2e8f0; color: #94a3b8; opacity: .8; }
    html[data-theme='dark'] .acm-pagination .page-link { background: #102944; border-color: rgba(255, 255, 255, .14); color: #e8eef7; }
    html[data-theme='dark'] .acm-pagination .page-link:hover,
    html[data-theme='dark'] .acm-pagination .page-link:focus { background: rgba(201, 162, 39, .16); border-color: #c9a227; color: #f3d46d; }
    html[data-theme='dark'] .acm-pagination .page-item.disabled .page-link { background: rgba(255, 255, 255, .06); border-color: rgba(255, 255, 255, .08); color: #7d8da2; }
    @media (max-width: 480px) {
        .acm-pagination { margin-top: 24px; }
        .acm-pagination .pagination { gap: 5px !important; }
        .acm-pagination .page-link { min-height: 34px; min-width: 34px; padding: 6px 10px !important; }
    }
</style>
