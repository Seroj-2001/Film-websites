<?php 
	$DB = @new mysqli("localhost","root","","seroj");

if($DB -> connect_error){
	die("Connection error!");
}

	mysqli_set_charset($DB,"utf8");
	$name = $_POST['name'];
	$age = $_POST['age'];
	$DB->query("INSERT INTO  test (`name`,`age`) VALUES ('$name','$age')");
header("location:home.php");

?>