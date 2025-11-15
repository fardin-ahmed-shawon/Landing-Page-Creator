<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #667eea;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-logo i {
            font-size: 1.8rem;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-link {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .nav-link:hover {
            color: #667eea;
            background: rgba(102, 126, 234, 0.1);
        }

        .nav-link i {
            font-size: 1.1rem;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 80px 20px 40px;
            animation: fadeInDown 0.8s ease;
        }

        .hero h1 {
            font-size: 3.5rem;
            color: white;
            margin-bottom: 15px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px 60px;
        }

        /* List Container */
        .list-container {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: fadeInUp 0.6s ease;
        }

        /* List Item */
        .list-item {
            display: flex;
            align-items: center;
            padding: 25px 30px;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.3s ease;
            gap: 25px;
        }

        .list-item:last-child {
            border-bottom: none;
        }

        .list-item:hover {
            background: rgba(102, 126, 234, 0.05);
            transform: translateX(5px);
        }

        /* Image/Icon */
        .list-image {
            width: 80px;
            height: 80px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .list-item:nth-child(1) .list-image { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .list-item:nth-child(2) .list-image { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
        .list-item:nth-child(3) .list-image { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
        .list-item:nth-child(4) .list-image { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
        .list-item:nth-child(5) .list-image { background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); }

        .list-image i {
            font-size: 2.5rem;
            color: white;
        }

        /* Content */
        .list-content {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .list-info {
            flex: 1;
        }

        .list-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .list-url {
            font-size: 0.95rem;
            color: #667eea;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .list-url:hover {
            color: #764ba2;
            gap: 12px;
        }

        .list-url i {
            font-size: 0.9rem;
        }

        /* Button */
        .btn-demo {
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            flex-shrink: 0;
        }

        .btn-demo:hover {
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
            transform: translateY(-2px);
        }

        .btn-demo i {
            font-size: 1.1rem;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #667eea;
            cursor: pointer;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .list-content {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .btn-demo {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .nav-container {
                padding: 0 20px;
            }

            .nav-logo {
                font-size: 1.2rem;
            }

            .nav-logo i {
                font-size: 1.4rem;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .list-item {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
            }

            .list-image {
                width: 60px;
                height: 60px;
            }

            .list-image i {
                font-size: 2rem;
            }

            .list-title {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <i class="fas fa-rocket"></i>
                Landing Page Creator
            </div>
            <button class="mobile-menu-btn" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </button>
            <div class="nav-links" id="navLinks">
                <a href="index.php" class="nav-link">
                    <i class="fas fa-edit"></i>
                    Create Your Own
                </a>
                <a href="landing-pages.php" class="nav-link">
                    <i class="fas fa-list"></i>
                    Landing Pages
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Your Landing Pages</h1>
    </section>

    <!-- List Container -->
    <div class="container">
        <div class="list-container">
            <div class="list-item">
                <div class="list-image">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="list-content">
                    <div class="list-info">
                        <h3 class="list-title">Landing Page No - 1</h3>
                        <a href="demo/landing1/" class="list-url">
                            <i class="fas fa-link"></i>
                            demo/landing1/
                        </a>
                    </div>
                    <a href="demo/landing1/" class="btn-demo">
                        <i class="fas fa-eye"></i>
                        See Demo
                    </a>
                </div>
            </div>

            <div class="list-item">
                <div class="list-image">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="list-content">
                    <div class="list-info">
                        <h3 class="list-title">Landing Page No - 2</h3>
                        <a href="demo/landing2/" class="list-url">
                            <i class="fas fa-link"></i>
                            demo/landing2/
                        </a>
                    </div>
                    <a href="demo/landing2/" class="btn-demo">
                        <i class="fas fa-eye"></i>
                        See Demo
                    </a>
                </div>
            </div>

            <div class="list-item">
                <div class="list-image">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="list-content">
                    <div class="list-info">
                        <h3 class="list-title">Landing Page No - 3</h3>
                        <a href="demo/landing3/" class="list-url">
                            <i class="fas fa-link"></i>
                            demo/landing3/
                        </a>
                    </div>
                    <a href="demo/landing3/" class="btn-demo">
                        <i class="fas fa-eye"></i>
                        See Demo
                    </a>
                </div>
            </div>

            <div class="list-item">
                <div class="list-image">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="list-content">
                    <div class="list-info">
                        <h3 class="list-title">Landing Page No - 4</h3>
                        <a href="demo/landing4/" class="list-url">
                            <i class="fas fa-link"></i>
                            demo/landing4/
                        </a>
                    </div>
                    <a href="demo/landing4/" class="btn-demo">
                        <i class="fas fa-eye"></i>
                        See Demo
                    </a>
                </div>
            </div>

            <div class="list-item">
                <div class="list-image">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="list-content">
                    <div class="list-info">
                        <h3 class="list-title">Landing Page No - 5</h3>
                        <a href="demo/landing5/" class="list-url">
                            <i class="fas fa-link"></i>
                            demo/landing5/
                        </a>
                    </div>
                    <a href="demo/landing5/" class="btn-demo">
                        <i class="fas fa-eye"></i>
                        See Demo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }
    </script>
</body>
</html>