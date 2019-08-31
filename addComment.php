<?php

include('admin/conf/connect.php');
$com = $_POST['comment'];
$id = $_POST['vid'];
$DB->query("INSERT INTO comments (`comment`,`vid`) VALUES ('$com','$id')");


?>