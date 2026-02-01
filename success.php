<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>পেমেন্ট সফল - Bangla Chatbot</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        .success-card {
            text-align: center;
            padding: 60px 40px;
        }

        .icon {
            font-size: 80px;
            color: #00ff88;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #00ff88, #00b4d8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            color: #ccc;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn-login {
            display: inline-block;
            padding: 15px 40px;
            background: var(--primary);
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(138, 43, 226, 0.4);
        }
    </style>
</head>

<body>
    <div class="bg-glow"></div>
    <div class="container">
        <div class="glass-card success-card" style="margin-top: 100px;">
            <div class="icon">✓</div>
            <h1>অভিনন্দন! পেমেন্ট সফল হয়েছে</h1>
            <p>আপনার অ্যাকাউন্টটি সফলভাবে তৈরি এবং প্রিমিয়াম প্যাকেজ এক্টিভেট করা হয়েছে। আপনি এখন আপনার ড্যাশবোর্ডে লগইন
                করতে পারেন।</p>
            <a href="https://app.banglachatbot.com/login" class="btn-login">ড্যাশবোর্ড এ লগইন করুন</a>
        </div>
    </div>
</body>

</html>