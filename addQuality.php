<?php 
$name = trim($_POST['cat']);
include('conf/connect.php');
$request =  $DB->query("SELECT * FROM `quality` WHERE name= '$name'");
if(!empty($name) AND mysqli_num_rows($request)==0){
$DB->query("INSERT INTO `quality` (`name`) VALUES('$name')");
}
 header("location:quality.php");



?>