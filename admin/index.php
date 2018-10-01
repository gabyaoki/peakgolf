<?php 
include ("../classes/connect.php"); 
$_GET["error"] = (isset($_GET["error"]))?$_GET["error"]:"";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Peak Golf Club - Private Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:500|Open+Sans|Vollkorn" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    <link rel="mask-icon" href="../images/favicon/safari-pinned-tab.svg" color="#3d4e65">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
	<div id="bgLogin">
		<div id="loginCont" class="container">
			<img src="../images/logo.png" alt="logo" />
			<h1>Private Area</h1>

			<form method="post" action="models/checkLogin.php" onsubmit="return validateForm()" id="login" autocomplete="off">
				<div class="blockfield">
					<label>Username:</label>
					<input type="text" class="required" name="username" placeholder="username">
				</div><!--//blockfield-->
				
				<div class="blockfield">
					<label>Password:</label>
					<input type="password" class="required" name="password" placeholder="password">
				</div><!--//blockfield-->
				
				<input id="submitForm" class="btn nudeRed" type="submit" value="Login">

				<?php
				if ($_GET["error"])
				{
					echo "<div class='msg errors'>You are not allowed to access this area.</div>";
				}
				?>
			</form><!--//login form-->
		</div><!--//loginCont container-->
	</div><!--//bgLogin-->
	<script src="../js/formValidation.js"></script>
</body>
</html>
