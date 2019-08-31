<?php
session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
 if($username=="admin" && $password=="12345"){
 	$_SESSION['admin'] = true;
 	if(isset($_POST['save'])){
 		setcookie("admin",true,time()+60*60*24*365);
 	}
 	header("location:home.php");

 }else{
 	header("location:index.php");
 }

?>