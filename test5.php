<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="test5.php" method="post">
		<input type="text" name="name"><br><br>
		<input type="number" name="age"><br><br>
		<input type="submit"> 


	</form>
	<hr>
	<?php 
	$DB = new mysqli("localhost","root","","test5");

if($DB -> connect_error){
	die("Connection error!");
}
mysqli_set_charset($DB,"utf8");

$name = $_POST['name'];
	$age = $_POST['age'];
	$DB->query("INSERT INTO  test (`name`,`age`) VALUES ('$name','$age')");
header("location:test5.php");

$request = $DB->query("SELECT * FROM test ORDER BY id DESC");
while($row = mysqli_fetch_assoc($request)){
echo $row['id']." - ".$row['name']." - ".$row['age'];
echo "<a style='float:right' href='test5.php?id=".$row['id']."'>Delete</a><hr>";

}
$id = $_GET['id'];
$DB->query("DELETE FROM test WHERE id='$id'");
header("location:test5.php");



?>


</body>
</html>