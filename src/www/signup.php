<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OrderInfo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/header_bg.css">
    <link rel="stylesheet" href="css/signInUp.css">
    <link rel="stylesheet" href="css/style_index.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="shortcut icon" href="img/logo.jpg" />

</head>
<body>
<?php include 'header.php';?>
	<div class="wrap">
	<h1 style="background-color:Tomato;"><center>Please Sign Up</center></h1>

			<div class="from-box">
				<div class="input-box">
					
			<form method="post" action="signup_handler.php">
				<div id="username"><label for="Username"><b>Username:</b></label></div>


				<p><input placeholder="User Name" class="mobile" type="text" name="username" maxlenth="50"> </p>
				<?php
                                if(isset($_SESSION["placehold_username"])){
                                        echo $_SESSION["placehold_username"];
                                        unset($_SESSION["placehold_username"]);
                                }?>
				<div id="invalid_username">
                                <p class="invalid">
                                        <?php
                                        if(isset($_SESSION["emptyUsername"])){
                                                echo $_SESSION["emptyUsername"];
                                                unset($_SESSION["emptyUsername"]);
                                        }
                                        if(isset($_SESSION["usernameExists"])){
                                                echo($_SESSION["usernameExists"]);
                                                unset($_SESSION["usernameExists"]);
                                        }
					
                                        ?></p> </div>
				<div id="password"><label for="psw"><b>Password:</b></label></div>
				<p><input placeholder="Password" class="mobile" type="text" name="password" maxlenth="160"> </p>
				<?php
                                if(isset($_SESSION["placehold_password"])){
                                        echo $_SESSION["placehold_password"];
                                        unset($_SESSION["placehold_password"]);
                                }?>
				<div id="password_error">
                                <p class="invalid">
                                        <?php
                                        if(isset($_SESSION["emptyPassword"])){
                                                echo $_SESSION["emptyPassword"];
                                                unset($_SESSION["emptyPassword"]);
                                        }
					if(isset($_SESSION["dontMatch"])){
						echo($_SESSION["dontMatch"]);
						unset($_SESSION["dontMatch"]);
					}
					if(isset($_SESSION["errorPassword"])){
						echo($_SESSION["errorPassword"]);
						unset($_SESSION["errorPassword"]);
					}
                                        ?></p></div>
				<div id="confirmpass"><label for="psw-repeat"><b>Confirm Password:</b></label></div>
				<p><input placeholder="Confirm Password" class="mobile" type="text" name="confirmPassword" maxlenth="160"> </p>
				<?php
                                if(isset($_SESSION["placehold_confirmPassword"])){
                                        echo $_SESSION["placehold_confirmPassword"];
                                        unset($_SESSION["placehold_confirmPassword"]);
                                }?>
				<div id="confirmPassword_error">
                                <p class="invalid">
                                        <?php
                                        if(isset($_SESSION["cPassword"])){
                                                echo $_SESSION["cPassword"];
                                                unset($_SESSION["cPassword"]);
                                        }
                                        ?></p> </div>
				<div class="clearfix">
				<div class="loginbtn"><input type="submit" class="login" value="Sign Up"></div>
				</div>

			</form>
 
</html>
