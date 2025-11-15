<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Creator</title>
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

        .hero p {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.95);
            font-weight: 300;
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px 60px;
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 35px;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 0.6s ease;
            animation-fill-mode: both;
        }

        .card:nth-child(1) { animation-delay: 0.1s; }
        .card:nth-child(2) { animation-delay: 0.2s; }
        .card:nth-child(3) { animation-delay: 0.3s; }
        .card:nth-child(4) { animation-delay: 0.4s; }
        .card:nth-child(5) { animation-delay: 0.5s; }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 80px rgba(0,0,0,0.4);
        }

        .card-image {
            height: 220px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card:nth-child(1) .card-image { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .card:nth-child(2) .card-image { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
        .card:nth-child(3) .card-image { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
        .card:nth-child(4) .card-image { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
        .card:nth-child(5) .card-image { background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); }

        .card-image i {
            font-size: 5rem;
            color: rgba(255, 255, 255, 0.9);
            animation: float 3s ease-in-out infinite;
        }

        .card-content {
            padding: 30px;
        }

        .card-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .card-description {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .card-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            flex: 1;
            padding: 14px 20px;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-family: 'Poppins', sans-serif;
        }

        .btn i {
            font-size: 1.1rem;
        }

        .btn-demo {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-demo:hover {
            background: #667eea;
            color: white;
            transform: scale(1.05);
        }

        .btn-create {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-create:hover {
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
            transform: scale(1.05);
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

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
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

            .hero p {
                font-size: 1.1rem;
            }

            .cards-grid {
                grid-template-columns: 1fr;
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
                <!-- <a href="#" class="nav-link">
                    <i class="fas fa-eye"></i>
                    See Demo
                </a> -->
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
        <h1>Choose Your Perfect Template</h1>
        <p>Start building amazing landing pages in minutes</p>
    </section>

    <!-- Cards Container -->
    <div class="container">
        <div class="cards-grid">
            <div class="card">
                <div class="card-image">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Landing Page No - 1</h3>
                    <p class="card-description">Perfect for software products with clean design, feature sections, and compelling CTAs.</p>
                    <div class="card-buttons">
                        <a class="btn btn-demo" href="demo/landing1/">
                            <i class="fas fa-eye"></i>
                            See Demo
                        </a>
                        <a class="btn btn-create" onclick="alert('Create link will be added here')">
                            <i class="fas fa-plus-circle"></i>
                            Create
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Landing Page No - 2</h3>
                    <p class="card-description">Perfect for software products with clean design, feature sections, and compelling CTAs.</p>
                    <div class="card-buttons">
                        <a class="btn btn-demo" href="demo/landing2/">
                            <i class="fas fa-eye"></i>
                            See Demo
                        </a>
                        <a class="btn btn-create" onclick="alert('Create link will be added here')">
                            <i class="fas fa-plus-circle"></i>
                            Create
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Landing Page No - 3</h3>
                    <p class="card-description">Perfect for software products with clean design, feature sections, and compelling CTAs.</p>
                    <div class="card-buttons">
                        <a class="btn btn-demo" href="demo/landing3/">
                            <i class="fas fa-eye"></i>
                            See Demo
                        </a>
                        <a class="btn btn-create" onclick="alert('Create link will be added here')">
                            <i class="fas fa-plus-circle"></i>
                            Create
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Landing Page No - 4</h3>
                    <p class="card-description">Perfect for software products with clean design, feature sections, and compelling CTAs.</p>
                    <div class="card-buttons">
                        <a class="btn btn-demo" href="demo/landing4/">
                            <i class="fas fa-eye"></i>
                            See Demo
                        </a>
                        <a class="btn btn-create" onclick="alert('Create link will be added here')">
                            <i class="fas fa-plus-circle"></i>
                            Create
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Landing Page No - 5</h3>
                    <p class="card-description">Perfect for software products with clean design, feature sections, and compelling CTAs.</p>
                    <div class="card-buttons">
                        <a class="btn btn-demo" href="demo/landing5/">
                            <i class="fas fa-eye"></i>
                            See Demo
                        </a>
                        <a class="btn btn-create" onclick="alert('Create link will be added here')">
                            <i class="fas fa-plus-circle"></i>
                            Create
                        </a>
                    </div>
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