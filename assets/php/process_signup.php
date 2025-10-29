<?php
// Start session and include database connection
session_start();
require_once 'db.php';

// Initialize variables
$errors = [];
$success = false;

// Check if form was submitted
if (isset($_POST['signup'])) {
    
    // Sanitize and validate input data
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $farmName = trim($_POST['farmName']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    // Validation rules
    if (empty($firstName)) {
        $errors[] = "First name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
        $errors[] = "First name can only contain letters and spaces";
    }
    
    if (empty($lastName)) {
        $errors[] = "Last name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
        $errors[] = "Last name can only contain letters and spaces";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (!empty($phone) && !preg_match("/^[0-9+\-\s()]{10,}$/", $phone)) {
        $errors[] = "Invalid phone number format";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long";
    }
    
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }
    
    // Check if email already exists
    if (empty($errors)) {
        $check_email_sql = "SELECT * FROM user WHERE email = ?";
       $stmt = $connect->prepare($check_email_sql);
       
        
        if ($stmt) {
           $check_email_sql = "SELECT * FROM user WHERE email = ?";
         $stmt = $connect->prepare($check_email_sql);
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $result = $stmt->get_result();
            
            if ($stmt->num_rows > 0) {
                $errors[] = "Account already exists with this email. Please use a different email or login.";
                $_SESSION['account_exists'] = true;
            }
            $stmt->close();
        } else {
            $errors[] = "Database error: Unable to check email availability";
        }
    }
    
    // If no errors, insert into database
    if (empty($errors)) {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Set farm name to NULL if empty
        $farmName = empty($farmName) ? NULL : $farmName;
        $phone = empty($phone) ? NULL : $phone;
        
        // Prepare SQL statement
        $sql = "INSERT INTO user (F_name, L_name, email, phone_number, Farm_name, password) 
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $connect->prepare($sql);

        
        if ($stmt) {
            $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $farmName, $hashed_password);
            
            if ($stmt->execute()) {
                $success = true;
                $_SESSION['user_id'] = $stmt->insert_id;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $firstName . ' ' . $lastName;
                $_SESSION['success_message'] = "Account created successfully! Welcome to PoultryPro.";
				header("Location: ../../login.php ");
				
            } else {
                // Check if error is due to duplicate email (in case of race condition)
                if ($stmt->errno == 1062) { // MySQL duplicate entry error code
                    $errors[] = "Account already exists with this email. Please use a different email or login.";
                    $_SESSION['account_exists'] = true;
                } else {
                    $errors[] = "Error creating account: " . $stmt->error;
                }
            }
            $stmt->close();
        } else {
            $errors[] = "Database error: Unable to prepare statement";
        }
    }
    
    // Store errors in session for display
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'phone' => $phone,
            'farmName' => $farmName
        ];
    }
    
    // Redirect back to signup page or to dashboard
    //if ($success) {
    //    header("Location: ../../login.php ");
     //   exit();
   // } else {
   //     header("Location: ../../sign_up.php ");
   //     exit();
   // }
} else {
    // If someone tries to access this page directly
    header("Location:sign_up.php");
    exit();
}
?>