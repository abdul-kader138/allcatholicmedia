<?php

namespace App\Http\Controllers\Api\V1\Account;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\DonationResource;
use App\Http\Resources\Api\MemberActivityResource;
use App\Http\Resources\Api\MemberResource;
use App\Services\AppContentService;
use App\Support\Api\ApiResponse;
use App\Support\Api\ListQuery;
use Botble\Media\Facades\RvMedia;
use Botble\Member\Models\Member;
use Botble\Member\Models\MemberActivityLog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
