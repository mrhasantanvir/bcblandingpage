<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';
require_once 'includes/email_handler.php';

echo "<h2>Bangla Chatbot Email System Test</h2>";

// Check if vendor folder exists
if (!file_exists('vendor/autoload.php')) {
    echo "<p style='color:red;'><strong>CRITICAL ERROR:</strong> 'vendor' folder not found. You must run <code>composer install</code> on your server terminal.</p>";
} else {
    echo "<p style='color:green;'>✓ 'vendor' folder found.</p>";
}

// Check SMTP Constants
echo "<h3>SMTP Configuration:</h3>";
echo "Host: " . SMTP_HOST . "<br>";
echo "User: " . SMTP_USERNAME . "<br>";
echo "From: " . SMTP_FROM_EMAIL . "<br>";

echo "<h3>Sending Test Email...</h3>";

$emailHandler = new EmailHandler();
$testEmail = 'tanvir.bcb@gmail.com';
$status = $emailHandler->sendWelcomeEmail($testEmail, 'Test User', 'testpass123');

if ($status) {
    echo "<p style='color:green; font-weight:bold;'>SUCCESS: Test email sent to $testEmail!</p>";
} else {
    echo "<p style='color:red; font-weight:bold;'>FAILED: Email could not be sent. Check your server's error_log for details.</p>";
    echo "<p>Common issues: Incorrect SMTP password, AWS SES not verified, or firewall blocking port 587.</p>";
}
?>