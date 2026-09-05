<?php

namespace App\Models;

use Botble\Member\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberDevice extends Model
{
    protected $fillable = [
        'member_id',
        'token',
        'platform',
        'app_version',
        'last_used_at',
    ];

    protected $casts = [
        'last_used_at' => 'datetime',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
