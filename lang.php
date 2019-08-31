<?php
session_start();
$_SESSION['lang']=$_GET['l'];
header('location:'.$_SERVER['HTTP_REFERER']);
?>