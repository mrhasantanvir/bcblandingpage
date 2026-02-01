<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot | Next-Gen AI Automation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --bg-color: #030014;
            --accent-purple: #7c3aed;
            --accent-blue: #0ea5e9;
        }

        body {
            font-family: 'Outfit', 'Hind Siliguri', sans-serif;
            background-color: #030014;
            /* Forced dark background */
            color: #ffffff;
            margin: 0;
            overflow-x: hidden;
        }

        /* Ambient Background with Fixed Base Color */
        .ambient-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #030014;
            z-index: -2;
        }

        .ambient-glow {
            position: absolute;
            width: 80vw;
            height: 80vw;
            background: radial-gradient(circle, rgba(124, 58, 237, 0.15) 0%, transparent 70%);
            top: -20%;
            left: -10%;
            z-index: -1;
            filter: blur(60px);
        }

        .ambient-glow-2 {
            position: absolute;
            width: 60vw;
            height: 60vw;
            background: radial-gradient(circle, rgba(14, 165, 233, 0.1) 0%, transparent 70%);
            bottom: -10%;
            right: -10%;
            z-index: -1;
            filter: blur(60px);
        }

        .hero-title {
            line-height: 0.95;
            letter-spacing: -0.04em;
            background: linear-gradient(to bottom, #ffffff 60%, rgba(255, 255, 255, 0.4) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .pill-btn {
            background: #ffffff;
            color: #000;
            padding: 16px 36px;
            border-radius: 9999px;
            font-weight: 800;
            font-size: 1rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-flex;
            align-items: center;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }

        .pill-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px rgba(255, 255, 255, 0.3);
        }

        /* Orbiting Visualization */
        .orbit-container {
            position: relative;
            width: 500px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .orbit-ring {
            position: absolute;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 50%;
        }

        .ring-1 {
            width: 160px;
            height: 160px;
        }

        .ring-2 {
            width: 320px;
            height: 320px;
        }

        .ring-3 {
            width: 480px;
            height: 480px;
        }

        .orbit-item {
            position: absolute;
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .orbit-1 {
            animation: rotate1 20s linear infinite;
        }

        .orbit-2 {
            animation: rotate2 30s linear infinite;
        }

        .orbit-3 {
            animation: rotate3 40s linear infinite;
        }

        @keyframes rotate1 {
            from {
                transform: rotate(0deg) translateX(80px) rotate(0deg);
            }

            to {
                transform: rotate(360deg) translateX(80px) rotate(-360deg);
            }
        }

        @keyframes rotate2 {
            from {
                transform: rotate(0deg) translateX(160px) rotate(0deg);
            }

            to {
                transform: rotate(360deg) translateX(160px) rotate(-360deg);
            }
        }

        @keyframes rotate3 {
            from {
                transform: rotate(0deg) translateX(240px) rotate(0deg);
            }

            to {
                transform: rotate(360deg) translateX(240px) rotate(-360deg);
            }
        }

        .center-text {
            text-align: center;
            z-index: 10;
        }

        /* Glass Form Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 40px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.6);
        }

        .input-dark {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 18px;
            border-radius: 20px;
            width: 100%;
            transition: all 0.3s;
        }

        .input-dark:focus {
            background: rgba(255, 255, 255, 0.06);
            border-color: var(--accent-purple);
            outline: none;
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.2);
        }

        .nav-link {
            font-size: 0.7rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            opacity: 0.4;
            transition: opacity 0.3s;
        }

        .nav-link:hover {
            opacity: 1;
        }
    </style>
</head>

<body class="antialiased">

    <!-- Ambient Elements -->
    <div class="ambient-bg">
        <div class="ambient-glow"></div>
        <div class="ambient-glow-2"></div>
    </div>

    <!-- Navigation -->
    <nav
        class="fixed top-0 left-0 w-full z-50 px-8 py-8 md:px-16 flex justify-between items-center transition-all duration-500">
        <div class="flex items-center space-x-3">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Logo" class="h-8">
            <span class="text-xl font-black tracking-tighter uppercase italic">Bangla<span
                    class="text-purple-500">Chatbot</span></span>
        </div>
        <div class="hidden lg:flex items-center space-x-12">
            <a href="#" class="nav-link">Solutions</a>
            <a href="#" class="nav-link">Integrations</a>
            <a href="#" class="nav-link">Pricing</a>
        </div>
        <div class="flex items-center space-x-8">
            <a href="https://app.banglachatbot.com/home/login_page"
                class="nav-link !opacity-60 underline underline-offset-8">Log In</a>
            <button onclick="document.getElementById('buy-now').scrollIntoView({behavior:'smooth'})"
                class="bg-white text-black px-8 py-3 rounded-full font-black text-xs uppercase tracking-widest hover:bg-slate-200 transition">Join
                Now</button>
        </div>
    </nav>

    <!-- Hero Content -->
    <main
        class="relative z-10 pt-48 pb-32 px-8 md:px-16 max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-24">

        <div class="lg:w-1/2 space-y-12 text-center lg:text-left">
            <div>
                <h1 class="hero-title text-7xl md:text-[6rem] font-extrabold italic">
                    Simplify Your <br>
                    Service with <br>
                    Bangla Chatbot
                </h1>
                <p class="mt-8 text-slate-400 text-xl font-medium leading-relaxed max-w-xl mx-auto lg:mx-0">
                    আপনার ফেসবুক ও মেসেঞ্জার পেইজের কাস্টমারদের রিপ্লাই দিন অটোমেটিকভাবে। স্মার্ট এআই এর মাধ্যমে ব্যবসার
                    গতি বাড়িয়ে নিন বহুগুণ।
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6">
                <button onclick="document.getElementById('buy-now').scrollIntoView({behavior:'smooth'})"
                    class="pill-btn group">
                    <span>Get Started</span>
                    <i class="fa-solid fa-arrow-right ml-4 transition-transform group-hover:translate-x-1"></i>
                </button>
                <div class="flex flex-col items-start text-left">
                    <span class="text-xs font-black uppercase tracking-[0.3em] text-slate-500 mb-1">Trusted
                        Partner</span>
                    <div class="flex items-center space-x-2 text-slate-200 font-bold">
                        <i class="fa-solid fa-star text-yellow-500 text-xs"></i>
                        <span>500+ Businesses Verified</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orbit Graphic -->
        <div class="lg:w-1/2 flex justify-center items-center">
            <div class="orbit-container">
                <div class="orbit-ring ring-1"></div>
                <div class="orbit-ring ring-2"></div>
                <div class="orbit-ring ring-3"></div>

                <div class="center-text">
                    <h3 class="text-6xl font-black italic">500+</h3>
                    <p class="text-[0.6rem] font-black uppercase tracking-[0.4em] text-slate-500 mt-2">Active
                        Specialists</p>
                </div>

                <!-- Orbiting Nodes -->
                <div class="orbit-item orbit-1">
                    <i class="fa-solid fa-message text-purple-400"></i>
                </div>
                <div class="orbit-item orbit-2" style="animation-delay: -5s;">
                    <i class="fa-solid fa-robot text-blue-400"></i>
                </div>
                <div class="orbit-item orbit-3" style="animation-delay: -15s;">
                    <i class="fa-solid fa-rocket text-pink-400"></i>
                </div>
                <div class="orbit-item orbit-2" style="animation-delay: -15s;">
                    <i class="fa-solid fa-bolt text-yellow-500"></i>
                </div>
            </div>
        </div>
    </main>

    <!-- Partner Logos (Monochrome) -->
    <div class="py-16 border-y border-white/5 bg-white/0">
        <div class="max-w-7xl mx-auto px-12 flex flex-wrap justify-between items-center gap-12 opacity-30">
            <span class="text-2xl font-black tracking-tighter italic">DREAMURE</span>
            <span class="text-2xl font-black tracking-tighter italic">SWITCH.WIN</span>
            <span class="text-2xl font-black tracking-tighter italic">GLOWSPHERE</span>
            <span class="text-2xl font-black tracking-tighter italic">PINSPACE</span>
            <span class="text-2xl font-black tracking-tighter italic">VISIONIX</span>
        </div>
    </div>

    <!-- Pricing / Order Section -->
    <section id="buy-now" class="py-40 px-8">
        <div class="max-w-5xl mx-auto">
            <div class="glass-card p-12 md:p-20 relative overflow-hidden">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-black italic mb-6">আপনার ব্যবসার জন্য স্পেশাল অফার</h2>
                    <div class="flex flex-col items-center">
                        <span
                            class="text-8xl font-black tracking-tighter text-white">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                        <div class="mt-4 flex items-center space-x-4">
                            <span class="text-slate-500 line-through text-2xl font-bold">৳৫,০০০</span>
                            <span
                                class="bg-purple-600 px-3 py-1 rounded-md text-xs font-black uppercase tracking-widest">Mega
                                Sale</span>
                        </div>
                    </div>
                </div>

                <form id="paymentForm" action="process_payment.php" method="POST"
                    class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-[0.6rem] font-black uppercase tracking-widest text-slate-500 ml-1">Full
                            Name</label>
                        <input type="text" name="name" required placeholder="Hasib Chowdhury" class="input-dark">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[0.6rem] font-black uppercase tracking-widest text-slate-500 ml-1">Email
                            Address</label>
                        <input type="email" id="email" name="email" required placeholder="name@example.com"
                            class="input-dark">
                        <div id="email-warning" class="text-[0.6rem] mt-2 ml-1 hidden"></div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[0.6rem] font-black uppercase tracking-widest text-slate-500 ml-1">Account
                            Password</label>
                        <input type="password" name="password" required placeholder="••••••••" class="input-dark">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[0.6rem] font-black uppercase tracking-widest text-slate-500 ml-1">Mobile
                            Number</label>
                        <input type="tel" name="mobile" required placeholder="01XXXXXXXXX" class="input-dark">
                    </div>

                    <div class="md:col-span-2 pt-6">
                        <button type="submit"
                            class="btn-payment w-full bg-white text-black py-6 rounded-3xl font-black text-2xl hover:bg-slate-100 transition shadow-[0_20px_40px_rgba(255,255,255,0.1)]">
                            PAY WITH BKASH
                        </button>
                        <p class="text-center mt-6 text-[0.6rem] font-black uppercase tracking-[0.4em] text-slate-600">
                            Secure Payment SSL Encrypted</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-24 border-t border-white/5 text-center">
        <div class="flex justify-center space-x-10 mb-12 grayscale opacity-40">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" class="h-8">
        </div>
        <p class="text-[0.6rem] font-black uppercase tracking-[0.6em] text-slate-600">
            &copy; <?php echo date('Y'); ?> Bangla Chatbot. The Future is Automated.
        </p>
    </footer>

    <script>
        // Smooth reveal on scroll helper
        const reveal = () =>  {
            const elements = document.querySelectorAll('.glass-card, .hero-title');
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if(rect.top < window.innerHeight - 100) {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }
            });
        };
        window.addEventListener('scroll', reveal);
        
        // Email check
        const emailInput = document.getElementById('email');
        const submitBtn = document.querySelector('.btn-payment');
        
        emailInput.addEventListener('input', function() {
            const email = this.value;
            if (email.length < 5 || !email.includes('@')) return;

            fetch(`check_email.php?email=${encodeURIComponent(email)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'exists') {
                        submitBtn.disabled = true;
                        submitBtn.style.opacity = '0.3';
                    } else {
                        submitBtn.disabled = false;
                        submitBtn.style.opacity = '1';
                    }
                });
        });

        document.getElementById('paymentForm').addEventListener('submit', function() {
            submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i>';
        });
    </script>
</body>

</html>