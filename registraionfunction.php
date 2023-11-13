<?php include "../inc/dbinfo.inc";
        if(isset($_POST['submit'])){
		$fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $email = $_POST["user"];
                $password = $_POST["pass"];
		$reppass = $_POST["reppass"];

		$errors = array();

		if(empty($fname) OR empty($lname) OR empty($email) OR empty($password) OR empty($reppass)){
			array_push($errors, "All fields are required.");
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			array_push($errors, "Invalid Email.");
		}
		if(strlen($password)<8){
			array_push($errors, "Password must be at least 8 characters long.");
		}
		if($password!==$reppass){
			array_push($errors, "Password does not match.");
		}

		$sql = "SELECT * FROM user WHERE email_address = '$email'";
		$result = mysqli_query($conn, $sql);
		$rowcount = mysqli_num_rows($result);
		if($rowcount>0){
			array_push($errors, "Email already exists.");
		}

		if(count($errors)>0){
			foreach ($errors as $error){
				echo "<div class='alert alert-danger'>$error</div>";
			}
		}else{
		//inserting data into database
			$sql = "INSERT INTO user (first_name, last_name, email_address, password) VALUES ( ?, ?, ?, ? )";
			$stmt = mysqli_stmt_init($conn);
			$preparestmt = mysqli_stmt_prepare($stmt, $sql);
			if($preparestmt){
				mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $password);
				mysqli_stmt_execute($stmt);
				echo "<div class='alert alert-success'>Your account has been created.</div>";
			}else{
				die("Something went wrong.");
			}
		}
	}
