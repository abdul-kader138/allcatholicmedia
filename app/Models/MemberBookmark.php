<?php

namespace App\Models;

use Botble\Member\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberBookmark extends Model
{
    public const TYPES = ['article', 'saint', 'video', 'episode', 'show', 'channel'];

    protected $fillable = [
        'member_id',
        'bookmarkable_type',
        'bookmarkable_id',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
