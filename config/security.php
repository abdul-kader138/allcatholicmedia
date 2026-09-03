<?php

return [
    'content_security_policy_report_only' => (bool) env('CSP_REPORT_ONLY', true),
    'content_security_policy' => env(
        'CONTENT_SECURITY_POLICY',
        "default-src 'self'; base-uri 'self'; form-action 'self' https://www.paypal.com; frame-ancestors 'self'; object-src 'none'; img-src 'self' data: https:; font-src 'self' data: https://fonts.gstatic.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.paypal.com https://www.paypalobjects.com; connect-src 'self' https://www.paypal.com https://api.paypal.com; frame-src 'self' https://www.paypal.com https://www.youtube.com https://player.vimeo.com"
    ),
];
