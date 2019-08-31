<?php include('header.php'); ?>

		<h2>Add New Videos</h2>
		<form id="addVideo" method="post" action="addVideo.php" enctype="multipart/form-data">
			<input placeholder="Title" type="text" name="title">
			<input  type="file" name="pic">
			<select name="year">
				<option selected disabled >Year</option>
         <?php
         for($i=date("Y");$i>=1900;$i--){
         	echo"<option>$i</option>";
         }
         ?>

			</select>
			<select name="country">
				<option selected disabled >Country</option>
         <?php
         $req = $DB->query("SELECT * FROM countries");
         while($row=mysqli_fetch_array($req)){
         	echo "<option value='".$row['id']."'>".$row['en_name']."</option>";
         }
                  
                  ?>

			</select>
			<select name="category">
				<option selected disabled >Category</option>
         <?php
         $req = $DB->query("SELECT * FROM category");
         while($row=mysqli_fetch_array($req)){
         	echo "<option value='".$row['id']."'>".$row['en_name']."</option>";
         }
                  
                  ?>

			</select>
			<select name="quality">
				<option selected disabled >Quality</option>
         <?php
         $req = $DB->query("SELECT * FROM quality");
         while($row=mysqli_fetch_array($req)){
         	echo "<option value='".$row['id']."'>".$row['name']."</option>";
         }
                  
                  ?>

			</select>
			<textarea name="description" placeholder="Description"></textarea>
			<textarea name="video" placeholder="Video code"></textarea>
			<textarea name="trailer" placeholder="Trailer code"></textarea>
			<input type="submit" value="Add Video">


		</form>
<?php include('footer.php'); ?>		
