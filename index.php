<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot | Automation Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1099891287028927');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1099891287028927&ev=PageView&noscript=1" /></noscript>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SD8ZMD3P4N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-SD8ZMD3P4N');
    </script>

    <style>
        body {
            font-family: 'Hind Siliguri', sans-serif;
            background-color: #f9fafb;
            color: #111827;
        }
        
        /* Custom Utilities */
        .glass-panel {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="antialiased">

    <!-- Header -->
    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Logo" class="h-8">
                <span class="text-xl font-bold text-slate-800">Bangla Chatbot</span>
            </div>
            <a href="https://app.banglachatbot.com/home/login_page" class="text-sm font-bold text-blue-600 hover:text-blue-800 transition">Log In</a>
        </div>
    </nav>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-slate-800">কিছু সাধারন প্রশ্ন উত্তর</h2>
            
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border border-slate-200 rounded-xl bg-slate-50 overflow-hidden">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-bold text-slate-900">আপনারা কি ফেসবুক অফিসিয়াল API ব্যবহার করেন?</h3>
                        <span class="text-slate-500 text-xl font-bold transition-transform duration-300"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-slate-600">
                        <p>হ্যাঁ, আমরা ফেসবুকের অফিসিয়াল API ব্যবহার করি, যা সম্পূর্ণ নিরাপদ এবং ফেসবুকের নীতিমালা মেনে চলে।</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-slate-200 rounded-xl bg-slate-50 overflow-hidden">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-bold text-slate-900">আপনারা কি আমাদের ফেসবুক পেজের মালিকানা পরিবর্তন করেন?</h3>
                        <span class="text-slate-500 text-xl font-bold transition-transform duration-300"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-slate-600">
                        <p>না, বাংলা চ্যাটবট ব্যবহার করতে হলে আপনার পেজের মালিকানা পরিবর্তন করতে হবে না। পেজের সম্পূর্ণ মালিকানা আপনার কাছেই থাকবে।</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-slate-200 rounded-xl bg-slate-50 overflow-hidden">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-bold text-slate-900">বাংলা চ্যাটবট কি আমার পেজের তথ্য সংরক্ষণ করে?</h3>
                        <span class="text-slate-500 text-xl font-bold transition-transform duration-300"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-slate-600">
                        <p>না, বাংলা চ্যাটবট আপনার পেজের কোনো ব্যক্তিগত তথ্য সংরক্ষণ করে না। আমরা শুধুমাত্র আপনার গ্রাহকদের সেবা দেওয়ার জন্য ফেসবুক API এর মাধ্যমে কাজ করি।</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-slate-200 rounded-xl bg-slate-50 overflow-hidden">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-bold text-slate-900">বাংলা চ্যাটবট কি আমার পেজের নিরাপত্তা বাড়ায়?</h3>
                        <span class="text-slate-500 text-xl font-bold transition-transform duration-300"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-slate-600">
                        <p>হ্যাঁ, আমাদের চ্যাটবট ফেসবুকের নিরাপত্তা প্রটোকল মেনে চলে এবং পেজের স্বাভাবিক কার্যক্রমে কোনো বাধা সৃষ্টি করে না।</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border border-slate-200 rounded-xl bg-slate-50 overflow-hidden">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-bold text-slate-900">বাংলা চ্যাটবট ব্যবহারে ফেসবুক পেজের কোনো ক্ষতি হবে কি?</h3>
                        <span class="text-slate-500 text-xl font-bold transition-transform duration-300"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-slate-600">
                        <p>না, আমাদের চ্যাটবট ফেসবুকের নিয়ম ও গাইডলাইন মেনে চলে, তাই এটি ব্যবহার করলে আপনার পেজের কোনো ক্ষতি হবে না।</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="border border-slate-200 rounded-xl bg-slate-50 overflow-hidden">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-bold text-slate-900">আপনাদের চ্যাটবট ব্যবহার করতে কি আমাদের অ্যাডমিন অ্যাক্সেস দিতে হবে?</h3>
                        <span class="text-slate-500 text-xl font-bold transition-transform duration-300"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-slate-600">
                        <p>না, আমাদের চ্যাটবট সেটআপ করার জন্য শুধুমাত্র "ডেভেলপার" অথবা "এডিটর" অ্যাক্সেসই যথেষ্ট। আপনাকে অ্যাডমিন অ্যাক্সেস দিতে হবে না।</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="border border-slate-200 rounded-xl bg-slate-50 overflow-hidden">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-bold text-slate-900">বাংলা চ্যাটবট কি আমার পেজের গ্রাহকদের তথ্য নিরাপদ রাখে?</h3>
                        <span class="text-slate-500 text-xl font-bold transition-transform duration-300"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-slate-600">
                        <p>হ্যাঁ, আমরা সর্বোচ্চ নিরাপত্তা ব্যবস্থা মেনে কাজ করি। ফেসবুকের অফিসিয়াল API ব্যবহারের কারণে গ্রাহকের তথ্য সর্বদা নিরাপদ থাকে।</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="border border-slate-200 rounded-xl bg-slate-50 overflow-hidden">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-bold text-slate-900">আমাদের ফেসবুক পেজে চ্যাটবট ব্যবহারের জন্য অতিরিক্ত কোন নিরাপত্তা ব্যবস্থা নিতে হবে কি?</h3>
                        <span class="text-slate-500 text-xl font-bold transition-transform duration-300"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-slate-600">
                        <p>না, চ্যাটবট ব্যবহারের জন্য আলাদা কোনো নিরাপত্তা ব্যবস্থা নিতে হবে না। তবে আপনার পেজের সাধারণ নিরাপত্তা নিশ্চিত করতে ফেসবুকের দুই-স্তরের নিরাপত্তা ব্যবস্থা (Two-factor authentication) চালু রাখতে পারেন।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            content.classList.toggle('hidden');
            
            if (content.classList.contains('hidden')) {
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            } else {
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            }
        }
    </script>

    <!-- Hero Section -->
    <section class="pt-16 pb-12 px-6 max-w-7xl mx-auto text-center">
        <div class="max-w-4xl mx-auto space-y-6">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight text-slate-900">
                আপনার ব্যবসাকে সহজ এবং <br><span class="gradient-text">কার্যকরী করুন</span>
            </h1>
            
            <p class="text-lg md:text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto">
                আমাদের চ্যাটবট সলিউশন ব্যবহার করে আপনার ব্যবসার প্রবৃদ্ধি নিশ্চিত করুন এবং গ্রাহক সেবাকে অটোমেটেড করুন। ডিজিটাল মার্কেটিং এবং অটোমেশনের মাধ্যমে আপনার ব্যবসাকে নিয়ে যান অনন্য উচ্চতায়।
            </p>

            <!-- Call Info -->
            <div class="pt-4">
                <p class="text-base font-semibold text-slate-500">সরাসরি কথা বলতে কল করুন</p>
                <a href="tel:01707676797" class="inline-flex items-center gap-2 text-2xl md:text-3xl font-bold text-blue-600 mt-1 hover:scale-105 transition transform">
                    <i class="fa-solid fa-phone"></i> 01707676797
                </a>
            </div>
        </div>
    </section>

    <!-- Payment / Join Section (Moved Up) -->
    <section class="py-16 bg-slate-900 text-white rounded-t-3xl md:rounded-3xl mx-0 md:mx-4 mb-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-2xl md:text-4xl font-bold mb-6">আজই যুক্ত হোন আমাদের সাথে</h2>
            <div class="flex flex-col items-center justify-center gap-2 mb-10">
                 <span class="text-5xl md:text-6xl font-black text-yellow-500">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                 <div class="flex items-center gap-3">
                     <span class="text-slate-400 line-through text-xl">৳৫,০০০</span>
                     <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">OFFER</span>
                 </div>
            </div>

            <!-- Payment Form -->
            <div class="bg-white text-slate-900 rounded-3xl p-6 md:p-8 shadow-2xl max-w-md mx-auto w-full">
                <form id="paymentForm" action="process_payment.php" method="POST" class="space-y-4 text-left">
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-500 mb-1">আপনার নাম</label>
                        <input type="text" name="name" required placeholder="Ex: Hasib Chowdhury" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 focus:outline-blue-500 transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-500 mb-1">ইমেইল</label>
                        <input type="email" id="email" name="email" required placeholder="name@example.com" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 focus:outline-blue-500 transition">
                        <div id="email-warning" class="text-red-500 text-xs mt-1 hidden">This email is already registered.</div>
                    </div>
                     <div>
                        <label class="block text-xs font-bold uppercase text-slate-500 mb-1">মোবাইল নাম্বার</label>
                        <input type="tel" name="mobile" required placeholder="017XXXXXXXX" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 focus:outline-blue-500 transition">
                     </div>
                     <div>
                        <label class="block text-xs font-bold uppercase text-slate-500 mb-1">পাসওয়ার্ড</label>
                        <input type="password" name="password" required placeholder="******" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 focus:outline-blue-500 transition">
                     </div>

                    <button type="submit" class="btn-payment w-full py-4 mt-4 bg-[#e2136e] hover:bg-[#c20e5c] text-white font-bold rounded-xl shadow-lg transition flex items-center justify-center gap-2">
                        <span>বিকাশ পেমেন্ট করুন</span>
                    </button>
                    <p class="text-center text-xs text-slate-400 mt-2"><i class="fa-solid fa-lock"></i> ১০০% সিকিউর পেমেন্ট</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 py-12 text-center text-slate-500">
        <p class="mb-2">&copy; <?php echo date('Y'); ?> Bangla Chatbot.</p>
        <p class="text-sm">Call us: 01707676797</p>
    </footer>

    <script>
        // Email check
        const emailInput = document.getElementById('email');
        const submitBtn = document.querySelector('.btn-payment');
        const warningText = document.getElementById('email-warning');

        emailInput.addEventListener('input', function () {
            const email = this.value;
            if (email.length < 5 || !email.includes('@')) {
                warningText.classList.add('hidden');
                return;
            };

            fetch(`check_email.php?email=${encodeURIComponent(email)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'exists') {
                        submitBtn.disabled = true;
                        submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                        warningText.classList.remove('hidden');
                    } else {
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                        warningText.classList.add('hidden');
                    }
                });
        });

        document.getElementById('paymentForm').addEventListener('submit', function () {
            submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Processing...';
        });
    </script>
</body>
</html>