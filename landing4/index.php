<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>নারিকেল নাড়ু - ঢাকা ফুড সার্ভিস</title>
    
    <!-- Hind siligure front   -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Hind Siliguri', Arial, sans-serif;
            background-color: #f5e6d3;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Section 1 - Hero Product Image */
        .hero-section {
            background: linear-gradient(135deg, #f5e6d3 0%, #e8d4ba 100%);
            padding: 40px 20px;
            text-align: center;
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .hero-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .hero-title {
            font-size: 2.5em;
            color: #c1272d;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            font-weight: bold;
        }

        .price-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .price-item {
            margin: 15px 0;
            padding: 10px;
            border-bottom: 1px dashed #ddd;
        }

        .price-item:last-child {
            border-bottom: none;
        }

        .old-price {
            text-decoration: line-through;
            color: #666;
            font-size: 0.9em;
        }

        .new-price {
            color: #21A70D;
            font-weight: bold;
            font-size: 1.2em;
        }

        .gift-text {
            color: #D80909;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Countdown Timer */
        .offer-notice {
            background: #ff4444;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            margin: 20px 0;
            font-weight: bold;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }

        .countdown-item {
            background: #c1272d;
            color: white;
            padding: 20px;
            border-radius: 10px;
            min-width: 100px;
            text-align: center;
        }

        .countdown-number {
            font-size: 2.5em;
            font-weight: bold;
            display: block;
        }

        .countdown-label {
            font-size: 0.9em;
            text-transform: capitalize;
        }

        /* Order Button */
        .order-button {
            background: linear-gradient(135deg, #21A70D 0%, #1a8a0a 100%);
            color: white;
            padding: 20px 40px;
            border: none;
            border-radius: 50px;
            font-size: 1.3em;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 5px 20px rgba(33, 167, 13, 0.4);
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .order-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(33, 167, 13, 0.6);
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Section 2 - Product Details */
        .details-section {
            background: white;
            padding: 40px;
            border-radius: 15px;
            margin: 30px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .detail-images {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin: 30px 0;
        }

        .detail-image {
            max-width: 400px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .benefits-list {
            list-style: none;
            margin: 30px 0;
        }

        .benefits-list li {
            padding: 15px;
            margin: 10px 0;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #21A70D;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .benefits-list li::before {
            content: "✓";
            color: #21A70D;
            font-weight: bold;
            font-size: 1.5em;
        }

        /* Section 3 - Ingredients */
        .ingredients-section {
            background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
            padding: 40px;
            border-radius: 15px;
            margin: 30px 0;
            text-align: center;
        }

        .ingredients-image {
            max-width: 500px;
            width: 100%;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .ingredients-list {
            list-style: none;
            margin: 30px auto;
            max-width: 600px;
            text-align: left;
        }

        .ingredients-list li {
            padding: 10px;
            margin: 8px 0;
            background: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .ingredients-list li::before {
            content: "✓";
            color: #21A70D;
            font-weight: bold;
            font-size: 1.2em;
        }

        /* Section 4 - Customer Reviews with Swiper */
        .reviews-section {
            background: white;
            padding: 40px 20px;
            border-radius: 15px;
            margin: 30px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .section-title {
            font-size: 2em;
            color: #c1272d;
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .reviews-swiper {
            width: 100%;
            padding: 20px 0 50px 0;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .review-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 350px;
            transition: transform 0.3s ease;
        }

        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .review-image {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        /* Swiper Navigation Buttons */
        .swiper-button-next,
        .swiper-button-prev {
            color: #c1272d;
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px;
            font-weight: bold;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: #c1272d;
            color: white;
        }

        /* Swiper Pagination */
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #ddd;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background: #c1272d;
            width: 30px;
            border-radius: 6px;
        }

        /* Section 5 - Contact */
        .contact-section {
            background: linear-gradient(135deg, #c1272d 0%, #a01f23 100%);
            padding: 40px;
            border-radius: 15px;
            margin: 30px 0;
            text-align: center;
            color: white;
        }

        .contact-button {
            background: white;
            color: #c1272d;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            margin: 20px 0;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .contact-button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(255,255,255,0.3);
        }

        /* Section 6 - Order Form */
        .form-section {
            background: white;
            padding: 40px;
            border-radius: 15px;
            margin: 30px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 150px;
        }

        .form-title {
            font-size: 1.8em;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .required {
            color: #c1272d;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
            font-family: 'Hind Siliguri', Arial, sans-serif;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #21A70D;
        }

        /* Product Selection */
        .product-options {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 30px 0;
        }

        .product-option {
            background: white;
            padding: 20px;
            margin: 15px 0;
            border-radius: 8px;
            border: 2px solid #ddd;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-option:hover {
            border-color: #21A70D;
            box-shadow: 0 3px 10px rgba(33, 167, 13, 0.2);
        }

        .product-option.selected {
            border-color: #21A70D;
            background: #f0fff0;
        }

        .product-option input[type="radio"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .product-image-small {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-info {
            flex: 1;
        }

        .product-name {
            font-weight: bold;
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        .product-price {
            color: #21A70D;
            font-weight: bold;
            font-size: 1.2em;
        }

        .gift-badge {
            background: #ff4444;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            display: inline-block;
            margin-top: 5px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            background: #21A70D;
            color: white;
            border: none;
            width: 35px;
            height: 35px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
        }

        .quantity-input {
            width: 60px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 8px;
        }

        /* Order Summary */
        .order-summary {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            margin: 30px 0;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        .summary-row:last-child {
            border-bottom: none;
            font-size: 1.3em;
            font-weight: bold;
            color: #c1272d;
        }

        .submit-button {
            background: linear-gradient(135deg, #c1272d 0%, #a01f23 100%);
            color: white;
            padding: 20px 40px;
            border: none;
            border-radius: 50px;
            font-size: 1.3em;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(193, 39, 45, 0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 1.8em;
            }

            .countdown {
                flex-wrap: wrap;
            }

            .countdown-item {
                min-width: 80px;
                padding: 15px;
            }

            .countdown-number {
                font-size: 2em;
            }

            .order-button {
                padding: 15px 30px;
                font-size: 1.1em;
            }

            .detail-images {
                flex-direction: column;
            }

            .product-option {
                flex-direction: column;
                text-align: center;
            }

            .swiper-button-next,
            .swiper-button-prev {
                width: 40px;
                height: 40px;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 16px;
            }
        }

        /* Chat Widget */
        .chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .chat-button {
            background: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            font-size: 1.5em;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .chat-button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Section 1: Hero Product -->
    <div class="container">
        <div class="hero-section">
            <h1 class="hero-title">বাংলার ঐতিহ্যবাহী মিষ্টি<br>নারিকেলের নাড়ু</h1>
            <img src="https://dhakafoodservice.com/wp-content/uploads/2025/07/152151-1024x1024.webp" alt="নারিকেল নাড়ু" class="hero-image">
            
            <div class="price-box">
                <div class="price-item">
                    <div>৫০০ গ্রাম পূর্বের মূল্য <span class="old-price">৫৫০ টাকা</span></div>
                    <div>বর্তমান মূল্য <span class="new-price">৪৯০ টাকা</span></div>
                </div>
                <div class="price-item">
                    <div>১ কেজি পূর্বের মূল্য <span class="old-price">১০২০ টাকা</span></div>
                    <div>বর্তমান মূল্য <span class="new-price">৯৫০ টাকা</span></div>
                </div>
                <div class="price-item">
                    <div>২ কেজি পূর্বের মূল্য <span class="old-price">১৯৫০ টাকা</span></div>
                    <div>বর্তমান মূল্য <span class="new-price">১৮০০ টাকা</span></div>
                    <div class="gift-text">সাথে পাচ্ছেন ১০০ গ্রাম দানাদার ঘি ফ্রী 🎁</div>
                </div>
            </div>

            <div class="offer-notice">
                🔥বিঃদ্রঃ অফারটি সীমিত সময়ের জন্য থাকবে🔥
            </div>

            <div class="countdown" id="countdown">
                <div class="countdown-item">
                    <span class="countdown-number" id="hours">13</span>
                    <span class="countdown-label">Hours</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="minutes">28</span>
                    <span class="countdown-label">Minutes</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-number" id="seconds">52</span>
                    <span class="countdown-label">Seconds</span>
                </div>
            </div>

            <button class="order-button" onclick="scrollToForm()">
                🛒 অর্ডার করতে ক্লিক করুন
            </button>
        </div>

        <!-- Section 2: Product Details -->
        <div class="details-section">
            <div class="detail-images">
                <img src="https://dhakafoodservice.com/wp-content/uploads/2025/07/ARI09908-768x512.webp" alt="নারিকেল নাড়ু" class="detail-image">
                <img src="https://dhakafoodservice.com/wp-content/uploads/2025/07/ARI09333-768x512.webp" alt="নারিকেল নাড়ু" class="detail-image">
            </div>

            <ul class="benefits-list">
                <li>পুরনো দিনের মিষ্টি স্মৃতি এবার ফিরে আসবে আমাদের নাড়ুর প্রতিটি কামড়ে।</li>
                <li>চিনির বদলে আছে খাঁটি আখের গুড় – ডায়াবেটিস রোগীরাও খেতে পারবেন।</li>
                <li>শিশু থেকে বয়স্ক, সবার মুখে হাসি ফোটাবে এই মজাদার নাড়ুর স্বাদ।</li>
                <li>প্রতিটি নাড়ুতে টের পাবেন আসল নারিকেলের খসখসে স্বাদ আর মিষ্টি-ঘ্রাণের পারফেক্ট মেলবন্ধন।</li>
                <li>উন্নত মানের প্যাকেজিং – যাতে গুণগত মান ঠিক থাকে এবং ঠিকমতো আপনার কাছে পৌঁছে যায়</li>
            </ul>

            <div style="text-align: center; margin: 30px 0;">
                <button class="order-button" onclick="scrollToForm()">
                    🛒 অর্ডার করতে ক্লিক করুন
                </button>
            </div>
        </div>

        <!-- Section 3: Ingredients -->
        <div class="ingredients-section">
            <h2 class="section-title">আমাদের মজাদার নারিকেলের নাড়ুর উপকরণ</h2>
            <img src="https://dhakafoodservice.com/wp-content/uploads/2025/07/ARI09944-1-1024x1024.webp" alt="উপকরণ" class="ingredients-image">
            
            <ul class="ingredients-list">
                <li>বাছাইকৃত পরিপক্ক নোয়াখালীর নারিকেল</li>
                <li>খাঁটি আঁখের গুড় - কেমিকেলমুক্ত</li>
                <li>পাবনার বিখ্যাত গাওয়া ঘি বাড়ায় মিষ্টির ঘ্রাণ ও স্বাদ</li>
                <li>সিক্রেট ঘরোয়া মসলা – যা নাড়ুকে করে তোলে অনন্য</li>
                <li>কোনো প্রিজারভেটিভ বা কৃত্রিম ফ্লেভার নয়</li>
                <li>সম্পূর্ণ হাইজেনিক পরিবেশে ১০০% হাতে তৈরি</li>
            </ul>

            <div style="text-align: center; margin: 30px 0;">
                <button class="order-button" onclick="scrollToForm()">
                    🛒 অর্ডার করতে ক্লিক করুন
                </button>
            </div>
        </div>

        <!-- Section 4: Customer Reviews with Swiper -->
        <div class="reviews-section">
            <h2 class="section-title">আমাদের কাস্টমার ফিডব্যাক</h2>
            
            <div class="swiper reviews-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-card">
                            <img src="https://dhakafoodservice.com/wp-content/uploads/2025/11/1.webp" alt="Review 1" class="review-image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-card">
                            <img src="https://dhakafoodservice.com/wp-content/uploads/2025/11/6-1.webp" alt="Review 2" class="review-image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-card">
                            <img src="https://dhakafoodservice.com/wp-content/uploads/2025/11/5.webp" alt="Review 3" class="review-image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-card">
                            <img src="https://dhakafoodservice.com/wp-content/uploads/2025/11/4.webp" alt="Review 4" class="review-image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-card">
                            <img src="https://dhakafoodservice.com/wp-content/uploads/2025/11/3.webp" alt="Review 5" class="review-image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-card">
                            <img src="https://dhakafoodservice.com/wp-content/uploads/2025/11/2.webp" alt="Review 6" class="review-image">
                        </div>
                    </div>
                </div>
                
                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Section 5: Contact -->
        <div class="contact-section">
            <h2 class="section-title" style="color: white;">প্রয়োজনে কল করুন:</h2>
            <a href="tel:09647001998" class="contact-button">
                📞 09647001998
            </a>
        </div>

        <!-- Section 6: Order Form -->
        <div class="form-section" id="orderForm">
            <div class="logo">
                <img src="https://dhakafoodservice.com/wp-content/uploads/2025/07/Dhaka-food-new-logo-ai-01-300x300.png" alt="Dhaka Food Service">
            </div>
            <h2 class="form-title">অর্ডার করতে সঠিক তথ্য দিয়ে নিচের ফর্মটি পূরণ করুন</h2>

            <form id="checkoutForm">
                <div class="form-group">
                    <label>নাম <span class="required">*</span></label>
                    <input type="text" name="name" placeholder="আপনার নাম" required>
                </div>

                <div class="form-group">
                    <label>ঠিকানা <span class="required">*</span></label>
                    <input type="text" name="address" placeholder="সম্পূর্ণ ঠিকানা, থানা, জেলা" required>
                </div>

                <div class="form-group">
                    <label>নাম্বার <span class="required">*</span></label>
                    <input type="tel" name="phone" placeholder="আপনার ১১ ডিজিটের মোবাইল নাম্বার" pattern="[0-9]{11}" required>
                </div>

                <div class="form-group">
                    <label>Country / Region <span class="required">*</span></label>
                    <input type="text" value="Bangladesh" readonly>
                </div>

                <h3 style="margin: 30px 0 20px 0; text-align: center;">Your Products</h3>

                <div class="product-options">
                    <div class="product-option selected" onclick="selectProduct(0)">
                        <input type="radio" name="product" value="500g" checked>
                        <img src="https://dhakafoodservice.com/wp-content/uploads/2025/08/6-300x300.webp" alt="500g" class="product-image-small">
                        <div class="product-info">
                            <div class="product-name">নারিকেলের নাড়ু ৫০০ গ্রাম</div>
                            <div class="product-price">৳ 490.00</div>
                        </div>
                        <div class="quantity-control">
                            <button type="button" class="quantity-btn" onclick="updateQuantity(0, -1)">−</button>
                            <input type="text" class="quantity-input" value="1" min="1" readonly>
                            <button type="button" class="quantity-btn" onclick="updateQuantity(0, 1)">+</button>
                        </div>
                        </div>

                    <div class="product-option" onclick="selectProduct(1)">
                        <input type="radio" name="product" value="1kg">
                        <img src="https://dhakafoodservice.com/wp-content/uploads/2025/08/6-300x300.webp" alt="1kg" class="product-image-small">
                        <div class="product-info">
                            <div class="product-name">নারিকেলের নাড়ু ১ কেজি</div>
                            <div class="product-price">৳ 950.00</div>
                        </div>
                        <div class="quantity-control">
                            <button type="button" class="quantity-btn" onclick="updateQuantity(1, -1)">−</button>
                            <input type="text" class="quantity-input" value="1" min="1" readonly>
                            <button type="button" class="quantity-btn" onclick="updateQuantity(1, 1)">+</button>
                        </div>
                    </div>

                    <div class="product-option" onclick="selectProduct(2)">
                        <input type="radio" name="product" value="2kg">
                        <img src="https://dhakafoodservice.com/wp-content/uploads/2025/08/6-300x300.webp" alt="2kg" class="product-image-small">
                        <div class="product-info">
                            <div class="product-name">নারিকেলের নাড়ু ২ কেজি</div>
                            <div class="product-price">৳ 1,800.00</div>
                            <span class="gift-badge">১০০ গ্রাম পাবনার বিখ্যাত দানাদার গাওয়া ঘি ফ্রি 🎁</span>
                        </div>
                        <div class="quantity-control">
                            <button type="button" class="quantity-btn" onclick="updateQuantity(2, -1)">−</button>
                            <input type="text" class="quantity-input" value="1" min="1" readonly>
                            <button type="button" class="quantity-btn" onclick="updateQuantity(2, 1)">+</button>
                        </div>
                    </div>
                </div>

                <div class="order-summary">
                    <h3 style="margin-bottom: 20px;">আপনার অর্ডার</h3>
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span id="subtotal">৳ 490.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <div>
                            <div style="margin-bottom: 10px;">
                                <input type="radio" name="shipping" value="130" id="shipping-outside" checked onchange="updateTotal()">
                                <label for="shipping-outside">ঢাকার বাইরে: ৳ 130.00</label>
                            </div>
                            <div>
                                <input type="radio" name="shipping" value="70" id="shipping-inside" onchange="updateTotal()">
                                <label for="shipping-inside">ঢাকার ভিতরে: ৳ 70.00</label>
                            </div>
                        </div>
                    </div>
                    <div class="summary-row">
                        <span>Total</span>
                        <span id="total">৳ 620.00</span>
                    </div>
                </div>

                <input type="submit" class="submit-button" id="submitBtn" value="অর্ডারটি কনফার্ম করুন"/>
  
            </form>
        </div>
    </div>

    <!-- Chat Widget -->
    <div class="chat-widget">
        <a href="https://m.me/dhakafoodservic" target="_blank">
            <button class="chat-button">💬</button>
        </a>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Initialize Swiper for Reviews
        const reviewsSwiper = new Swiper('.reviews-swiper', {
            // Swiper parameters
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 800,
            effect: 'slide',
            
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 640px
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            },
            
            // Accessibility
            a11y: {
                prevSlideMessage: 'Previous slide',
                nextSlideMessage: 'Next slide',
            },
            
            // Keyboard control
            keyboard: {
                enabled: true,
                onlyInViewport: true,
            },
            
            // Mouse wheel control
            mousewheel: {
                forceToAxis: true,
            },
        });

        // Product data
        const products = [
            { name: 'নারিকেলের নাড়ু ৫০০ গ্রাম', price: 490, quantity: 1 },
            { name: 'নারিকেলের নাড়ু ১ কেজি', price: 950, quantity: 1 },
            { name: 'নারিকেলের নাড়ু ২ কেজি', price: 1800, quantity: 1 }
        ];

        let selectedProductIndex = 0;

        // Countdown Timer
        function updateCountdown() {
            const targetDate = new Date('2025-12-31T23:59:59').getTime();
            const now = new Date().getTime();
            const distance = targetDate - now;

            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
            }
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();

        // Product Selection
        function selectProduct(index) {
            selectedProductIndex = index;
            const options = document.querySelectorAll('.product-option');
            options.forEach((option, i) => {
                if (i === index) {
                    option.classList.add('selected');
                    option.querySelector('input[type="radio"]').checked = true;
                } else {
                    option.classList.remove('selected');
                }
            });
            updateTotal();
        }

        // Quantity Update
        function updateQuantity(index, change) {
            event.stopPropagation();
            const quantityInput = document.querySelectorAll('.quantity-input')[index];
            let currentQuantity = parseInt(quantityInput.value);
            let newQuantity = currentQuantity + change;

            if (newQuantity >= 1) {
                quantityInput.value = newQuantity;
                products[index].quantity = newQuantity;
                updateTotal();
            }
        }

        // Update Total
        function updateTotal() {
            const selectedProduct = products[selectedProductIndex];
            const subtotal = selectedProduct.price * selectedProduct.quantity;
            
            const shippingCost = document.querySelector('input[name="shipping"]:checked').value;
            const total = subtotal + parseInt(shippingCost);

            document.getElementById('subtotal').textContent = '৳ ' + subtotal.toFixed(2);
            document.getElementById('total').textContent = '৳ ' + total.toFixed(2);
            document.getElementById('totalAmount').textContent = total.toFixed(2);
        }

        // Scroll to Form
        function scrollToForm() {
            document.getElementById('orderForm').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Form Submission
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const selectedProduct = products[selectedProductIndex];
            const shippingCost = document.querySelector('input[name="shipping"]:checked').value;
            const total = (selectedProduct.price * selectedProduct.quantity) + parseInt(shippingCost);

            // Collect form data
            const orderData = {
                name: formData.get('name'),
                address: formData.get('address'),
                phone: formData.get('phone'),
                product: selectedProduct.name,
                quantity: selectedProduct.quantity,
                price: selectedProduct.price,
                shipping: shippingCost === '130' ? 'ঢাকার বাইরে' : 'ঢাকার ভিতরে',
                shippingCost: shippingCost,
                total: total
            };

            // Create WhatsApp message
            const message = `নতুন অর্ডার:\n\n নাম: ${orderData.name}\nঠিকানা: ${orderData.address}\nমোবাইল: ${orderData.phone}\n\nপণ্য: ${orderData.product}\nপরিমাণ: ${orderData.quantity}\nমূল্য: ৳${orderData.price}\n\nশিপিং: ${orderData.shipping} (৳${orderData.shippingCost})\n\nমোট: ৳${orderData.total}`;

            const whatsappNumber = '8809647001998';
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

            // Show confirmation
            if (confirm('আপনার অর্ডার কনফার্ম করতে চান?')) {
                window.open(whatsappURL, '_blank');
                alert('ধন্যবাদ! আপনার অর্ডার পাঠানো হয়েছে। আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।');
            }
        });

        // Initialize total on page load
        updateTotal();

        // Smooth scroll for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Add to cart tracking (Google Analytics style)
        function trackAddToCart(productName, price) {
            console.log('Add to cart:', productName, price);
            // You can add actual analytics tracking here
        }

        // Page view tracking
        console.log('Page viewed: নারিকেল নাড়ু - Checkout');

        // Form validation
        document.querySelectorAll('input[required]').forEach(input => {
            input.addEventListener('invalid', function(e) {
                e.preventDefault();
                this.style.borderColor = '#c1272d';
                setTimeout(() => {
                    this.style.borderColor = '#ddd';
                }, 3000);
            });
        });

        // Phone number validation
        document.querySelector('input[name="phone"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length > 11) {
                this.value = this.value.slice(0, 11);
            }
        });

        // Prevent form double submission
        let isSubmitting = false;
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            if (isSubmitting) {
                e.preventDefault();
                return false;
            }
            isSubmitting = true;
            setTimeout(() => {
                isSubmitting = false;
            }, 3000);
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';
                    entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);
                    
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe sections
        document.querySelectorAll('.details-section, .ingredients-section, .reviews-section, .contact-section, .form-section').forEach(section => {
            observer.observe(section);
        });

        // Add hover effect to product options
        document.querySelectorAll('.product-option').forEach(option => {
            option.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.02)';
            });
            option.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Add loading state to submit button
        document.getElementById('submitBtn').addEventListener('click', function() {
            if (isSubmitting) {
                this.innerHTML = 'অর্ডার প্রসেস হচ্ছে...';
                this.disabled = true;
                setTimeout(() => {
                    this.innerHTML = 'অর্ডার করুন ৳ <span id="totalAmount">' + document.getElementById('totalAmount').textContent + '</span>';
                    this.disabled = false;
                }, 3000);
            }
        });

        // Local storage for form data (optional)
        function saveFormData() {
            const formData = {
                name: document.querySelector('input[name="name"]').value,
                address: document.querySelector('input[name="address"]').value,
                phone: document.querySelector('input[name="phone"]').value
            };
            localStorage.setItem('checkoutFormData', JSON.stringify(formData));
        }

        function loadFormData() {
            const savedData = localStorage.getItem('checkoutFormData');
            if (savedData) {
                const data = JSON.parse(savedData);
                document.querySelector('input[name="name"]').value = data.name || '';
                document.querySelector('input[name="address"]').value = data.address || '';
                document.querySelector('input[name="phone"]').value = data.phone || '';
            }
        }

        // Auto-save form data
        document.querySelectorAll('input[name="name"], input[name="address"], input[name="phone"]').forEach(input => {
            input.addEventListener('change', saveFormData);
        });

        // Load saved data on page load
        loadFormData();

        // Add product view tracking
        window.addEventListener('load', function() {
            console.log('Product viewed: নারিকেলের নাড়ু ৫০০ গ্রাম');
            trackAddToCart('নারিকেলের নাড়ু ৫০০ গ্রাম', 490);
        });

        // Add Facebook Pixel style tracking (placeholder)
        function fbq(eventType, eventName, data) {
            console.log('Facebook Pixel:', eventType, eventName, data);
            // Actual FB Pixel code would go here
        }

        // Track page view
        fbq('track', 'PageView', {});

        // Track InitiateCheckout when form is viewed
        const formObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    fbq('track', 'InitiateCheckout', {
                        content_name: 'নারিকেলের নাড়ু',
                        content_category: 'Naru',
                        value: 490,
                        currency: 'BDT'
                    });
                    formObserver.unobserve(entry.target);
                }
            });
        });

        formObserver.observe(document.getElementById('orderForm'));

        // Add to cart button click tracking
        document.querySelectorAll('.order-button').forEach(button => {
            button.addEventListener('click', function() {
                fbq('track', 'AddToCart', {
                    content_name: products[selectedProductIndex].name,
                    content_type: 'product',
                    value: products[selectedProductIndex].price,
                    currency: 'BDT'
                });
            });
        });

        // Swiper touch feedback
        reviewsSwiper.on('slideChange', function () {
            console.log('Review slide changed to:', reviewsSwiper.activeIndex);
        });

        // Pause autoplay on user interaction
        document.querySelector('.reviews-swiper').addEventListener('mouseenter', function() {
            reviewsSwiper.autoplay.stop();
        });

        document.querySelector('.reviews-swiper').addEventListener('mouseleave', function() {
            reviewsSwiper.autoplay.start();
        });

        // Add touch-friendly interactions for mobile
        if ('ontouchstart' in window) {
            document.body.classList.add('touch-device');
        }
    </script>
</body>
</html>