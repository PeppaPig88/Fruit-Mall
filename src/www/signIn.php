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
	<h1 style="background-color:Tomato;"><center>Please Sign In</center></h1>




			<div class="from-box">
				<div class="input-box">
				<form method="post" action="login-handler.php" >
				<div id="username"><label for="Username"><b>Username:</b></label></div>
				<p><input placeholder="User Name" class="mobile" type="text" name="username" maxlenth="50"> </p>
				<?php
				if (isset($_SESSION["placehold_username"])) {
					echo $_SESSION["placehold_username"];
					unset($_SESSION["placehold_username"]);
				} ?>
				<div id="invalid_username">
					<p class="invalid">
						<?php
						if (isset($_SESSION["emptyUsername"])) {
							echo $_SESSION["emptyUsername"];
							unset($_SESSION["emptyUsername"]);
						}
						if (isset($_SESSION["invalid_user"])) {
							echo ($_SESSION["invalid_user"]);
							unset($_SESSION["invalid_user"]);
						}
						?></p>
				</div>
				<div id="password"><label for="psw"><b>Password:</b></label></div>
				<p><input placeholder="Password" class="mobile" type="text" name="password" maxlenth="160"> </p>
				<?php
				if (isset($_SESSION["placehold_password"])) {
					echo $_SESSION["placehold_password"];
					unset($_SESSION["placehold_password"]);
				} ?>
				<div id="password_error">
					<p class="invalid">
						<?php
						if (isset($_SESSION["emptyPassword"])) {
							echo $_SESSION["emptyPassword"];
							unset($_SESSION["emptyPassword"]);
						}
						if (isset($_SESSION["unauth_user"])) {
							echo ($_SESSION["invalid_user"]);
							unset($_SESSION["invalid_user"]);
						}
						?></p>
				</div>
				<div class="clearfix">
				<div class="loginbtn"><input type="submit" class="login" value="login"></div>
				<form>
				
			</div>

		 </div>

</body>

		</html>
		