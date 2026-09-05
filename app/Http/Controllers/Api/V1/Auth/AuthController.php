<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\MemberResource;
use App\Support\Api\ApiResponse;
use Botble\Member\Models\Member;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        abort_unless((bool) setting('member_enabled_registration', true), 404);

        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:120'],
            'last_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150', 'unique:members,email'],
            'phone' => ['nullable', 'string', 'max:40'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'device_name' => ['nullable', 'string', 'max:120'],
        ]);

        /** @var Member $member */
        $member = Member::query()->forceCreate([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'password' => $data['password'], // model casts 'password' => 'hashed'
        ]);

        event(new Registered($member));

        $verificationRequired = (bool) setting(
            'verify_account_email',
            config('plugins.member.general.verify_email')
        );

        if ($verificationRequired) {
            $this->sendConfirmation($member);

            return ApiResponse::ok([
                'member' => (new MemberResource($member))->resolve($request),
                'requires_verification' => true,
                'message' => 'Account created. Check your email to verify your address before signing in.',
            ], status: 201);
        }

        $member->forceFill(['confirmed_at' => Carbon::now()])->save();

        return $this->tokenResponse($request, $member, 201);
    }

    public function login(Request $request): JsonResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'device_name' => ['nullable', 'string', 'max:120'],
        ]);

        /** @var Member|null $member */
        $member = Member::query()->where('email', $data['email'])->first();

        if (! $member || ! Hash::check($data['password'], $member->password)) {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
        }

        $verificationRequired = (bool) setting(
            'verify_account_email',
            config('plugins.member.general.verify_email')
        );

        if ($verificationRequired && empty($member->confirmed_at)) {
            $this->sendConfirmation($member);

            return ApiResponse::error(
                'Please verify your email address before signing in. A new verification link has been sent.',
                403,
                'email_not_verified'
            );
        }

        return $this->tokenResponse($request, $member);
    }

    public function me(Request $request): JsonResponse
    {
        return ApiResponse::ok([
            'member' => (new MemberResource($request->user()))->resolve($request),
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return ApiResponse::ok(['message' => 'Signed out.']);
    }

    public function changePassword(Request $request): JsonResponse
    {
        $data = $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'confirmed', 'different:current_password', Password::defaults()],
            'logout_other_devices' => ['sometimes', 'boolean'],
        ]);

        /** @var Member $member */
        $member = $request->user();

        if (! Hash::check($data['current_password'], $member->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The current password is incorrect.'],
            ]);
        }

        $member->forceFill(['password' => $data['password']])->save();

        if ($request->boolean('logout_other_devices')) {
            $member->tokens()->where('id', '!=', $request->user()->currentAccessToken()->getKey())->delete();
        }

        return ApiResponse::ok(['message' => 'Password updated.']);
    }

    private function tokenResponse(Request $request, Member $member, int $status = 200): JsonResponse
    {
        $device = (string) ($request->input('device_name') ?: 'mobile');
        $token = $member->createToken($device)->plainTextToken;

        return ApiResponse::ok([
            'token' => $token,
            'token_type' => 'Bearer',
            'member' => (new MemberResource($member))->resolve($request),
        ], status: $status);
    }

    private function sendConfirmation(Member $member): void
    {
        $notification = config('plugins.member.general.notification');

        if ($notification) {
            $member->notify(app($notification));
        }
    }
}
