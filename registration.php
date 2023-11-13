<!DOCTYPE html>
<?php
include "../inc/dbinfo.inc";
session_start();
if(isset($_SESSION["user"])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="registrationstyles.css?v=<?php echo time(); ?>">
</head>
<body>
	<div id="form">
                <div style="text-align:center;" id="heading">
                         <img src="EMESIS Logo.jpg" alt="EMESIS logo">
                        <hr style="text-align:center;" id="line">
                </div>
                <h2>Create Account</h2>
                <form name="form" action="registraionfunction.php" method="POST">
                        <label>First Name</label></br>
                        <input type="text" id="fname" name="fname"></br></br>
                        <label>Last Name</label></br>
                        <input type="text" id="lname" name="lname"></br></br>
                        <label>Email</label></br>
                        <input type="text" id="user" name="user"></br></br>
                        <label>Password</label></br>
                        <input type="password" id="pass" name="pass"></br></br>
                        <label>Re-Type Password</label></br>
                        <input type="password" id="reppass" name="reppass"></br></br>
                        <input type="submit" id="btn" value="Create Account" name="submit"/>
</body>
</html>
