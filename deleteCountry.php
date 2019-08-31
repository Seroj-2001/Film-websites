<?php
include('conf/connect.php');
$id = $_GET['id'];
$DB->query("DELETE FROM countries WHERE id ='$id'");
header("location:countries.php");



?>