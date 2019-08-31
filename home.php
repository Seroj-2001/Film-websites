<?php include('header.php'); ?>

		<h2>Categories</h2>
		<form action="addCat.php" method="post">
			<input type="text" name="cat" placeholder="Eng Name">
			<input type="text" name="cat2" placeholder="Ru Name">
			<input type="text" name="cat3" placeholder="Hy Name">
			<input type="submit">
		</form>
	<hr>
	<?php
$request = $DB->query("SELECT * FROM `category`");
while($row = mysqli_fetch_array($request)){
	echo "<form action='update.php' method='post'><input name='ccc' class='inpx' type='text' value='".$row['en_name']."'><input name='zzz' type='hidden' value='".$row['id']."'>
	<input name='ccc' class='inpx' type='text' value='".$row['ru_name']."'><input name='zzz' type='hidden' value='".$row['id']."'>
	<input name='ccc' class='inpx' type='text' value='".$row['am_name']."'><input name='zzz' type='hidden' value='".$row['id']."'></form>


	<a class='rButton' href='deleteCat.php?id=".$row['id']."'><img src='images/delete.png'></a><button class='butx'><img style='height:20px;'src='images/edit.png'></button></form><hr>";
}


	?>
<?php include('footer.php'); ?>		
	