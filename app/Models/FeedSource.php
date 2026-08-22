<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeedSource extends Model
{
    protected $fillable = [
        'name', 'url', 'type', 'category', 'related_id',
        'auto_publish', 'is_active', 'last_synced_at', 'last_error', 'total_imported',
    ];

    protected $casts = [
        'is_active'      => 'boolean',
        'auto_publish'   => 'boolean',
        'last_synced_at' => 'datetime',
    ];

    public function importLogs(): HasMany
    {
        return $this->hasMany(FeedImportLog::class);
    }

    public function isAlreadyImported(string $guid): bool
    {
        return $this->importLogs()->where('guid', $guid)->exists();
    }

    public function podcastShow(): ?\App\Models\PodcastShow
    {
        if ($this->type !== 'podcast_episode' || ! $this->related_id) {
            return null;
        }

        return PodcastShow::find($this->related_id);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getTypeLabel(): string
    {
        return match ($this->type) {
            'post'             => 'Blog Post',
            'podcast_episode'  => 'Podcast Episodes',
            default            => ucfirst($this->type),
        };
    }

    public function getStatusBadge(): string
    {
        if ($this->last_error) {
            return 'danger';
        }

        if (! $this->last_synced_at) {
            return 'secondary';
        }

        return 'success';
    }
}
