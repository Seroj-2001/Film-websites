<?php 
session_start();
if(!isset($_SESSION['lang'])){
	$_SESSION['lang']="am";
}
$lang = $_SESSION['lang'];
include('admin/conf/connect.php');
include($lang.".php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Ֆիլմեր</title>
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	     <header class="navbar-fixed-top">
	 <a href="lang.php?l=am" class="lang">Հայ</a>
    <a href="lang.php?l=ru" class="lang">Ru</a>
    <a href="lang.php?l=en" class="lang">ENG</a>
        <nav>
            <ul>
                <li><a href="index.php"><?=$menu1?></a></li>
                <li><a href="contact.php"><?=$menu2?></a></li>
                 <li><a href="about.php"><?=$menu3?></a></li>
            </ul>
        </nav>
     
    </header>
   
    	<main>
		<div id="left">
			<?php
			$request = $DB->query("SELECT * FROM category");
			while($row=mysqli_fetch_array($request)){
			echo "<a class='cat' href=''>".$row[$lang.'_name']."</a>";
		}
			?>
				</div>
		<div id="right">
			 