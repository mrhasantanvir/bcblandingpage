<?php
/**
 * Advanced Email Debugger
 * Use this to verify why emails are not being sent.
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

echo "<!DOCTYPE html><html><head><title>Email Debugger</title><style>body{font-family:sans-serif;background:#f4f4f balance;padding:40px;} .card{background:white;padding:20px;border-radius:10px;box-shadow:0 2px 10px rgba(0,0,0,0.1);max-width:800px;margin:auto;} h2{color:#333;} .success{color:green;} .error{color:red;} pre{background:#eee;padding:10px;border-radius:5px;overflow-x:auto;}</style></head><body>";
echo "<div class='card'>";
echo "<h2>Bangla Chatbot Email System Diagnostic</h2>";

// 1. Check Vendor Folder
echo "<h3>1. Checking Dependencies</h3>";
if (!file_exists('vendor/autoload.php')) {
    echo "<p class='error'><strong>CRITICAL ERROR:</strong> The 'vendor' folder is missing!</p>";
    echo "<p>This is likely because you updated via Git, and Git ignores the folder. You <strong>MUST</strong> run this command in your server terminal:</p>";
    echo "<pre>composer install</pre>";
    echo "<p>Or manually upload the 'vendor' folder to your server.</p>";
} else {
    echo "<p class='success'>✓ Dependencies (PHPMailer) are installed.</p>";
    require_once 'vendor/autoload.php';
}

// 2. Check Configuration
echo "<h3>2. SMTP Configuration Check</h3>";
echo "<ul>";
echo "<li><strong>Host:</strong> " . SMTP_HOST . "</li>";
echo "<li><strong>Username:</strong> " . SMTP_USERNAME . "</li>";
echo "<li><strong>Port:</strong> " . SMTP_PORT . "</li>";
echo "<li><strong>From Email:</strong> " . SMTP_FROM_EMAIL . "</li>";
echo "</ul>";

// 3. Test SMTP Connection (External Library test)
if (file_exists('vendor/autoload.php')) {
    echo "<h3>3. Sending Test Email...</h3>";

    require_once 'includes/email_handler.php';
    $emailHandler = new EmailHandler();

    // We'll use a test recipient
    $testRecipient = 'tanvir.bcb@gmail.com'; // You can change this or keep it

    echo "<p>Attempting to send a real email to <strong>$testRecipient</strong>...</p>";

    // Try to send and catch internal PHPMailer errors by instantiating it here for deeper debug
    try {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION;
        $mail->Port = SMTP_PORT;
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress($testRecipient);
        $mail->isHTML(true);
        $mail->Subject = 'Email Debug Test';
        $mail->Body = 'This is a test email to verify SMTP configuration.';

        echo "<p><strong>SMTP Secret Log:</strong> (This will show the raw handshake if it fails)</p>";
        $mail->SMTPDebug = 2; // Level 2 for full output
        $mail->Debugoutput = function ($str, $level) {
            echo "<pre>$str</pre>";
        };

        if ($mail->send()) {
            echo "<p class='success'><strong>✓ SUCCESS! Email sent successfully.</strong></p>";
        }
    } catch (Exception $e) {
        echo "<p class='error'><strong>FAILED:</strong> " . $e->getMessage() . "</p>";
        echo "<p>Common Fixes:</p>";
        echo "<ul>
                <li>Check if <strong>SMTP_PASSWORD</strong> is correct.</li>
                <li>Ensure <strong>" . SMTP_FROM_EMAIL . "</strong> is verified in AWS SES.</li>
                <li>Check if the SMTP Host region is correct (e.g. ap-south-1 vs ap-southeast-2).</li>
              </ul>";
    }
}

echo "</div></body></html>";
?>