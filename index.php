<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>স্পেশাল অফার - বাংলা চ্যাটবট</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font (Hind Siliguri for Bangla) -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Hind Siliguri', sans-serif;
            background-color: #f3f4f6;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #0062cc 0%, #007bff 100%);
        }

        /* Smooth Fade In Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-md animate-fade-in">
        <!-- Logo Area -->
        <div class="text-center mb-6">
            <img class="mx-auto h-16 w-auto" src="https://app.banglachatbot.com/assets/img/logo.png"
                alt="Bangla Chatbot">
            <h2 class="mt-4 text-3xl font-extrabold text-gray-900">
                অ্যাকাউন্ট তৈরি করুন
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                আপনার ব্যবসার অটোমেশন শুরু হোক এখান থেকেই
            </p>
        </div>

        <!-- Main Card -->
        <div
            class="bg-white py-8 px-4 shadow-2xl sm:rounded-lg sm:px-10 border-t-4 border-blue-600 relative overflow-hidden">

            <!-- Offer Badge -->
            <div
                class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg shadow-sm">
                সীমিত সময়ের অফার
            </div>

            <!-- Package Info Section -->
            <div class="bg-blue-50 border border-blue-100 rounded-lg p-5 mb-6 text-center">
                <h3 class="text-lg font-semibold text-blue-800">প্যাকেজ: ১ বছরের মেগা সাবস্ক্রিপশন</h3>
                <div class="mt-2 flex justify-center items-baseline">
                    <span
                        class="text-4xl font-extrabold text-blue-600">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                    <?php if (OFFER_PRICE > 1): ?>
                        <span class="ml-1 text-xl font-medium text-gray-500 line-through">৳৫০০০</span>
                    <?php endif; ?>
                </div>
                <ul class="mt-4 text-sm text-left space-y-2 text-gray-600 px-4">
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>আনলিমিটেড ফেসবুক পেজ</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>আনলিমিটেড সাবস্ক্রাইবার</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>২৪/৭ সাপোর্ট</li>
                </ul>
            </div>

            <!-- Registration Form -->
            <form id="paymentForm" class="space-y-5" action="process_payment.php" method="POST">

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">পুরো নাম</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-regular fa-user text-gray-400"></i>
                        </div>
                        <input id="name" name="name" type="text" required
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border"
                            placeholder="আপনার নাম লিখুন">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">ইমেইল এড্রেস</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-regular fa-envelope text-gray-400"></i>
                        </div>
                        <input id="email" name="email" type="email" required
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border"
                            placeholder="example@mail.com">
                    </div>
                    <div id="email-warning" style="color: #ff4d4d; font-size: 0.8rem; margin-top: 5px; display: none;">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">পাসওয়ার্ড (নতুন অ্যাকাউন্টের
                        জন্য)</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-lock text-gray-400"></i>
                        </div>
                        <input id="password" name="password" type="password" required
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border"
                            placeholder="গোপন পাসওয়ার্ড দিন">
                    </div>
                </div>

                <!-- Mobile -->
                <div>
                    <label for="mobile" class="block text-sm font-medium text-gray-700">মোবাইল নম্বর</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-phone text-gray-400"></i>
                        </div>
                        <input id="mobile" name="mobile" type="tel" required
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border"
                            placeholder="01XXXXXXXXX">
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="btn-payment w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-bold text-white gradient-bg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        পেমেন্ট করতে এগিয়ে যান <i class="fa-solid fa-arrow-right ml-2 mt-1"></i>
                    </button>
                    <p class="text-xs text-center text-gray-500 mt-2">বিকাশ পেমেন্ট গেটওয়েতে রিডাইরেক্ট করা হবে</p>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">
                            পেমেন্ট পার্টনার
                        </span>
                    </div>
                </div>
                <div class="mt-4 grid grid-cols-3 gap-3 opacity-60 grayscale hover:grayscale-0 transition duration-300">
                    <div class="flex items-center justify-center p-2 border rounded bg-gray-50 text-pink-600 font-bold">
                        bKash</div>
                    <div
                        class="flex items-center justify-center p-2 border rounded bg-gray-50 text-orange-600 font-bold">
                        Nagad</div>
                    <div class="flex items-center justify-center p-2 border rounded bg-gray-50 text-blue-800 font-bold">
                        VISA</div>
                </div>
            </div>
        </div>

        <p class="text-center text-gray-500 text-xs mt-8">
            &copy; <?php echo date('Y'); ?> বাংলা চ্যাটবট। সর্বস্বত্ব সংরক্ষিত।
        </p>
    </div>

    <!-- Logic Script -->
    <script>
        const emailInput = document.getElementById('email');
        const emailWarning = document.getElementById('email-warning');
        const submitBtn = document.querySelector('.btn-payment');
        let timeout = null;

        emailInput.addEventListener('input', function () {
            const email = this.value;
            emailWarning.style.display = 'none';
            emailInput.style.borderColor = 'rgba(209, 213, 219, 1)';
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';

            if (email.length < 5 || !email.includes('@')) return;

            clearTimeout(timeout);
            timeout = setTimeout(() => {
                emailWarning.style.display = 'block';
                emailWarning.style.color = '#aaa';
                emailWarning.innerText = 'যাচাই করা হচ্ছে...';

                fetch(`check_email.php?email=${encodeURIComponent(email)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'exists') {
                            emailWarning.innerText = data.message;
                            emailWarning.style.color = '#ff4d4d';
                            emailInput.style.borderColor = '#ff4d4d';
                            submitBtn.disabled = true;
                            submitBtn.style.opacity = '0.5';
                        } else {
                            emailWarning.style.display = 'none';
                        }
                    })
                    .catch(err => console.error('Email check failed', err));
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