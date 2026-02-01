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
                    // Send Welcome Email
                    require_once 'includes/email_handler.php';
                    $emailHandler = new EmailHandler();
                    $emailHandler->sendWelcomeEmail($userData['email'], $userData['name'], $userData['password']);

                    // Clear Session
                    session_destroy();
                    header("Location: success.php");
                    exit();
                } else {
                    $error = $createResponse['message'] ?? 'Unknown API Error';
                    header("Location: failure.php?msg=" . urlencode("পেমেন্ট সফল হলেও অ্যাকাউন্ট তৈরিতে সমস্যা হয়েছে: " . $error));
                    exit();
                }
            } else {
                header("Location: failure.php?msg=" . urlencode("সেশন ড্যাটা খুঁজে পাওয়া যায়নি।"));
                exit();
            }
        } else {
            $error = $executeResponse['statusMessage'] ?? 'পেমেন্ট এক্সিকিউশন ব্যর্থ হয়েছে।';
            header("Location: failure.php?msg=" . urlencode($error));
            exit();
        }
    } else {
        header("Location: failure.php?msg=" . urlencode("পেমেন্ট ভেরিফিকেশন করা সম্ভব হয়নি।"));
        exit();
    }
} else {
    header("Location: failure.php?msg=" . urlencode("পেমেন্ট বাতিল বা ব্যর্থ হয়েছে।"));
    exit();
}

// Clear Session
session_destroy();
?>