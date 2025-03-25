<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

// Set your Stripe secret key
\Stripe\Stripe::setApiKey('sk_test_51R6SMmIKqbociSMk7LJifj34soFTXZHdD2iCv4qdmMhIvb9qrjY63cgsZgoLcGjzJ4ZQJXsFFESJXfcJwvyHsOOy00Y5HNpVdX');

// Verify webhook signature
$endpoint_secret = 'whsec_a42b2b2154e38a13051d871671e513d6e8964e9ef5a2327d912b08941177b800';
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];

// Retrieve the raw POST data
$payload = @file_get_contents('php://input');
$event = null;

try {
    $event = \Stripe\Webhook::constructEvent(
        $payload,
        $sig_header,
        $endpoint_secret
    );
} catch(\UnexpectedValueException $e) {
    http_response_code(400);
    exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
    http_response_code(400);
    exit();
}

// Handle the event
switch ($event->type) {
    case 'checkout.session.completed':
        $session = $event->data->object;
        
        // Here you would typically:
        // 1. Verify the payment amount
        // 2. Update your database to mark the user as premium
        // 3. Send a confirmation email
        
        // For this example, we'll just log the successful payment
        error_log("Payment successful for session: " . $session->id);
        break;
        
    case 'payment_intent.succeeded':
        $paymentIntent = $event->data->object;
        error_log("Payment intent succeeded: " . $paymentIntent->id);
        break;
        
    case 'payment_intent.payment_failed':
        $paymentIntent = $event->data->object;
        error_log("Payment failed for intent: " . $paymentIntent->id);
        break;
        
    default:
        // Unexpected event type
        http_response_code(400);
        exit();
}

http_response_code(200);
?> 