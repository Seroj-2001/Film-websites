<?php
include('admin/conf/connect.php');
$id = $_POST['vid'];
$request= $DB->query("SELECT * FROM comments WHERE vid = '$id' ORDER BY id DESC");
                    while($row=mysqli_fetch_array($request)){
                    	echo "<div class='com'>".$row['comment']."</div>";
                    }





?>