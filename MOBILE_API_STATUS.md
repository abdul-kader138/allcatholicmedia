# Mobile API status

_Context for the `/api/v1/*` surface consumed by the companion Expo app
(`../allcatholicmedia-app`, remote `codelover138/allcatholicmedia-app`).
Full picture: that repo's `STATUS.md`. Last updated 2026-09-07._

## What the app uses

- **Auth**: `POST /api/v1/auth/{register,login,forgot-password,reset-password,resend-verification}`,
  `GET /api/v1/auth/me`, `POST /api/v1/auth/{logout,change-password}` (Sanctum bearer, Botble Member).
- **Account**: `/api/v1/account` (show/update/delete), `/account/avatar`, `/account/activities`,
  `/account/donations`, `/account/prayer-requests`, `/account/bookmarks`, `/account/sessions`,
  `/account/devices` (push tokens).
- **Content**: `/api/v1/app/*` (home, spotlights, channels, videos, listen, live-now, read, saints,
  search, donate/config, prayer-requests, …). Legacy frozen API stays at `/api/app/*`.

## Added for the app (commit `0693f394` "Working on API") — NOT YET DEPLOYED

| Area | Files | Notes |
|---|---|---|
| Donation JSON checkout | `app/Services/PayPalCheckout.php`, `app/Http/Controllers/Api/V1/DonationController.php`, `routes/api.php` | `POST /api/v1/app/donate/checkout` (guest or member) → `{ data: { donation_id, approval_url } }`. `GET /api/v1/app/donate/{return,cancel}/{donation}/{token}` capture + `redirect()->away()` to the app deep link with `?status=completed|cancelled|error`. Existing web `DonationController` untouched. **Untested against a live PayPal sandbox.** |
| 3-way prayer visibility | `database/migrations/2026_09_08_000001_add_visibility_to_prayer_requests.php`, `app/Models/PrayerRequest.php`, `app/Http/Controllers/Api/V1/PrayerRequestController.php`, `.../Account/AccountController.php` | `visibility` enum (`only_me`/`prayer_team`/`community`), kept in sync with legacy `is_private`. Store accepts it, account list returns it. |
| Donations guest_token backfill | `database/migrations/2026_09_08_000002_add_guest_token_to_donations.php` | Guarded with `Schema::hasColumn` — no-op where prod already added it. |

### Deploy steps
```
php artisan migrate
php artisan route:clear && php artisan config:clear && php artisan optimize
# ensure PayPal creds set for the target env (PAYPAL_MODE / *_CLIENT_ID / *_CLIENT_SECRET)
```
Then sandbox-test one checkout: `POST /api/v1/app/donate/checkout {"amount":5,"return_url":"mainapp://donate-return"}`
(+ Bearer) → open `approval_url` → approve → confirm redirect to `mainapp://donate-return?status=completed`
and that the `donations` row flips to `completed`.

## Google / Apple sign-in (Botble Social Login plugin — already active)

Routes exist and are live: `POST /api/v1/auth/{google,apple,facebook,x}` (returns the plugin's
`{ error, data:{token,user}, message }` envelope; `token` is a normal Sanctum token). **Not usable
yet** until:
1. Admin → Settings → Social Login → enable Google, set `google_app_id` = the **Web** OAuth client id
   (must match `EXPO_PUBLIC_GOOGLE_WEB_CLIENT_ID` in the app) + client secret.
2. `config/plugins/social-login/general.php` → `'supported'` is `[]`; add the `member` guard entry
   (`['member' => ['model' => \Botble\Member\Models\Member::class, …]]`) or the API returns
   "invalid guard configuration".

## Housekeeping
Production has smoke-test rows: `prayer_requests` id 1 & 2 (intentions marked "automated smoke
test"), a few `members` (`acm.qa.*@mailinator.com`, mostly self-deleted). Safe to remove from admin.
