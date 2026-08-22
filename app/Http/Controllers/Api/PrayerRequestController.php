<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PrayerRequest;
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
            'is_private' => ['sometimes', 'boolean'],
            'allow_follow_up' => ['sometimes', 'boolean'],
        ]);

        $prayerRequest = PrayerRequest::query()->create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'location' => $data['location'] ?? null,
            'intention' => $data['intention'],
            'is_private' => $data['is_private'] ?? true,
            'allow_follow_up' => $data['allow_follow_up'] ?? false,
            'status' => 'new',
        ]);

        return response()->json([
            'message' => 'Prayer request submitted successfully.',
            'data' => [
                'id' => $prayerRequest->id,
                'status' => $prayerRequest->status,
                'submitted_at' => $prayerRequest->created_at?->toIso8601String(),
            ],
        ], 201);
    }
}
