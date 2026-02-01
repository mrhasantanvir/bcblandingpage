<?php
/**
 * Mock bKash Payment for Local Testing
 * This bypasses real bKash API calls
 */
require_once 'config.php';
session_start();

if (!isset($_SESSION['user_data'])) {
    die("No user data found in session. Please start from the landing page.");
}

$paymentID = 'MOCK_PAYMENT_' . time();
$callbackURL = CALLBACK_URL . '?status=success&paymentID=' . $paymentID;

?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <title>Local bKash Test</title>
    <style>
        body {
            font-family: sans-serif;
            background: #0b0e14;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .mock-ui {
            background: #e2136e;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            max-width: 400px;
        }

        button {
            background: #fff;
            color: #e2136e;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="mock-ui">
        <h2>bKash Mock Payment</h2>
        <p>এটি লোকাল টেস্ট মোড। আসল বিকাশে পেমেন্ট হবে না।</p>
        <p>User:
            <?php echo $_SESSION['user_data']['email']; ?>
        </p>
        <p>Amount:
            <?php echo OFFER_PRICE; ?> BDT
        </p>
        <form action="<?php echo $callbackURL; ?>" method="POST">
            <button type="submit">পেমেন্ট সফল করুন (Simulate Success)</button>
        </form>
        <br>
        <a href="callback.php?status=cancel" style="color: #fff; opacity: 0.7;">বাতিল করুন</a>
    </div>
</body>

</html>