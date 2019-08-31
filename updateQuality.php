<?php 
include('conf/connect.php');
 $name= $_POST['ccc'];
 $id= $_POST['zzz'];
 $DB->query("UPDATE quality SET name='$name' WHERE id='$id'");
 header("location:quality.php");
?>