<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\PrayerRequest;
use App\Support\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PrayerRequestController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:40'],
            'location' => ['nullable', 'string', 'max:120'],
            'intention' => ['required', 'string', 'max:5000'],
            'visibility' => ['sometimes', 'string', 'in:' . implode(',', PrayerRequest::VISIBILITIES)],
            'is_private' => ['sometimes', 'boolean'],
            'allow_follow_up' => ['sometimes', 'boolean'],
        ]);

        // `visibility` is the new field; fall back to the legacy `is_private`
        // boolean when a client only sends that.
        $visibility = $data['visibility']
            ?? (($data['is_private'] ?? true) ? 'prayer_team' : 'community');

        $prayerRequest = PrayerRequest::query()->create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'location' => $data['location'] ?? null,
            'intention' => $data['intention'],
            'visibility' => $visibility,
            'is_private' => $visibility !== 'community',
            'allow_follow_up' => $data['allow_follow_up'] ?? false,
            'status' => 'new',
        ]);

        return ApiResponse::ok([
            'id' => $prayerRequest->id,
            'status' => $prayerRequest->status,
            'visibility' => $prayerRequest->visibility,
            'submitted_at' => $prayerRequest->created_at?->toIso8601String(),
        ], status: 201);
    }
}
