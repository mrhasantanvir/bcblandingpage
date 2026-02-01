<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangla Chatbot - Special Subscription Offer</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-glow"></div>
    <div class="bg-glow-bottom"></div>

    <div class="container">
        <header>
            <div class="logo">BANGLA CHATBOT</div>
        </header>

        <section class="hero">
            <h1>বিপ্লবী এআই প্রযুক্তির সাথে আপনার <span class="highlight">বিজনেস গড়ুন</span></h1>
            <p>আমাদের স্পেশাল অফারে সাবস্ক্রাইব করুন এবং আজই আপনার কাস্টমার সার্ভিসকে অটোমেটেড করুন।</p>

            <div class="glass-card">
                <div class="offer-header">
                    <span class="badge">Limited Time Offer</span>
                    <div class="price">৳<?php echo number_format(OFFER_PRICE, 0); ?> <span>/ Lifetime Access</span>
                    </div>
                </div>

                <ul class="features">
                    <li>উন্নত বাংলা এআই ইঞ্জিন (GPT-4 Powered)</li>
                    <li>২৪/৭ কাস্টমার অটোমেটেড রিপ্লাই</li>
                    <li>১ বছরের ফুল প্রিমিয়াম সাবস্ক্রিপশন</li>
                    <li>ফ্রি কাস্টম নলেজবেজ সেটআপ</li>
                    <li>বিকাশ পেমেন্টে ইনস্ট্যান্ট অ্যাক্টিভেশন</li>
                </ul>

                <form id="paymentForm" action="process_payment.php" method="POST">
                    <div class="form-group">
                        <label for="name">আপনার নাম</label>
                        <input type="text" id="name" name="name" placeholder="পুরো নাম লিখুন" required>
                    </div>
                    <div class="form-group">
                        <label for="email">ইমেইল অ্যাড্রেস</label>
                        <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">পাসওয়ার্ড (নতুন অ্যাকাউন্টের জন্য)</label>
                        <input type="password" id="password" name="password" placeholder="কমপক্ষে ৬টি অক্ষর" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">মোবাইল নম্বর</label>
                        <input type="tel" id="mobile" name="mobile" placeholder="01XXXXXXXXX" required>
                    </div>

                    <button type="submit" class="btn-payment">
                        <img src="https://www.bkash.com/uploads/2021/05/bKash-Logo.png" alt="bKash">
                        ৯৯৯ টাকায় এখনই কিনুন
                    </button>
                </form>
            </div>
        </section>

        <section id="features">
            <h2 class="section-title">কেন বাংলা চ্যাটবট সেরা?</h2>
            <div class="features-grid">
                <div class="feature-box">
                    <h3>মানুষের মতো কথোপকথন</h3>
                    <p>আমাদের এআই একদম মানুষের মতো সাবলীল বাংলায় কথা বলতে পারে, যা আপনার কাস্টমারের আস্থা বাড়াবে।</p>
                </div>
                <div class="feature-box">
                    <h3>দ্রুত ইন্টিগ্রেশন</h3>
                    <p>আপনার ফেসবুক পেজ বা ওয়েবসাইটে মাত্র ৫ মিনিটে আমাদের চ্যাটবট সেটআপ করে নিন।</p>
                </div>
                <div class="feature-box">
                    <h3>সাশ্রয়ী অফার</h3>
                    <p>৯৯৯ টাকার এই এক বছরের অফারে আপনি পাচ্ছেন সকল প্রিমিয়াম ফিচার যা আপনার বিজনেস গ্রোথ নিশ্চিত করবে।
                    </p>
                </div>
            </div>
        </section>

        <footer style="text-align: center; padding: 2rem; color: var(--text-dim); font-size: 0.8rem;">
            &copy; <?php echo date('Y'); ?> Bangla Chatbot. All rights reserved.
        </footer>
    </div>

    <script>
        // Simple form validation or enhancements can go here
        document.getElementById('paymentForm').addEventListener('submit', function (e) {
            const btn = e.target.querySelector('.btn-payment');
            btn.innerHTML = 'প্রসেসিং হচ্ছে...';
            btn.disabled = true;
        });
    </script>
</body>

</html>