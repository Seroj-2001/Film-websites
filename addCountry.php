<?php 
$name = trim($_POST['cat']);
$name1 = trim($_POST['cat1']);
$name2 = trim($_POST['cat2']);
include('conf/connect.php');
$request =  $DB->query("SELECT * FROM `countries` WHERE en_name = '$name'");
if(!empty($name) AND mysqli_num_rows($request)==0){
$DB->query("INSERT INTO `countries` (`en_name`,`ru_name`,`am_name`) VALUES('$name','$name1','$name2')");
}
 header("location:countries.php");



?>
