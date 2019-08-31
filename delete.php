	<?php 
	$DB = @new mysqli("localhost","root","","seroj");

if($DB -> connect_error){
	die("Connection error!");
}
mysqli_set_charset($DB,"utf8");

$id = $_GET['id'];
$DB->query("DELETE FROM test WHERE id='$id'");
header("location:home.php");

?>