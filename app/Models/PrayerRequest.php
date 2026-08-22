<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'location',
        'intention',
        'is_private',
        'allow_follow_up',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'is_private' => 'bool',
        'allow_follow_up' => 'bool',
    ];
}
