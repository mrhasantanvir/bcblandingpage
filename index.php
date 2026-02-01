<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot - আপনার ব্যবসার বিশ্বস্ত পার্টনার</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font (Hind Siliguri) -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #3b82f6;
            --secondary: #60a5fa;
            --dark-bg: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.7);
        }
        body {
            font-family: 'Hind Siliguri', sans-serif;
            background-color: var(--dark-bg);
            color: #f8fafc;
            overflow-x: hidden;
        }
        .gradient-text {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-gradient {
            background: radial-gradient(circle at top right, rgba(59, 130, 246, 0.15), transparent 40%),
                        radial-gradient(circle at bottom left, rgba(30, 64, 175, 0.1), transparent 40%);
        }
        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        .btn-premium {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-premium:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.5);
        }
        .feature-item {
            transition: all 0.3s ease;
        }
        .feature-item:hover {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 1rem;
        }
        input::placeholder {
            color: #94a3b8;
        }
    </style>
</head>
<body class="hero-gradient min-h-screen">

    <!-- Header / Logo -->
    <header class="py-8 text-center animate-fade-in">
        <div class="container mx-auto px-4">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Bangla Chatbot" class="h-16 mx-auto mb-4 drop-shadow-2xl">
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight mb-2">
                Bangla <span class="gradient-text">Chatbot</span>
            </h1>
            <p class="text-slate-400 text-sm md:text-base">আপনার ব্যবসার অটোমেশন ও গ্রাহক সেবার আধুনিক সমাধান</p>
        </div>
    </header>

    <main class="container mx-auto px-4 pb-20 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mt-8">
            
            <!-- Left Side: Features & Content -->
            <div class="space-y-8 animate-fade-in">
                <div>
                    <h2 class="text-2xl md:text-4xl font-bold leading-tight mb-6 italic">
                        কেন আপনার ব্যবসার জন্য <br>
                        <span class="gradient-text">Bangla Chatbot</span> সেরা পছন্দ?
                    </h2>
                    <p class="text-slate-300 mb-8 leading-relaxed">
                        ফেসবুক এবং মেসেঞ্জারে কাস্টমারের রিপ্লাই দিতে দিতে আপনি কি ক্লান্ত? আমাদের এআই চ্যাটবট আপনার হয়ে ২৪ ঘণ্টা কাজ করবে। এতে আপনার সময় বাঁচবে এবং কাস্টমার সন্তুষ্টি বাড়বে বহুগুণ।
                    </p>
                </div>

                <!-- Features list -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="feature-item p-6 glass-card border-none">
                        <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fa-solid fa-bolt text-blue-400"></i>
                        </div>
                        <h3 class="font-bold mb-2">ইনস্ট্যান্ট অটো-রিপ্লাই</h3>
                        <p class="text-slate-400 text-sm italic">গ্রাহক মেসেজ বা কমেন্ট করার ২ সেকেন্ডের মধ্যে উত্তর পাবে।</p>
                    </div>
                    <div class="feature-item p-6 glass-card border-none">
                        <div class="w-10 h-10 bg-indigo-500/20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fa-solid fa-comments text-indigo-400"></i>
                        </div>
                        <h3 class="font-bold mb-2">সহজ ড্যাশবোর্ড</h3>
                        <p class="text-slate-400 text-sm italic">খুব সহজেই নিজের স্মার্টফোন বা কম্পিউটার থেকে সেটআপ করতে পারবেন।</p>
                    </div>
                    <div class="feature-item p-6 glass-card border-none">
                        <div class="w-10 h-10 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fa-solid fa-robot text-cyan-400"></i>
                        </div>
                        <h3 class="font-bold mb-2">স্মার্ট এআই লজিক</h3>
                        <p class="text-slate-400 text-sm italic">কাস্টমার কি জানতে চাইছে তা বুঝে বুদ্ধিমান উত্তর দিতে সক্ষম।</p>
                    </div>
                    <div class="feature-item p-6 glass-card border-none">
                        <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center mb-4">
                            <i class="fa-solid fa-rocket text-green-400"></i>
                        </div>
                        <h3 class="font-bold mb-2">সেলস বৃদ্ধি করুন</h3>
                        <p class="text-slate-400 text-sm italic">সঠিক সময়ে সঠিক অফার দেখিয়ে কাস্টমারকে অর্ডারে কনভার্ট করে।</p>
                    </div>
                </div>
                
                <div class="bg-blue-500/10 p-6 rounded-2xl border border-blue-500/20 flex items-center space-x-4">
                    <i class="fa-solid fa-circle-check text-blue-500 text-2xl"></i>
                    <p class="text-sm font-medium">আমরা ইতিমদ্ধে ৫০০+ উদ্যোক্তাকে তাদের ব্যবসা অটোমেট করতে সাহায্য করেছি।</p>
                </div>
            </div>

            <!-- Right Side: Offering & Form -->
            <div class="lg:sticky lg:top-8">
                <div class="glass-card rounded-[2rem] p-8 md:p-10 relative overflow-hidden">
                    <!-- Badge -->
                    <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-6 py-2 rounded-bl-2xl shadow-lg">
                        সীমিত সময়ের মেগা অফার
                    </div>

                    <div class="text-center mb-10">
                        <h3 class="text-xl font-bold text-slate-300 uppercase tracking-widest mb-2">মেগা সাবস্ক্রিপশন (১ বছর)</h3>
                        <div class="flex justify-center items-baseline space-x-2">
                            <span class="text-6xl font-black text-white">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                            <span class="text-slate-500 line-through text-xl italic">৳৫,০০০</span>
                        </div>
                        <p class="mt-4 text-blue-400 font-semibold tracking-wide">১ বছরের পূর্ণ এক্সেস + ২৪/৭ সাপোর্ট</p>
                    </div>

                    <form id="paymentForm" action="process_payment.php" method="POST" class="space-y-5">
                        <div class="space-y-1">
                            <label class="text-sm font-medium text-slate-400 ml-1">পুরো নাম</label>
                            <input type="text" name="name" required placeholder="যেমন: হাসিব চৌধুরী" 
                                class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl p-4 text-white focus:ring-2 focus:ring-blue-500 transition">
                        </div>
                        
                        <div class="space-y-1">
                            <label class="text-sm font-medium text-slate-400 ml-1">ইমেইল এড্রেস</label>
                            <input type="email" id="email" name="email" required placeholder="example@mail.com" 
                                class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl p-4 text-white focus:ring-2 focus:ring-blue-500 transition">
                            <div id="email-warning" class="text-[0.7rem] ml-1 hidden"></div>
                        </div>

                        <div class="space-y-1">
                            <label class="text-sm font-medium text-slate-400 ml-1">পাসওয়ার্ড (লগইন এর জন্য)</label>
                            <input type="password" name="password" required placeholder="••••••••" 
                                class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl p-4 text-white focus:ring-2 focus:ring-blue-500 transition">
                        </div>

                        <div class="space-y-1">
                            <label class="text-sm font-medium text-slate-400 ml-1">মোবাইল নম্বর</label>
                            <input type="tel" name="mobile" required placeholder="01XXXXXXXXX" 
                                class="w-full bg-slate-800/50 border border-slate-700/50 rounded-xl p-4 text-white focus:ring-2 focus:ring-blue-500 transition">
                        </div>

                        <button type="submit" class="btn-payment btn-premium w-full py-5 rounded-2xl text-white font-black text-xl flex items-center justify-center space-x-3 mt-4">
                            <span>পেমেন্ট করতে এগিয়ে যান</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                    
                    <div class="mt-8 pt-8 border-t border-slate-700/50 flex flex-col items-center">
                        <span class="text-xs text-slate-500 uppercase tracking-widest mb-4">নিরাপদ পেমেন্ট পার্টনার</span>
                        <div class="flex space-x-6 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-500 cursor-default">
                            <span class="font-bold text-pink-500">bKash</span>
                            <span class="font-bold text-orange-500">Nagad</span>
                            <span class="font-bold text-blue-600">Rocket</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-12 bg-slate-900/50 border-t border-slate-800">
        <div class="container mx-auto px-4 text-center">
            <h4 class="text-slate-300 font-bold mb-6">আমাদের সাথে সরাসরি কথা বলুন</h4>
            <a href="https://wa.me/8801707676797" class="inline-flex items-center space-x-3 bg-green-500/10 text-green-400 px-10 py-4 rounded-full border border-green-500/20 font-bold hover:bg-green-500/20 transition-all">
                <i class="fa-brands fa-whatsapp text-2xl"></i>
                <span class="text-lg">হোয়াটসঅ্যাপ সাপোর্ট</span>
            </a>
            <p class="mt-12 text-slate-600 text-xs tracking-widest uppercase">
                &copy; <?php echo date('Y'); ?> Bangla Chatbot. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
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
                emailWarning.innerText = 'যাচাই করা হচ্ছে...';
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
            btn.innerHTML = 'প্রসেসিং হচ্ছে <i class="fa-solid fa-circle-notch fa-spin ml-2"></i>';
            btn.style.opacity = '0.7';
        });
    </script>
</body>
</html>