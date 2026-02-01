<?php
require_once 'config.php';
require_once 'includes/bkash_handler.php';

// Check if running on localhost
$is_local = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']) || $_SERVER['SERVER_NAME'] == 'localhost';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect user data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate inputs
    if (empty($name) || empty($email) || empty($mobile)) {
        die("Please fill all required fields.");
    }

    // Start Session to store user data during payment
    session_start();
    $_SESSION['user_data'] = [
        'name' => $name,
        'email' => $email,
        'mobile' => $mobile,
        'password' => $password
    ];

    // Initialize bKash
    if ($is_local) {
        header("Location: mock_payment.php");
        exit();
    }

    $bkash = new BkashHandler();
    $tokenResponse = $bkash->getGrantToken();

    if (isset($tokenResponse['id_token'])) {
        $idToken = $tokenResponse['id_token'];
        $_SESSION['bkash_token'] = $idToken;

        $invoice = time(); // Generates a unique invoice number
        $amount = OFFER_PRICE;

        $paymentResponse = $bkash->createPayment($idToken, $amount, $invoice, CALLBACK_URL);

        if (isset($paymentResponse['bkashURL'])) {
            header("Location: " . $paymentResponse['bkashURL']);
            exit();
        } else {
            echo "bKash Create Payment Failed: " . ($paymentResponse['statusMessage'] ?? 'Unknown Error');
        }
    } else {
        echo "bKash Token Grant Failed: " . ($tokenResponse['statusMessage'] ?? 'Check your credentials');
    }
} else {
    header("Location: index.php");
}
?>