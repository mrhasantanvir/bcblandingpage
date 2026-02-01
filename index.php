<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot - Next Gen Automation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-deep: #0a0518;
            --accent-purple: #8b5cf6;
            --accent-pink: #d946ef;
            --accent-gold: #f59e0b;
        }

        body {
            font-family: 'Outfit', 'Hind Siliguri', sans-serif;
            background-color: var(--bg-deep);
            color: #ffffff;
            margin: 0;
            overflow-x: hidden;
            background: 
                radial-gradient(circle at 10% 20%, rgba(139, 92, 246, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(217, 70, 239, 0.1) 0%, transparent 40%),
                var(--bg-deep);
        }

        .glass-nav {
            background: rgba(10, 5, 24, 0.7);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .hero-title {
            line-height: 1.1;
            background: linear-gradient(to right, #fff 40%, rgba(255,255,255,0.6) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .neon-btn {
            background: #ffffff;
            color: #000;
            box-shadow: 0 0 20px rgba(255,255,255,0.2);
            transition: all 0.4s ease;
        }

        .neon-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(255,255,255,0.4);
        }

        /* Orbit Animation inspired by screenshot */
        .orbit-container {
            position: relative;
            width: 450px;
            height: 450px;
            margin: auto;
        }

        .orbit-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .inner-circle { width: 150px; height: 150px; }
        .middle-circle { width: 300px; height: 300px; }
        .outer-circle { width: 450px; height: 450px; }

        .orbital-item {
            position: absolute;
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: spin 20s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg) translateX(150px) rotate(0deg); }
            to { transform: rotate(360deg) translateX(150px) rotate(-360deg); }
        }

        .orbital-item-2 { animation: spin2 25s linear infinite; }
        @keyframes spin2 {
            from { transform: rotate(0deg) translateX(225px) rotate(0deg); }
            to { transform: rotate(360deg) translateX(225px) rotate(-360deg); }
        }

        .center-stat {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        /* Form Styling */
        .premium-input {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            color: white;
            transition: all 0.3s ease;
        }
        .premium-input:focus {
            background: rgba(255,255,255,0.06);
            border-color: var(--accent-purple);
            outline: none;
            box-shadow: 0 0 15px rgba(139, 92, 246, 0.2);
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="antialiased">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-nav py-4 px-6 md:px-12 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Logo" class="h-8">
            <span class="text-xl font-bold tracking-tighter">Bangla<span class="text-purple-500">Chatbot</span></span>
        </div>
        <div class="hidden md:flex space-x-8 text-sm font-medium opacity-60">
            <a href="#" class="hover:text-white transition">Features</a>
            <a href="#" class="hover:text-white transition">Solutions</a>
            <a href="#" class="hover:text-white transition">Pricing</a>
        </div>
        <div class="flex items-center space-x-4">
            <a href="https://app.banglachatbot.com/home/login_page" class="text-sm font-medium opacity-60 hover:opacity-100 transition">Log In</a>
            <button onclick="document.getElementById('order-form').scrollIntoView({behavior:'smooth'})" class="bg-purple-600 px-5 py-2 rounded-full text-sm font-bold shadow-lg hover:bg-purple-500 transition">Join Now</button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen pt-32 pb-20 px-6 md:px-12 max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-16">
        
        <div class="lg:w-1/2 space-y-8 text-center lg:text-left">
            <h1 class="hero-title text-5xl md:text-7xl font-extrabold leading-tight">
                Unlock Your Business <br>
                <span class="text-purple-500">Automation</span> Power <br>
                In One Click!
            </h1>
            <p class="text-slate-400 text-lg md:text-xl max-w-xl mx-auto lg:mx-0">
                ফেসবুক এবং মেসেঞ্জারে কাস্টমারের রিপ্লাই দিন ম্যাজিকের মতো। আমাদের এআই চ্যাটবট আপনার ব্যবসাকে করবে স্মার্ট এবং অটোমেটেড।
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                <button onclick="document.getElementById('order-form').scrollIntoView({behavior:'smooth'})" class="neon-btn px-10 py-4 rounded-full font-bold text-lg flex items-center group">
                    Start Today 
                    <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </button>
                <a href="https://wa.me/8801707676797" class="text-slate-300 font-semibold flex items-center hover:text-white transition">
                    <i class="fa-brands fa-whatsapp text-green-500 mr-2 text-2xl"></i>
                    Get Support
                </a>
            </div>
        </div>

        <!-- Orbiting Graphic -->
        <div class="lg:w-1/2 relative hidden md:block">
            <div class="orbit-container">
                <div class="orbit-circle inner-circle"></div>
                <div class="orbit-circle middle-circle"></div>
                <div class="orbit-circle outer-circle"></div>
                
                <div class="center-stat">
                    <span class="text-5xl font-extrabold">500+</span>
                    <p class="text-sm text-slate-500 font-bold uppercase tracking-widest mt-2">Active Users</p>
                </div>

                <!-- Orbiting items -->
                <div class="orbital-item" style="animation-duration: 15s;">
                    <i class="fa-solid fa-comment-dots text-purple-400"></i>
                </div>
                <div class="orbital-item orbital-item-2" style="animation-duration: 20s; animation-delay: -5s;">
                    <i class="fa-solid fa-robot text-blue-400"></i>
                </div>
                <div class="orbital-item orbital-item-2" style="animation-duration: 25s; animation-delay: -15s;">
                    <i class="fa-solid fa-rocket text-pink-400"></i>
                </div>
                <div class="orbital-item" style="animation-duration: 18s; animation-delay: -10s;">
                    <i class="fa-solid fa-chart-line text-green-400"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Row -->
    <div class="py-12 border-y border-white/5 opacity-30 grayscale hover:grayscale-0 transition duration-1000">
        <div class="max-w-7xl mx-auto px-6 flex flex-wrap justify-between items-center gap-8">
            <img src="https://ui-avatars.com/api/?name=Partner+1&background=000&color=fff&size=128" class="h-8">
            <img src="https://ui-avatars.com/api/?name=Partner+2&background=000&color=fff&size=128" class="h-8">
            <img src="https://ui-avatars.com/api/?name=Partner+3&background=000&color=fff&size=128" class="h-8">
            <img src="https://ui-avatars.com/api/?name=Partner+4&background=000&color=fff&size=128" class="h-8">
            <img src="https://ui-avatars.com/api/?name=Partner+5&background=000&color=fff&size=128" class="h-8">
        </div>
    </div>

    <!-- Order Form Section -->
    <section id="order-form" class="py-24 px-6 md:px-12 bg-white/0">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-4">সীমাবদ্ধ সময়ের অফার</h2>
                <div class="inline-flex items-center bg-purple-600/20 text-purple-400 px-6 py-2 rounded-full font-bold">
                    ১ বছরের মেগা সাবস্ক্রিপশন মাত্র ৳<?php echo number_format(OFFER_PRICE, 0); ?>
                </div>
            </div>

            <div class="bg-white/5 backdrop-blur-3xl p-8 md:p-12 rounded-[3rem] border border-white/10 shadow-3xl scroll-reveal">
                <form id="paymentForm" action="process_payment.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-400 ml-1">আপনার নাম</label>
                        <input type="text" name="name" required placeholder="HASIB CHOWDHURY" class="premium-input w-full p-4 rounded-2xl">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-400 ml-1">ইমেইল এড্রেস</label>
                        <input type="email" id="email" name="email" required placeholder="MAIL@EXAMPLE.COM" class="premium-input w-full p-4 rounded-2xl">
                        <div id="email-warning" class="text-[0.6rem] ml-1 mt-1 hidden"></div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-400 ml-1">পাসওয়ার্ড (লগইনের জন্য)</label>
                        <input type="password" name="password" required placeholder="••••••••" class="premium-input w-full p-4 rounded-2xl">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-400 ml-1">মোবাইল নম্বর</label>
                        <input type="tel" name="mobile" required placeholder="01XXXXXXXXX" class="premium-input w-full p-4 rounded-2xl">
                    </div>
                    <div class="md:col-span-2 pt-6">
                        <button type="submit" class="btn-payment bg-white text-black w-full py-5 rounded-2xl font-black text-xl hover:bg-slate-200 transition-all flex items-center justify-center space-x-3">
                            <span>বিকাশ দিয়ে পে করুন</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        <p class="text-center text-[0.6rem] text-slate-500 uppercase tracking-widest mt-4">Security Guaranteed by bKash Gateway</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="flex items-center justify-center space-x-2 mb-8 grayscale opacity-50">
                <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Logo" class="h-6">
                <span class="text-lg font-bold tracking-tighter">BanglaChatbot</span>
            </div>
            <p class="text-slate-500 text-xs tracking-widest uppercase">
                &copy; <?php echo date('Y'); ?> Bangla Chatbot. Built for the future of business.
            </p>
        </div>
    </footer>

    <script>
        // Scroll Animation
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('visible');
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));
        });

        // Email Check
        const emailInput = document.getElementById('email');
        const emailWarning = document.getElementById('email-warning');
        const submitBtn = document.querySelector('.btn-payment');
        let timeout = null;

        emailInput.addEventListener('input', function() {
            const email = this.value;
            emailWarning.classList.add('hidden');
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';

            if (email.length < 5 || !email.includes('@')) return;

            clearTimeout(timeout);
            timeout = setTimeout(() => {
                emailWarning.classList.remove('hidden');
                emailWarning.innerText = 'CHECKING...';
                emailWarning.style.color = '#94a3b8';

                fetch(`check_email.php?email=${encodeURIComponent(email)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'exists') {
                            emailWarning.innerText = data.message;
                            emailWarning.style.color = '#f87171';
                            submitBtn.disabled = true;
                            submitBtn.style.opacity = '0.5';
                        } else {
                            emailWarning.classList.add('hidden');
                        }
                    })
                    .catch(err => console.error(err));
            }, 800);
        });

        document.getElementById('paymentForm').addEventListener('submit', function (e) {
            const btn = e.target.querySelector('.btn-payment');
            btn.innerHTML = 'PROCESSING <i class="fa-solid fa-circle-notch fa-spin ml-2"></i>';
            btn.style.opacity = '0.7';
        });
    </script>
</body>
</html>