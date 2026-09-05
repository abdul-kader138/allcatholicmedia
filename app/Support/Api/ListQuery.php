<?php

namespace App\Support\Api;

use Illuminate\Http\Request;

/**
 * Reads the shared list controls (`page`, `per_page`, `q`, `sort`) off a
 * request with sane clamping, so every list endpoint behaves the same.
 */
class ListQuery
{
    public int $page;
    public int $perPage;
    public string $q;
    public string $sort;

    public function __construct(Request $request, int $defaultPerPage = 15, int $maxPerPage = 50, string $defaultSort = '')
    {
        $this->page = max(1, (int) $request->integer('page', 1));
        $this->perPage = min($maxPerPage, max(1, (int) $request->integer('per_page', $defaultPerPage)));
        $this->q = trim((string) $request->input('q', ''));
        $this->sort = (string) $request->input('sort', $defaultSort);
    }

    /** Stable fragment for a cache key. */
    public function cacheKey(): string
    {
        return 'p' . $this->page . '.pp' . $this->perPage . '.s' . $this->sort . '.q' . md5($this->q);
    }
}
