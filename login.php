<!DOCTYPE html>
<?php
include "../inc/dbinfo.inc";
session_start();
if(isset($_SESSION["user"])){
    header("location:index.php");
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="loginstyles.css?v=<?php echo time(); ?>">
<style>
a:link {
  color: #3e9ece;
  background-color: transparent;
  text-decoration: underline;
}

a:visited {
  color: #3e9ece;
  background-color: transparent;
  text-decoration: underline;
}

a:hover {
  color: #c10300;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: #3e9ece;
  background-color: transparent;
  text-decoration: underline;
}
</style>
</head>
<body>
        <div id="form">
		<div style="text-align:center;" id="heading">
 			 <img src="EMESIS Logo.jpg" alt="EMESIS logo">
			<hr style="text-align:center;" id="line">
		</div>
                <h2>Sign in</h2>
                <form name="form" action="loginfunction.php" method="POST">
                        <label>Email</label></br>
                        <input type="text" id="user" name="user"></br></br>
                        <label> Password</label></br>
                        <input type="password" id="pass" name="pass"></br></br>
                        <input type="submit" id="btn" value="Sign in" name="submit"/></br></br>
			<center>
			<p>New to EMESIS?
			<a href="registration.php">Create an  Account</a>!</p>
			</center>
                </form>
</body>
</html>
