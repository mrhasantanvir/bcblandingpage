<?php
require_once 'config.php';
require_once 'includes/api_handler.php';

header('Content-Type: application/json');

$email = $_GET['email'] ?? '';

if (empty($email)) {
    echo json_encode(['status' => 'error', 'message' => 'Email is required']);
    exit;
}

$bcb = new BcbApiHandler();
try {
    $userInfo = $bcb->getUserInfo($email);

    // If status is success, user exists
    if (isset($userInfo['status']) && ($userInfo['status'] == 'success' || (isset($userInfo['data']) && !empty($userInfo['data'])))) {
        echo json_encode(['status' => 'exists', 'message' => 'Email already exists! অনুগ্রহ করে পুনরায় চেষ্টা করুন অথবা আমাদের সাপোর্টে যোগাযোগ করুন।']);
    } else {
        echo json_encode(['status' => 'available', 'message' => 'Email is available']);
    }
} catch (Exception $e) {
    echo json_encode(['status' => 'available', 'message' => 'Unable to verify email']);
}
?>