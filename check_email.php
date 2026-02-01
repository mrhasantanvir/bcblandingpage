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
$userInfo = $bcb->getUserInfo($email);

// Adjust this based on actual API response structure
if (isset($userInfo['status']) && $userInfo['status'] == 'success' && !empty($userInfo['data'])) {
    echo json_encode(['status' => 'exists', 'message' => 'এই ইমেইল দিয়ে অলরেডি একাউন্ট আছে। দয়া করে অন্য ইমেইল ব্যবহার করুন।']);
} else {
    echo json_encode(['status' => 'available', 'message' => 'Email is available']);
}
?>