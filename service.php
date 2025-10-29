<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poultry Manager | Professional Poultry Management Solutions</title>
    <style>
        /* CSS Variables for Color Scheme */
        :root {
            --dark-green: #1a472a;
            --orange: #ff7b25;
            --white: #ffffff;
            --black: #121212;
            --light-gray: #f5f5f5;
            --medium-gray: #e0e0e0;
        }
        
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--white);
            color: var(--black);
            line-height: 1.6;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        h1, h2, h3, h4 {
            margin-bottom: 15px;
            color: var(--dark-green);
        }
        
        p {
            margin-bottom: 15px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: var(--orange);
            color: var(--white);
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: var(--dark-green);
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--orange);
            color: var(--orange);
        }
        
        .btn-secondary:hover {
            background-color: var(--orange);
            color: var(--white);
        }
        
        section {
            padding: 80px 0;
        }
        
        /* Header Styles */
        header {
            background-color: var(--dark-green);
            color: var(--white);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--white);
            text-decoration: none;
        }
        
        .logo span {
            color: var(--orange);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
        }
        
        nav ul li a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        nav ul li a:hover {
            color: var(--orange);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            background-color: var(--dark-green);
            color: var(--white);
            text-align: center;
            padding: 150px 0;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: var(--white);
        }
        
        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        /* Services Section */
        .services {
            background-color: var(--light-gray);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 36px;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--orange);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background-color: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            padding: 30px;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-content h3 {
            color: var(--dark-green);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--orange);
        }
        
        /* Features Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            text-align: center;
            padding: 30px;
            border-radius: 8px;
            background-color: var(--white);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .feature-number {
            width: 60px;
            height: 60px;
            background-color: var(--orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--white);
            font-size: 24px;
            font-weight: bold;
        }
        
        /* Testimonials Section */
        .testimonials {
            background-color: var(--light-gray);
        }
        
        .testimonial-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }
        
        .testimonial-track {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .testimonial-slide {
            min-width: 100%;
            padding: 30px;
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
        }
        
        .client-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 4px solid var(--orange);
        }
        
        .testimonial-content {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            padding: 0 20px;
        }
        
        .testimonial-content::before,
        .testimonial-content::after {
            content: '"';
            font-size: 40px;
            color: var(--orange);
            position: absolute;
            opacity: 0.5;
        }
        
        .testimonial-content::before {
            top: -15px;
            left: 0;
        }
        
        .testimonial-content::after {
            bottom: -30px;
            right: 0;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--dark-green);
            margin-top: 10px;
        }
        
        .testimonial-role {
            color: var(--orange);
            font-size: 14px;
        }
        
        .slider-nav {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: var(--medium-gray);
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .slider-dot.active {
            background-color: var(--orange);
        }
        
        /* Contact Section */
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }
        
        .contact-info h3 {
            color: var(--dark-green);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--orange);
        }
        
        .contact-details {
            margin-bottom: 30px;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .contact-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--dark-green);
        }
        
        .contact-form {
            background-color: var(--light-gray);
            padding: 30px;
            border-radius: 8px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-green);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--medium-gray);
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--orange);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-green);
            color: var(--white);
            padding: 30px 0;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--medium-gray);
            font-size: 14px;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                align-items: flex-start;
            }
            
            nav {
                width: 100%;
                margin-top: 15px;
                display: none;
            }
            
            nav.active {
                display: block;
            }
            
            nav ul {
                flex-direction: column;
            }
            
            nav ul li {
                margin: 0 0 10px 0;
            }
            
            .mobile-menu-btn {
                display: block;
                position: absolute;
                top: 20px;
                right: 15px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            section {
                padding: 60px 0;
            }
            
            .client-image {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">Poultry<span>Manager</span></a>
            <button class="mobile-menu-btn">☰</button>
            <nav id="main-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="about_us.php">About</a></li>
                    <li><a href="contact_us.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Professional Poultry Management Solutions</h1>
            <p>Streamline your poultry operations with our comprehensive management tools designed to maximize productivity and efficiency.</p>
            <a href="login.php" class="btn">Get Started</a>
            
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>Comprehensive solutions for all your poultry management needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-content">
                        <h3>Production Tracking</h3>
                        <p>Monitor and analyze your poultry production metrics in real-time to optimize output and identify areas for improvement. Track egg production, growth rates, and overall flock performance.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-content">
                        <h3>Feed Management</h3>
                        <p>Efficiently manage feed inventory, consumption rates, and nutritional planning for healthier flocks. Reduce waste and optimize feeding schedules for maximum efficiency.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-content">
                        <h3>Health Monitoring</h3>
                        <p>Track flock health, vaccination schedules, and treatment records to maintain optimal poultry wellness. Early detection systems help prevent disease outbreaks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Key Features</h2>
                <p>Powerful tools to enhance your poultry management operations</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-number">1</div>
                    <h3>Performance Analytics</h3>
                    <p>Gain insights into your poultry operations with detailed analytics and reporting tools that help you make data-driven decisions.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-number">2</div>
                    <h3>Mobile Access</h3>
                    <p>Manage your poultry operations from anywhere with our responsive interface that works seamlessly on all devices.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-number">3</div>
                    <h3>Data Security</h3>
                    <p>Your sensitive poultry data is protected with enterprise-grade security measures and regular backups.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Say</h2>
                <p>Hear from poultry farmers who have transformed their operations with our solutions</p>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-track" id="testimonial-track">
                    <div class="testimonial-slide">
                        <img src="Tessy.jpg" alt="Tessy.jpg" class="client-image">
                        <div class="testimonial-content">
                            <p>Since implementing PoultryManager, our production efficiency has increased by 35%. The feed management system alone has saved us thousands in operational costs.</p>
                        </div>
                        <div class="testimonial-author">Tessy</div>
                        <div class="testimonial-role">Peterson Poultry Farms</div>
                    </div>
                    <div class="testimonial-slide">
                        <img src="Images/LC.jpg" alt="Luckson Chilumbu" class="client-image">
                        <div class="testimonial-content">
                            <p>The health monitoring features have been invaluable. We've significantly reduced mortality rates and improved overall flock health with the insights provided.</p>
                        </div>
                        <div class="testimonial-author">Luckson Chilumbu</div>
                        <div class="testimonial-role">Green Valley Eggs</div>
                    </div>
                    <div class="testimonial-slide">
                        <img src="WW.jpg" alt="Wamunyima Wamunyima" class="client-image">
                        <div class="testimonial-content">
                            <p>As a medium-sized operation, we needed a solution that was both powerful and easy to use. PoultryManager delivered on both counts and has transformed how we manage our business.</p>
                        </div>
                        <div class="testimonial-author">Wamunyima Wamunyima</div>
                        <div class="testimonial-role">Sunrise Poultry</div>
                    </div>
                </div>
                <div class="slider-nav" id="slider-nav">
                    <div class="slider-dot active" data-slide="0"></div>
                    <div class="slider-dot" data-slide="1"></div>
                    <div class="slider-dot" data-slide="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>Contact us to learn how we can help optimize your poultry operations</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-label">Address:</div>
                            <div>
                               <p>123 Farmway Road<br>Agriculture Avenue, AC 12345</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-label">Phone:</div>
                            <div>
                                <p>+260 777974609</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-label">Email:</div>
                            <div>
                                <p>sakalarhoda16@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                    <p>Saturday: 9:00 AM - 2:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="copyright">
                <p>&copy; 2025 PoultryManager. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('main-nav').classList.toggle('active');
        });

        // Testimonial Slider
        const track = document.getElementById('testimonial-track');
        const dots = document.querySelectorAll('.slider-dot');
        let currentSlide = 0;
        const slideCount = document.querySelectorAll('.testimonial-slide').length;

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            track.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Update active dot
            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        // Add click events to dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
            });
        });

        // Auto-advance slides
        setInterval(() => {
            currentSlide = (currentSlide + 1) % slideCount;
            goToSlide(currentSlide);
        }, 5000);

        // Form Submission - Send email to sakalarhoda16@gmail.com
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;
            
            // Create mailto link with sakalarhoda16@gmail.com as recipient
            const recipient = "sakalarhoda16@gmail.com";
            const subject = `New Contact Form Submission from ${name}`;
            const body = `Name: ${name}%0D%0AEmail: ${email}%0D%0APhone: ${phone}%0D%0AMessage: ${message}`;
            
            // Open default email client with pre-filled email to sakalarhoda16@gmail.com
            window.location.href = `mailto:${recipient}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            
            // Show confirmation
            alert('Thank you for your message! Your email client will open to send your message to sakalarhoda16@gmail.com.');
            this.reset();
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    document.getElementById('main-nav').classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>