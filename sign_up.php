<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoultryPro - Create Account</title>
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
        
        /* Signup Section */
        .signup-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0;
            background: url('chicken1.jpeg') no-repeat center center;
            background-size: cover;
            position: relative;
        }
        
        .signup-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }
        
        .signup-container {
            background: var(--accent);
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            padding: 40px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .signup-logo {
            margin-bottom: 30px;
        }
        
        .signup-logo i {
            font-size: 50px;
            color: var(--primary);
        }
        
        .signup-logo h2 {
            font-size: 28px;
            color: var(--primary);
            margin-top: 15px;
        }
        
        .signup-form {
            text-align: left;
        }
        
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
            flex: 1;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 2px rgba(46, 125, 50, 0.2);
        }
        
        .password-strength {
            margin-top: 8px;
            height: 5px;
            background: #eee;
            border-radius: 3px;
            overflow: hidden;
        }
        
        .password-strength-bar {
            height: 100%;
            width: 0%;
            transition: width 0.3s ease, background 0.3s ease;
        }
        
        .password-strength-text {
            font-size: 12px;
            margin-top: 5px;
            color: #777;
        }
        
        .terms {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .terms input {
            margin-top: 5px;
            margin-right: 10px;
        }
        
        .terms label {
            line-height: 1.4;
        }
        
        .terms a {
            color: var(--primary);
            text-decoration: none;
        }
        
        .terms a:hover {
            text-decoration: underline;
        }
        
        .signup-btn {
            width: 100%;
            padding: 12px;
            background: var(--secondary);
            color: var(--accent);
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .signup-btn:hover {
            background: #F57C00;
        }
        
        .separator {
            display: flex;
            align-items: center;
            margin: 25px 0;
            color: #777;
        }
        
        .separator::before,
        .separator::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ddd;
        }
        
        .separator span {
            padding: 0 15px;
        }
        
        .social-signup {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }
        
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #f5f5f5;
            color: #555;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            background: var(--primary);
            color: var(--accent);
            transform: translateY(-3px);
        }
        
        .login-link {
            margin-top: 20px;
            font-size: 15px;
        }
        
        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: var(--accent);
            padding: 30px 0 20px;
            margin-top: auto;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .signup-container {
                padding: 30px 20px;
                margin: 0 15px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .nav-links {
                display: none;
            }
            
            .social-signup {
                justify-content: center;
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
            </nav>
        </div>
    </header>

    <!-- Signup Section -->
    <section class="signup-section">
        <div class="signup-container">
            <div class="signup-logo">
                <i class="fas fa-feather-alt"></i>
                <h2>Create Your Account</h2>
                <p>Join thousands of poultry farmers managing their operations with PoultryPro</p>
            </div>
            
            <form class="signup-form" method="POST" action="assets/php/process_signup.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" >
                    </div>
                    
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email" >
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                </div>
                
                <div class="form-group">
                    <label for="farmName">Farm Name (Optional)</label>
                    <input type="text" id="farmName" name="farmName" placeholder="Enter your farm name">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a strong password" >
                    <div class="password-strength">
                        <div class="password-strength-bar" id="passwordStrengthBar"></div>
                    </div>
                    <div class="password-strength-text" id="passwordStrengthText">Password strength</div>
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" >
                </div>
                
                <button type="submit" class="signup-btn" name="signup">Create Account</button>
            </form>
            
            <div class="login-link">
                Already have an account? <a href="login.php">Log in here</a>
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
        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('passwordStrengthBar');
        const strengthText = document.getElementById('passwordStrengthText');
        
        passwordInput.addEventListener('input', function() {
            const password = passwordInput.value;
            let strength = 0;
            let message = '';
            
            // Check password strength
            if (password.length > 0) {
                if (password.length < 6) {
                    strength = 20;
                    message = 'Too short';
                    strengthBar.style.background = '#e74c3c';
                } else {
                    // Check for lowercase, uppercase, numbers, and special characters
                    const hasLower = /[a-z]/.test(password);
                    const hasUpper = /[A-Z]/.test(password);
                    const hasNumber = /[0-9]/.test(password);
                    const hasSpecial = /[^A-Za-z0-9]/.test(password);
                    
                    let strengthFactors = 0;
                    if (hasLower) strengthFactors++;
                    if (hasUpper) strengthFactors++;
                    if (hasNumber) strengthFactors++;
                    if (hasSpecial) strengthFactors++;
                    
                    if (password.length >= 6) strengthFactors++;
                    
                    switch(strengthFactors) {
                        case 1:
                            strength = 4;
                            message = 'Weak';
                            strengthBar.style.background = '#e74c3c';
                            break;
                        case 2:
                            strength = 9;
                            message = 'Fair';
                            strengthBar.style.background = '#f39c12';
                            break;
                        case 3:
                            strength = 15;
                            message = 'Good';
                            strengthBar.style.background = '#3498db';
                            break;
                        case 4:
                        case 5:
                            strength = 20;
                            message = 'Strong';
                            strengthBar.style.background = '#2ecc71';
                            break;
                    }
                }
            } else {
                message = 'Password strength';
                strengthBar.style.background = '#eee';
            }
            
            strengthBar.style.width = strength + '%';
            strengthText.textContent = message;
        });
        
        // Form validation
        document.querySelector('.signup-form').addEventListener('submit', function(e) {
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (!firstName || !lastName || !email || !password || !confirmPassword) {
                alert('Please fill in all required fields');
                e.preventDefault();
                return;
            }
            
            if (password !== confirmPassword) {
                alert('Passwords do not match');
                e.preventDefault();
                return;
            }
        });
        
        // Simulate linking from the login page
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('from') === 'login') {
            document.querySelector('.signup-logo p').textContent = 'Complete the form below to create your PoultryPro account';
        }
    
    </script>
    
</body>
</html>