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
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Hind+Siliguri:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', 'Hind Siliguri', sans-serif;
            background-color: #f8fafc;
        }

        .hero-pattern {
            background-color: #f8fafc;
            background-image: radial-gradient(#e2e8f0 1.5px, transparent 1.5px);
            background-size: 30px 30px;
        }
    </style>
</head>

<body class="hero-pattern min-h-screen flex flex-col justify-center items-center py-12 px-4 text-[#1e293b]">

    <div
        class="w-full max-w-lg bg-white rounded-[2.5rem] p-10 md:p-12 text-center shadow-[0_20px_60px_-15px_rgba(0,0,0,0.05)] border border-slate-100">

        <!-- Error Icon -->
        <div
            class="w-20 h-20 bg-red-50 rounded-3xl flex items-center justify-center mx-auto mb-8 border border-red-100">
            <i class="fa-solid fa-xmark text-4xl text-red-500"></i>
        </div>

        <h1 class="text-3xl font-black mb-3 italic">দুঃখিত! পেমেন্ট ব্যর্থ হয়েছে</h1>

        <div class="bg-red-50 border border-red-100 rounded-2xl p-6 mb-10 text-red-700 italic">
            <p class="text-xs font-bold uppercase mb-2 opacity-60 tracking-widest">ত্রুটির বিবরণ:</p>
            <p class="font-medium text-lg"><?php echo htmlspecialchars($error_msg); ?></p>
        </div>

        <div class="space-y-4">
            <a href="index.php"
                class="bg-blue-600 block w-full py-5 rounded-2xl text-white font-bold text-lg hover:bg-blue-700 transition shadow-lg flex items-center justify-center space-x-3 group">
                <i class="fa-solid fa-rotate-left group-hover:-rotate-45 transition-transform"></i>
                <span>আবার চেষ্টা করুন</span>
            </a>

            <div class="pt-6 border-t border-slate-100">
                <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mb-4">সাহায্য প্রয়োজন হলে</p>
                <a href="https://wa.me/8801707676797" target="_blank"
                    class="block w-full py-4 rounded-2xl bg-slate-50 text-slate-700 font-bold hover:bg-slate-100 transition flex items-center justify-center space-x-3 border border-slate-100">
                    <i class="fa-brands fa-whatsapp text-green-500 text-xl"></i>
                    <span>সাপোর্টে যোগাযোগ করুন</span>
                </a>
            </div>
        </div>

        <p class="mt-12 text-slate-400 text-[0.65rem] tracking-widest uppercase">
            &copy; <?php echo date('Y'); ?> Bangla Chatbot. All rights reserved.
        </p>
    </div>

</body>

</html>