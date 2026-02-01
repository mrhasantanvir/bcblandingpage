<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success - Bangla Chatbot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Outfit', 'Hind Siliguri', sans-serif;
            background-color: #0a0518;
            color: #ffffff;
            background: radial-gradient(circle at center, rgba(139, 92, 246, 0.1) 0%, #0a0518 100%);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-6">

    <div
        class="max-w-md w-full text-center bg-white/5 backdrop-blur-3xl p-10 rounded-[3rem] border border-white/10 shadow-3xl">
        <div class="w-20 h-20 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-8">
            <i class="fa-solid fa-check text-4xl text-green-500"></i>
        </div>

        <h1 class="text-3xl font-extrabold mb-4">পেমেন্ট সফল হয়েছে!</h1>
        <p class="text-slate-400 mb-8 italic">আপনার অ্যাকাউন্টটি এখন সক্রিয়। আপনি এখন আপনার পেজ অটোমেট করার জন্য তৈরি।
        </p>

        <div class="space-y-4">
            <a href="https://app.banglachatbot.com/home/login_page"
                class="block w-full py-5 bg-white text-black rounded-2xl font-black text-lg hover:bg-slate-200 transition">
                ড্যাশবোর্ড এ লগইন করুন
            </a>
            <a href="https://wa.me/8801707676797"
                class="block w-full py-4 bg-white/5 border border-white/10 text-slate-300 rounded-2xl font-bold hover:bg-white/10 transition">
                <i class="fa-brands fa-whatsapp text-green-500 mr-2"></i> হোয়াটসঅ্যাপ সাপোর্ট
            </a>
        </div>
    </div>

</body>

</html>