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
    <!-- End Meta Pixel Code -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SD8ZMD3P4N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-SD8ZMD3P4N');
    </script>

    <script>
        // Force hide body immediately to prevent flickering (FOUC)
        document.documentElement.style.backgroundColor = "#f8fafc";
        document.write('<style id="anti-flicker">body{display:none !important;}</style>');
        window.addEventListener('load', () => {
            const style = document.getElementById('anti-flicker');
            if (style) style.remove();
            document.body.style.display = 'block';
            document.body.style.opacity = '0';
            setTimeout(() => { document.body.style.opacity = '1'; }, 10);
        });
    </script>

    <style>
        body {
            font-family: 'Outfit', 'Hind Siliguri', sans-serif;
            background-color: #f8fafc;
            color: #0f172a;
            margin: 0;
            overflow-x: hidden;
            transition: opacity 0.8s ease;
        }

        :root {
            --bg-color: #f8fafc;
            --accent-purple: #7c3aed;
            --accent-blue: #0ea5e9;
            --text-main: #0f172a;
            --text-muted: #64748b;
        }

        /* Ambient Background with Fixed Base Color */
        .ambient-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f8fafc;
            /* Slate-50 */
            z-index: -2;
        }

        .ambient-glow {
            position: absolute;
            width: 80vw;
            height: 80vw;
            background: radial-gradient(circle, rgba(124, 58, 237, 0.08) 0%, transparent 70%);
            top: -20%;
            left: -10%;
            z-index: -1;
            filter: blur(80px);
        }

        .ambient-glow-2 {
            position: absolute;
            width: 60vw;
            height: 60vw;
            background: radial-gradient(circle, rgba(14, 165, 233, 0.08) 0%, transparent 70%);
            bottom: -10%;
            right: -10%;
            z-index: -1;
            filter: blur(80px);
        }

        .hero-title {
            line-height: 0.95;
            letter-spacing: -0.04em;
            background: linear-gradient(to bottom, #0f172a 30%, #475569 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .pill-btn {
            background: #0f172a;
            /* Slate-900 */
            color: #ffffff;
            padding: 16px 36px;
            border-radius: 9999px;
            font-weight: 800;
            font-size: 1rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-flex;
            align-items: center;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.2);
        }

        .pill-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.3);
            background: #1e293b;
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
            border: 1px solid rgba(15, 23, 42, 0.05);
            /* Very light slate border */
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
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(15, 23, 42, 0.05);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
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
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 40px;
            box-shadow: 0 40px 100px rgba(148, 163, 184, 0.2);
            /* Soft slate shadow */
        }

        .input-dark {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            color: #0f172a;
            padding: 18px;
            border-radius: 20px;
            width: 100%;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
        }

        .input-dark:focus {
            background: #ffffff;
            border-color: var(--accent-purple);
            outline: none;
            box-shadow: 0 0 0 4px rgba(124, 58, 237, 0.1);
        }

        .input-dark::placeholder {
            color: #94a3b8;
        }

        .nav-link {
            font-size: 0.7rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            color: #475569;
            opacity: 0.8;
            transition: all 0.3s;
        }

        .nav-link:hover {
            opacity: 1;
            color: #0f172a;
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
        class="fixed top-0 left-0 w-full z-50 px-8 py-8 md:px-16 flex justify-between items-center transition-all duration-500 bg-white/50 backdrop-blur-md border-b border-white/20">
        <div class="flex items-center space-x-3">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Logo" class="h-8">
            <span class="text-xl font-black tracking-tighter uppercase italic text-slate-900">Bangla<span
                    class="text-purple-600">Chatbot</span></span>
        </div>
        <div class="flex items-center space-x-8">
            <a href="https://app.banglachatbot.com/home/login_page" class="nav-link underline underline-offset-8">Log
                In</a>
            <button onclick="document.getElementById('buy-now').scrollIntoView({behavior:'smooth'})"
                class="bg-slate-900 text-white px-8 py-3 rounded-full font-black text-xs uppercase tracking-widest hover:bg-slate-800 transition shadow-lg shadow-slate-900/10">Join
                Now</button>
        </div>
    </nav>

    <!-- Hero Content -->
    <!-- Hero Content -->
    <main
        class="relative z-10 pt-48 pb-32 px-8 md:px-16 max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-24">

        <div class="lg:w-1/2 space-y-12 text-center lg:text-left">
            <div>
                <h1 class="hero-title text-7xl md:text-[6rem] font-extrabold italic text-slate-900 leading-tight">
                    Simplify Your <br>
                    Service with <br>
                    Bangla Chatbot
                </h1>
                <p class="mt-8 text-slate-600 text-xl font-medium leading-relaxed max-w-xl mx-auto lg:mx-0">
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
                    <div class="flex items-center space-x-2 text-slate-900 font-bold">
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
                    <h3 class="text-6xl font-black italic text-slate-900">500+</h3>
                    <p class="text-[0.6rem] font-black uppercase tracking-[0.4em] text-slate-500 mt-2">Active
                        Specialists</p>
                </div>

                <!-- Orbiting Nodes -->
                <div class="orbit-item orbit-1">
                    <i class="fa-solid fa-message text-purple-600"></i>
                </div>
                <div class="orbit-item orbit-2" style="animation-delay: -5s;">
                    <i class="fa-solid fa-robot text-blue-600"></i>
                </div>
                <div class="orbit-item orbit-3" style="animation-delay: -15s;">
                    <i class="fa-solid fa-rocket text-pink-600"></i>
                </div>
                <div class="orbit-item orbit-2" style="animation-delay: -15s;">
                    <i class="fa-solid fa-bolt text-yellow-600"></i>
                </div>
            </div>
        </div>
    </main>

    <!-- Partner Logos (Monochrome) -->
    <div class="py-16 border-y border-slate-200 bg-white/50">
        <div class="max-w-7xl mx-auto px-12 flex flex-wrap justify-between items-center gap-12 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
            <span class="text-2xl font-black tracking-tighter italic text-slate-800">DREAMURE</span>
            <span class="text-2xl font-black tracking-tighter italic text-slate-800">SWITCH.WIN</span>
            <span class="text-2xl font-black tracking-tighter italic text-slate-800">GLOWSPHERE</span>
            <span class="text-2xl font-black tracking-tighter italic text-slate-800">PINSPACE</span>
            <span class="text-2xl font-black tracking-tighter italic text-slate-800">VISIONIX</span>
        </div>
    </div>

    <!-- Pricing / Order Section -->
    <section id="buy-now" class="py-40 px-8">
        <div class="max-w-5xl mx-auto">
            <div class="glass-card p-12 md:p-20 relative overflow-hidden bg-white/80 border border-white/50 shadow-xl">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-black italic mb-6 text-slate-900">আপনার ব্যবসার জন্য স্পেশাল অফার</h2>
                    <div class="flex flex-col items-center">
                        <span
                            class="text-8xl font-black tracking-tighter text-slate-900">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                        <div class="mt-4 flex items-center space-x-4">
                            <span class="text-slate-400 line-through text-2xl font-bold">৳৫,০০০</span>
                            <span
                                class="bg-purple-600 px-3 py-1 rounded-md text-white text-xs font-black uppercase tracking-widest shadow-lg shadow-purple-600/30">Mega
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
                            class="btn-payment w-full bg-slate-900 text-white py-6 rounded-3xl font-black text-2xl hover:bg-slate-800 transition shadow-xl shadow-slate-900/20 transform hover:-translate-y-1">
                            PAY WITH BKASH
                        </button>
                        <p class="text-center mt-6 text-[0.6rem] font-black uppercase tracking-[0.4em] text-slate-400">
                            Secure Payment SSL Encrypted</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-24 border-t border-slate-200 text-center bg-slate-50">
        <div class="flex justify-center space-x-10 mb-12 grayscale opacity-40 hover:opacity-100 transition duration-500">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" class="h-8">
        </div>
        <p class="text-[0.6rem] font-black uppercase tracking-[0.6em] text-slate-400">
            &copy; <?php echo date('Y'); ?> Bangla Chatbot. The Future is Automated.
        </p>
    </footer>

    <script>
        // Smooth reveal on scroll helper
        const reveal = () => {
            const elements = document.querySelectorAll('.glass-card, .hero-title');
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }
            });
        };
        window.addEventListener('scroll', reveal);

        // Email check
        const emailInput = document.getElementById('email');
        const submitBtn = document.querySelector('.btn-payment');

        emailInput.addEventListener('input', function () {
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

        document.getElementById('paymentForm').addEventListener('submit', function () {
            submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i>';
        });
    </script>
</body>

</html>
