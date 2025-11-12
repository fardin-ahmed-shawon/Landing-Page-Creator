<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Socks - অরিজিনাল মোজা</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Noto Sans Bengali', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        .header-banner {
            background: #FF0000;
            color: white;
            text-align: center;
            padding: 25px 20px;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            animation: slideDown 0.6s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .hero-section {
            position: relative;
            min-height: 600px;
            background: white;
            overflow: hidden;
        }

        .hero-slider {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .hero-slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }

        .hero-slide {
            min-width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .hero-slide-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 60px 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            width: 100%;
        }

        .hero-text {
            color: #333;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-text h1 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
            color: #000;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-text p {
            font-size: 20px;
            margin-bottom: 30px;
            color: #555;
        }

        .hero-image {
            position: relative;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .hero-btn {
            background: #FF0000;
            color: white;
            border: none;
            padding: 18px 45px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(255,0,0,0.3);
            transition: all 0.3s ease;
        }

        .hero-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 35px rgba(255,0,0,0.4);
            background: #CC0000;
        }

        .slider-controls {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        .slider-dots {
            display: inline-block;
            background: rgba(255, 255, 255, 0.7);
            padding: 10px 15px;
            border-radius: 20px;
        }

        .slider-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .slider-dot.active {
            background: #FF0000;
        }

        .slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.7);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
            font-size: 24px;
            font-weight: bold;
            color: #FF0000;
        }

        .slider-nav:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-50%) scale(1.1);
        }

        .slider-prev {
            left: 20px;
        }

        .slider-next {
            right: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        .price-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 50px 20px;
            text-align: center;
            margin: 40px 0;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .price-original {
            text-decoration: line-through;
            color: #999;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .price-current {
            color: #e74c3c;
            font-size: 48px;
            font-weight: bold;
            margin: 15px 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .discount-badge {
            display: inline-block;
            background: #e74c3c;
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .free-delivery {
            color: #27ae60;
            font-size: 20px;
            margin: 20px 0;
            font-weight: 600;
        }

        .order-button {
            background: #FF0000;
            color: white;
            border: none;
            padding: 18px 50px;
            font-size: 20px;
            border-radius: 50px;
            cursor: pointer;
            margin: 25px 0;
            box-shadow: 0 8px 25px rgba(255, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .order-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 35px rgba(255, 0, 0, 0.4);
            background: #CC0000;
        }

        .details-section {
            margin: 50px 0;
        }

        .details-header {
            background: #FF0000;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .details-list {
            list-style: none;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        .details-list li {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 35px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .details-list li:hover {
            padding-left: 40px;
            background: #f9f9f9;
        }

        .details-list li:last-child {
            border-bottom: none;
        }

        .details-list li:before {
            content: "✓";
            color: #27ae60;
            position: absolute;
            left: 0;
            font-weight: bold;
            font-size: 20px;
        }

        .order-form-section {
            background: white;
            border: none;
            padding: 50px;
            margin: 60px auto;
            max-width: 1000px;
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0,0,0,0.1);
        }

        .form-title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 15px;
            color: #FF0000;
            font-weight: bold;
        }

        .form-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 40px;
            font-size: 16px;
        }

        .product-selection {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .product-card {
            border: 1px solid #e0e0e0;
            padding: 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
            background: white;
        }

        .product-card:hover {
            border-color: #FF0000;
            box-shadow: 0 8px 25px rgba(255, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .product-card.selected {
            border-color: #FF0000;
            background: linear-gradient(135deg, #fff5f5 0%, #ffe8e8 100%);
        }

        .product-header {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 15px;
        }

        .product-checkbox {
            margin-right: 0;
            margin-top: 5px;
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #FF0000;
            flex-shrink: 0;
        }

        .product-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            flex-shrink: 0;
        }

        .product-title {
            flex: 1;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            color: #333;
            line-height: 1.4;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 15px 0 0 0;
            padding-left: 78px;
        }

        .quantity-btn {
            background-color: #f0f0f0;
            color: #333;
            border: 1px solid #ddd;
            padding: 5px 12px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 16px;
            transition: all 0.3s ease;
            font-weight: normal;
        }

        .quantity-btn:hover {
            background-color: #e0e0e0;
            transform: none;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 3px;
            font-size: 14px;
            font-weight: normal;
        }

        .product-price {
            margin-left: auto;
            font-weight: normal;
            color: #333;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-weight: normal;
            font-size: 15px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #FF0000;
            box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.1);
        }

        .order-summary {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 30px;
            margin: 30px 0;
            border-radius: 15px;
        }

        .order-summary-item {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255,255,255,0.5);
            font-size: 16px;
        }

        .order-summary-item:last-child {
            border-bottom: none;
        }

        .order-total {
            font-size: 24px;
            font-weight: bold;
            color: #FF0000;
            margin-top: 10px;
        }

        .payment-option {
            background-color: #f8f9fa;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            border: 2px solid #e0e0e0;
        }

        .payment-option input[type="radio"] {
            width: 20px;
            height: 20px;
            accent-color: #FF0000;
        }

        .submit-button {
            width: 100%;
            background: #28a745;
            color: white;
            border: none;
            padding: 20px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
            transition: all 0.3s ease;
        }

        .submit-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(40, 167, 69, 0.4);
            background: #218838;
        }

        .submit-button:active {
            transform: translateY(0);
        }

        .testimonials-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 60px 20px;
            margin: 60px auto;
            border-radius: 20px;
        }

        .testimonials-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
            color: #333;
        }

.testimonials-slider {
    display: flex;
    justify-content: center;
    gap: 25px;
    overflow-x: auto;
    padding: 20px 0;
    scroll-behavior: smooth;
}

        .testimonials-slider::-webkit-scrollbar {
            height: 8px;
        }

        .testimonials-slider::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .testimonials-slider::-webkit-scrollbar-thumb {
            background: #667eea;
            border-radius: 10px;
        }

        .testimonial-card {
            background-color: white;
            padding: 25px;
            border-radius: 15px;
            max-width: 320px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .testimonial-image {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .video-section {
            text-align: center;
            padding: 60px 20px;
            background-color: white;
        }

        .video-container {
            max-width: 900px;
            margin: 0 auto 40px;
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            background-color: #000;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }

        .video-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
            color: white;
            font-size: 24px;
        }

        .contact-box {
            border: 3px solid #FF0000;
            padding: 30px;
            margin: 30px auto;
            max-width: 700px;
            text-align: center;
            border-radius: 15px;
            background: white;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .contact-number {
            background: #FF0000;
            color: white;
            padding: 18px 40px;
            font-size: 28px;
            font-weight: bold;
            display: inline-block;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(255, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .contact-number:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(255, 0, 0, 0.4);
            background: #CC0000;
        }

        .delivery-info {
            background: linear-gradient(135deg, #fff3cd 0%, #ffe69c 100%);
            border: 2px solid #ffc107;
            padding: 20px;
            margin: 30px auto;
            max-width: 900px;
            text-align: center;
            border-radius: 15px;
            font-size: 18px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .social-links {
            text-align: center;
            padding: 30px;
        }

        .social-icon {
            display: inline-block;
            width: 60px;
            height: 60px;
            margin: 0 12px;
            background-color: #4267B2;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            color: white;
            text-decoration: none;
            font-size: 28px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .social-icon.whatsapp {
            background-color: #25D366;
        }

        .social-icon.messenger {
            background-color: #0084FF;
        }

        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            border: 1px solid #c3e6cb;
            display: none;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .hero-slide-content {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 40px 30px;
            }

            .hero-section {
                min-height: auto;
            }

            .hero-slider {
                height: auto;
            }

            .hero-text h1 {
                font-size: 36px;
            }

            .order-form-section {
                padding: 40px 30px;
            }

            .product-selection {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header-banner {
                font-size: 16px;
                padding: 20px 15px;
            }

            .hero-text h1 {
                font-size: 28px;
            }

            .hero-text p {
                font-size: 16px;
            }

            .price-current {
                font-size: 36px;
            }

            .form-title {
                font-size: 24px;
            }

            .order-form-section {
                padding: 30px 20px;
                margin: 40px 20px;
            }

            .product-card {
                padding: 20px;
            }

            .product-selection {
                grid-template-columns: 1fr;
            }

            .quantity-control {
                flex-wrap: wrap;
            }

            .contact-number {
                font-size: 22px;
                padding: 15px 30px;
            }

            .testimonials-section h2 {
                font-size: 24px;
            }
            
            .slider-nav {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }
            
            .slider-prev {
                left: 10px;
            }
            
            .slider-next {
                right: 10px;
            }
        }

        @media (max-width: 480px) {
            .hero-text h1 {
                font-size: 24px;
            }

            .order-form-section {
                padding: 25px 15px;
            }

            .product-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .product-image {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <div class="header-banner">
        "সারাদিন আরামদায়ক পা, সুরক্ষা ও দুর্গন্ধমুক্ত রাখতে ১০০% কটন মোজার জাদু অনুভব করুন!"
    </div>

    <!-- Hero Slider Section -->
    <div class="hero-section">
        <div class="hero-slider">
            <div class="hero-slides">
                <!-- Slide 1 -->
                <div class="hero-slide">
                    <div class="hero-slide-content">
                        <div class="hero-text">
                            <h1>প্রিমিয়াম কোয়ালিটি সক্স</h1>
                            <p>১০০% খাঁটি কটন দিয়ে তৈরি আরামদায়ক মোজা। গ্রীষ্মের গরম বা শীতের ঠান্ডা - সব ঋতুতে আপনার পায়ের সেরা সঙ্গী।</p>
                            <button class="hero-btn" onclick="scrollToOrder()">এখনই অর্ডার করুন 🛒</button>
                        </div>
                        <div class="hero-image">
                            <img src="images/sock1.webp" alt="স্পোর্টস সক্স">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="hero-slide">
                    <div class="hero-slide-content">
                        <div class="hero-text">
                            <h1>ক্যাজুয়াল সক্স</h1>
                            <p>দৈনন্দিন ব্যবহারের জন্য নরম ও আরামদায়ক ক্যাজুয়াল সক্স। আপনার প্রতিদিনের স্টাইলের সাথে মানানসই।</p>
                            <button class="hero-btn" onclick="scrollToOrder()">এখনই অর্ডার করুন 🛒</button>
                        </div>
                        <div class="hero-image">
                            <img src="images/sock2.webp" alt="ক্যাজুয়াল সক্স">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="hero-slide">
                    <div class="hero-slide-content">
                        <div class="hero-text">
                            <h1>ফ্যাশন সক্স</h1>
                            <p>স্টাইলিশ লুকের জন্য ফ্যাশনেবল সক্স। বিভিন্ন রং ও ডিজাইনে আপনার ব্যক্তিত্ব ফুটিয়ে তুলুন।</p>
                            <button class="hero-btn" onclick="scrollToOrder()">এখনই অর্ডার করুন 🛒</button>
                        </div>
                        <div class="hero-image">
                            <img src="images/sock3.webp" alt="ফ্যাশন সক্স">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 4 -->
                <div class="hero-slide">
                    <div class="hero-slide-content">
                        <div class="hero-text">
                            <h1>উইন্টার সক্স</h1>
                            <p>শীতের জন্য বিশেষভাবে তৈরি উইন্টার সক্স। আপনার পা রাখবে উষ্ণ ও আরামদায়ক শীতের পুরো সময় জুড়ে।</p>
                            <button class="hero-btn" onclick="scrollToOrder()">এখনই অর্ডার করুন 🛒</button>
                        </div>
                        <div class="hero-image">
                            <img src="images/sock4.webp" alt="উইন্টার সক্স">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 5 -->
                <div class="hero-slide">
                    <div class="hero-slide-content">
                        <div class="hero-text">
                            <h1>এনকি সক্স</h1>
                            <p>পায়ের গোড়ালি সুরক্ষা প্রদানকারী এনকি সক্স। ব্যায়াম ও দৈনন্দিন কাজে অতিরিক্ত আরাম।</p>
                            <button class="hero-btn" onclick="scrollToOrder()">এখনই অর্ডার করুন 🛒</button>
                        </div>
                        <div class="hero-image">
                            <img src="images/sock5.webp" alt="এনকি সক্স">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 6 -->
                <div class="hero-slide">
                    <div class="hero-slide-content">
                        <div class="hero-text">
                            <h1>নো-শো সক্স</h1>
                            <p>ফরমাল পরিস্থিতির জন্য নো-শো সক্স। জুতার ভিতরে অদৃশ্য থেকে দেয় সর্বোচ্চ আরাম।</p>
                            <button class="hero-btn" onclick="scrollToOrder()">এখনই অর্ডার করুন 🛒</button>
                        </div>
                        <div class="hero-image">
                            <img src="images/sock6.webp" alt="নো-শো সক্স">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slider Navigation -->
            <div class="slider-nav slider-prev">❮</div>
            <div class="slider-nav slider-next">❯</div>
            
            <!-- Slider Dots -->
            <div class="slider-controls">
                <div class="slider-dots">
                    <span class="slider-dot active" data-index="0"></span>
                    <span class="slider-dot" data-index="1"></span>
                    <span class="slider-dot" data-index="2"></span>
                    <span class="slider-dot" data-index="3"></span>
                    <span class="slider-dot" data-index="4"></span>
                    <span class="slider-dot" data-index="5"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="price-section">
            <div class="discount-badge">৩৬% ছাড়</div>
            <p class="price-original">রেগুলার মূল্য ৭৫০৳</p>
            <p class="price-current">অফার মূল্য ৪৮০৳</p>
            <p class="free-delivery">✓ ফ্রি হোম ডেলিভারি সারা বাংলাদেশ</p>
            <button class="order-button" onclick="scrollToOrder()">অর্ডার করুন 🛒</button>
        </div>

        <div class="details-section">
            <div class="details-header">প্রোডাক্টের বিবরণ</div>
            <ul class="details-list">
                <li>ইউনিসেক্স ও বহুমুখী ডিজাইন: অফিস থেকে ক্যাজুয়াল আউটিং—সব পরিবেশে মানানসই।</li>
                <li>টেকসইতা ও আরামদায়ক অনুভূতি: কঠিন রিংশেড প্রিন্টি পায়ের থাম ও দুর্গন্ধ প্রতিরোধ করে।</li>
                <li>দীর্ঘস্থায়ী মান ও স্থিতি: প্রতিদিনের ব্যবহারে প্রশংসা মান বজায় থাকে।</li>
                <li>সর্বশ্রেষ্ঠ সমাধান: প্রতিদিনের প্রয়োজনে নিখুঁত মোজা।</li>
                <li>পায়ের স্বাস্থ্য সুরক্ষায় উপকৃত: উন্নত ফেব্রিক পায়ের আরাম ও সন্তোষ নিশ্চিত করে।</li>
            </ul>

            <div class="details-header" style="margin-top: 30px;">কেন আমাদের থেকে নেবেন?</div>
            <ul class="details-list">
                <li>চেক করে নেওয়ার সুবিধা।</li>
                <li>পণ্যের কোন সমস্যা থাকলে ডেলিভারি চার্জ ছাড়াই রিটার্ন করার সুবিধা।</li>
                <li>ঢাকায় নিজস্ব প্রোডাকশন হাউস বিদ্যমান।</li>
                <li>আমাদের থেকে প্রোডাক্ট নিয়ে হাজারো সন্তুষ্ট কাস্টমার।</li>
                <li>দেশের বাইরেও প্রেরণ সেবা করে থাকি।</li>
                <li>১০০০+ সন্তুষ্ট কাস্টমার রয়েছে।</li>
            </ul>
        </div>
    </div>

    <div class="testimonials-section">
        <h2>গ্রাহকদের মতামত</h2>
        <div class="testimonials-slider">
            <div class="testimonial-card">
                <img src="images/review1.webp" alt="রিভিউ ১" class="testimonial-image">
                <h3>রহিম আহমেদ</h3>
                <p>অসাধারণ কোয়ালিটি! আমি দীর্ঘদিন ধরে এই মোজা ব্যবহার করছি। খুব আরামদায়ক এবং টেকসই।</p>
            </div>
            <div class="testimonial-card">
                <img src="images/review2.webp" alt="রিভিউ ২" class="testimonial-image">
                <h3>সুমাইয়া আক্তার</h3>
                <p>পায়ের দুর্গন্ধ সম্পূর্ণভাবে চলে গেছে। এখন আত্মবিশ্বাসের সাথে জুতা খুলতে পারি।</p>
            </div>
            <div class="testimonial-card">
                <img src="images/review3.webp" alt="রিভিউ ৩" class="testimonial-image">
                <h3>করিম উদ্দিন</h3>
                <p>দামের তুলনায় কোয়ালিটি অনেক ভালো। পরিবারের সবাই এখন এই মোজা ব্যবহার করে।</p>
            </div>
        </div>
    </div>

    <div class="video-section">
        <h2>আমাদের প্রোডাক্ট ভিডিও</h2>
        <div class="video-container">
            <div class="video-placeholder">
                প্রোডাক্ট ভিডিও - ক্লিক করে দেখুন
            </div>
        </div>
    </div>

    <div class="order-form-section">
        <h2 class="form-title">অর্ডার ফর্ম</h2>
        <p class="form-subtitle">নিচের ফর্মটি পূরণ করে অর্ডার সম্পন্ন করুন</p>
        
        <div class="product-selection">
            <div class="product-card">
                <div class="product-header">
                    <input type="checkbox" class="product-checkbox" id="product1" name="product" value="স্পোর্টস সক্স">
                    <img src="images/sock1.webp" alt="স্পোর্টস সক্স" class="product-image">
                    <label for="product1" class="product-title">স্পোর্টস সক্স - ব্যায়ামের সময় আরামদায়ক, সুতি কাপড় দিয়ে তৈরি</label>
                    <span class="product-price">৳ ৪৮০</span>
                </div>
                <div class="quantity-control">
                    <button class="quantity-btn minus">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="quantity-btn plus">+</button>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-header">
                    <input type="checkbox" class="product-checkbox" id="product2" name="product" value="ক্যাজুয়াল সক্স">
                    <img src="images/sock2.webp" alt="ক্যাজুয়াল সক্স" class="product-image">
                    <label for="product2" class="product-title">ক্যাজুয়াল সক্স - দৈনন্দিন ব্যবহারের জন্য, নরম ও আরামদায়ক</label>
                    <span class="product-price">৳ ৪৮০</span>
                </div>
                <div class="quantity-control">
                    <button class="quantity-btn minus">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="quantity-btn plus">+</button>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="name">পুরো নাম *</label>
            <input type="text" id="name" name="name" required>
            <div class="error-message" id="nameError">নাম অবশ্যই দিতে হবে</div>
        </div>

        <div class="form-group">
            <label for="phone">মোবাইল নম্বর *</label>
            <input type="tel" id="phone" name="phone" required>
            <div class="error-message" id="phoneError">সঠিক মোবাইল নম্বর দিন</div>
        </div>

        <div class="form-group">
            <label for="address">ঠিকানা *</label>
            <textarea id="address" name="address" rows="3" required></textarea>
            <div class="error-message" id="addressError">ঠিকানা অবশ্যই দিতে হবে</div>
        </div>

        <div class="form-group">
            <label for="district">জেলা *</label>
            <select id="district" name="district" required>
                <option value="">জেলা নির্বাচন করুন</option>
                <option value="ঢাকা">ঢাকা</option>
                <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                <option value="রাজশাহী">রাজশাহী</option>
                <option value="খুলনা">খুলনা</option>
                <option value="বরিশাল">বরিশাল</option>
                <option value="সিলেট">সিলেট</option>
                <option value="রংপুর">রংপুর</option>
                <option value="ময়মনসিংহ">ময়মনসিংহ</option>
            </select>
            <div class="error-message" id="districtError">জেলা নির্বাচন করুন</div>
        </div>

        <div class="order-summary">
            <h3>অর্ডার সারাংশ</h3>
            <div class="order-summary-item">
                <span>পণ্যের মূল্য:</span>
                <span>৳ ০</span>
            </div>
            <div class="order-summary-item">
                <span>ডেলিভারি চার্জ:</span>
                <span>৳ ০</span>
            </div>
            <div class="order-summary-item order-total">
                <span>মোট:</span>
                <span>৳ ০</span>
            </div>
        </div>

        <div class="payment-option">
            <input type="radio" id="cashOnDelivery" name="payment" value="cashOnDelivery" checked>
            <label for="cashOnDelivery">ক্যাশ অন ডেলিভারি</label>
        </div>

        <button type="submit" class="submit-button">অর্ডার নিশ্চিত করুন</button>
        
        <div class="success-message" id="successMessage">
            আপনার অর্ডারটি সফলভাবে গ্রহণ করা হয়েছে! আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।
        </div>
    </div>

    <div class="delivery-info">
        <p>🚚 অর্ডার দিলে ২৪-৪৮ ঘন্টার মধ্যে ডেলিভারি পেয়ে যাবেন (ঢাকার ভিতরে)</p>
        <p>🚚 অন্যান্য জেলায় ৩-৫ কার্যদিবসের মধ্যে ডেলিভারি</p>
    </div>

    <div class="contact-box">
        <h2>সরাসরি অর্ডার করতে কল করুন</h2>
        <a href="tel:+880XXXXXXXXXX" class="contact-number">+৮৮০ XXXXXXXXXX</a>
        <p>সকাল ৯টা থেকে রাত ১০টা পর্যন্ত</p>
    </div>

    <div class="social-links">
        <a href="#" class="social-icon whatsapp">📱</a>
        <a href="#" class="social-icon messenger">💬</a>
    </div>

    <script>
        // Hero Slider Functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dot');
        const totalSlides = slides.length;
        const slidesContainer = document.querySelector('.hero-slides');
        
        // Initialize slider
        function initSlider() {
            updateSlider();
            
            // Auto slide every 5 seconds
            setInterval(() => {
                nextSlide();
            }, 5000);
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }
        
        function goToSlide(index) {
            currentSlide = index;
            updateSlider();
        }
        
        function updateSlider() {
            slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Update active dot
            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        // Event listeners for slider controls
        document.querySelector('.slider-next').addEventListener('click', nextSlide);
        document.querySelector('.slider-prev').addEventListener('click', prevSlide);
        
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                goToSlide(index);
            });
        });
        
        // Initialize slider on page load
        window.addEventListener('DOMContentLoaded', initSlider);

        function scrollToOrder() {
            document.querySelector('.order-form-section').scrollIntoView({ 
                behavior: 'smooth' 
            });
        }

        // Quantity control functionality
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.quantity-input');
                let value = parseInt(input.value);
                
                if (this.classList.contains('plus')) {
                    value++;
                } else if (this.classList.contains('minus') && value > 1) {
                    value--;
                }
                
                input.value = value;
                updateOrderSummary();
            });
        });

        // Product selection functionality
        document.querySelectorAll('.product-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const card = this.closest('.product-card');
                if (this.checked) {
                    card.classList.add('selected');
                } else {
                    card.classList.remove('selected');
                }
                updateOrderSummary();
            });
        });

        // Update order summary
        function updateOrderSummary() {
            let total = 0;
            
            document.querySelectorAll('.product-checkbox:checked').forEach(checkbox => {
                const card = checkbox.closest('.product-card');
                const quantity = parseInt(card.querySelector('.quantity-input').value);
                const price = 480; // Fixed price for all products
                
                total += price * quantity;
            });
            
            document.querySelector('.order-summary .order-total span:last-child').textContent = `৳ ${total}`;
            document.querySelectorAll('.order-summary-item:not(.order-total) span:last-child').forEach(span => {
                if (span.textContent.includes('পণ্যের মূল্য')) {
                    span.textContent = `৳ ${total}`;
                }
            });
        }

        // Form submission
        document.querySelector('.submit-button').addEventListener('click', function(e) {
            e.preventDefault();
            
            let isValid = true;
            
            // Simple validation
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const district = document.getElementById('district').value;
            
            if (!name.trim()) {
                document.getElementById('nameError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('nameError').style.display = 'none';
            }
            
            if (!phone.match(/^(?:\+88|01)?\d{11}$/)) {
                document.getElementById('phoneError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('phoneError').style.display = 'none';
            }
            
            if (!address.trim()) {
                document.getElementById('addressError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('addressError').style.display = 'none';
            }
            
            if (!district) {
                document.getElementById('districtError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('districtError').style.display = 'none';
            }
            
            if (isValid) {
                document.getElementById('successMessage').style.display = 'block';
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                }, 5000);
            }
        });

        // Initialize order summary
        updateOrderSummary();
    </script>
</body>
</html>