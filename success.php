<?php
session_start(); // Note: session_destroy() removed to allow success.php to access user_data for auto-login
$userData = $_SESSION['user_data'] ?? null;
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
            border: none;
            cursor: pointer;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(138, 43, 226, 0.4);
        }

        .countdown {
            font-size: 0.9rem;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="bg-glow"></div>
    <div class="container">
        <div class="glass-card success-card" style="margin-top: 100px;">
            <div class="icon">✓</div>
            <h1>অভিনন্দন! পেমেন্ট সফল হয়েছে</h1>
            <p>আপনার অ্যাকাউন্টটি সক্রিয় করা হয়েছে। আপনাকে ৫ সেকেন্ডের মধ্যে সরাসরি ড্যাশবোর্ডে নিয়ে যাওয়া হচ্ছে...</p>

            <?php if ($userData): ?>
                <form id="autoLoginForm" action="https://app.banglachatbot.com/login" method="POST">
                    <input type="hidden" name="email" value="<?php echo htmlspecialchars($userData['email']); ?>">
                    <input type="hidden" name="password" value="<?php echo htmlspecialchars($userData['password']); ?>">
                    <button type="submit" class="btn-login">সরাসরি ড্যাশবোর্ডে যান</button>
                </form>
            <?php else: ?>
                <a href="https://app.banglachatbot.com/login" class="btn-login">সরাসরি লগইন করুন</a>
            <?php endif; ?>

            <div class="countdown">রিডাইরেক্ট হতে বাকি: <span id="seconds">5</span> সেকেন্ড</div>
        </div>
    </div>

    <script>
        let seconds = 5;
        const secondsEl = document.getElementById('seconds');
        const autoLoginForm = document.getElementById('autoLoginForm');

        const interval = setInterval(() => {
            seconds--;
            if (secondsEl) secondsEl.innerText = seconds;
            if (seconds <= 0) {
                clearInterval(interval);
                if (autoLoginForm) {
                    autoLoginForm.submit();
                } else {
                    window.location.href = "https://app.banglachatbot.com/login";
                }
            }
        }, 1000);
    </script>
</body>

</html>