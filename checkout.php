<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

\Stripe\Stripe::setApiKey('sk_test_51R6SMmIKqbociSMk7LJifj34soFTXZHdD2iCv4qdmMhIvb9qrjY63cgsZgoLcGjzJ4ZQJXsFFESJXfcJwvyHsOOy00Y5HNpVdX');

$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'eur',
            'product_data' => [
                'name' => 'Toegang tot de app'
            ],
            'unit_amount' => 500, // €5.00
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'http://localhost/success.php',
    'cancel_url' => 'http://localhost/cancel.php',
]);

header("Location: " . $session->url);
exit;
?>