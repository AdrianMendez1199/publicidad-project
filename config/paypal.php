<?php
/**
 * PayPal Setting & API Credentials
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'),
    'sandbox' => [
        'username'    => env('PAYPAL_SANDBOX_API_USERNAME', 'sb-tpz47t2325363_api1.business.example.com'),
        'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', 'ADJMXBCBV6QXTVTN'),
        'secret'      => env('PAYPAL_SANDBOX_API_SECRET', 'AIm9pMuPHkbybm9NUSZtMVu.knDvAbWnbxqzFP-SamKUVK.MC5ZW551P'),
        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'app_id'      => 'APP-80W284485P519543T',
    ],
    'live' => [
        'username'    => env('PAYPAL_LIVE_API_USERNAME', ''),
        'password'    => env('PAYPAL_LIVE_API_PASSWORD', ''),
        'secret'      => env('PAYPAL_LIVE_API_SECRET', ''),
        'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
        'app_id'      => '',
    ],

    'payment_action' => 'Sale',
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => '',
    'locale'         => '',
    'validate_ssl'   => false,
];