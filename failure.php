<?php
require_once 'config.php';
$error_msg = $_GET['msg'] ?? 'আপনার পেমেন্টটি সম্পন্ন করা সম্ভব হয়নি।';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>পেমেন্ট ব্যর্থ - Bangla Chatbot</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font (Hind Siliguri) -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --dark-bg: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.7);
        }

        body {
            font-family: 'Hind Siliguri', sans-serif;
            background-color: var(--dark-bg);
            color: #f8fafc;
        }

        .hero-gradient {
            background: radial-gradient(circle at top left, rgba(239, 68, 68, 0.1), transparent 40%);
        }

        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .btn-premium {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        }
    </style>
</head>

<body class="hero-gradient min-h-screen flex flex-col justify-center items-center py-12 px-4">

    <div class="w-full max-w-lg glass-card rounded-[2rem] p-10 text-center animate-fade-in shadow-2xl">
        <!-- Error Icon -->
        <div class="w-24 h-24 bg-red-500/20 rounded-full flex items-center justify-center mx-auto mb-8">
            <i class="fa-solid fa-xmark text-4xl text-red-500"></i>
        </div>

        <h1 class="text-3xl font-bold mb-4">দুঃখিত! পেমেন্ট ব্যর্থ হয়েছে</h1>

        <div class="bg-red-500/10 border border-red-500/20 rounded-2xl p-6 mb-10 text-red-400">
            <p class="text-sm font-bold uppercase mb-2">কারণ:</p>
            <p class="text-lg"><?php echo htmlspecialchars($error_msg); ?></p>
        </div>

        <div class="space-y-4">
            <a href="index.php"
                class="btn-premium block w-full py-5 rounded-2xl text-white font-bold text-lg hover:shadow-lg transition flex items-center justify-center space-x-3">
                <i class="fa-solid fa-rotate-left"></i>
                <span>আবার চেষ্টা করুন</span>
            </a>

            <a href="https://wa.me/8801707676797" target="_blank"
                class="block w-full py-4 rounded-2xl bg-white/5 border border-white/10 text-slate-300 font-bold hover:bg-white/10 transition flex items-center justify-center space-x-3">
                <i class="fa-brands fa-whatsapp text-green-500 text-xl"></i>
                <span>হোয়াটসঅ্যাপে আমাদের সাথে কথা বলুন</span>
            </a>
        </div>

        <p class="mt-10 text-slate-500 text-xs tracking-widest uppercase">
            &copy; <?php echo date('Y'); ?> Bangla Chatbot. All rights reserved.
        </p>
    </div>

</body>

</html>