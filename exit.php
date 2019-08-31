<?php

session_start();
session_destroy();
setcookie("admin",true,time()-1);
header("location:index.php");

?>