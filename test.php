<?php 
	$DB = @new mysqli("localhost","root","","seroj");

if($DB -> connect_error){
	die("Connection error!");
}

	mysqli_set_charset($DB,"utf8");
	$name = $_POST['name'];
	$DB->query("INSERT INTO  category (`name`) VALUES ('$name')");
header("location:home.php");

?>