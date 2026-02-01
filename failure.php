<?php
require_once 'config.php';
$error_msg = $_GET['msg'] ?? 'আপনার পেমেন্টটি সম্পন্ন করা সম্ভব হয়নি।';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>পেমেন্ট ব্যর্থ - বাংলা চ্যাটবট</title>
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
    </style>
</head>

<body class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <!-- Main Card -->
        <div class="bg-white py-12 px-6 shadow-2xl sm:rounded-lg sm:px-10 border-t-4 border-red-500 text-center">

            <!-- Error Icon -->
            <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-red-100 mb-6">
                <i class="fa-solid fa-xmark text-4xl text-red-600"></i>
            </div>

            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                দুঃখিত! পেমেন্ট ব্যর্থ
            </h2>

            <div class="bg-red-50 border border-red-100 rounded-lg p-6 mb-8 text-left">
                <p class="text-red-800 font-medium">
                    সমস্যাটি হলো:
                </p>
                <p class="mt-2 text-gray-700">
                    <?php echo htmlspecialchars($error_msg); ?>
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-4">
                <a href="index.php"
                    class="w-full flex justify-center py-4 px-4 border border-transparent rounded-md shadow-sm text-lg font-bold text-white bg-blue-600 hover:bg-blue-700 transition duration-150">
                    আবার চেষ্টা করুন <i class="fa-solid fa-rotate-right ml-2 mt-1"></i>
                </a>

                <a href="https://wa.me/8801707676797" target="_blank"
                    class="w-full flex justify-center py-3 px-4 border border-green-200 rounded-md shadow-sm text-base font-bold text-green-700 bg-white hover:bg-green-50 transition duration-150">
                    <i class="fa-brands fa-whatsapp mr-2 text-xl"></i> হোয়াটসঅ্যাপে সাপোর্ট নিন
                </a>
            </div>

            <p class="mt-8 text-sm text-gray-500">
                পেমেন্ট সংক্রান্ত কোনো অভিযোগ থাকলে আমাদের জানাতে পারেন।
            </p>
        </div>

        <p class="text-center text-gray-500 text-xs mt-8">
            &copy; <?php echo date('Y'); ?> বাংলা চ্যাটবট। সর্বস্বত্ব সংরক্ষিত।
        </p>
    </div>

</body>

</html>