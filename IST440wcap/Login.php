<!DOCTYPE html>
<?php include "../inc/dbinfo.inc";
?>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="loginstyles.css?v=<?php echo time(); ?>">
</head>
<body>
        <div id="form">
                <div style="text-align:center;" id="heading">
                         <h1>EMESIS</h1>
                        <hr style="text-align:center;" id="line">
                </div>
                <h2>Sign in</h2>
                <form name="form" action="loginfunction.php" method="POST">
                        <label>Email</label></br>
                        <input type="text" id="user" name="user"></br></br>
                        <label> Password</label></br>
                        <input type="password" id="pass" name="pass"></br></br>
                        <input type="submit" id="btn" value="Sign in" name="submit"/>
                </form>
</body>
</html>

