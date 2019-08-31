<?php include('header.php'); ?>

		<h2>Countries</h2>
		<form action="addCountry.php" method="post">
			<input type="text" name="cat" placeholder="En_Name">
			<input type="text" name="cat1" placeholder="RU_Name">
			<input type="text" name="cat2" placeholder="AM_Name">
			<input type="submit">
		</form>
	<hr>
	<?php
$request = $DB->query("SELECT * FROM `countries`");
while($row = mysqli_fetch_array($request)){
	echo "<form action='updateCountry.php' method='post'><input name='ccc' class='inpx' type='text' value='".$row['en_name']."'><input name='zzz' type='hidden' value='".$row['id']."'>
	<input name='ccc' class='inpx' type='text' value='".$row['ru_name']."'><input name='zzz' type='hidden' value='".$row['id']."'>
	<input name='ccc' class='inpx' type='text' value='".$row['am_name']."'><input name='zzz' type='hidden' value='".$row['id']."'>

	
	<a class='rButton' href='deleteCountry.php?id=".$row['id']."'><img src='images/delete.png'></a><button class='butx'><img style='height:20px;'src='images/edit.png'></button></form><hr>";
}


	?>
<?php include('footer.php'); ?>	