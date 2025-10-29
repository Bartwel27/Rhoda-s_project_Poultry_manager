<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoultryPro - Effective Poultry Management</title>
    <style>
        :root {
            --primary: #2E7D32; /* Dark green */
            --secondary: #FF9800; /* Orange */
            --accent: #FFFFFF; /* White */
            --light: #F5F5F5; /* Light gray background */
            --dark: #1B5E20; /* Darker green */
            --text: #333333; /* Dark text */ 
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background: var(--primary);
            color: var(--accent);
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .logo span {
            color: var(--secondary);
        }
        
        .logo-icon {
            margin-right: 10px;
            color: var(--secondary);
            font-size: 28px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 25px;
        }
        
        .nav-links a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 8px 12px;
            border-radius: 4px;
        }
        
        .nav-links a:hover {
            color: var(--secondary);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--accent);
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(46, 125, 50, 0.8), rgba(46, 125, 50, 0.9)), url('https://images.unsplash.com/photo-1594489573454-3a9e7b2c4ed3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: var(--accent);
            text-align: center;
            padding: 100px 20px;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .btn {
            display: inline-block;
            background: var(--secondary);
            color: var(--accent);
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--secondary);
        }
        
        .btn:hover {
            background: transparent;
            color: var(--secondary);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--accent);
            margin-left: 15px;
        }
        
        .btn-outline:hover {
            background: var(--accent);
            color: var(--primary);
        }
        
        /* Sections */
        section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 36px;
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--secondary);
        }
        
        .section-title p {
            color: #666;
            max-width: 700px;
            margin: 30px auto 0;
        }
        
        /* Features */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background: var(--accent);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            text-align: center;
            border-top: 5px solid var(--secondary);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
            background: rgba(46, 125, 50, 0.1);
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 20px;
        }
        
        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        /* Benefits */
        .benefits {
            background-color: var(--accent);
        }
        
        .benefit-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .benefit-item {
            background: var(--light);
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            border-left: 4px solid var(--secondary);
        }
        
        .benefit-item h3 {
            color: var(--primary);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .benefit-item i {
            margin-right: 10px;
            color: var(--secondary);
        }
        
        /* About */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .about-text h2 {
            font-size: 32px;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 5px solid var(--accent);
            outline: 2px solid var(--secondary);
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: var(--accent);
            padding: 30px 0 20px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
        }
        
        /* Mobile Menu */
        .mobile-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: var(--primary);
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        .mobile-menu.active {
            display: block;
        }
        
        .mobile-menu ul {
            list-style: none;
        }
        
        .mobile-menu li {
            margin-bottom: 15px;
        }
        
        .mobile-menu a {
            color: var(--accent);
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        
        .mobile-menu a:hover {
            background: var(--secondary);
            color: var(--accent);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .menu-btn {
                display: block;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .about-content {
                grid-template-columns: 1fr;
            }
            
            .about-image {
                order: -1;
            }
            
            .btn-container {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }
            
            .btn {
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <i class="fas fa-feather-alt logo-icon"></i>
                    Poultry<span>Pro</span>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about_us.php">About</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="contact_us.php">Contact</a></li>
                </ul>
                <button class="menu-btn" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <ul>
                <li>
                    <a href="index.php">Home</a></li>
                    <li><a href="about_us.php">About</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="contact_us.php">Contact</a></li>
               
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Effective Poultry Management Solutions</h1>
            <p>Learn how to optimize your poultry operation for better health, productivity, and profitability</p>
            <div class="btn-container">
                <a href="login.php" class="btn">Get Started Today</a>
                </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="key-features">
        <div class="container">
            <div class="section-title">
                <h2>Key Aspects of Poultry Management</h2>
                <p>Successful poultry farming requires attention to these critical areas</p>
            </div>
            
            <div class="features">
                <div class="feature-card">
                     <h3>Housing & Environment</h3>
                    <p>Proper housing design, ventilation, temperature control, and space management are essential for bird health and productivity.</p>
                </div>
                
                <div class="feature-card">
                    <h3>Nutrition & Feeding</h3>
                    <p>Balanced nutrition with the right mix of proteins, carbohydrates, vitamins, and minerals is crucial for optimal growth and egg production.</p>
                </div>
                
                <div class="feature-card">
                    <h3>Health Management</h3>
                    <p>Disease prevention, vaccination programs, and prompt treatment of illnesses protect your flock and investment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <div class="section-title">
                <h2>Benefits of Proper Poultry Management</h2>
                <p>Effective management practices lead to significant improvements in your operation</p>
            </div>
            
            <div class="benefit-list">
                <div class="benefit-item">
                    <h3>Increased Productivity</h3>
                    <p>Well-managed flocks show higher growth rates and better feed conversion ratios, leading to improved profitability.</p>
                </div>
                
                <div class="benefit-item">
                    <h3> Disease Prevention</h3>
                    <p>Proper biosecurity measures and health management reduce disease outbreaks and associated losses.</p>
                </div>
                
                <div class="benefit-item">
                    <h3>Cost Efficiency</h3>
                    <p>Optimized feeding programs and resource management lower operational costs while maintaining quality.</p>
                </div>
                
                <div class="benefit-item">
                    <h3>Quality Products</h3>
                    <p>Healthy, well-cared-for birds produce higher quality meat and eggs that command better market prices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Modern Poultry Management</h2>
                    <p>Poultry management has evolved significantly with advances in technology and animal science. Today's successful poultry farmers combine traditional husbandry with data-driven decisions to optimize their operations.</p>
                    <p>From small backyard flocks to large commercial operations, effective management principles remain the same: provide clean housing, balanced nutrition, fresh water, and proactive healthcare.</p>
                    <p>Whether you're raising chickens for meat, eggs, or both, understanding flock behavior, environmental needs, and economic factors is key to long-term success.</p>
                </div>
                
                <div class="about-image">
                    <img src="Images/chicken1.jpeg" alt="Modern poultry farming">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="copyright">
                <p>&copy; 2025 PoultryPro. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu functionality
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            
            // Change icon based on menu state
            const icon = menuToggle.querySelector('i');
            if (mobileMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (mobileMenu.classList.contains('active') && 
                !event.target.closest('#menuToggle') && 
                !event.target.closest('#mobileMenu')) {
                mobileMenu.classList.remove('active');
                const icon = menuToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    </script>
</body>
</html>