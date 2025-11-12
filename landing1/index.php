<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Socks Combo Pack - ClothDrob</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: #fff;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: flex;
            justify-content: center;
        }

        .logo img {
            max-width: 200px;
            height: auto;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #017739 0%, #04aa3e 100%);
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Video Section */
        .video-section {
            background: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        .video-wrapper {
            max-width: 100%;
            margin: 0 auto;
            position: relative;
            padding-bottom: 56.25%;
            height: 101%;
            overflow: hidden;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* CTA Button */
        .cta-button {
            display: inline-block;
            background: #0030FF;
            color: #fff;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: bold;
            margin: 20px 0;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }

        .cta-button:hover {
            background: #4764e5ff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.4);
        }

        .cta-button svg {
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-right: 8px;
        }

        /* Countdown Timer */
        .countdown-section {
            background: #000000;
            color: #fff;
            padding: 6px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .countdown-section .container h3 {
            color: #f62222ff;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 10px 20px;
            border-radius: 10px;
        }

        .countdown-item span {
            display: block;
            font-size: 2rem;
            font-weight: bold;
        }

        .countdown-item label {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Features Section - Updated Design */
        .features {
            background: #fff;
            padding: 40px 20px;
        }

        .section-title {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #000;
            background: #fff;
            padding: 15px 0;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
        }

        .original-section-title {
            margin: 20px 0;
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #fff;
            background: #000;
            padding: 15px 0;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0;
            margin-top: 0;
            background: #fff;
        }

        .feature-card {
            background: #fff;
            padding: 30px 20px;
            text-align: center;
            /* border: 1px solid #e0e0e0; */
            transition: none;
        }

        .feature-card:hover {
            transform: none;
            box-shadow: none;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 15px;
            fill: #4caf50;
        }

        .feature-card h3 {
            margin-bottom: 10px;
            color: #000;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .feature-card p {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        /* Gallery */
        .gallery {
            background: #f8f9fa;
            padding: 60px 20px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 30px;
        }

        .gallery-item img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        /* Why Choose Us */
        .why-choose {
            background: #fff;
            padding: 60px 20px;
        }

        .why-choose-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .checklist {
            list-style: none;
        }

        .checklist li {
            padding: 10px 0;
            padding-left: 35px;
            position: relative;
        }

        .checklist li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #4caf50;
            font-weight: bold;
            font-size: 1.5rem;
        }

        /* Pricing */
        .pricing {
            background: #c6edfc;
            color: #fff;
            padding: 60px 20px;
            text-align: center;
        }

        .price-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            max-width: 500px;
            margin: 30px auto;
            backdrop-filter: blur(10px);
        }

        .regular-price {
            text-decoration: line-through;
            opacity: 0.7;
            font-size: 1.5rem;
            color: #000;
        }

        .offer-price {
            font-size: 3rem;
            font-weight: bold;
            margin: 20px 0;
            color: #000;
        }

        .savings {
            background: #ff6b6b;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: bold;
        }

        /* Order Form - Updated Design */
        .order-form {
            background: #f5f5f5;
            padding: 40px 20px;
        }

        .order-form .section-title {
            background: #0030FF;
            color: #fff;
            font-size: 1.3rem;
            padding: 12px 20px;
            margin-bottom: 30px;
            border: none;
        }

        .form-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .product-selection {
            background: transparent;
            padding: 0;
            border-radius: 0;
            margin-bottom: 0;
            margin-top: 20px;
        }

        .product-selection h3 {
            display: none;
        }

        .product-option {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 15px;
            cursor: pointer;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
            position: relative;
        }

        .product-option:hover {
            border-color: #0030FF;
        }

        .product-option.highlight {
            border-color: #0030FF;
        }

        .product-option input[type="radio"] {
            margin-right: 10px;
        }

        .product-option label {
            cursor: pointer;
            display: inline;
        }

        .product-option h4 {
            display: inline;
            font-size: 1rem;
            font-weight: 600;
            color: #000;
        }

        .product-option p {
            margin: 8px 0 0 25px;
            font-size: 0.9rem;
        }

        .highlight-badge {
            position: absolute;
            top: -10px;
            right: 10px;
            background: #ff6b6b;
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: bold;
        }

        .form-section-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #000;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #000;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.95rem;
            transition: border-color 0.3s ease;
            background: #fff;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #0030FF;
        }

        .shipping-options {
            margin-top: 10px;
        }

        .shipping-options label {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-weight: 400;
            cursor: pointer;
        }

        .shipping-options input[type="radio"] {
            margin-right: 8px;
            width: auto;
        }

        .order-summary {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }

        .order-summary h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #000;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #e0e0e0;
            font-size: 0.95rem;
        }

        .summary-row:last-of-type {
            border-bottom: none;
        }

        .summary-total {
            font-size: 1.3rem;
            font-weight: bold;
            color: #000;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid #000;
        }

        .payment-info {
            margin-top: 20px;
            padding: 15px;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
        }

        .payment-info strong {
            display: block;
            margin-bottom: 8px;
            color: #000;
        }

        .payment-info p {
            margin: 5px 0;
            font-size: 0.9rem;
            color: #666;
        }

        .submit-btn {
            width: 100%;
            background: #0030FF;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background: #0028dd;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 48, 255, 0.3);
        }

        .privacy-note {
            margin-top: 15px;
            font-size: 0.8rem;
            color: #666;
            text-align: center;
            line-height: 1.4;
        }

        .privacy-note a {
            color: #0030FF;
            text-decoration: none;
        }

        /* Reviews */
        .reviews {
            background: #f8f9fa;
            padding: 60px 20px;
        }

        .reviews-slider {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            scroll-snap-type: x mandatory;
            padding: 20px 0;
        }

        .review-card {
            min-width: 380px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            scroll-snap-align: start;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .review-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #667eea;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 1.5rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .form-grid,
            .why-choose-content {
                grid-template-columns: 1fr;
            }

            .countdown {
                gap: 10px;
            }

            .countdown-item {
                padding: 8px 15px;
            }

            .countdown-item span {
                font-size: 1.5rem;
            }

            .offer-price {
                font-size: 2rem;
            }
        }

        /* Sticky Button */
        .sticky-cta {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            display: none;
        }

        .sticky-cta.show {
            display: block;
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from {
                transform: translate(-50%, 100px);
                opacity: 0;
            }

            to {
                transform: translate(-50%, 0);
                opacity: 1;
            }
        }

        /* Enhanced Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .hero {
                padding: 30px 15px;
            }

            .hero h1 {
                font-size: 1.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-title,
            .original-section-title {
                font-size: 1.5rem;
                padding: 12px 0;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .feature-card {
                padding: 20px 15px;
            }

            .feature-card h3 {
                font-size: 1rem;
            }

            .gallery {
                padding: 40px 15px;
            }

            .gallery-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                gap: 10px;
            }

            .gallery-item img {
                height: 120px;
            }

            .why-choose {
                padding: 40px 15px;
            }

            .why-choose-content {
                gap: 30px;
            }

            .pricing {
                padding: 40px 15px;
            }

            .price-box {
                padding: 30px 20px;
            }

            .offer-price {
                font-size: 2.5rem;
            }

            .reviews {
                padding: 40px 15px;
            }

            .review-card {
                min-width: 300px;
            }

            .order-form {
                padding: 30px 15px;
            }

            .form-container {
                max-width: 100%;
            }

            .form-grid {
                gap: 20px;
            }

            .product-option {
                padding: 15px;
            }

            .highlight-badge {
                font-size: 0.7rem;
                padding: 4px 10px;
            }

            .order-summary {
                padding: 20px;
            }

            .summary-total {
                font-size: 1.2rem;
            }

            .submit-btn {
                font-size: 1rem;
                padding: 12px;
            }

            .cta-button {
                padding: 12px 30px;
                font-size: 1.1rem;
            }

            .countdown {
                gap: 8px;
            }

            .countdown-item {
                padding: 8px 12px;
            }

            .countdown-item span {
                font-size: 1.3rem;
            }

            .countdown-item label {
                font-size: 0.8rem;
            }

            footer {
                padding: 30px 15px;
            }

            .footer-links {
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.3rem;
            }

            .hero p {
                font-size: 0.9rem;
            }

            .section-title,
            .original-section-title {
                font-size: 1.3rem;
            }

            .feature-card {
                padding: 15px 10px;
            }

            .feature-icon {
                width: 40px;
                height: 40px;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-item img {
                height: 100px;
            }

            .why-choose-content {
                gap: 20px;
            }

            .checklist li {
                padding-left: 25px;
                font-size: 0.9rem;
            }

            .checklist li:before {
                font-size: 1.2rem;
            }

            .price-box {
                padding: 20px 15px;
            }

            .regular-price {
                font-size: 1.2rem;
            }

            .offer-price {
                font-size: 2rem;
            }

            .savings {
                padding: 8px 15px;
                font-size: 0.9rem;
            }

            .review-card {
                min-width: 350px;
                padding: 15px;
            }

            .form-grid {
                gap: 15px;
            }

            .product-option h4 {
                font-size: 0.9rem;
            }

            .product-option p {
                font-size: 0.8rem;
                margin-left: 20px;
            }

            .form-section-title {
                font-size: 1.1rem;
            }

            .form-group label {
                font-size: 0.9rem;
            }

            .form-group input,
            .form-group select,
            .form-group textarea {
                padding: 10px;
                font-size: 0.9rem;
            }

            .order-summary {
                padding: 15px;
            }

            .summary-row {
                font-size: 0.9rem;
            }

            .summary-total {
                font-size: 1.1rem;
            }

            .payment-info {
                padding: 10px;
            }

            .payment-info p {
                font-size: 0.8rem;
            }

            .privacy-note {
                font-size: 0.75rem;
            }

            .cta-button {
                padding: 10px 25px;
                font-size: 1rem;
            }

            .countdown {
                gap: 5px;
            }

            .countdown-item {
                padding: 6px 10px;
            }

            .countdown-item span {
                font-size: 1.1rem;
            }

            .countdown-item label {
                font-size: 0.7rem;
            }

            .footer-links {
                flex-direction: column;
                gap: 10px;
            }

            .footer-links a {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="ClothDrob">
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>ClothDrob-এর ২৮ টি দেশে এক্সপোর্ট হওয়া অরিজিনাল Nike Socks কম্বো প্যাক</h1>
            <p>(গ্রীষ্মের গরম বা শীতের ঠান্ডা, ১০০% কটন মোজা আপনার পায়ের আরামের জন্য সবসময় প্রস্তুত)</p>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/FJmrlDkNKOI" allowfullscreen></iframe>
            </div>
            <a href="#order" class="cta-button">
                <svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M423.3 440.7c0 25.3-20.3 45.6-45.6 45.6s-45.8-20.3-45.8-45.6 20.6-45.8 45.8-45.8c25.4 0 45.6 20.5 45.6 45.8zm-253.9-45.8c-25.3 0-45.6 20.6-45.6 45.8s20.3 45.6 45.6 45.6 45.8-20.3 45.8-45.6-20.5-45.8-45.8-45.8zm291.7-270C158.9 124.9 81.9 112.1 0 25.7c34.4 51.7 53.3 148.9 373.1 144.2 333.3-5 130 86.1 70.8 188.9 186.7-166.7 319.4-233.9 17.2-233.9z"></path>
                </svg>
                অর্ডার করতে চাই
            </a>
            <p style="margin-top: 10px; color: #666;">অফারটি সীমিত সময়ের জন্য!</p>
        </div>
    </section>

    <!-- Countdown Timer -->
    <section class="countdown-section">
        <div class="container">
            <h3>Limited Time OFFER!</h3>
            <div class="countdown" id="countdown">
                <div class="countdown-item">
                    <span id="hours">00</span>
                    <label>Hours</label>
                </div>
                <div class="countdown-item">
                    <span id="minutes">00</span>
                    <label>Minutes</label>
                </div>
                <div class="countdown-item">
                    <span id="seconds">00</span>
                    <label>Seconds</label>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Delivery Banner -->
    <section style="background: #4caf50; color: #fff; padding: 30px 20px; text-align: center;">
        <div class="container">
            <h2 style="font-size: 1.8rem; margin: 0;">২ বক্স Socks অর্ডার করলেই ডেলিভারি চার্জ সম্পূর্ণ ফ্রি!</h2>
        </div>
    </section>
    <h2 class="original-section-title">অরিজিনাল Nike Socks এর বৈশিষ্ট্য</h2>
    <!-- Features Section -->
    <section class="features">
        <div class="container">

            <div class="features-grid">
                <div class="feature-card">
                    <svg class="feature-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    <h3>Stylish and Versatile Design</h3>
                    <p>অফিস থেকে ক্যাজুয়াল আউটিং—সব পরিবেশেই মানানসই।</p>
                </div>
                <div class="feature-card">
                    <svg class="feature-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    <h3>Odor-free & comfortable experience</h3>
                    <p>কটনের বিশেষ বৈশিষ্ট্য পায়ের ঘাম ও দুর্গন্ধ প্রতিরোধ করে, নিশ্চিত করে দীর্ঘস্থায়ী সতেজতা ও স্বাস্থ্যকর অনুভূতি।</p>
                </div>
                <div class="feature-card">
                    <svg class="feature-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    <h3>Long-lasting quality & durability</h3>
                    <p>প্রতিদিনের ব্যবহারে গুণগত মান অটুট থাকে, যা দীর্ঘসময় ধরে নির্ভরযোগ্য।</p>
                </div>
                <div class="feature-card">
                    <svg class="feature-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    <h3>Affordable solution</h3>
                    <p>এক বক্সেই পাঁচ জোড়া, ব্যয়বহুল নয় এবং একসাথে প্রতিদিনের প্রয়োজন পূরণ করে।</p>
                </div>
                <div class="feature-card">
                    <svg class="feature-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    <h3>Excellent for foot health</h3>
                    <p>উন্নত কটনের গুণ পায়ের আরাম ও সতেজতা নিশ্চিত করে।</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="#order" class="cta-button">এখনই অর্ডার করুন</a>
                <p style="margin-top: 10px; color: #666;">Limited Time OFFER!</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <h2 class="section-title">Product Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/sock1.webp" alt="Product 1">
                </div>
                <div class="gallery-item">
                    <img src="images/sock2.webp" alt="Product 2">
                </div>
                <div class="gallery-item">
                    <img src="images/sock3.webp" alt="Product 3">
                </div>
                <div class="gallery-item">
                    <img src="images/sock4.webp" alt="Product 4">
                </div>
                <div class="gallery-item">
                    <img src="images/sock5.webp" alt="Product 5">
                </div>
            </div>
        </div>
    </section>
 <h2 class="original-section-title">কেন আমাদের থেকে নেবেন?</h2>
    <!-- Why Choose Us Section -->
    <section class="why-choose">
        <div class="container">
           
            <div class="why-choose-content">
                <ul class="checklist">
                    <li>প্রতিটি বক্সে পাচ্ছেন ৫ জোড়া Nike Socks কম্বো প্যাক</li>
                    <li>চেক করে নেওয়ার সুবিধা।</li>
                    <li>পছন্দ না হলে রিটার্ন করার সুবিধা।</li>
                    <li>ঢাকায় নিজস্ব প্রোডাকশন হাউস রয়েছে।</li>
                    <li>আমাদের থেকে প্রোডাক্ট নিয়ে অন্যরা বিজনেস করছে।</li>
                    <li>দেশের বাইরে এক্সপোর্ট করে থাকি।</li>
                    <li>২০০০+ সেটিসফাই কাস্টমার রয়েছে।</li>
                </ul>
                <div>
                    <img src="images/pairedSocks.jpg" alt="Why Choose Us" style="width: 100%; border-radius: 15px;">
                </div>
            </div>
        </div>
    </section>

    
    <h2 class="original-section-title">সম্মানিত কাস্টমারের রিভিউ সমূহ</h2>
    <!-- Reviews Section -->
    <section class="reviews">
        
        <div class="container">
          
            <div class="reviews-slider">
                <div class="review-card">
                    <img src="https://shop.clothdrob.com/wp-content/uploads/2025/10/302c7005-5699-4c6f-a8f6-0d595454b9de-461x1024-1.webp" alt="Review 1">
                </div>
                <div class="review-card">
                    <img src="https://shop.clothdrob.com/wp-content/uploads/2025/10/d867c252-fc41-4f0c-a017-f2a7b163adcd-461x1024-1.webp" alt="Review 2">
                </div>
                <div class="review-card">
                    <img src="https://shop.clothdrob.com/wp-content/uploads/2025/10/f481ced3-e034-4187-83b0-bbb0f97c635f-461x1024-1.webp" alt="Review 3">
                </div>
                <div class="review-card">
                    <img src="https://shop.clothdrob.com/wp-content/uploads/2025/10/2fb70b29-9a8a-42e5-830b-9c15c9a5228c-461x1024-1.webp" alt="Review 4">
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="#order" class="cta-button">এখনই অর্ডার করুন</a>
                <p style="margin-top: 10px; color: #666;">Limited Time OFFER!</p>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing">
        <div class="container">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px; color:#000;">Extra 30% Off!</h2>
            <div class="price-box">
                <p class="regular-price">রেগুলার মূল্য: ৭২০ টাকা</p>
                <p class="offer-price">অফার মূল্য: ৪৯৯ টাকা</p>
                <p class="savings">Save ৳221</p>
            </div>
        </div>
    </section>

    <!-- Order Form Section -->
    <section class="order-form" id="order">
        <div class="container">
            <h2 class="section-title">২ বক্স Socks অর্ডার করলেই ডেলিভারি চার্জ সম্পূর্ণ ফ্রি!</h2>
            <h2 style="text-align: center;">নিচের ফর্মে আপনার নাম, মোবাইল নম্বর ও সম্পূর্ণ ঠিকানা লিখে "Place Order" ক্লিক করুন</h2>
            <br>

            <div class="form-container order-summary">
                <form method="POST" action="process-order.php" id="orderForm">
                    <div class="form-grid">
                        <div>
                            <h3 class="form-section-title">Billing details</h3>

                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" id="name" name="name" placeholder="Type your full Name here...." required>
                            </div>

                            <div class="form-group">
                                <label for="address">Your Address *</label>
                                <textarea id="address" name="address" rows="3" placeholder="Type your full Address here...." required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="phone">Your Phone Number *</label>
                                <input type="tel" id="phone" name="phone" placeholder="Type your 11 digits Number here...." required pattern="[0-9]{11}">
                            </div>

                    
                            <div class="product-selection">
                                <div class="product-option" data-price="499" data-shipping="100">
                                    <input type="radio" name="product" id="product1" value="1-box" checked>
                                    <label for="product1">
                                        <h4>1Box Nike Socks Combo Pack (5 Pair in 1 Box)</h4>
                                    </label>
                                    <p><strong>EXTRA 30% OFF!</strong></p>
                                    <p>SAVE ৳221</p>
                                    <p>Price: <del>৳720</del> <strong style="color: #000; font-size: 1.1rem;">৳499.00</strong></p>
                                </div>

                                <div class="product-option highlight" data-price="998" data-shipping="0">
                                    <span class="highlight-badge">FREE DELIVERY</span>
                                    <input type="radio" name="product" id="product2" value="2-box">
                                    <label for="product2">
                                        <h4>2 Box Nike Socks Combo (10 Pair in 2 Box)</h4>
                                    </label>
                                    <p><strong>SAVE ৳442 + DELIVERY CHARGE FREE</strong></p>
                                    <p>Price: <del>৳1440</del> <strong style="color: #000; font-size: 1.1rem;">৳998.00</strong></p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="form-section-title">Your Product</h3>

                            <div style="background: #fff; border: 1px solid #e0e0e0; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
                                <table style="width: 100%; border-collapse: collapse;">
                                    <thead>
                                        <tr style="border-bottom: 2px solid #e0e0e0;">
                                            <th style="text-align: left; padding: 10px 0; font-weight: 600;">Product</th>
                                            <th style="text-align: center; padding: 10px 0; font-weight: 600;">Quantity</th>
                                            <th style="text-align: right; padding: 10px 0; font-weight: 600;">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding: 15px 0;">
                                                <div id="productDisplay" style="font-size: 0.9rem; color: #666;">1Box Nike Socks Combo Pack (5 Pair in 1 Box)</div>
                                                <div id="productBadge" style="display: inline-block; background: #ff6b6b; color: #fff; padding: 3px 10px; border-radius: 3px; font-size: 0.75rem; margin-top: 5px;">SAVE ৳221</div>
                                            </td>
                                            <td style="text-align: center; padding: 15px 0;">
                                                <div style="display: inline-flex; align-items: center; border: 1px solid #ddd; border-radius: 5px;">
                                                    <button type="button" style="padding: 5px 12px; border: none; background: #f5f5f5; cursor: pointer;">-</button>
                                                    <input type="text" value="1" readonly style="width: 40px; text-align: center; border: none; padding: 5px;">
                                                    <button type="button" style="padding: 5px 12px; border: none; background: #f5f5f5; cursor: pointer;">+</button>
                                                </div>
                                            </td>
                                            <td style="text-align: right; padding: 15px 0;">
                                                <div><del style="color: #999; font-size: 0.9rem;">৳720</del></div>
                                                <div id="productPriceDisplay" style="font-weight: 600; font-size: 1.1rem;">৳499.00</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-summary">
                                <h3>Your order</h3>

                                <div class="summary-row">
                                    <span>Product</span>
                                    <span>Subtotal</span>
                                </div>

                                <div class="summary-row">
                                    <span id="productName" style="color: #666; font-size: 0.9rem;">1Box Nike Socks Combo Pack × 1</span>
                                    <span id="subtotal">৳499.00</span>
                                </div>

                                <div class="summary-row">
                                    <span>Subtotal</span>
                                    <span id="subtotalAmount">৳499.00</span>
                                </div>

                                <div class="summary-row">
                                    <span>Shipping</span>
                                    <span>
                                        <div class="shipping-options" style="text-align: right;">
                                            <label style="justify-content: flex-end; margin-bottom: 5px;">
                                                <input type="radio" name="shipping" value="outside-dhaka" data-cost="100" checked>
                                                Outside Dhaka: ৳100.00
                                            </label>
                                            <label style="justify-content: flex-start;">
                                                <input type="radio" name="shipping" value="inside-dhaka" data-cost="60">
                                                Inside Dhaka: ৳60.00
                                            </label>
                                        </div>
                                    </span>
                                </div>

                                <div class="summary-row summary-total">
                                    <span>Total</span>
                                    <span id="total">৳599.00</span>
                                </div>

                                <div class="payment-info">
                                    <strong>Cash on delivery</strong>
                                    <p>Pay with cash upon delivery.</p>
                                </div>

                                <p class="privacy-note">
                                    Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="privacy-policy.php">privacy policy</a>.
                                </p>

                                <button type="submit" class="submit-btn">
                                    Place Order <span id="orderTotal">৳599.00</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="tel:09697359942">Call us: 09697-359942</a>
                <a href="">Privacy Policy</a>
                <a href="">Terms & Conditions</a>
            </div>
            <p>© 2025 ClothDrob. All Rights Reserved</p>
        </div>
    </footer>

    <!-- Sticky CTA Button -->
    <div class="sticky-cta" id="stickyCta">
        <a href="#order" class="cta-button">
            <svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M423.3 440.7c0 25.3-20.3 45.6-45.6 45.6s-45.8-20.3-45.8-45.6 20.6-45.8 45.8-45.8c25.4 0 45.6 20.5 45.6 45.8zm-253.9-45.8c-25.3 0-45.6 20.6-45.6 45.8s20.3 45.6 45.6 45.6 45.8-20.3 45.8-45.6-20.5-45.8-45.8-45.8zm291.7-270C158.9 124.9 81.9 112.1 0 25.7c34.4 51.7 53.3 148.9 373.1 144.2 333.3-5 130 86.1 70.8 188.9 186.7-166.7 319.4-233.9 17.2-233.9z"></path>
            </svg>
            অর্ডার করতে চাই
        </a>
    </div>

    <script>
        // Countdown Timer
        function startCountdown() {
            const endDate = new Date();
            endDate.setHours(endDate.getHours() + 24);

            function updateCountdown() {
                const now = new Date().getTime();
                const distance = endDate - now;

                if (distance < 0) {
                    document.getElementById('countdown').innerHTML = '<p>Offer Ended!</p>';
                    return;
                }

                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        }

        // Order Calculation
        function updateOrderSummary() {
            const selectedProduct = document.querySelector('input[name="product"]:checked');
            const selectedShipping = document.querySelector('input[name="shipping"]:checked');

            if (!selectedProduct || !selectedShipping) return;

            const productOption = selectedProduct.closest('.product-option');
            const productPrice = parseInt(productOption.dataset.price);
            const shippingPrice = parseInt(selectedShipping.dataset.cost);

            const finalShipping = selectedProduct.value === '2-box' ? 0 : shippingPrice;
            const total = productPrice + finalShipping;

            // Update product display
            const productName = selectedProduct.value === '1-box' ?
                '1Box Nike Socks Combo Pack (5 Pair in 1 Box)' :
                '2 Box Nike Socks Combo (10 Pair in 2 Box)';

            const productBadge = selectedProduct.value === '1-box' ?
                'SAVE ৳221' :
                'SAVE ৳442 + DELIVERY CHARGE FREE';

            const originalPrice = selectedProduct.value === '1-box' ? '৳720' : '৳1440';

            document.getElementById('productDisplay').textContent = productName;
            document.getElementById('productBadge').textContent = productBadge;
            document.getElementById('productPriceDisplay').innerHTML = '৳' + productPrice.toFixed(2);

            document.getElementById('productName').textContent = productName + ' × 1';
            document.getElementById('subtotal').textContent = '৳' + productPrice.toFixed(2);
            document.getElementById('subtotalAmount').textContent = '৳' + productPrice.toFixed(2);
            document.getElementById('total').textContent = '৳' + total.toFixed(2);
            document.getElementById('orderTotal').textContent = '৳' + total.toFixed(2);

            // Update shipping display
            if (selectedProduct.value === '2-box') {
                document.querySelectorAll('input[name="shipping"]').forEach(radio => {
                    radio.parentElement.style.display = 'none';
                });
                document.querySelector('.summary-row:nth-child(4) span:last-child').innerHTML = '<span style="color: #4caf50; font-weight: 600;">FREE</span>';
            } else {
                document.querySelectorAll('input[name="shipping"]').forEach(radio => {
                    radio.parentElement.style.display = 'flex';
                });
            }
        }

        // Product Selection
        document.querySelectorAll('input[name="product"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.product-option').forEach(option => {
                    option.style.borderColor = '#e0e0e0';
                });
                this.closest('.product-option').style.borderColor = '#0030FF';
                updateOrderSummary();
            });
        });

        // Shipping Selection
        document.querySelectorAll('input[name="shipping"]').forEach(radio => {
            radio.addEventListener('change', updateOrderSummary);
        });

        // Sticky CTA Button
        window.addEventListener('scroll', function() {
            const stickyCta = document.getElementById('stickyCta');
            const orderSection = document.getElementById('order');
            const orderPosition = orderSection.getBoundingClientRect().top;

            if (window.scrollY > 500 && orderPosition > window.innerHeight) {
                stickyCta.classList.add('show');
            } else {
                stickyCta.classList.remove('show');
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form Validation
        document.getElementById('orderForm').addEventListener('submit', function(e) {
            const phone = document.getElementById('phone').value;
            if (!/^[0-9]{11}$/.test(phone)) {
                e.preventDefault();
                alert('Please enter a valid 11-digit phone number');
                return false;
            }
        });

        // Initialize
        startCountdown();
        updateOrderSummary();

        // Set first product as selected by default
        document.getElementById('product1').closest('.product-option').style.borderColor = '#0030FF';
    </script>
</body>

</html>