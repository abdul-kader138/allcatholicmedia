<?php

namespace App\Http\Controllers;

use App\Models\PrayerRequest;
use Botble\SeoHelper\Facades\SeoHelper;
use Botble\Theme\Facades\Theme;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PrayerRequestController extends Controller
{
    public function show(): Response
    {
        SeoHelper::setTitle('Prayer Request - All Catholic Media');
        SeoHelper::setDescription('Share your prayer intention with All Catholic Media. We would be honored to pray with you and for you.');

        return Theme::scope('prayer-request')->render();
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:40'],
            'location' => ['nullable', 'string', 'max:120'],
            'intention' => ['required', 'string', 'max:5000'],
            'is_private' => ['nullable', 'accepted'],
            'allow_follow_up' => ['nullable', 'accepted'],
            'agree_terms_and_policy' => ['required', 'accepted'],
        ]);

        PrayerRequest::query()->create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'location' => $data['location'] ?? null,
            'intention' => $data['intention'],
            'is_private' => $request->boolean('is_private', true),
            'allow_follow_up' => $request->boolean('allow_follow_up'),
            'status' => 'new',
        ]);

        return redirect()
            ->route('public.prayer-request')
            ->with('success', 'Your prayer request has been received. We will keep your intention in prayer.');
    }
}
