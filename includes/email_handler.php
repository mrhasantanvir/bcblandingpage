<?php
require_once __DIR__ . '/../config.php';

// Safe check for PHPMailer
$autoload_path = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoload_path)) {
    require_once $autoload_path;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailHandler
{
    private function log($message)
    {
        $logFile = __DIR__ . '/../email_log.txt';
        $timestamp = date('Y-m-d H:i:s');
        file_put_contents($logFile, "[$timestamp] $message" . PHP_EOL, FILE_APPEND);
    }

    public function sendWelcomeEmail($userEmail, $userName, $password)
    {
        $this->log("Attempting to send email to: $userEmail");

        // Prevent 500 if class doesn't exist
        if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
            $this->log("CRITICAL ERROR: PHPMailer class not found. Check vendor folder.");
            return false;
        }

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = SMTP_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;
            $mail->SMTPSecure = (SMTP_ENCRYPTION == 'tls') ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = SMTP_PORT;
            $mail->Timeout = 10; // Set timeout for better UX if it hangs

            // Recipients
            $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
            $mail->addAddress(trim($userEmail), $userName);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'আপনার Bangla Chatbot অ্যাকাউন্ট তৈরি হয়েছে!';
            $mail->CharSet = 'UTF-8';

            $body = "
            <div style='font-family: sans-serif; max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 10px;'>
                <div style='text-align: center; margin-bottom: 20px;'>
                    <img src='https://app.banglachatbot.com/assets/img/logo.png' alt='Bangla Chatbot' style='height: 50px;'>
                </div>
                <h2 style='color: #007bff; text-align: center;'>অভিনন্দন $userName!</h2>
                <p>আমাদের স্পেশাল অফারটি গ্রহণ করার জন্য আপনাকে ধন্যবাদ। আপনার অ্যাকাউন্টটি সফলভাবে সক্রিয় করা হয়েছে।</p>
                <div style='background: #f9f9f9; padding: 15px; border-radius: 5px; margin: 20px 0;'>
                    <p style='margin: 5px 0;'><strong>লগইন লিঙ্ক:</strong> <a href='https://app.banglachatbot.com/home/login_page'>এখানে ক্লিক করুন</a></p>
                    <p style='margin: 5px 0;'><strong>আপনার ইমেইল:</strong> $userEmail</p>
                    <p style='margin: 5px 0;'><strong>আপনার পাসওয়ার্ড:</strong> $password</p>
                </div>
                <p>পাসওয়ার্ডটি যত্ন করে রাখুন এবং নিরাপত্তার খাতিরে লগইন করার পর পরিবর্তন করে নিন।</p>
                <p style='margin-top: 30px;'>যেকোনো প্রয়োজনে আমাদের হোয়াটসঅ্যাপে যোগাযোগ করুন: " . WHATSAPP_SUPPORT . "</p>
                <hr style='border: 0; border-top: 1px solid #eee; margin: 20px 0;'>
                <p style='font-size: 12px; color: #888; text-align: center;'>© " . date('Y') . " Bangla Chatbot. All rights reserved.</p>
            </div>
            ";

            $mail->Body = $body;
            $mail->send();
            $this->log("SUCCESS: Email sent successfully to $userEmail");
            return true;
        } catch (Exception $e) {
            $this->log("FAILED: Mailer Error: {$mail->ErrorInfo}");
            return false;
        }
    }
}
