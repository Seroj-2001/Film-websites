<?php 
session_start();
if(!isset($_SESSION['admin'])){
	header("location:index.php");
	die();
}
include('conf/connect.php');
   ?>

<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/fonts.css">
</head>
<body>
<main>
	<div id="left">
		 <h1>ADMINISTRATOR</h1>
		 <a href="home.php">Categories</a>
		 <a href="countries.php">Countries</a>
		 <a href="quality.php">Quality</a>
		 <a href="videos.php">Add New Videos</a>
		 <a href="security.php">Security</a>
		 <a href="exit.php">Exit</a>
	</div>
	<div id="right">