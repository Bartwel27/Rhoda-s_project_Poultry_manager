<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PoultryPro Management</title>
    <style>
        /* Global Styles */
        :root {
            --primary: #1B5E20; /* Dark green */
            --secondary: #FF9800; /* Orange */
            --accent: #FFFFFF; /* White */
            --text: #333333;
            --light-bg: #F5F5F5;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            color: var(--text);
            line-height: 1.6;
            background-color: var(--accent);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        h1, h2, h3, h4 {
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        p {
            margin-bottom: 15px;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--secondary);
            color: var(--accent);
            padding: 12px 25px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #E65100; /* Darker orange */
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        section {
            padding: 60px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-title h2 {
            font-size: 32px;
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
            width: 70px;
            height: 3px;
            background-color: var(--secondary);
        }
        
        /* Header */
        header {
            background-color: var(--primary);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--accent);
            text-decoration: none;
        }
        
        .logo span {
            color: var(--secondary);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--accent);
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--secondary);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(27, 94, 32, 0.8), rgba(27, 94, 32, 0.8)), url('https://images.unsplash.com/photo-1589923188937-cb64779f4abe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: var(--accent);
            text-align: center;
            padding: 80px 0;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .hero h1 {
            font-size: 36px;
            color: var(--accent);
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        
        /* Contact Section */
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        
        .info-icon {
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .info-content h3 {
            margin-bottom: 5px;
            font-size: 18px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary);
        }
        
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 2px rgba(27, 94, 32, 0.2);
        }
        
        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        /* FAQ Section */
        .faq {
            background-color: #E8F5E9;
        }
        
        .faq-item {
            background-color: var(--accent);
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--primary);
        }
        
        .faq-answer {
            padding: 0 20px 20px;
            color: #555;
            display: none;
        }
        
        /* Footer */
        footer {
            background-color: var(--primary);
            color: var(--accent);
            padding: 30px 0 20px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 28px;
            }
            
            .hero p {
                font-size: 16px;
            }
            
            .section-title h2 {
                font-size: 28px;
            }
            
            .contact-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Poultry<span>Pro</span></a>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="#" class="active">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Get In Touch With Us</h1>
                <p>We're here to answer your questions and help you with your poultry management needs</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Reach out to us through any of the following methods</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info">
                    <div class="info-item">

                        <div class="info-content">
                            <h3>Our Address</h3>
                            <p>123 Farmway Road<br>Agriculture City, AC 12345</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-content">
                            <h3>Phone Number</h3>
                            <p>+260 777974609<br>Mon-Fri: 8:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-content">
                            <h3>Email Address</h3>
                            <p>sakalarhoda16@gmail.com<br>support@poultrypro.com</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-content">
                            <h3>Business Hours</h3>
                            <p>Monday-Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="Enter your email address" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="Enter your phone number">
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" placeholder="How can we help you?" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Quick answers to common questions about contacting us</p>
            </div>
            
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        How quickly do you respond to inquiries?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        We typically respond to all inquiries within 24 hours during business days. For urgent matters, we recommend calling our office directly.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer farm visits or consultations?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, we offer on-site farm visits and consultations. Please contact us to schedule an appointment at your convenience.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What information should I include in my inquiry?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Please include your name, contact information, the size of your operation, and specific challenges you're facing. This helps us provide the most relevant assistance.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you provide emergency support?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, we offer emergency support for critical issues affecting poultry health and operations. Call our emergency line at +1 (555) 123-HELP for immediate assistance.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="copyright">
                <p>&copy; 2025 PoultryPro Management. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple FAQ toggle functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isVisible = answer.style.display === 'block';
                
                answer.style.display = isVisible ? 'none' : 'block';
                const icon = question.querySelector('i');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });
        });
        
        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    </script>
</body>
</html>