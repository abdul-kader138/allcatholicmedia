<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Services\PayPalCheckout;
use App\Support\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

/**
 * Mobile donation flow. The app POSTs /donate/checkout, opens the returned
 * PayPal approval URL in an in-app browser, and PayPal then redirects the
 * browser to /donate/return|cancel, which capture the payment and bounce back to
 * the app's deep link (`app_redirect`) with `?status=completed|cancelled|error`.
 */
class DonationController extends Controller
{
    private const MIN_AMOUNT = 1;
    private const MAX_AMOUNT = 10000;

    // Schemes the app may hand us as its return deep link.
    private const ALLOWED_REDIRECT = '#^(mainapp://|exp(o)?(\+[a-z0-9.-]+)?://|https?://localhost(:\d+)?/)#i';

    public function __construct(private readonly PayPalCheckout $paypal)
    {
    }

    public function checkout(Request $request): JsonResponse
    {
        $member = $request->user('sanctum');

        $data = $request->validate([
            'amount' => ['required', 'numeric', 'min:' . self::MIN_AMOUNT, 'max:' . self::MAX_AMOUNT],
            'message' => ['nullable', 'string', 'max:500'],
            'donor_name' => [Rule::requiredIf(! $member), 'string', 'max:100'],
            'donor_email' => [Rule::requiredIf(! $member), 'email', 'max:150'],
            'return_url' => ['required', 'string', 'max:300', 'regex:' . self::ALLOWED_REDIRECT],
        ]);

        $token = Str::random(48);

        $donation = Donation::query()->create([
            'member_id' => $member?->getKey(),
            'amount' => number_format((float) $data['amount'], 2, '.', ''),
            'currency' => 'USD',
            'status' => 'pending',
            'donor_name' => $member?->getAttribute('name') ?? $data['donor_name'],
            'donor_email' => $member?->getAttribute('email') ?? $data['donor_email'],
            'message' => $data['message'] ?? null,
            'guest_token' => $token,
        ]);

        $query = ['app_redirect' => $data['return_url']];
        $returnUrl = route('api.v1.donation.return', ['donation' => $donation->getKey(), 'token' => $token]) . '?' . http_build_query($query);
        $cancelUrl = route('api.v1.donation.cancel', ['donation' => $donation->getKey(), 'token' => $token]) . '?' . http_build_query($query);

        $approvalUrl = $this->paypal->createOrder($donation, $returnUrl, $cancelUrl);

        if (! $approvalUrl) {
            return ApiResponse::error('Could not reach PayPal. Please try again shortly.', 502, 'paypal_unavailable');
        }

        return ApiResponse::ok([
            'donation_id' => $donation->getKey(),
            'approval_url' => $approvalUrl,
        ], status: 201);
    }

    public function return(Request $request, Donation $donation, string $token): RedirectResponse
    {
        $redirect = $this->safeRedirect($request->query('app_redirect'));

        if (! hash_equals((string) $donation->getAttribute('guest_token'), $token)) {
            return redirect()->away($this->withStatus($redirect, 'error'));
        }

        if ($donation->getAttribute('status') === 'completed') {
            return redirect()->away($this->withStatus($redirect, 'completed'));
        }

        if ($donation->getAttribute('status') !== 'pending') {
            return redirect()->away($this->withStatus($redirect, 'error'));
        }

        $paypalToken = (string) $request->query('token');

        if ($paypalToken === '') {
            $donation->update(['status' => 'failed']);

            return redirect()->away($this->withStatus($redirect, 'error'));
        }

        $ok = $this->paypal->capture($donation, $paypalToken);

        return redirect()->away($this->withStatus($redirect, $ok ? 'completed' : 'error'));
    }

    public function cancel(Request $request, Donation $donation, string $token): RedirectResponse
    {
        $redirect = $this->safeRedirect($request->query('app_redirect'));

        if (
            hash_equals((string) $donation->getAttribute('guest_token'), $token)
            && $donation->getAttribute('status') === 'pending'
        ) {
            $donation->update(['status' => 'cancelled']);
        }

        return redirect()->away($this->withStatus($redirect, 'cancelled'));
    }

    private function safeRedirect(?string $url): string
    {
        $url = (string) $url;

        return preg_match(self::ALLOWED_REDIRECT, $url) ? $url : 'mainapp://donate-return';
    }

    private function withStatus(string $url, string $status): string
    {
        return $url . (str_contains($url, '?') ? '&' : '?') . 'status=' . $status;
    }
}
