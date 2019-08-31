<?php include('header.php'); ?>

		<h2>Quality</h2>
		<form action="addQuality.php" method="post">
			<input type="text" name="cat" placeholder="Name">
			<input type="submit">
		</form>
	<hr>
	<?php
$request = $DB->query("SELECT * FROM `quality`");
while($row = mysqli_fetch_array($request)){
	echo "<form action='updateQuality.php' method='post'><input name='ccc' class='inpx' type='text' value='".$row['name']."'><input name='zzz' type='hidden' value='".$row['id']."'>
	<a class='rButton' href='deleteQuality.php?id=".$row['id']."'><img src='images/delete.png'></a><button class='butx'><img style='height:20px;'src='images/edit.png'></button></form><hr>";
}


	?>
<?php include('footer.php'); ?>	