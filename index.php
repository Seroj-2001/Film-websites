<?php
session_start();
if(isset($_COOKIE['admin'])){
	$_SESSION['admin']=true;
}
if(isset($_SESSION['admin'])){
	header("location:home.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/fonts.css">
</head>
<body>
	<form id="box" action="check.php" method="post">
		<input autofocus placeholder="Username" type="text" name="username">
		<input placeholder="Password" type="password" name="password">
		<label><input type="checkbox" name="save">Stay in system</label>
		<input type="submit" value="Sign In" >
	</form>
<script type="text/javascript" src="scripts/jquery-min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>