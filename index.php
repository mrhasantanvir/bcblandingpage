<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot - Business Automation Expert</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Hind+Siliguri:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --brand-primary: #2563eb;
            --brand-secondary: #3b82f6;
            --text-main: #1e293b;
            --text-muted: #64748b;
        }

        body {
            font-family: 'Inter', 'Hind Siliguri', sans-serif;
            background-color: #f8fafc;
            color: var(--text-main);
            -webkit-font-smoothing: antialiased;
        }

        .hero-pattern {
            background-color: #f8fafc;
            background-image: radial-gradient(#e2e8f0 1.5px, transparent 1.5px);
            background-size: 30px 30px;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
        }

        .btn-brand {
            background-color: var(--brand-primary);
            color: white;
            transition: all 0.2s ease-in-out;
        }

        .btn-brand:hover {
            background-color: #1d4ed8;
            transform: translateY(-1px);
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
        }

        .form-input {
            border: 1px solid #e2e8f0;
            background-color: white;
            transition: all 0.2s;
        }

        .form-input:focus {
            border-color: var(--brand-primary);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            outline: none;
        }

        .feature-icon {
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            color: var(--brand-primary);
        }

        h1,
        h2,
        h3 {
            font-family: 'Hind Siliguri', sans-serif;
        }
    </style>
</head>

<body class="hero-pattern min-h-screen">

    <!-- Simple Navigation -->
    <nav class="py-6 px-4 md:px-8 max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="https://app.banglachatbot.com/assets/img/logo.png" alt="Bangla Chatbot" class="h-10">
            <span class="text-xl font-bold tracking-tight text-slate-800">Bangla <span
                    class="text-blue-600">Chatbot</span></span>
        </div>
        <a href="https://wa.me/8801707676797"
            class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition flex items-center">
            <i class="fa-brands fa-whatsapp text-green-500 mr-2 text-lg"></i> সাপোর্ট নিন
        </a>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-12 md:py-20 flex flex-col lg:flex-row items-center gap-16">

        <!-- Left Side: Content & Social Proof -->
        <div class="lg:w-1/2 space-y-10">
            <div class="animate-fade-in">
                <span
                    class="inline-block py-1 px-3 rounded-full bg-blue-50 text-blue-600 text-xs font-bold uppercase tracking-wider mb-6">
                    স্মার্ট বিজনেস সলিউশন
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 leading-[1.15] mb-6">
                    আপনার ব্যবসার বিক্রয় বাড়ান <br>
                    <span class="text-blue-600">এআই চ্যাটবট</span> দিয়ে
                </h1>
                <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                    গ্রাহকের প্রতিটি মেসেজের ইনস্ট্যান্ট উত্তর দিন। আমাদের চ্যাটবট আপনার ফেসবুক ও মেসেঞ্জার পেজকে অটোমেট
                    করে কেনাবেচাকে করবে আগের চেয়েও সহজ।
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="flex items-start space-x-4">
                    <div
                        class="feature-icon w-12 h-12 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-blue-100">
                        <i class="fa-solid fa-bolt-lightning text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-800 mb-1">অটো-রিপ্লাই</h3>
                        <p class="text-sm text-slate-500 italic">গ্রাহকের কমন সব প্রশ্নের ইনস্ট্যান্ট উত্তর।</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div
                        class="feature-icon w-12 h-12 rounded-2xl flex items-center justify-center shrink-0 shadow-sm border border-blue-100">
                        <i class="fa-solid fa-chart-line text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-800 mb-1">সেলস বৃদ্ধি</h3>
                        <p class="text-sm text-slate-500 italic">লিড কালেক্ট করে অর্ডার কনভার্ট করার ক্ষমতা।</p>
                    </div>
                </div>
            </div>

            <!-- Trusted Badge -->
            <div class="pt-6 border-t border-slate-200">
                <div class="flex items-center space-x-4 opacity-70">
                    <div class="flex -space-x-2">
                        <img src="https://ui-avatars.com/api/?name=User+1&background=random"
                            class="w-8 h-8 rounded-full border-2 border-white">
                        <img src="https://ui-avatars.com/api/?name=User+2&background=random"
                            class="w-8 h-8 rounded-full border-2 border-white">
                        <img src="https://ui-avatars.com/api/?name=User+3&background=random"
                            class="w-8 h-8 rounded-full border-2 border-white">
                    </div>
                    <p class="text-sm font-medium text-slate-600">প্ৰায় ৫০০+ উদ্যোক্তা আমাদের ওপর বিশ্বাস রেখেছেন</p>
                </div>
            </div>
        </div>

        <!-- Right Side: Order Card -->
        <div class="lg:w-1/2 w-full max-w-xl">
            <div
                class="bg-white rounded-[2.5rem] shadow-[0_20px_60px_-15px_rgba(0,0,0,0.08)] p-8 md:p-12 border border-slate-100 relative overflow-hidden">

                <!-- Pricing Header -->
                <div class="relative z-10 text-center mb-10">
                    <p class="text-sm font-bold text-blue-600 uppercase tracking-widest mb-2">মেগা সাবস্ক্রিপশন প্ল্যান
                    </p>
                    <div class="flex justify-center items-baseline space-x-2">
                        <span
                            class="text-7xl font-black text-slate-900">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                        <div class="text-left">
                            <p class="text-lg text-slate-400 line-through font-medium">৳৫,০০০</p>
                            <p class="text-xs font-bold text-red-500">বড় ছাড়!</p>
                        </div>
                    </div>
                    <p class="mt-4 text-slate-500 text-sm font-medium italic">১ বছরের আনলিমিটেড এক্সেস + হাই-স্পিড
                        সার্ভার</p>
                </div>

                <!-- Registration Form -->
                <form id="paymentForm" action="process_payment.php" method="POST" class="space-y-4 relative z-10">
                    <div>
                        <input type="text" name="name" required placeholder="আপনার পুরো নাম"
                            class="form-input w-full p-4 rounded-2xl text-slate-800 placeholder:text-slate-400">
                    </div>
                    <div>
                        <input type="email" id="email" name="email" required placeholder="আপনার ইমেইল এড্রেস"
                            class="form-input w-full p-4 rounded-2xl text-slate-800 placeholder:text-slate-400">
                        <div id="email-warning" class="text-[0.7rem] mt-2 ml-1 hidden"></div>
                    </div>
                    <div>
                        <input type="password" name="password" required placeholder="লগইন পাসওয়ার্ড সেট করুন"
                            class="form-input w-full p-4 rounded-2xl text-slate-800 placeholder:text-slate-400">
                    </div>
                    <div>
                        <input type="tel" name="mobile" required placeholder="মোবাইল নম্বর"
                            class="form-input w-full p-4 rounded-2xl text-slate-800 placeholder:text-slate-400">
                    </div>

                    <button type="submit"
                        class="btn-payment btn-brand w-full py-5 rounded-2xl font-bold text-lg flex items-center justify-center space-x-3 group">
                        <span>বিকাশ দিয়ে পে করুন</span>
                        <i class="fa-solid fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                    </button>

                    <p class="text-center text-slate-400 text-[0.65rem] uppercase tracking-widest pt-4">সব পেমেন্ট
                        গেটওয়ে সাপোর্ট করে</p>
                </form>

                <!-- Footer Pattern -->
                <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-600"></div>
            </div>
        </div>
    </main>

    <!-- Content Section -->
    <section class="max-w-4xl mx-auto px-4 py-20 text-center border-t border-slate-100">
        <h2 class="text-3xl font-bold text-slate-900 mb-8 italic">কেন আপনি <span class="text-blue-600">Bangla
                Chatbot</span> ব্যবহার করবেন?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-left">
            <div class="p-6 bg-white rounded-3xl shadow-sm border border-slate-100">
                <h3 class="font-bold text-lg mb-3">গ্রাহক হারাবেন না</h3>
                <p class="text-slate-600 text-sm leading-relaxed">মাঝরাতে কোনো গ্রাহক মেসেজ দিলে আপনি হয়তো ঘুমিয়ে,
                    কিন্তু চ্যাটবট ঘুমায় না। এটি তৎক্ষণাৎ রিপ্লাই দিয়ে গ্রাহককে ধরে রাখে।</p>
            </div>
            <div class="p-6 bg-white rounded-3xl shadow-sm border border-slate-100">
                <h3 class="font-bold text-lg mb-3">দক্ষতা বৃদ্ধি</h3>
                <p class="text-slate-600 text-sm leading-relaxed">একই প্রশ্ন বারবার করার উত্তর দেওয়ার বিরক্তিকর কাজ থেকে
                    মুক্তি পান। চ্যাটবটকে শিখিয়ে দিন, সে-ই সব উত্তর দিবে।</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 flex flex-col items-center">
            <p class="text-slate-400 text-sm mb-6">আমাদের সাপোর্ট টিম আপনার অপেক্ষায়</p>
            <div class="flex space-x-8">
                <img src="https://app.banglachatbot.com/assets/img/logo.png" class="h-8 grayscale opacity-30">
            </div>
            <p class="mt-8 text-slate-400 text-xs">
                &copy; <?php echo date('Y'); ?> Bangla Chatbot. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        const emailInput = document.getElementById('email');
        const emailWarning = document.getElementById('email-warning');
        const submitBtn = document.querySelector('.btn-payment');
        let timeout =  null;

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
                emailWarning.style.color = '#64748b';

                fetch(`check_email.php?email=${encodeURIComponent(email)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'exists') {
                            emailWarning.innerText = data.message;
                            emailWarning.style.color = '#ef4444';
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