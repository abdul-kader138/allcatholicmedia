<?php

namespace App\Services;

use App\Models\Donation;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Throwable;

/**
 * Thin wrapper around the PayPal Orders v2 create + capture calls, shared by the
 * mobile API donation flow (App\Http\Controllers\Api\V1\DonationController). The
 * existing web DonationController keeps its own inline copy untouched.
 */
class PayPalCheckout
{
    /**
     * Create a PayPal order for a pending donation and return its approval URL.
     * Stores the order id on the donation; marks it `failed` and returns null on
     * any error.
     */
    public function createOrder(Donation $donation, string $returnUrl, string $cancelUrl): ?string
    {
        try {
            $provider = $this->client();

            $order = $provider->createOrder([
                'intent' => 'CAPTURE',
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'locale' => 'en-US',
                    'landing_page' => 'BILLING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => $returnUrl,
                    'cancel_url' => $cancelUrl,
                ],
                'purchase_units' => [[
                    'reference_id' => (string) $donation->getKey(),
                    'description' => 'Donation to ' . config('app.name'),
                    'amount' => [
                        'currency_code' => $donation->getAttribute('currency') ?: 'USD',
                        'value' => $donation->getAttribute('amount'),
                    ],
                ]],
            ]);

            if (($order['id'] ?? null) && ($order['status'] ?? null) === 'CREATED') {
                $donation->update(['paypal_order_id' => $order['id']]);

                $approvalUrl = collect($order['links'] ?? [])->firstWhere('rel', 'approve')['href'] ?? null;

                if ($approvalUrl) {
                    return $approvalUrl;
                }
            }

            $donation->update(['status' => 'failed']);

            return null;
        } catch (Throwable $e) {
            report($e);
            $donation->update(['status' => 'failed']);

            return null;
        }
    }

    /**
     * Capture an approved order. On success updates the donation to `completed`
     * with the capture / payer ids and returns true.
     */
    public function capture(Donation $donation, string $paypalToken): bool
    {
        try {
            $captured = $this->client()->capturePaymentOrder($paypalToken);

            if (($captured['status'] ?? null) === 'COMPLETED') {
                $capture = $captured['purchase_units'][0]['payments']['captures'][0] ?? [];

                $donation->update([
                    'status' => 'completed',
                    'paypal_capture_id' => $capture['id'] ?? null,
                    'paypal_payer_id' => $captured['payer']['payer_id'] ?? null,
                ]);

                return true;
            }

            $donation->update(['status' => 'failed']);

            return false;
        } catch (Throwable $e) {
            report($e);
            $donation->update(['status' => 'failed']);

            return false;
        }
    }

    private function client(): PayPalClient
    {
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        return $provider;
    }
}
