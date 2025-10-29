<?php
require "assets/php/db.php";
require "assets/php/functions.php";
session_start();

if (isset($_POST["login"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	if (!empty($email) && !empty($password)) {
		if (strlen($password) > 5) {
			if (preg_match("/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/", $email)) {
				$sql = "select * from user where Email = ?";
				$stmt = mysqli_stmt_init($connect);
				if (mysqli_stmt_prepare($stmt, $sql)) {
					if (mysqli_stmt_bind_param($stmt, "s", $email)) {
						if (mysqli_stmt_execute($stmt)) {
							
							$result = mysqli_stmt_get_result($stmt);
							$rows = mysqli_num_rows($result);
							$fetch = mysqli_fetch_assoc($result);
							// $ver_password = $fetch["password"]
							
								if ($email == $fetch["Email"] || password_verify($password, $fetch["password"])) {
									//if () {
										$f_name = $fetch["F_name"];
										$l_name = $fetch["L_name"];
										$email = $fetch["Email"];
										$farm_name = $fetch["Farm_name"];
										$phone_number = $fetch["Phone_number"];
										
										$_SESSION["fname"] = $f_name;
										$_SESSION["lname"] = $l_name;
										$_SESSION["email"] = $email;
										$_SESSION["farmName"] = $farm_name;
										$_SESSION["phoneNumber"] = $phone_number;
										
										header("LOCATION: dash_board.php?successfullyLogedIn");
									//} else {_innerhtml("Wrong password or email","login.php");}
								} else {_innerhtml("Unable to match the information","login.php");}
						} else {_innerhtml("Failed to execute a this moment!","login.php");}
					} else {_innerhtml("Failed to bind your information","login.php");}
				} else {_innerhtml("Failed to prepare","login.php");}
			} else {_innerhtml("You are using an invalid email","login.php");}
		} else {_innerhtml("Your password should be greater than 5","login.php");}
	} else {_innerhtml("No field should be empty","login.php");}
	
}