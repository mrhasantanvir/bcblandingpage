<?php
require_once 'config.php';
// Version Control Update: Fix Demo Video Modal
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>স্পেশাল অফার - বাংলা চ্যাটবট</title>
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SD8ZMD3P4N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-SD8ZMD3P4N');
    </script>

    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
            t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "rrie15ix28");
    </script>

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

        /* Custom disabled style */
        .cursor-not-allowed {
            cursor: not-allowed;
            opacity: 0.6;
        }

        /* Animated Gradient Background (Very Light) */
        body {
            background: linear-gradient(270deg, #eff6ff, #fdf2f8, #f0f9ff, #faf5ff);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            /* Anti-Flicker Hidden State */
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Neon Text Effect */
        .neon-text {
            color: #fff;
            background-color: #000;
            border: 2px solid #fff;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow:
                0 0 5px #fff,
                0 0 10px #fff,
                0 0 20px #0ea5e9,
                0 0 30px #0ea5e9,
                0 0 40px #0ea5e9;
            text-shadow:
                0 0 5px #fff,
                0 0 10px #fff,
                0 0 20px #0ea5e9,
                0 0 30px #0ea5e9,
                0 0 40px #0ea5e9;
        }
    </style>
    <script>
        // Reveal immediately after HTML is parsed
        function revealBody() {
            document.body.style.opacity = '1';
            document.body.style.visibility = 'visible';
        }
        document.addEventListener("DOMContentLoaded", revealBody);
        window.onload = revealBody;
        // Fallback safety
        setTimeout(revealBody, 1000); 
    </script>
</head>

<body class="min-h-screen flex flex-col justify-center py-4 sm:px-6 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-md animate-fade-in">
        <!-- Logo Area -->
        <div class="text-center mb-6">
            <img class="mx-auto h-16 w-auto" src="https://app.banglachatbot.com/assets/img/logo.png"
                alt="Bangla Chatbot">
            <div class="mt-4">
                <h3
                    class="text-xl md:text-2xl font-bold text-red-600 border-2 border-red-200 bg-red-50 rounded-lg p-3 inline-block shadow-sm">
                    প্যাকেজ: ১ বছরের মেগা সাবস্ক্রিপশন মাত্র ৯৯৯ টাকা
                </h3>
            </div>
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
                <div class="mt-2 flex justify-center items-baseline">
                    <span
                        class="text-4xl font-extrabold text-blue-600">৳<?php echo number_format(OFFER_PRICE, 0); ?></span>
                    <span class="ml-1 text-xl font-medium text-gray-500 line-through">৳১২০০০</span>
                </div>
                <ul class="mt-4 text-sm text-left space-y-2 text-gray-600 px-4">
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>অটো রিপ্লাই ও কমেন্ট মার্কেটিং</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>মেসেঞ্জার শপ ইন্টিগ্রেশন</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>ব্রডকাস্টিং ও সিকোয়েন্স</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>লিড জেনারেশন ডাটাবেজ</li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>চ্যাটজিপিটি (ChatGPT) ইন্টিগ্রেশন
                    </li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>গুগল শিট (Google Sheet) ইন্টিগ্রেশন
                    </li>
                    <li><i class="fa-solid fa-check-circle text-green-500 mr-2"></i>২৪/৭ প্রায়োরিটি সাপোর্ট</li>
                </ul>
            </div>

            <!-- Demo Button -->
            <div class="mb-6 text-center">
                <button onclick="openVideoModal()"
                    class="bg-red-600 text-white px-6 py-2 rounded-full font-bold hover:bg-red-700 transition shadow-lg flex items-center justify-center mx-auto space-x-2">
                    <i class="fa-solid fa-play-circle text-xl"></i>
                    <span>ডেমো দেখুন</span>
                </button>
            </div>

            <!-- Registration Form -->
            <div class="mb-5 text-center bg-yellow-50 p-3 rounded-md border border-yellow-200">
                <p class="text-gray-800 font-semibold animate-pulse">
                    আপনার একাউন্ট রেজিষ্টার করতে এখনি পুরন করুন
                </p>
            </div>
            <form id="registrationForm" class="space-y-5" action="process_payment.php" method="POST">

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">ব্যবহারকারীর নাম (Name)</label>
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
                        <input id="mobile" name="mobile" type="tel" required
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border"
                            placeholder="017XXXXXXXX">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">পাসওয়ার্ড</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-lock text-gray-400"></i>
                        </div>
                        <input id="password" name="password" type="password" required
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md p-3 border"
                            placeholder="গোপন পাসওয়ার্ড দিন">
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" id="submitBtn"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-base font-bold text-white gradient-bg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                        বিকাশ পেমেন্ট করুন <i class="fa-solid fa-arrow-right ml-2 mt-1"></i>
                    </button>
                    <p class="text-xs text-center text-gray-400 mt-2">
                        <i class="fa-solid fa-shield-halved"></i> ১০০% সিকিউর পেমেন্ট
                    </p>
                </div>
            </form>

            <div class="mt-6 text-center">
                <a href="https://wa.link/iauuxn" target="_blank"
                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                    <i class="fa-brands fa-whatsapp mr-2 text-xl"></i> সরাসরি কথা বলতে চাইলে হোয়াটসঅ্যাপ করুন
                </a>
            </div>

        </div>

        <p class="text-center text-gray-500 text-xs mt-8">
            &copy; <?php echo date('Y'); ?> বাংলা চ্যাটবট। সর্বস্বত্ব সংরক্ষিত।
        </p>
    </div>


    <!-- Logic Script -->
    <script>
        // Email Verification Script
        const emailInput = document.getElementById('email');
        const submitBtn = document.getElementById('submitBtn');
        const warningText = document.getElementById('email-warning');

        if (emailInput) {
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

    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
                onclick="closeVideoModal()"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal panel -->
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start justify-center">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <div class="aspect-w-16 aspect-h-9 relative" style="padding-bottom: 56.25%;">
                                <iframe id="youtubeFrame" class="absolute top-0 left-0 w-full h-full rounded-lg" src=""
                                    title="Demo Video" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        onclick="closeVideoModal()">
                        বন্ধ করুন
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Video Modal Logic
        function openVideoModal() {
            const modal = document.getElementById('videoModal');
            const frame = document.getElementById('youtubeFrame');
            const videoId = '8Gp-2hVhYEQ';

            if (modal && frame) {
                modal.classList.remove('hidden');
                frame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
            } else {
                console.error('Modal elements not found');
            }
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const frame = document.getElementById('youtubeFrame');

            if (modal && frame) {
                modal.classList.add('hidden');
                frame.src = '';
            }
        }

        // Close on Escape key
        document.addEventListener('keydown', function (event) {
            if (event.key === "Escape") {
                closeVideoModal();
            }
        });
    </script>

</body>

</html>