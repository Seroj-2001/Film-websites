<?php
include('conf/connect.php');
$id = $_GET['id'];
$DB->query("DELETE FROM category WHERE id ='$id'");
header("location:home.php");



?>