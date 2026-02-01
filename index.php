<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot - আপনার ব্যবসার বিশ্বস্ত পার্টনার</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #006aff;
            --secondary: #00d2ff;
            --dark: #0a0f1d;
        }

        body {
            font-family: 'Hind Siliguri', sans-serif;
            background-color: var(--dark);
            color: #fff;
            scroll-behavior: smooth;
        }

        .glass-nav {
            background: rgba(10, 15, 29, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .gradient-text {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-bg {
            background: radial-gradient(circle at top right, rgba(0, 106, 255, 0.15), transparent 40%),
                radial-gradient(circle at bottom left, rgba(0, 210, 255, 0.1), transparent 40%);
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            background: rgba(255, 255, 255, 0.07);
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .form-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            transition: all 0.3s;
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(0, 106, 255, 0.2);
            outline: none;
        }

        .btn-premium {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: all 0.3s;
        }

        .btn-premium:hover {
            box-shadow: 0 5px 20px rgba(0, 106, 255, 0.4);
            transform: scale(1.02);
        }
    </style>
</head>

<body class="hero-bg min-h-screen">

    <!-- Navigation -->
    <nav class="glass-nav fixed top-0 w-full z-50 py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Logo" class="h-10">
                <span class="text-xl font-bold tracking-tight">Bangla <span class="gradient-text">Chatbot</span></span>
            </div>
            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#features" class="hover:text-blue-400 transition">ফিচারসমূহ</a>
                <a href="#why-us" class="hover:text-blue-400 transition">কেন আমাদের নির্বাচন করবেন?</a>
                <a href="#pricing" class="hover:text-blue-400 transition">প্রাইসিং</a>
            </div>
            <a href="#order"
                class="btn-premium px-6 py-2 rounded-full text-xs font-bold uppercase tracking-wider">অফারটি নিন</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-6">
        <div class="container mx-auto text-center max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                আপনার ব্যবসাকে অটোমেট করুন <br>
                <span class="gradient-text">এআই চ্যাটবট প্রযুক্তির</span> মাধ্যমে
            </h1>
            <p class="text-gray-400 text-lg md:text-xl mb-10 max-w-2xl mx-auto">
                ফেসবুক, ইনস্টাগ্রাম এবং হোয়াটসঅ্যাপে গ্রাহকের মেসেজের রিপ্লাই দিন নিমিষেই। বাড়ান আপনার ব্র্যান্ড ভ্যালু
                এবং সেলস।
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#order" class="btn-premium px-10 py-4 rounded-xl font-bold text-lg w-full sm:w-auto">
                    আপনার যাত্রা শুরু করুন
                </a>
                <a href="#features"
                    class="px-10 py-4 rounded-xl border border-white/10 font-bold text-lg hover:bg-white/5 transition w-full sm:w-auto">
                    আরো জানুন
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 px-6 bg-black/20">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">আমাদের স্পেশাল <span class="gradient-text">ফিচারসমূহ</span></h2>
                <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="feature-card p-8 rounded-2xl">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-bolt text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">অটো-রিপ্লাই সিস্টেম</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        কমেন্টে বা ইনবক্সে গ্রাহকের কমন সব প্রশ্নের উত্তর দিবে চ্যাটবট। আপনাকে আর ২৪ ঘণ্টা অনলাইনে থাকতে
                        হবে না।
                    </p>
                </div>
                <div class="feature-card p-8 rounded-2xl">
                    <div class="w-14 h-14 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-comments text-2xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">মাল্টি-প্ল্যাটফর্ম সাপোর্ট</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        ফেসবুক পেজ, ইনস্টাগ্রাম এবং হোয়াটসঅ্যাপ—সব কিছু ম্যানেজ করুন একটি মাত্র ড্যাশবোর্ড থেকে।
                    </p>
                </div>
                <div class="feature-card p-8 rounded-2xl">
                    <div class="w-14 h-14 bg-cyan-500/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-robot text-2xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">এআই টেকনোলজি</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        গ্রাহকের মুড এবং ভাষা বুঝে যথাযথ উত্তর দিতে সক্ষম আমাদের উন্নত এআই ভিত্তিক ইন্টেলিজেন্ট চ্যাটবট।
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section id="why-us" class="py-20 px-6">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-12">
            <div class="flex-1">
                <h2 class="text-3xl font-bold mb-6 italic leading-snug">কেন আপনার ব্যবসার জন্য <br><span
                        class="gradient-text text-4xl">Bangla Chatbot</span> প্রয়োজন?</h2>
                <ul class="space-y-6">
                    <li class="flex items-start space-x-4">
                        <span class="bg-green-500/20 p-1 rounded-full"><i
                                class="fa-solid fa-check text-green-500"></i></span>
                        <div>
                            <p class="font-bold mb-1">১০০% কাস্টমার এনগেজমেন্ট</p>
                            <p class="text-gray-400 text-sm">কেউ মেসেজ দিলেই সাথে সাথে উত্তর পাবেন, যা আপনার সেলস বাড়াতে
                                সাহায্য করবে।</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-4">
                        <span class="bg-green-500/20 p-1 rounded-full"><i
                                class="fa-solid fa-check text-green-500"></i></span>
                        <div>
                            <p class="font-bold mb-1">অপারেটিং কস্ট কমানো</p>
                            <p class="text-gray-400 text-sm">একাধিক কাস্টমার সাপোর্ট স্টাফ রাখার পরিবর্তে একাই সব
                                ম্যানেজ করবে এই রোবট।</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-4">
                        <span class="bg-green-500/20 p-1 rounded-full"><i
                                class="fa-solid fa-check text-green-500"></i></span>
                        <div>
                            <p class="font-bold mb-1">২৪/৭ কাস্টমার সার্ভিস</p>
                            <p class="text-gray-400 text-sm">আপনি যখন ঘুমাচ্ছেন, তখনও আপনার ইনবক্সে কাজ চলবে। কোনো লিড
                                মিস হবে না।</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <div class="bg-blue-600/5 p-12 rounded-[40px] border border-white/5 relative overflow-hidden group">
                    <div
                        class="absolute -top-24 -right-24 w-60 h-60 bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-500/20 transition duration-1000">
                    </div>
                    <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Bot Icon"
                        class="w-full max-w-[250px] mx-auto filter drop-shadow-[0_0_50px_rgba(0,106,255,0.4)]">
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 px-6 bg-black/30">
        <div class="container mx-auto max-w-xl text-center">
            <div class="bg-white/5 border-2 border-primary/30 p-10 rounded-3xl relative">
                <div
                    class="absolute -top-5 left-1/2 -translate-x-1/2 bg-primary px-6 py-2 rounded-full text-xs font-bold uppercase">
                    লিমিটেড অফার</div>
                <h3 class="text-2xl font-bold mb-2">মেগা সাবস্ক্রিপশন (১ বছর)</h3>
                <div class="my-8">
                    <span class="text-6xl font-black gradient-text">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                    <span class="text-gray-500 line-through ml-2">৳৫,০০০</span>
                </div>
                <ul class="text-left space-y-4 mb-10 text-gray-300">
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-circle-check text-blue-400"></i>
                        <span>আনলিমিটেড ফেসবুক পেজ</span></li>
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-circle-check text-blue-400"></i>
                        <span>আনলিমিটেড সাবস্ক্রাইবার</span></li>
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-circle-check text-blue-400"></i>
                        <span>সবগুলো প্রিমিয়াম ড্রপ-ইন ফিচার</span></li>
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-circle-check text-blue-400"></i>
                        <span>লাইফটাইম আপডেট এবং সাপোর্ট</span></li>
                </ul>
                <div id="order" class="bg-white text-dark rounded-3xl p-8 text-left shadow-2xl">
                    <h4 class="text-lg font-bold text-dark mb-6">রেজিস্ট্রেশন এবং পেমেন্ট</h4>
                    <form id="paymentForm" action="process_payment.php" method="POST" class="space-y-4">
                        <input type="text" name="name" required placeholder="আপনার পুরো নাম"
                            class="form-input w-full p-4 rounded-xl text-dark">
                        <input type="email" id="email" name="email" required placeholder="আপনার ইমেইল এড্রেস"
                            class="form-input w-full p-4 rounded-xl text-dark">
                        <div id="email-warning"
                            style="color: #ff4d4d; font-size: 0.8rem; margin-top: -10px; display: none;"></div>
                        <input type="password" name="password" required placeholder="গোপন পাসওয়ার্ড দিন"
                            class="form-input w-full p-4 rounded-xl text-dark">
                        <input type="tel" name="mobile" required placeholder="মোবাইল নম্বর"
                            class="form-input w-full p-4 rounded-xl text-dark">
                        <button type="submit"
                            class="btn-payment btn-premium w-full py-5 rounded-xl text-white font-bold text-lg">
                            বিকাশ দিয়ে পে করুন <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Footer -->
    <footer class="py-10 px-6 border-t border-white/5 text-center">
        <p class="text-gray-500 mb-6">কোনো জিজ্ঞাসা আছে?</p>
        <a href="https://wa.me/8801707676797"
            class="inline-flex items-center space-x-3 bg-green-500/10 text-green-400 px-8 py-3 rounded-full hover:bg-green-500/20 transition font-bold">
            <i class="fa-brands fa-whatsapp text-2xl"></i>
            <span>আমাদের হোয়াটসঅ্যাপে মেসেজ দিন</span>
        </a>
        <div class="mt-12 text-gray-600 text-xs">
            © <?php echo date('Y'); ?> Bangla Chatbot. All rights reserved.
        </div>
    </footer>

    <script>
        const emailInput = document.getElementById('email');
        const emailWarning = document.getElementById('email-warning');
        const submitBtn = document.querySelector('.btn-payment') ;
        let timeout = null;

        emailInput.addEventListener('input', function() {
            const email = this.value;
            emailWarning.style.display = 'none';
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';

            if (email.length < 5 || !email.includes('@')) return;

            clearTimeout(timeout);
            timeout = setTimeout(() => {
                emailWarning.style.display = 'block';
                emailWarning.innerText = 'যাচাই করা হচ্ছে...';
                emailWarning.style.color = '#888';

                fetch(`check_email.php?email=${encodeURIComponent(email)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'exists') {
                            emailWarning.innerText = data.message;
                            emailWarning.style.color = '#ff4d4d';
                            submitBtn.disabled = true;
                            submitBtn.style.opacity = '0.5';
                        } else {
                            emailWarning.style.display = 'none';
                        }
                    })
                    .catch(err => console.error(err));
            }, 800);
        });

        document.getElementById('paymentForm').addEventListener('submit', function (e) {
            const btn = e.target.querySelector('.btn-payment');
            btn.innerHTML = 'প্রসেসিং হচ্ছে <i class="fa-solid fa-circle-notch fa-spin ml-2"></i>';
            btn.style.opacity = '0.7';
        });
    </script>
</body>

</html>