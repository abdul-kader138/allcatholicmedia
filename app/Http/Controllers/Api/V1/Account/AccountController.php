<?php

namespace App\Http\Controllers\Api\V1\Account;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\DonationResource;
use App\Http\Resources\Api\MemberActivityResource;
use App\Http\Resources\Api\MemberResource;
use App\Models\MemberBookmark;
use App\Models\MemberDevice;
use App\Services\AppContentService;
use App\Support\Api\ApiResponse;
use App\Support\Api\ListQuery;
use Botble\Media\Facades\RvMedia;
use Botble\Member\Models\Member;
use Botble\Member\Models\MemberActivityLog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AccountController extends Controller
{
    public function __construct(private readonly AppContentService $content)
    {
    }

    public function show(Request $request): JsonResponse
    {
        return ApiResponse::ok(['member' => (new MemberResource($this->member($request)))->resolve($request)]);
    }

    public function update(Request $request): JsonResponse
    {
        $data = $request->validate([
            'first_name' => ['sometimes', 'string', 'max:120'],
            'last_name' => ['sometimes', 'string', 'max:120'],
            'phone' => ['sometimes', 'nullable', 'string', 'max:40'],
            'dob' => ['sometimes', 'nullable', 'date'],
            'gender' => ['sometimes', 'nullable', 'string', 'max:20'],
            'description' => ['sometimes', 'nullable', 'string', 'max:2000'],
        ]);

        $member = $this->member($request);
        $member->fill($data)->save();

        $this->log($member, 'update_profile');

        return ApiResponse::ok(['member' => (new MemberResource($member->refresh()))->resolve($request)]);
    }

    public function updateAvatar(Request $request): JsonResponse
    {
        $request->validate([
            'avatar' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $member = $this->member($request);

        $result = RvMedia::handleUpload($request->file('avatar'), 0, 'members/' . $member->getKey());

        if (! empty($result['error'])) {
            return ApiResponse::error($result['message'] ?? 'Upload failed.', 422, 'upload_failed');
        }

        $member->avatar_id = $result['data']->id;
        $member->save();

        $this->log($member, 'update_avatar');

        return ApiResponse::ok(['member' => (new MemberResource($member->refresh()))->resolve($request)]);
    }

    public function activities(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 20);

        $activities = MemberActivityLog::query()
            ->where('member_id', $this->member($request)->getKey())
            ->latest()
            ->paginate($lq->perPage);

        return ApiResponse::paginated(
            MemberActivityResource::collection($activities->getCollection())->resolve($request),
            $activities
        );
    }

    public function donations(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 20);
        $donations = $this->content->memberDonations($this->member($request), $lq);

        return ApiResponse::paginated(
            DonationResource::collection($donations->getCollection())->resolve($request),
            $donations
        );
    }

    public function prayerRequests(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 20);
        $requests = $this->content->memberPrayerRequests($this->member($request), $lq);

        return ApiResponse::paginated(
            $requests->getCollection()->map(fn ($pr) => [
                'id' => $pr->id,
                'intention' => $pr->intention,
                'is_private' => (bool) $pr->is_private,
                'status' => $pr->status,
                'created_at' => $pr->created_at?->toIso8601String(),
            ])->all(),
            $requests
        );
    }

    // ---- Push notification devices ---------------------------------

    public function registerDevice(Request $request): JsonResponse
    {
        $data = $request->validate([
            'token' => ['required', 'string', 'max:512'],
            'platform' => ['nullable', 'string', 'in:ios,android'],
            'app_version' => ['nullable', 'string', 'max:40'],
        ]);

        MemberDevice::query()->updateOrCreate(
            ['member_id' => $this->member($request)->getKey(), 'token' => $data['token']],
            [
                'platform' => $data['platform'] ?? null,
                'app_version' => $data['app_version'] ?? null,
                'last_used_at' => Carbon::now(),
            ]
        );

        return ApiResponse::ok(['message' => 'Device registered.'], status: 201);
    }

    public function unregisterDevice(Request $request): JsonResponse
    {
        $data = $request->validate(['token' => ['required', 'string']]);

        MemberDevice::query()
            ->where('member_id', $this->member($request)->getKey())
            ->where('token', $data['token'])
            ->delete();

        return ApiResponse::ok(['message' => 'Device removed.']);
    }

    // ---- Bookmarks / saved items -------------------------------

    public function bookmarks(Request $request): JsonResponse
    {
        $lq = new ListQuery($request, defaultPerPage: 30);
        $type = (string) $request->input('type', '');

        $bookmarks = MemberBookmark::query()
            ->where('member_id', $this->member($request)->getKey())
            ->when(in_array($type, MemberBookmark::TYPES, true), fn ($q) => $q->where('bookmarkable_type', $type))
            ->latest()
            ->paginate($lq->perPage);

        return ApiResponse::paginated(
            $bookmarks->getCollection()->map(fn (MemberBookmark $b) => [
                'id' => $b->id,
                'type' => $b->bookmarkable_type,
                'ref_id' => $b->bookmarkable_id,
                'created_at' => $b->created_at?->toIso8601String(),
            ])->all(),
            $bookmarks
        );
    }

    public function addBookmark(Request $request): JsonResponse
    {
        $data = $request->validate([
            'type' => ['required', 'string', 'in:' . implode(',', MemberBookmark::TYPES)],
            'ref_id' => ['required', 'integer', 'min:1'],
        ]);

        $bookmark = MemberBookmark::query()->firstOrCreate([
            'member_id' => $this->member($request)->getKey(),
            'bookmarkable_type' => $data['type'],
            'bookmarkable_id' => $data['ref_id'],
        ]);

        return ApiResponse::ok([
            'id' => $bookmark->id,
            'type' => $bookmark->bookmarkable_type,
            'ref_id' => $bookmark->bookmarkable_id,
        ], status: 201);
    }

    public function removeBookmark(Request $request): JsonResponse
    {
        $data = $request->validate([
            'type' => ['required', 'string'],
            'ref_id' => ['required', 'integer'],
        ]);

        MemberBookmark::query()
            ->where('member_id', $this->member($request)->getKey())
            ->where('bookmarkable_type', $data['type'])
            ->where('bookmarkable_id', $data['ref_id'])
            ->delete();

        return ApiResponse::ok(['message' => 'Removed.']);
    }

    // ---- Sessions / tokens ------------------------------------

    public function sessions(Request $request): JsonResponse
    {
        $current = $request->user()->currentAccessToken()->getKey();

        $tokens = $request->user()->tokens()->latest()->get()->map(fn ($t) => [
            'id' => $t->id,
            'name' => $t->name,
            'current' => $t->id === $current,
            'last_used_at' => $t->last_used_at?->toIso8601String(),
            'created_at' => $t->created_at?->toIso8601String(),
        ])->all();

        return ApiResponse::ok(['sessions' => $tokens]);
    }

    public function revokeSession(Request $request, int $id): JsonResponse
    {
        $request->user()->tokens()->where('id', $id)->delete();

        return ApiResponse::ok(['message' => 'Session revoked.']);
    }

    public function destroy(Request $request): JsonResponse
    {
        $data = $request->validate(['confirm' => ['required', 'accepted']]);

        $member = $this->member($request);
        $member->tokens()->delete();
        $member->delete();

        return ApiResponse::ok(['message' => 'Account deleted.']);
    }

    private function member(Request $request): Member
    {
        return $request->user();
    }

    private function log(Member $member, string $action): void
    {
        MemberActivityLog::query()->create([
            'action' => $action,
            'member_id' => $member->getKey(),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }
}
