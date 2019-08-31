<?php 
include('conf/connect.php');
 $name= $_POST['ccc'];
 $name1= $_POST['zzz'];
 $name2= $_POST['hhh'];
 $id= $_POST['zzz'];
 $DB->query("UPDATE countries SET en_name='$name',ru_name='$name1',am_name='$name2' WHERE id='$id'");
 header("location:countries.php");
?>