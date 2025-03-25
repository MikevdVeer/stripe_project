<?php
// Stripe API configuration
define('STRIPE_SECRET_KEY', 'your_stripe_secret_key_here');
define('STRIPE_PUBLISHABLE_KEY', 'your_stripe_publishable_key_here');

// Application configuration
define('SITE_URL', 'http://localhost:8000');
define('SUCCESS_URL', SITE_URL . '/success.php');
define('CANCEL_URL', SITE_URL . '/cancel.php');
define('WEBHOOK_URL', SITE_URL . '/webhook.php');

// Premium content price (in cents)
define('PREMIUM_PRICE', 999); // €9.99
?> 