<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeedImportLog extends Model
{
    protected $table = 'feed_import_log';

    protected $fillable = [
        'feed_source_id', 'guid', 'item_url', 'title', 'imported_at',
    ];

    protected $casts = [
        'imported_at' => 'datetime',
    ];

    public function feedSource(): BelongsTo
    {
        return $this->belongsTo(FeedSource::class);
    }
}
