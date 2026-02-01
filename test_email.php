<?php
require_once 'config.php';
require_once 'includes/email_handler.php';

$emailHandler = new EmailHandler();
$testEmail = 'tanvir.bcb@gmail.com'; // Change to user's email if preferred, or test with a common one
$status = $emailHandler->sendWelcomeEmail($testEmail, 'Test User', 'testpass123');

if ($status) {
    echo "<h3>SMTP Test Successful!</h3>";
    echo "<p>A test email has been sent to $testEmail. Please check your inbox (and spam folder).</p>";
} else {
    echo "<h3>SMTP Test Failed!</h3>";
    echo "<p>Check the error logs for more details.</p>";
}
?>