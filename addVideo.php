<?php
include('conf/connect.php');
 $title = $_POST['title'];
 $year = $_POST['year'];
 $category = $_POST['category'];
 $quality = $_POST['quality'];
 $country = $_POST['country'];
 $description = $_POST['description'];
 $video = $_POST['video'];
 $trailer = $_POST['trailer'];
 if(empty($_FILES['pic']['name'])){
 	$pic = "default.png";
 }else{
 	$pic = date("Y-m-d-H-i-s-").$_FILES['pic']['name'];
 	copy($_FILES['pic']['tmp_name'],"../img/cover/$pic");
 }
 $DB->query("INSERT INTO videos (`title`,`description`,`country`,`cat`,`pic`,`year`,`quality`,`code`,`trailer`)VALUES('$title','$description','$country','$category','$pic','$year','$quality','$video','$trailer')");
 header("location:videos.php");
?>
