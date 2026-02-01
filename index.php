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
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #030014;
            --accent-purple: #7c3aed;
            --accent-blue: #0ea5e9;
        }

        body {
            font-family: 'Outfit', 'Hind Siliguri', sans-serif;
            background-color: var(--bg-color);
            color: #ffffff;
            overflow-x: hidden;
            background: 
                radial-gradient(circle at 0% 0%, rgba(124, 58, 237, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 100% 100%, rgba(14, 165, 233, 0.1) 0%, transparent 50%);
        }

        /* Moving background blobs for that futuristic ambient look */
        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.2), rgba(14, 165, 233, 0.2));
            filter: blur(80px);
            border-radius: 50%;
            z-index: -1;
            animation: move 20s infinite alternate;
        }

        @keyframes move {
            from { transform: translate(-10%, -10%); }
            to { transform: translate(10%, 10%); }
        }

        .hero-title {
            letter-spacing: -0.02em;
            background: linear-gradient(to bottom, #ffffff 50%, rgba(255,255,255,0.5) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .pill-btn {
            background: #ffffff;
            color: #000;
            padding: 12px 28px;
            border-radius: 9999px;
            font-weight: 700;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }

        .pill-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255,255,255,0.2);
        }

        /* Orbiting elements */
        .orbit-wrap {
            position: relative;
            width: 500px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .orbit-ring {
            position: absolute;
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        .ring-1 { width: 180px; height: 180px; }
        .ring-2 { width: 340px; height: 340px; }
        .ring-3 { width: 500px; height: 500px; }

        .orbit-item {
            position: absolute;
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.2);
        }

        .orbiting-1 { animation: orbit1 15s linear infinite; }
        .orbiting-2 { animation: orbit2 25s linear infinite; }
        .orbiting-3 { animation: orbit3 35s linear infinite; }

        @keyframes orbit1 { from { transform: rotate(0deg) translateX(90px) rotate(0deg); } to { transform: rotate(360deg) translateX(90px) rotate(-360deg); } }
        @keyframes orbit2 { from { transform: rotate(0deg) translateX(170px) rotate(0deg); } to { transform: rotate(360deg) translateX(170px) rotate(-360deg); } }
        @keyframes orbit3 { from { transform: rotate(0deg) translateX(250px) rotate(0deg); } to { transform: rotate(360deg) translateX(250px) rotate(-360deg); } }

        .stat-center {
            text-align: center;
            z-index: 10;
        }

        .glass-form {
            background: rgba(255,255,255,0.02);
            border: 1px solid rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border-radius: 32px;
        }

        .input-futuristic {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.08);
            color: #fff;
            padding: 16px;
            border-radius: 16px;
            transition: all 0.3s;
        }

        .input-futuristic:focus {
            border-color: var(--accent-purple);
            background: rgba(255,255,255,0.06);
            outline: none;
        }
    </style>
