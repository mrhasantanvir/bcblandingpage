<?php
require_once 'config.php';
$error_msg = $_GET['msg'] ?? 'আপনার পেমেন্টটি সম্পন্ন করা সম্ভব হয়নি।';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failed - Bangla Chatbot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Outfit', 'Hind Siliguri', sans-serif;
            background-color: #030014;
            color: #ffffff;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: screen;
        }

        .fail-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 40px;
        }
    </style>
</head>

<body class="min-h-screen p-6">

    <div class="max-w-md w-full text-center fail-card p-10 md:p-12 shadow-2xl">
        <div
            class="w-20 h-20 bg-red-500/20 rounded-full flex items-center justify-center mx-auto mb-8 border border-red-500/30">
            <i class="fa-solid fa-xmark text-4xl text-red-500"></i>
        </div>

        <h1 class="text-3xl font-black mb-6">দুঃখিত! পেমেন্ট ব্যর্থ হয়েছে</h1>
        <div
            class="bg-red-500/10 border border-red-500/20 rounded-2xl p-6 mb-10 text-red-400 font-medium text-lg leading-relaxed">
            <?php echo htmlspecialchars($error_msg); ?>
        </div>

        <div class="space-y-4">
            <a href="index.php"
                class="block w-full py-5 bg-white text-black rounded-3xl font-black text-xl hover:bg-slate-200 transition shadow-lg">
                আবার চেষ্টা করুন
            </a>
            <a href="https://wa.me/8801707676797" target="_blank"
                class="block w-full py-4 bg-white/5 border border-white/10 text-white rounded-3xl font-bold hover:bg-white/10 transition flex items-center justify-center space-x-2">
                <i class="fa-brands fa-whatsapp text-green-500 text-xl"></i>
                <span>হোয়াটসঅ্যাপ সাপোর্ট</span>
            </a>
        </div>

        <p class="mt-12 text-slate-500 text-[0.6rem] font-black uppercase tracking-[0.4em]">
            &copy; <?php echo date('Y'); ?> Bangla Chatbot.
        </p>
    </div>

</body>

</html>