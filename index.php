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
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        /* Custom disabled style */
        .cursor-not-allowed {
            cursor: not-allowed;
            opacity: 0.6;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-md animate-fade-in">
        <!-- Logo Area -->
        <div class="text-center mb-6">
            <img class="mx-auto h-16 w-auto" src="https://app.banglachatbot.com/assets/img/logo.png" alt="Bangla Chatbot">
            <h2 class="mt-4 text-3xl font-extrabold text-gray-900">
                অ্যাকাউন্ট তৈরি করুন
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                আপনার ব্যবসার অটোমেশন শুরু হোক এখান থেকেই
            </p>
        </div>

        <!-- Main Card -->
        <div class="bg-white py-8 px-4 shadow-2xl sm:rounded-lg sm:px-10 border-t-4 border-blue-600 relative overflow-hidden">
            
            <!-- Offer Badge -->
            <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg shadow-sm">
                সীমিত সময়ের অফার
            </div>

            <!-- Package Info Section -->
            <div class="bg-blue-50 border border-blue-100 rounded-lg p-5 mb-6 text-center">
                <h3 class="text-lg font-semibold text-blue-800">প্যাকেজ: ১ বছরের মেগা সাবস্ক্রিপশন</h3>
                <div class="mt-2 flex justify-center items-baseline">
                    <span class="text-4xl font-extrabold text-blue-600">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                    <span class="ml-1 text-xl font-medium text-gray-500 line-through">৳৫০০০</span>
                </div>
                <ul class="mt-4 text-sm text-left space-y-2 text-gray-600 px-4">
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>আনলিমিটেড ফেসবুক পেজ</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>অটো রিপ্লাই ও কমেন্ট মার্কেটিং</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>মেসেঞ্জার শপ ইন্টিগ্রেশন</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>ব্রডকাস্টিং ও সিকোয়েন্স</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>লিড জেনারেশন ডাটাবেজ</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>২৪/৭ প্রায়োরিটি সাপোর্ট</li>
                </ul>
            </div>

            <!-- Registration Form -->
            <form id="registrationForm" class="space-y-5" action="process_payment.php" method="POST" onsubmit="event.preventDefault(); openPaymentModal();">
                
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">ব্যবহারকারীর নাম (Name)</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-regular fa-user text-gray-400"></i>
                        </div>
                        <input id="name" name="name" type="text" required class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border" placeholder="আপনার নাম লিখুন">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">ইমেইল এড্রেস</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-regular fa-envelope text-gray-400"></i>
                        </div>
                        <input id="email" name="email" type="email" required class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border" placeholder="example@mail.com">
                    </div>
                    <!-- Email Warning -->
                    <p id="email-warning" class="text-xs text-red-600 mt-1 hidden"></p>
                </div>

                <!-- Mobile -->
                <div>
                    <label for="mobile" class="block text-sm font-medium text-gray-700">মোবাইল নাম্বার</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-phone text-gray-400"></i>
                        </div>
                        <input id="mobile" name="mobile" type="tel" required class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border" placeholder="017XXXXXXXX">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">পাসওয়ার্ড</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-lock text-gray-400"></i>
                        </div>
                        <input id="password" name="password" type="password" required class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border" placeholder="গোপন পাসওয়ার্ড দিন">
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" id="submitBtn" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-bold text-white gradient-bg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        পেমেন্ট করতে এগিয়ে যান <i class="fa-solid fa-arrow-right ml-2 mt-1"></i>
                    </button>
                </div>
            </form>

        </div>
        
        <p class="text-center text-gray-500 text-xs mt-8">
            &copy; <?php echo date('Y'); ?> বাংলা চ্যাটবট। সর্বস্বত্ব সংরক্ষিত।
        </p>
    </div>

    <!-- Payment Modal (Hidden by default) -->
    <div id="paymentModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-sm w-full mx-4">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4 text-center" id="modal-title">
                            পেমেন্ট মেথড নির্বাচন করুন
                        </h3>
                        <div class="mt-2 space-y-3">
                            <!-- bKash Button -->
                            <button onclick="processPayment('bkash')" class="w-full flex items-center justify-between p-3 border rounded-lg hover:bg-pink-50 border-pink-200 group transition">
                                <span class="font-bold text-gray-700">বিকাশ (bKash)</span>
                                <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-pink-500"></i>
                            </button>
                            
                            <!-- Nagad Button -->
                            <button onclick="processPayment('nagad')" class="w-full flex items-center justify-between p-3 border rounded-lg hover:bg-orange-50 border-orange-200 group transition">
                                <span class="font-bold text-gray-700">নগদ (Nagad)</span>
                                <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-orange-500"></i>
                            </button>

                            <!-- Rocket Button -->
                            <button onclick="processPayment('rocket')" class="w-full flex items-center justify-between p-3 border rounded-lg hover:bg-purple-50 border-purple-200 group transition">
                                <span class="font-bold text-gray-700">রকেট (Rocket)</span>
                                <i class="fa-solid fa-chevron-right text-gray-400 group-hover:text-purple-500"></i>
                            </button>

                            <!-- Card Button -->
                            <button onclick="processPayment('card')" class="w-full flex items-center justify-between p-3 border rounded-lg hover:bg-blue-50 border-blue-200 group transition">
                                <span class="font-bold text-gray-700">ডেবিট/ক্রেডিট কার্ড</span>
                                <i class="fa-regular fa-credit-card text-gray-400 group-hover:text-blue-500"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="closePaymentModal()" class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                    বন্ধ করুন
                </button>
            </div>
        </div>
    </div>

    <!-- Logic Script -->
    <script>
        function openPaymentModal() {
            // Validate inputs first
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const mobile = document.getElementById('mobile').value;
            const password = document.getElementById('password').value;
            
            if(name && email && mobile && password) {
                // If email check passed (handled by valid check below)
                if (document.getElementById('submitBtn').disabled) {
                    return; // Don't open if button disabled
                }
                document.getElementById('paymentModal').classList.remove('hidden');
            } else {
                alert('অনুগ্রহ করে নাম, ইমেইল, মোবাইল এবং পাসওয়ার্ড পূরণ করুন।');
            }
        }

        function closePaymentModal() {
            document.getElementById('paymentModal').classList.add('hidden');
        }

        function processPayment(method) {
            const form = document.getElementById('registrationForm');
            
            if(method === 'bkash') {
                const btn = document.querySelector('button[onclick="processPayment(\'bkash\')"]');
                btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i> প্রসেসিং হচ্ছে...';
                
                // Submit main form
                form.submit();
            } else {
                alert('বর্তমানে শুধুমাত্র বিকাশ পেমেন্ট গ্রহণ করা হচ্ছে। অনুগ্রহ করে বিকাশ সিলেক্ট করুন।');
            }
        }

        // Email Verification Script
        const emailInput = document.getElementById('email');
        const submitBtn = document.getElementById('submitBtn');
        const warningText = document.getElementById('email-warning');

        if(emailInput) {
            emailInput.addEventListener('input', function () {
                const email = this.value;
                if (email.length < 5 || !email.includes('@')) {
                    warningText.classList.add('hidden');
                    warningText.innerText = '';
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('cursor-not-allowed', 'opacity-50');
                    return;
                }

                // Debounce could be added here, but direct fetch is simple for now
                fetch(`check_email.php?email=${encodeURIComponent(email)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'exists') {
                            submitBtn.disabled = true;
                            submitBtn.classList.add('cursor-not-allowed', 'opacity-50');
                            warningText.innerText = data.message;
                            warningText.classList.remove('hidden');
                        } else {
                            submitBtn.disabled = false;
                            submitBtn.classList.remove('cursor-not-allowed', 'opacity-50');
                            warningText.classList.add('hidden');
                            warningText.innerText = '';
                        }
                    })
                    .catch(err => console.error('Email check failed', err));
            });
        }
    </script>

</body>
</html>
