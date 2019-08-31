<?php
include('conf/connect.php');
$id = $_GET['id'];
$DB->query("DELETE FROM quality WHERE id ='$id'");
header("location:quality.php");



?>