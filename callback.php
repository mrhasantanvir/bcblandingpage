<?php
require_once 'config.php';
require_once 'includes/bkash_handler.php';
require_once 'includes/api_handler.php';

session_start();

$status = $_GET['status'] ?? '';
$paymentID = $_GET['paymentID'] ?? '';

if ($status == 'success') {
    $bkash = new BkashHandler();
    $idToken = $_SESSION['bkash_token'] ?? '';

    if (empty($idToken)) {
        // If session expired, try to get a new token (though this shouldn't happen in a few seconds)
        $tokenResponse = $bkash->getGrantToken();
        $idToken = $tokenResponse['id_token'] ?? '';
    }

    if (!empty($idToken) && !empty($paymentID)) {
        $executeResponse = $bkash->executePayment($idToken, $paymentID);

        if (isset($executeResponse['transactionStatus']) && $executeResponse['transactionStatus'] == 'Completed') {
            // Payment Successful! Now Create User in Bangla Chatbot
            $userData = $_SESSION['user_data'] ?? [];

            if (!empty($userData)) {
                $bcb = new BcbApiHandler();
                $createResponse = $bcb->createUser(
                    $userData['name'],
                    $userData['email'],
                    $userData['password'],
                    $userData['mobile']
                );

                if (isset($createResponse['status']) && $createResponse['status'] == 'success') {
                    // Registration Successful
                    echo "<h1>পেমেন্ট সফল হয়েছে!</h1>";
                    echo "<p>আপনার অ্যাকাউন্ট তৈরি করা হয়েছে। আপনি এখন <a href='https://app.banglachatbot.com'>Bangla Chatbot</a>-এ লগইন করতে পারেন।</p>";
                } else {
                    $error = $createResponse['message'] ?? 'Unknown API Error';
                    echo "<h1>পেমেন্ট সফল, কিন্তু অ্যাকাউন্ট তৈরিতে সমস্যা হয়েছে।</h1>";
                    echo "<p>ত্রুটি: $error</p>";
                    echo "<p>অনুগ্রহ করে আপনার পেমেন্ট আইডি ($paymentID) নিয়ে আমাদের সাপোর্ট সেন্টারে যোগাযোগ করুন।</p>";
                }
            } else {
                echo "<h1>সেশন ড্যাটা খুঁজে পাওয়া যায়নি।</h1>";
            }
        } else {
            echo "<h1>পেমেন্ট এক্সিকিউশন ব্যর্থ হয়েছে।</h1>";
            echo "<p>Status: " . ($executeResponse['statusMessage'] ?? 'Failed') . "</p>";
        }
    } else {
        echo "<h1>পেমেন্ট ভেরিফিকেশন করা সম্ভব হয়নি।</h1>";
    }
} else {
    echo "<h1>পেমেন্ট বাতিল বা ব্যর্থ হয়েছে।</h1>";
    echo "<p><a href='index.php'>আবার চেষ্টা করুন</a></p>";
}

// Clear Session
session_destroy();
?>