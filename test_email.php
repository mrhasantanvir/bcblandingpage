<?php
/**
 * Ultimate Email & Network Diagnostic Tool
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';

echo "<!DOCTYPE html><html><head><title>Email Support Tool</title><style>
body{font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background:#f0f2f5; padding:20px; color:#333;}
.container{max-width:900px; margin:auto; background:white; padding:30px; border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.1);}
h1{color:#1a73e8; border-bottom:2px solid #e8eaed; padding-bottom:10px;}
.step{margin-bottom:25px; padding:15px; border-radius:8px; border-left:5px solid #ccc;}
.success{border-left-color: #28a745; background: #f8fff9;}
.error{border-left-color: #dc3545; background: #fff8f8;}
.warning{border-left-color: #ffc107; background: #fffdf5;}
pre{background:#202124; color:#f1f3f4; padding:15px; border-radius:5px; overflow-x:auto; font-size:13px;}
code{background:#eee; padding:2px 5px; border-radius:3px;}
</style></head><body>";

echo "<div class='container'>";
echo "<h1>Bangla Chatbot - Email Support Tool</h1>";
echo "<p>এই টুলটি আপনার সার্ভারের মেইল প্রসেস ইনভেস্টিগেট করবে।</p>";

// Step 1: Dependencies
echo "<div class='step " . (file_exists('vendor/autoload.php') ? "success" : "error") . "'>";
echo "<h3>১. লাইব্রেরি চেক (Library Check)</h3>";
if (file_exists('vendor/autoload.php')) {
    echo "✓ PHPMailer লাইব্রেরি পাওয়া গেছে।";
    require_once 'vendor/autoload.php';
} else {
    echo "✘ <strong>Error:</strong> 'vendor' ফোল্ডারটি নেই! টার্মিনালে <code>composer install</code> রান করুন অথবা ম্যানুয়ালি আপলোড করুন।";
}
echo "</div>";

// Step 2: Connection Test
echo "<div class='step warning'>";
echo "<h3>২. কানেকশন টেস্ট (Connection Test)</h3>";
$host = SMTP_HOST;
$port = SMTP_PORT;
echo "Attempting to connect to <strong>$host</strong> on port <strong>$port</strong>...<br>";

$connection = @fsockopen($host, $port, $errno, $errstr, 10);
if ($connection) {
    echo "<span style='color:green;'>✓ Success:</span> আপনার সার্ভার SMTP হোস্টের সাথে যোগাযোগ করতে পারছে।";
    fclose($connection);
} else {
    echo "<span style='color:red;'>✘ Connection Failed:</span> আপনার সার্ভার থেকে SMTP হোস্টে যোগাযোগ করা যাচ্ছে না।<br>";
    echo "Error: $errstr ($errno)<br>";
    echo "<em>সমাধান: আপনার হোস্টিং প্রোভাইডারকে বলুন পোর্ট $port ওপেন করে দিতে। অথবা পোর্ট 465 ট্রাই করুন।</em>";
}
echo "</div>";

// Step 3: Raw Handshake (The Real Test)
if (file_exists('vendor/autoload.php')) {
    echo "<div class='step warning'>";
    echo "<h3>৩. রিয়েল টাইম লগ (Real-time SMTP Handshake)</h3>";
    echo "নিচে আপনার সিক্রেট লগ দেখা যাচ্ছে। রেড মার্ক করা লেখাগুলো খেয়াল করুন:<br><br>";

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION;
        $mail->Port = SMTP_PORT;
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress('tanvir.bcb@gmail.com'); // Test address
        $mail->isHTML(true);
        $mail->Subject = 'Debug Report';
        $mail->Body = 'Testing connectivity info.';

        $mail->SMTPDebug = 3; // Detailed level
        $mail->Debugoutput = function ($str, $level) {
            echo "<pre>$str</pre>";
        };

        if ($mail->send()) {
            echo "<p class='success' style='padding:10px;'>✓ চমৎকার! ইমেইল সফলভাবে পাঠানো হয়েছে। আপনার কনফিগারেশন একদম ঠিক আছে।</p>";
        }
    } catch (Exception $e) {
        echo "<p class='error' style='padding:10px;'>✘ মেইল পাঠানো যায়নি। কারণ: " . $e->getMessage() . "</p>";

        if (strpos($e->getMessage(), 'Authentication failed') !== false) {
            echo "<strong>সম্ভাব্য সমাধান:</strong> আপনার SMTP পাসওয়ার্ড বা ইউজারনেম ভুল।";
        } elseif (strpos($e->getMessage(), 'MessageRejected') !== false) {
            echo "<strong>সম্ভাব্য সমাধান:</strong> <code>" . SMTP_FROM_EMAIL . "</code> ইমেইলটি আপনার AWS SES-এ ভেরিফাই করা নেই।";
        }
    }
    echo "</div>";
}

echo "</div></body></html>";
?>