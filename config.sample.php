<?php
/**
 * Configuration File - Sample
 * Rename this file to config.php and fill in your details
 */

define('BCB_API_URL', 'https://app.banglachatbot.com/api');
define('BCB_API_KEY', 'YOUR_API_KEY_HERE');

define('BKASH_BASE_URL', 'https://tokenized.pay.bka.sh/v1.2.0-beta/tokenized/checkout');
define('BKASH_APP_KEY', 'YOUR_BKASH_APP_KEY');
define('BKASH_APP_SECRET', 'YOUR_BKASH_APP_SECRET');
define('BKASH_USERNAME', 'YOUR_BKASH_USERNAME');
define('BKASH_PASSWORD', 'YOUR_BKASH_PASSWORD');

define('OFFER_PACKAGE_ID', 28);
define('OFFER_PRICE', '999.00');
define('OFFER_CURRENCY', 'BDT');

define('SITE_URL', 'http://offer.banglachatbot.com');
define('CALLBACK_URL', SITE_URL . '/callback.php');

// SMTP Configuration
define('SMTP_HOST', 'email-smtp.us-east-1.amazonaws.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'YOUR_SMTP_USERNAME');
define('SMTP_PASSWORD', 'YOUR_SMTP_PASSWORD');
define('SMTP_ENCRYPTION', 'tls');
define('SMTP_FROM_EMAIL', 'noreply@yourdomain.com');
define('SMTP_FROM_NAME', 'Bangla Chatbot');

define('WHATSAPP_SUPPORT', '88017XXXXXXXX');
?>