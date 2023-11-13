<?php 
session_start(); 
if(!isset($_SESSION["user"])){ 
    header("Location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emesis</title>
    <link rel="stylesheet" type="text/css" href="test.css">
  </head>
  <body>
   <div class="logoutlink">
   <a href="logout.php">Logout</a>
   </div>
         <div id="form">
         <div style="text-align:center;" id="heading">
                         <img src="EMESIS Logo.jpg" alt="EMESIS logo">
                        <hr style="text-align:center;" id="line"></br>
                </div>
                <form name="form">
                <div class="buttonholder">
                        <a href="Search.php">
                                 <button type="button" id="buttonone">PATIENT SEARCH</button></br>
                        </a>
                        <a href="NewEncounter.php">
                                 <button type="button" id="buttontwo">NEW CHART</button></br></br>
                        </a>
                </div>
                        <center>
                        <a href="helpsupport.php">Help & Support</a>
                        </center>
                </form>
</body>
</html>

