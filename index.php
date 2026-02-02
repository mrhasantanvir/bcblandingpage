<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot | Automate Your Business</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Meta Pixel Code & Google Tag (Preserved) -->
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

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SD8ZMD3P4N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-SD8ZMD3P4N');
    </script>

    <script>
        // Anti-flicker
        document.documentElement.style.backgroundColor = "#ffffff";
        document.write('<style id="anti-flicker">body{display:none !important;}</style>');
        window.addEventListener('load', () => {
            const style = document.getElementById('anti-flicker');
            if (style) style.remove();
            document.body.style.display = 'block';
        });
    </script>

    <style>
        body {
            font-family: 'Outfit', 'Hind Siliguri', sans-serif;
            background-color: #ffffff;
            color: #1e293b;
            overflow-x: hidden;
        }

        /* Blob/Wave Shape */
        .hero-blob {
            position: absolute;
            top: 0;
            right: 0;
            width: 55%;
            height: 100%;
            background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%);
            border-bottom-left-radius: 100% 50%;
            z-index: -1;
            display: none;
        }

        @media (min-width: 1024px) {
            .hero-blob {
                display: block;
            }
        }

        .phone-mockup {
            background: #fff;
            border: 8px solid #1e293b;
            border-radius: 40px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .section-feature-blob {
            background: #eff6ff;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            position: absolute;
            z-index: -1;
        }

        /* Custom Payment Card */
        .payment-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            border: 1px solid #f1f5f9;
        }

        .custom-input {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 14px 18px;
            width: 100%;
            transition: all 0.2s;
        }

        .custom-input:focus {
            outline: none;
            border-color: #4f46e5;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }
    </style>
</head>

<body class="antialiased">

    <!-- Header -->
    <header class="py-6 px-6 md:px-12 max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-2">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="BanglaChatbot" class="h-8 md:h-10">
            <span class="text-xl font-bold italic tracking-tighter text-slate-800">Bangla<span
                    class="text-indigo-600">Chatbot</span></span>
        </div>
        <!-- <a href="https://app.banglachatbot.com/home/login_page"
            class="hidden md:inline-block px-6 py-2 rounded-full border border-slate-200 text-slate-600 font-bold hover:bg-slate-50 transition">Login</a> -->
    </header>

    <!-- Hero Section -->
    <section class="relative pt-12 pb-24 lg:pt-20 lg:pb-32 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="hero-blob"></div>

        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            <!-- Text -->
            <div class="lg:w-1/2 space-y-8 text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-slate-900">
                    আপনার ব্যবসাকে সহজ এবং কার্যকরী করুন চ্যাটবট ব্যবহারের মাধ্যমে
                </h1>
                <p class="text-lg text-slate-600 leading-relaxed max-w-xl mx-auto lg:mx-0">
                    আমাদের স্মার্ট চ্যাটবট আপনার কাস্টমারদের ২৪/৭ সাপোর্ট দিতে প্রস্তুত। ব্যবসাকে অটোমেশন এর মাধ্যমে
                    নিয়ে যান নেক্সট লেভেলে।
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button onclick="document.getElementById('pricing').scrollIntoView({behavior:'smooth'})"
                        class="px-8 py-4 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:bg-blue-700 transition transform hover:-translate-y-1">
                        দেখুন কিভাবে কাজ করে
                    </button>
                    <!-- <button class="px-8 py-4 bg-white text-slate-700 border border-slate-200 rounded-full font-bold hover:bg-slate-50 transition">Demo Video</button> -->
                </div>
            </div>

            <!-- Image/Mockup -->
            <div class="lg:w-1/2 relative flex justify-center">
                <!-- Simple CSS Phone Mockup -->
                <div
                    class="phone-mockup w-64 h-[500px] bg-slate-100 flex flex-col items-center justify-center relative shadow-2xl skew-y-1">
                    <!-- Screen Content Shim -->
                    <div class="w-full h-full bg-white flex flex-col pt-8 px-4 space-y-4">
                        <div class="h-4 w-20 bg-slate-200 rounded self-center"></div>
                        <div class="space-y-2 mt-4">
                            <div class="flex gap-2">
                                <div class="w-8 h-8 rounded-full bg-indigo-100"></div>
                                <div class="w-32 h-16 bg-slate-50 rounded-lg p-2 text-[0.5rem] text-slate-400">
                                    Hello! How can I help?
                                </div>
                            </div>
                            <div class="flex gap-2 flex-row-reverse">
                                <div class="w-8 h-8 rounded-full bg-blue-500"></div>
                                <div class="w-32 h-10 bg-blue-500 rounded-lg p-2 text-[0.5rem] text-white">
                                    I need pricing details.
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="w-8 h-8 rounded-full bg-indigo-100"></div>
                                <div class="w-40 h-24 bg-slate-50 rounded-lg p-2 text-[0.5rem] text-slate-400">
                                    Our basic plan starts at...
                                    <div
                                        class="mt-2 w-full h-8 bg-blue-600 rounded text-center text-white leading-8 cursor-pointer">
                                        Buy Now</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Notch -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 h-6 w-32 bg-slate-900 rounded-b-xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <div class="text-center py-12 bg-slate-50">
        <p class="text-blue-600 font-bold mb-8">বাংলাদেশে ১৬০০+ ব্যবহারকারী বাংলা চ্যাটবট ব্যবহার করছেন</p>
        <div class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60 grayscale px-6">
            <!-- Placeholders for Partner Logos using Text -->
            <span class="font-bold text-xl">TechCorp</span>
            <span class="font-bold text-xl">Business24</span>
            <span class="font-bold text-xl">ShopUp</span>
            <span class="font-bold text-xl">DeliveryNext</span>
        </div>
    </div>

    <!-- Features Section 1: Automation -->
    <section class="py-24 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 relative">
                <div
                    class="section-feature-blob w-full h-full absolute top-0 left-0 bg-blue-50 scale-125 transform rotate-6">
                </div>
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/social-media-marketing-2839460-2371900.png"
                    alt="Marketing" class="relative z-10 w-full max-w-md mx-auto drop-shadow-lg">
            </div>
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">ফেসবুক পেইজে কেন অটোমেশন করবেন?</h2>
                <ul class="space-y-4 text-slate-600">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-blue-500"></i> ২৪/৭
                        কাস্টমার সার্ভিস</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-blue-500"></i> সেলস
                        বাড়াতে সাহায্য করে</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-blue-500"></i> সময়
                        বাঁচায়</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-check-circle text-blue-500"></i> কাস্টমার
                        ডাটা সংগ্রহ করে</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Features Section 2: Demo -->
    <section class="py-24 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="flex flex-col-reverse md:flex-row items-center gap-16">
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">ডেমো দেখুন</h2>
                <p class="text-slate-600">আমাদের সবার আগে ডেমোটি দেখে নিন। কিভাবে কাস্টমার মেসেজ দিলে রিপ্লাই পাবে।</p>
                <ul class="space-y-3 font-semibold text-slate-700">
                    <li class="flex items-center gap-3"><i class="fa-solid fa-caret-right text-indigo-500"></i> অটো
                        রিপ্লাই সেট করুন</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-caret-right text-indigo-500"></i>
                        প্রোডাক্ট শোকেস</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-caret-right text-indigo-500"></i> অর্ডার
                        ম্যানেজমেন্ট</li>
                </ul>
            </div>
            <div class="md:w-1/2 relative">
                <div
                    class="section-feature-blob w-64 h-64 absolute top-10 right-10 bg-indigo-50 -z-10 rounded-full blur-3xl">
                </div>
                <div
                    class="bg-slate-900 rounded-2xl shadow-2xl p-2 transform rotate-2 hover:rotate-0 transition duration-500 border border-slate-700">
                    <!-- Demo GIF -->
                    <img src="https://home.banglachatbot.com/wp-content/uploads/2024/10/Untitled-design-4.gif"
                        alt="Chatbot Demo" class="rounded-lg w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section 3: Data -->
    <section class="py-24 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 relative">
                <div
                    class="section-feature-blob w-full h-full absolute top-0 left-0 bg-purple-50 scale-110 transform -rotate-3">
                </div>
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/data-analysis-4500661-3735166.png"
                    alt="Data" class="relative z-10 w-full max-w-md mx-auto drop-shadow-xl">
            </div>
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">আপনার টার্গেট করা কাস্টমারের ডাটা দেখুন</h2>
                <ul class="space-y-4 text-slate-600">
                    <li class="flex items-center gap-3"><i class="fa-regular fa-user text-purple-500"></i> লিড জেনারেশন
                    </li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-phone text-purple-500"></i> ফোন নাম্বার
                        সংগ্রহ</li>
                    <li class="flex items-center gap-3"><i class="fa-regular fa-envelope text-purple-500"></i> ইমেইল
                        কালেকশন</li>
                    <li class="flex items-center gap-3"><i class="fa-solid fa-location-dot text-purple-500"></i> লোকেশন
                        ট্র্যাকিং</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Benefits Banner -->
    <section class="bg-[#4355b9] py-16 text-white text-center">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl md:text-3xl font-bold mb-12">এমন একটি মাধ্যম যা আপনার কাজকে আরও সহজতর করে তোলে</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 border border-white/20 rounded-xl bg-white/5 backdrop-blur-sm">
                    <i class="fa-solid fa-bolt text-4xl mb-4 text-yellow-400"></i>
                    <h3 class="font-bold text-xl mb-2">দ্রুত সেবা</h3>
                    <p class="text-sm text-blue-100">যেকোন সময় কাস্টমারকে সেবা প্রদান করুন খুব দ্রুত</p>
                </div>
                <div class="p-8 border border-white/20 rounded-xl bg-white/5 backdrop-blur-sm">
                    <i class="fa-solid fa-robot text-4xl mb-4 text-cyan-400"></i>
                    <h3 class="font-bold text-xl mb-2">এজেন্সি</h3>
                    <p class="text-sm text-blue-100">প্রোডাক্ট এর স্মার্ট শোকেসিং এবং অর্ডার ট্র্যাকিং</p>
                </div>
                <div class="p-8 border border-white/20 rounded-xl bg-white/5 backdrop-blur-sm">
                    <i class="fa-solid fa-shield-halved text-4xl mb-4 text-emerald-400"></i>
                    <h3 class="font-bold text-xl mb-2">নিরাপত্তা</h3>
                    <p class="text-sm text-blue-100">নিরাপদ ডাটা এবং সিকিউর পেমেন্ট গেটওয়ে</p>
                </div>
            </div>
            <button onclick="document.getElementById('pricing').scrollIntoView({behavior:'smooth'})"
                class="mt-12 px-10 py-3 bg-green-500 text-white font-bold rounded-full shadow-lg hover:bg-green-600 transition">
                <i class="fa-regular fa-circle-check mr-2"></i> আরো বিস্তারিত জানতে এই বাটনে ক্লিক করুন
            </button>
        </div>
    </section>

    <!-- Testimonials (Tweets) -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-slate-800 mb-16">আমাদের চ্যাটবট সম্পর্কে ব্যবহারকারী যা বলছেন
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Review 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex gap-3">
                            <div class="w-12 h-12 bg-slate-200 rounded-full"></div>
                            <div>
                                <h4 class="font-bold">Md. Abdur Rahim</h4>
                                <p class="text-xs text-slate-400">Business Owner</p>
                            </div>
                        </div>
                        <i class="fa-brands fa-twitter text-blue-400"></i>
                    </div>
                    <p class="text-slate-600">"চ্যাটবট ব্যবহার করার পর আমার রেসপন্স রেট বেড়েছে অনেক। এখন কাস্টমাররা
                        খুশি।"</p>
                </div>
                <!-- Review 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex gap-3">
                            <div class="w-12 h-12 bg-slate-200 rounded-full"></div>
                            <div>
                                <h4 class="font-bold">Sarah Islam</h4>
                                <p class="text-xs text-slate-400">Entrepreneur</p>
                            </div>
                        </div>
                        <i class="fa-brands fa-twitter text-blue-400"></i>
                    </div>
                    <p class="text-slate-600">"খুবই চমৎকার সার্ভিস। সাপোর্ট টিম অনেক হেল্পফুল।"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 max-w-4xl mx-auto px-6">
        <div class="text-center mb-12">
            <span
                class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">Supports</span>
            <h2 class="text-3xl font-bold text-slate-900 mt-4">কিছু সাধারণ প্রশ্ন উত্তর</h2>
        </div>

        <div class="space-y-4">
            <div class="border border-slate-200 rounded-xl p-6 hover:shadow-md transition cursor-pointer bg-white">
                <h3 class="font-bold text-lg text-slate-800">আপনারা কি ফেসবুক অফিশিয়াল API ব্যবহার করেন?</h3>
                <p class="mt-2 text-slate-500 text-sm">হ্যাঁ, আমরা ফেসবুকের অফিশিয়াল API ব্যবহার করি, যা সম্পূর্ণ
                    নিরাপদ।</p>
            </div>
            <div class="border border-slate-200 rounded-xl p-6 hover:shadow-md transition cursor-pointer bg-white">
                <h3 class="font-bold text-lg text-slate-800">আমার পেইজের কোনো ক্ষতি হবে কি?</h3>
                <p class="mt-2 text-slate-500 text-sm">না, এটি ফেসবুক দ্বারা অনুমোদিত তাই আপনার পেইজের কোনো ক্ষতি হবে
                    না।</p>
            </div>
            <div class="border border-slate-200 rounded-xl p-6 hover:shadow-md transition cursor-pointer bg-white">
                <h3 class="font-bold text-lg text-slate-800">বাংলা চ্যাটবট কি আমার পেইজের সব মেসেজ দেখবে?</h3>
                <p class="mt-2 text-slate-500 text-sm">না, আমরা আপনার পার্সোনাল কোনো মেসেজ এক্সেস করি না। শুধুমাত্র
                    অটোমেটেড রিপ্লাই এর জন্য এটি কাজ করে।</p>
            </div>
        </div>
    </section>


    <!-- Pricing/Payment Form -->
    <section id="pricing" class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <!-- Glows -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-blue-600 rounded-full blur-[100px] opacity-20"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-600 rounded-full blur-[100px] opacity-20"></div>
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">আজই যুক্ত হোন আমাদের সাথে</h2>
                <p class="text-slate-300 text-lg mb-8">সীমিত সময়ের জন্য অফারটি লুফে নিন। আপনার ব্যবসার গ্রোথ নিশ্চিত
                    করুন।</p>

                <div class="flex items-center gap-4 mb-4">
                    <span class="text-5xl font-bold">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                    <div class="flex flex-col">
                        <span class="text-slate-400 line-through text-lg">৳৫,০০০</span>
                        <span class="text-green-400 font-bold text-sm">Save 60%</span>
                    </div>
                </div>
                <div class="flex gap-4 mt-8">
                    <div class="flex items-center gap-2 text-sm text-slate-400">
                        <i class="fa-solid fa-lock"></i> SSL Secure Payment
                    </div>
                    <div class="flex items-center gap-2 text-sm text-slate-400">
                        <i class="fa-solid fa-headset"></i> 24/7 Support
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 w-full">
                <div class="payment-card p-8 text-slate-900">
                    <form id="paymentForm" action="process_payment.php" method="POST" class="space-y-6">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-2">Full Name</label>
                            <input type="text" name="name" required placeholder="Ex: Hasib Chowdhury"
                                class="custom-input">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required placeholder="name@example.com"
                                class="custom-input">
                            <div id="email-warning" class="text-red-500 text-xs mt-1 hidden">This email is already
                                registered.</div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-500 mb-2">Mobile</label>
                                <input type="tel" name="mobile" required placeholder="017XXXXXXXX" class="custom-input">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-500 mb-2">Password</label>
                                <input type="password" name="password" required placeholder="******"
                                    class="custom-input">
                            </div>
                        </div>

                        <button type="submit"
                            class="btn-payment w-full py-4 bg-[#e2136e] hover:bg-[#c20e5c] text-white font-bold rounded-xl shadow-lg transition flex justify-center items-center gap-3">
                            <span>PAY WITH BKASH</span>
                            <!-- Bkash Logo Placeholder (using text/icon) -->
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-950 py-12 text-center text-slate-600 text-sm">
        <p>&copy; <?php echo date('Y'); ?> Bangla Chatbot. All rights reserved.</p>
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