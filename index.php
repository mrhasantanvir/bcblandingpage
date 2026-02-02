<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot | Automation Solution</title>
    
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.tailwindcss.com">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Hind Siliguri"', 'sans-serif'],
                    },
                    colors: {
                        primary: '#2563eb', // Blue 600
                        secondary: '#1e293b', // Slate 800
                    }
                }
            }
        }
    </script>

    <!-- Critical CSS to prevent FOUC -->
    <style>
        body {
            font-family: 'Hind Siliguri', sans-serif;
            background-color: #f8fafc; /* Slate 50 */
            color: #1e293b; /* Slate 800 */
            -webkit-font-smoothing: antialiased;
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>

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
</head>

<body class="flex flex-col min-h-screen">

    <!-- Header -->
    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 md:px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Bangla Chatbot" class="h-8 w-auto">
                <span class="text-xl font-bold text-slate-900 tracking-tight">Bangla Chatbot</span>
            </div>
            <a href="https://app.banglachatbot.com/home/login_page" class="text-sm font-semibold text-primary hover:text-blue-800 transition">Log In</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="pt-16 pb-12 px-4 text-center max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-bold text-slate-900 leading-tight mb-6">
            আপনার ব্যবসাকে সহজ এবং <br><span class="text-primary">কার্যকরী করুন</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            আমাদের চ্যাটবট সলিউশন ব্যবহার করে আপনার ব্যবসার প্রবৃদ্ধি নিশ্চিত করুন এবং গ্রাহক সেবাকে অটোমেটেড করুন। ডিজিটাল মার্কেটিং এবং অটোমেশনের মাধ্যমে আপনার ব্যবসাকে নিয়ে যান অনন্য উচ্চতায়।
        </p>
        
        <div class="flex flex-col items-center gap-2">
            <span class="text-sm font-semibold text-slate-500 uppercase tracking-wide">সরাসরি কথা বলতে কল করুন</span>
            <a href="tel:01707676797" class="inline-flex items-center gap-2 text-2xl font-bold text-primary hover:text-blue-700 transition">
                <i class="fa-solid fa-phone"></i> 01707676797
            </a>
        </div>
    </header>

    <!-- Payment/Sign Up Section (High Priority) -->
    <section class="py-12 px-4 bg-slate-900 text-white md:rounded-3xl max-w-5xl mx-auto mb-16 shadow-2xl">
        <div class="grid md:grid-cols-2 gap-12 items-center px-4 md:px-8">
            <div class="text-center md:text-left">
                <h2 class="text-3xl font-bold mb-6">আজই যুক্ত হোন আমাদের সাথে</h2>
                <div class="flex flex-col md:items-start items-center gap-1 mb-8">
                     <span class="text-6xl font-black text-yellow-400">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                     <div class="flex items-center gap-3">
                         <span class="text-slate-400 line-through text-xl">৳৫,০০০</span>
                         <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">OFFER</span>
                     </div>
                </div>
                <p class="text-slate-300 leading-relaxed hidden md:block">
                    আমাদের প্রিমিয়াম চ্যাটবট সার্ভিসের মাধ্যমে আপনার ফেসবুক পেজের রেসপন্স রেট বাড়ান এবং কাস্টমারদের সাথে অটোমেটেড যোগাযোগ স্থাপন করুন।
                </p>
            </div>

            <div class="bg-white text-slate-900 rounded-2xl p-6 shadow-xl w-full max-w-md mx-auto">
                <form id="paymentForm" action="process_payment.php" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-500 mb-1">আপনার নাম</label>
                        <input type="text" name="name" required placeholder="Ex: Hasib Chowdhury" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 focus:outline-blue-600 focus:border-blue-600 transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-500 mb-1">ইমেইল</label>
                        <input type="email" id="email" name="email" required placeholder="name@example.com" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 focus:outline-blue-600 focus:border-blue-600 transition">
                        <div id="email-warning" class="text-red-600 text-xs mt-1 hidden">This email is already registered.</div>
                    </div>
                     <div>
                        <label class="block text-xs font-bold uppercase text-slate-500 mb-1">মোবাইল নাম্বার</label>
                        <input type="tel" name="mobile" required placeholder="017XXXXXXXX" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 focus:outline-blue-600 focus:border-blue-600 transition">
                     </div>
                     <div>
                        <label class="block text-xs font-bold uppercase text-slate-500 mb-1">পাসওয়ার্ড</label>
                        <input type="password" name="password" required placeholder="******" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 focus:outline-blue-600 focus:border-blue-600 transition">
                     </div>

                    <button type="submit" class="btn-payment w-full py-3 mt-4 bg-pink-600 hover:bg-pink-700 text-white font-bold rounded-lg shadow transition flex items-center justify-center gap-2">
                        <span>বিকাশ পেমেন্ট করুন</span>
                    </button>
                    <p class="text-center text-xs text-slate-400 mt-2"><i class="fa-solid fa-lock"></i> ১০০% সিকিউর পেমেন্ট</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 px-4 max-w-6xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-12 text-slate-900">ফেসবুক পেইজ কেনো অটোমেশন করবেন</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Feature Items -->
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-xl"><i class="fa-solid fa-clock"></i></div>
                <span class="font-medium">২৪/৭ গ্রাহক সেবা</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-xl"><i class="fa-solid fa-chart-line"></i></div>
                <span class="font-medium">সেলস বাড়ানো</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 text-xl"><i class="fa-solid fa-hourglass-half"></i></div>
                <span class="font-medium">সময় সাশ্রয়</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 text-xl"><i class="fa-brands fa-facebook-messenger"></i></div>
                <span class="font-medium">মেসেঞ্জারে পন্য বিক্রয়</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 text-xl"><i class="fa-solid fa-cart-shopping"></i></div>
                <span class="font-medium">Woo-Commerce ইন্টিগ্রেশন</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 text-xl"><i class="fa-solid fa-comment-dots"></i></div>
                <span class="font-medium">অটো কমেন্ট মার্কেটিং</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-600 text-xl"><i class="fa-solid fa-sms"></i></div>
                <span class="font-medium">এসএমএস মার্কেটিং</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 text-xl"><i class="fa-solid fa-envelope"></i></div>
                <span class="font-medium">ইমেইল মার্কেটিং</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 text-xl"><i class="fa-solid fa-bullhorn"></i></div>
                <span class="font-medium">মেসেঞ্জারে ব্রডকাস্টিং</span>
            </div>
        </div>
    </section>

    <!-- Audience/Benefits Section -->
    <section class="py-16 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-12 text-slate-900">আপনার কাজকে আরও সহজতর করে তোলে</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 text-center hover:bg-white hover:shadow-lg transition">
                    <div class="w-16 h-16 mx-auto bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl mb-6"><i class="fa-solid fa-laptop-code"></i></div>
                    <h3 class="text-xl font-bold mb-3">ফ্রিল্যান্সার</h3>
                    <p class="text-slate-600">চ্যাটবট নির্মানে দক্ষতা অর্জন করুন আর এই শিল্পে গড়ে তুলুন নিজের ক্যারিয়ার</p>
                </div>
                <!-- Card 2 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 text-center hover:bg-white hover:shadow-lg transition">
                    <div class="w-16 h-16 mx-auto bg-purple-600 text-white rounded-full flex items-center justify-center text-2xl mb-6"><i class="fa-solid fa-building"></i></div>
                    <h3 class="text-xl font-bold mb-3">এজেন্সি</h3>
                    <p class="text-slate-600">গ্রাহকে চ্যাটবট সার্ভিস প্রদান করে নিজের আয়কে বৃদ্ধি করুন কয়েক গুন</p>
                </div>
                <!-- Card 3 -->
                <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 text-center hover:bg-white hover:shadow-lg transition">
                    <div class="w-16 h-16 mx-auto bg-emerald-600 text-white rounded-full flex items-center justify-center text-2xl mb-6"><i class="fa-solid fa-briefcase"></i></div>
                    <h3 class="text-xl font-bold mb-3">উদ্যোক্তা</h3>
                    <p class="text-slate-600">নিজের পেইজে নিজেই চ্যাটবট সংযোজন করে কর্মী খরচ কমিয়ে ফেলুন</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Simple Accordion) -->
    <section class="py-16 px-4 max-w-4xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-12 text-slate-900">কিছু সাধারন প্রশ্ন উত্তর</h2>
        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="border border-slate-200 rounded-lg overflow-hidden">
                <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-slate-50 transition" onclick="toggleFAQ(this)">
                    <span class="font-bold text-slate-900">আপনারা কি ফেসবুক অফিসিয়াল API ব্যবহার করেন?</span>
                    <i class="fa-solid fa-plus text-slate-400"></i>
                </button>
                <div class="hidden p-5 bg-slate-50 text-slate-600 border-t border-slate-100">
                    হ্যাঁ, আমরা ফেসবুকের অফিসিয়াল API ব্যবহার করি, যা সম্পূর্ণ নিরাপদ এবং ফেসবুকের নীতিমালা মেনে চলে।
                </div>
            </div>
            <!-- FAQ 2 -->
             <div class="border border-slate-200 rounded-lg overflow-hidden">
                <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-slate-50 transition" onclick="toggleFAQ(this)">
                    <span class="font-bold text-slate-900">আপনারা কি আমাদের ফেসবুক পেজের মালিকানা পরিবর্তন করেন?</span>
                    <i class="fa-solid fa-plus text-slate-400"></i>
                </button>
                <div class="hidden p-5 bg-slate-50 text-slate-600 border-t border-slate-100">
                    না, বাংলা চ্যাটবট ব্যবহার করতে হলে আপনার পেজের মালিকানা পরিবর্তন করতে হবে না। পেজের সম্পূর্ণ মালিকানা আপনার কাছেই থাকবে।
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="border border-slate-200 rounded-lg overflow-hidden">
                <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-slate-50 transition" onclick="toggleFAQ(this)">
                    <span class="font-bold text-slate-900">বাংলা চ্যাটবট কি আমার পেজের তথ্য সংরক্ষণ করে?</span>
                    <i class="fa-solid fa-plus text-slate-400"></i>
                </button>
                <div class="hidden p-5 bg-slate-50 text-slate-600 border-t border-slate-100">
                     না, বাংলা চ্যাটবট আপনার পেজের কোনো ব্যক্তিগত তথ্য সংরক্ষণ করে না। আমরা শুধুমাত্র আপনার গ্রাহকদের সেবা দেওয়ার জন্য ফেসবুক API এর মাধ্যমে কাজ করি।
                </div>
            </div>
             <!-- FAQ 4 -->
            <div class="border border-slate-200 rounded-lg overflow-hidden">
                <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-slate-50 transition" onclick="toggleFAQ(this)">
                    <span class="font-bold text-slate-900">বাংলা চ্যাটবট কি আমার পেজের নিরাপত্তা বাড়ায়?</span>
                    <i class="fa-solid fa-plus text-slate-400"></i>
                </button>
                <div class="hidden p-5 bg-slate-50 text-slate-600 border-t border-slate-100">
                     হ্যাঁ, আমাদের চ্যাটবট ফেসবুকের নিরাপত্তা প্রটোকল মেনে চলে এবং পেজের স্বাভাবিক কার্যক্রমে কোনো বাধা সৃষ্টি করে না।
                </div>
            </div>
             <!-- FAQ 5 -->
            <div class="border border-slate-200 rounded-lg overflow-hidden">
                <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-slate-50 transition" onclick="toggleFAQ(this)">
                    <span class="font-bold text-slate-900">বাংলা চ্যাটবট ব্যবহারে ফেসবুক পেজের কোনো ক্ষতি হবে কি?</span>
                    <i class="fa-solid fa-plus text-slate-400"></i>
                </button>
                <div class="hidden p-5 bg-slate-50 text-slate-600 border-t border-slate-100">
                     না, আমাদের চ্যাটবট ফেসবুকের নিয়ম ও গাইডলাইন মেনে চলে, তাই এটি ব্যবহার করলে আপনার পেজের কোনো ক্ষতি হবে না।
                </div>
            </div>
             <!-- FAQ 6 -->
            <div class="border border-slate-200 rounded-lg overflow-hidden">
                <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-slate-50 transition" onclick="toggleFAQ(this)">
                    <span class="font-bold text-slate-900">আপনাদের চ্যাটবট ব্যবহার করতে কি আমাদের অ্যাডমিন অ্যাক্সেস দিতে হবে?</span>
                    <i class="fa-solid fa-plus text-slate-400"></i>
                </button>
                <div class="hidden p-5 bg-slate-50 text-slate-600 border-t border-slate-100">
                     না, আমাদের চ্যাটবট সেটআপ করার জন্য শুধুমাত্র "ডেভেলপার" অথবা "এডিটর" অ্যাক্সেসই যথেষ্ট। আপনাকে অ্যাডমিন অ্যাক্সেস দিতে হবে না।
                </div>
            </div>
             <!-- FAQ 7 -->
            <div class="border border-slate-200 rounded-lg overflow-hidden">
                <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-slate-50 transition" onclick="toggleFAQ(this)">
                    <span class="font-bold text-slate-900">বাংলা চ্যাটবট কি আমার পেজের গ্রাহকদের তথ্য নিরাপদ রাখে?</span>
                    <i class="fa-solid fa-plus text-slate-400"></i>
                </button>
                <div class="hidden p-5 bg-slate-50 text-slate-600 border-t border-slate-100">
                     হ্যাঁ, আমরা সর্বোচ্চ নিরাপত্তা ব্যবস্থা মেনে কাজ করি। ফেসবুকের অফিসিয়াল API ব্যবহারের কারণে গ্রাহকের তথ্য সর্বদা নিরাপদ থাকে।
                </div>
            </div>
             <!-- FAQ 8 -->
            <div class="border border-slate-200 rounded-lg overflow-hidden">
                <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-slate-50 transition" onclick="toggleFAQ(this)">
                    <span class="font-bold text-slate-900">আমাদের ফেসবুক পেজে চ্যাটবট ব্যবহারের জন্য অতিরিক্ত কোন নিরাপত্তা ব্যবস্থা নিতে হবে কি?</span>
                    <i class="fa-solid fa-plus text-slate-400"></i>
                </button>
                <div class="hidden p-5 bg-slate-50 text-slate-600 border-t border-slate-100">
                     না, চ্যাটবট ব্যবহারের জন্য আলাদা কোনো নিরাপত্তা ব্যবস্থা নিতে হবে না। তবে আপনার পেজের সাধারণ নিরাপত্তা নিশ্চিত করতে ফেসবুকের দুই-স্তরের নিরাপত্তা ব্যবস্থা (Two-factor authentication) চালু রাখতে পারেন।
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-100 py-8 text-center mt-auto">
        <p class="text-slate-500 text-sm mb-2">&copy; <?php echo date('Y'); ?> Bangla Chatbot. All rights reserved.</p>
        <p class="text-slate-400 text-sm">Call us: 01707676797</p>
    </footer>

    <!-- Simple Scripts -->
    <script>
        // FAQ Toggle
        function toggleFAQ(btn) {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('i');
            content.classList.toggle('hidden');
            if (content.classList.contains('hidden')) {
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            } else {
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            }
        }

        // Email Check Logic
        const emailInput = document.getElementById('email');
        const submitBtn = document.querySelector('.btn-payment');
        const warningText = document.getElementById('email-warning');

        if(emailInput) {
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
        }
    </script>
</body>
</html>