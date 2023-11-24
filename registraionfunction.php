<?php include "../inc/dbinfo.inc";
        if(isset($_POST['submit'])){
		$fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $email = $_POST["user"];
                $password = $_POST["pass"];
		$reppass = $_POST["reppass"];

		if(empty($fname) OR empty($lname) OR empty($email) OR empty($password) OR empty($reppass)){
			        echo '<script>
                                        window.location.href = "registration.php";
                                        alert("All fields are required.")
                                </script>';
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                echo '<script>
                                        window.location.href = "registration.php";
                                        alert("Invalid email.")
                                </script>';
		}
		if(strlen($password)<8){
                                echo '<script>
                                        window.location.href = "registration.php";
                                        alert("Password must be at least 8 characters long.")
                                </script>';
		}
		if($password!==$reppass){
                                echo '<script>
                                        window.location.href = "registration.php";
                                        alert("Passowrds do not match.")
                                </script>';
		}

		$sql = "SELECT * FROM user WHERE email_address = '$email'";
		$result = mysqli_query($conn, $sql);
		$rowcount = mysqli_num_rows($result);
		if($rowcount>0){
                                echo '<script>
                                        window.location.href = "registration.php";
                                        alert("Email already exists.")
                                </script>';
		}else{
		//inserting data into database
			$sql = "INSERT INTO user (first_name, last_name, email_address, password) VALUES ( ?, ?, ?, ? )";
			$stmt = mysqli_stmt_init($conn);
			$preparestmt = mysqli_stmt_prepare($stmt, $sql);
			if($preparestmt){
				mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $password);
				mysqli_stmt_execute($stmt);
				echo '<script>
					window.location.href = "login.php";
					alert("You have successfully created an account. Please log in.")
				</script>';
			}else{
				die("Something went wrong.");
			}
		}
	}
