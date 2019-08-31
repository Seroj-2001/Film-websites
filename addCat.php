<?php 
$name = trim($_POST['cat']);
$name1 = trim($_POST['cat2']);
$name2 = trim($_POST['cat3']);
include('conf/connect.php');
$request =  $DB->query("SELECT * FROM `category`  WHERE am_name= '$name'");
if(!empty($name) AND mysqli_num_rows($request)==0){
$DB->query("INSERT INTO `category` (`en_name`,`ru_name`,`am_name`) VALUES('$name','$name1','$name2')");
}
 header("location:home.php");
?>