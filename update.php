<?php 
include('conf/connect.php');
 $name= $_POST['ccc'];
 $id= $_POST['zzz'];
 $DB->query("UPDATE category SET name='$name' WHERE id='$id'");
 header("location:home.php");
?>