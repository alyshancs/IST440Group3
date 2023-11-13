<?php include "../inc/dbinfo.inc";
        if(isset($_POST['submit'])){
                $email_address = $_POST['user'];
                $password = $_POST['pass'];

                $sql = "select * from user where email_address = '$email_address' and password = '$password'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);
                if ($count==1){
			session_start();
			$_SESSION["user"] = "yes";
                        header("Location:index.php");
                }
                else{
                        echo '<script>
                                window.location.href = "login.php";
                                alert("Login failed. Invalid email or password.")
                        </script>';
                }
        }
?>

