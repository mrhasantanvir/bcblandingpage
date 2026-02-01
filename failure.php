<?php
require_once 'config.php';
$error_msg = $_GET['msg'] ?? 'পেমেন্ট প্রসেস করার সময় একটি সমস্যা হয়েছে।';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>পেমেন্ট ব্যর্থ - Bangla Chatbot</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        .error-card {
            text-align: center;
            padding: 60px 40px;
        }

        .icon {
            font-size: 80px;
            color: #ff4d4d;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #ff4d4d;
        }

        p {
            color: #ccc;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .action-btns {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-retry {
            padding: 15px 30px;
            background: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-support {
            padding: 15px 30px;
            background: #25D366;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-retry:hover {
            background: #444;
        }

        .btn-support:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37, 211, 102, 0.3);
        }
    </style>
</head>

<body>
    <div class="bg-glow"></div>
    <div class="container">
        <div class="glass-card error-card" style="margin-top: 100px;">
            <div class="icon">✕</div>
            <h1>পেমেন্ট সফল হয়নি</h1>
            <p>দুঃখিত,
                <?php echo htmlspecialchars($error_msg); ?><br>অনুগ্রহ করে পুনরায় চেষ্টা করুন অথবা আমাদের সাপোর্টে
                যোগাযোগ করুন।
            </p>

            <div class="action-btns">
                <a href="index.php" class="btn-retry">আবার চেষ্টা করুন</a>
                <a href="https://wa.me/8801707676797" target="_blank" class="btn-support">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="20" alt="WA">
                    হোয়াটসঅ্যাপে সাপোর্ট নিন
                </a>
            </div>
        </div>
    </div>
</body>

</html>