</head>
<body class="antialiased selection:bg-purple-500/30">

    <div class="blob" style="top: 10%; left: 10%;"></div>
    <div class="blob" style="bottom: 10%; right: 10%; animation-delay: -5s;"></div>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 w-full z-50 px-6 py-6 md:px-12 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Logo" class="h-8">
            <span class="text-xl font-extrabold tracking-tighter">Bangla<span class="text-purple-500">Chatbot</span></span>
        </div>
        <div class="hidden md:flex space-x-10 text-xs font-bold uppercase tracking-widest opacity-40">
            <a href="#" class="hover:opacity-100 transition">Solutions</a>
            <a href="#" class="hover:opacity-100 transition">Features</a>
            <a href="#" class="hover:opacity-100 transition">Pricing</a>
        </div>
        <div class="flex items-center space-x-6">
            <a href="https://app.banglachatbot.com/home/login_page" class="text-xs font-bold uppercase tracking-widest opacity-40 hover:opacity-100 transition">Log In</a>
            <button onclick="document.getElementById('checkout').scrollIntoView({behavior:'smooth'})" class="text-xs font-bold uppercase tracking-widest bg-white text-black px-6 py-3 rounded-full hover:bg-slate-200 transition">Join Now</button>
        </div>
    </nav>

    <!-- Main Section -->
    <main class="relative pt-32 pb-20 px-6 md:px-12 max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-16 min-h-screen">
        
        <div class="lg:w-1/2 space-y-10">
            <h1 class="hero-title text-6xl md:text-8xl font-extrabold leading-[0.95]">
                Simplify Your <br>
                Service with <br>
                Bangla Chatbot
            </h1>
            <p class="text-slate-400 text-lg md:text-xl max-w-lg leading-relaxed">
                আপনার ফেসবুক পেইজের কাস্টমারদের রিপ্লাই দিন অটোমেটিক। কোনো কাস্টমার আর ফিরে যাবে না খালি হাতে। স্মার্ট অটোমেশনের যাত্রা শুরু হোক আজই।
            </p>
            <div class="flex items-center space-x-6">
                <button onclick="document.getElementById('checkout').scrollIntoView({behavior:'smooth'})" class="pill-btn group">
                    Start Project 
                    <i class="fa-solid fa-arrow-right ml-3 text-sm transition-transform group-hover:translate-x-1"></i>
                </button>
                <div class="flex items-center space-x-2 text-slate-500 font-bold uppercase text-[0.6rem] tracking-widest">
                    <span>Verified by 500+ Businesses</span>
                </div>
            </div>
        </div>

        <!-- Orbiting Visualization -->
        <div class="lg:w-1/2 flex justify-center items-center">
            <div class="orbit-wrap">
                <div class="orbit-ring ring-1"></div>
                <div class="orbit-ring ring-2"></div>
                <div class="orbit-ring ring-3"></div>
                
                <div class="stat-center">
                    <span class="text-6xl font-extrabold">500+</span>
                    <p class="text-[0.6rem] font-black uppercase tracking-[0.3em] text-slate-500 mt-2">Active Specialists</p>
                </div>

                <!-- Animated Icons -->
                <div class="orbit-item orbiting-1">
                    <i class="fa-solid fa-message text-purple-400"></i>
                </div>
                <div class="orbit-item orbiting-2" style="animation-delay: -5s;">
                    <i class="fa-solid fa-robot text-blue-400"></i>
                </div>
                <div class="orbit-item orbiting-3" style="animation-delay: -15s;">
                    <i class="fa-solid fa-bolt text-yellow-400"></i>
                </div>
                <div class="orbit-item orbiting-2" style="animation-delay: -10s;">
                    <i class="fa-solid fa-shield-halved text-green-400"></i>
                </div>
            </div>
        </div>
    </main>

    <!-- Partners -->
    <div class="py-12 border-y border-white/5 opacity-20">
        <div class="max-w-7xl mx-auto px-12 flex justify-between items-center flex-wrap gap-8">
            <span class="text-2xl font-black italic tracking-tighter">Dreamure</span>
            <span class="text-2xl font-black italic tracking-tighter">SWITCH.WIN</span>
            <span class="text-2xl font-black italic tracking-tighter">Sphere</span>
            <span class="text-2xl font-black italic tracking-tighter">PinSpace</span>
            <span class="text-2xl font-black italic tracking-tighter">Visionix</span>
        </div>
    </div>

    <!-- Checkout Section -->
    <section id="checkout" class="py-32 px-6 md:px-12">
        <div class="max-w-4xl mx-auto">
            <div class="glass-form p-10 md:p-16">
                <div class="text-center mb-16">
                    <span class="text-xs font-black uppercase tracking-[0.5em] text-purple-500 mb-6 block">Pricing</span>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-4 italic">১ বছরের স্পেশাল অফার</h2>
                    <div class="text-7xl font-black tracking-tighter text-white mb-2">৳<?php echo number_format(OFFER_PRICE, 0); ?></div>
                    <p class="text-slate-500 font-bold italic line-through">নিয়মিত মূল্য ৳৫,০০০</p>
                </div>

                <form id="paymentForm" action="process_payment.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <input type="text" name="name" required placeholder="Full Name" class="input-futuristic">
                    <input type="email" id="email" name="email" required placeholder="Email Address" class="input-futuristic">
                    <input type="password" name="password" required placeholder="Create Password" class="input-futuristic">
                    <input type="tel" name="mobile" required placeholder="Mobile Number" class="input-futuristic">
                    
                    <div class="md:col-span-2">
                        <button type="submit" class="btn-payment w-full bg-white text-black py-5 rounded-2xl font-black text-xl hover:bg-purple-500 hover:text-white transition-all">
                            PAY WITH BKASH
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-20 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-12 flex flex-col items-center">
            <div class="flex space-x-4 mb-10">
                <a href="https://wa.me/8801707676797" class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center hover:bg-green-500 transition">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                </a>
            </div>
            <p class="text-slate-600 text-[0.6rem] font-black uppercase tracking-[0.5em]">
                &copy; <?php echo date('Y'); ?> Bangla Chatbot. All Rights Reserved.
            </p>
        </div>
    </footer>

    <script>
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