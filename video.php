<?php 
include('header.php');
?>
<?php
$id=$_GET['id'];
$request = $DB->query("SELECT * FROM videos WHERE id='$id'");
$row=mysqli_fetch_array($request);
	$catID = $row['cat'];
	$countryID = $row['country'];
	$qualityID = $row['quality'];
	$q1 = $DB->query("SELECT * FROM category WHERE id='$catID'");
	$r1 = mysqli_fetch_array($q1);
	$catName = $r1['en_name'];

	$q1 = $DB->query("SELECT * FROM countries WHERE id='$countryID'");
	$r1 = mysqli_fetch_array($q1);
	$countryName = $r1['en_name'];
	$q1 = $DB->query("SELECT * FROM quality WHERE id='$qualityID'");
	$r1 = mysqli_fetch_array($q1);
	$qualityName = $r1['name'];



?>
			<div class="item">
				<div class="cover" style="background-image: url('img/cover/<?=$row['pic']?>')"></div>
				<h2><?=$row['title']?>(<?=$row['year']?>)</h2>
				<p><?php

					 echo $row['description'];
					 
					?></p>
				<div class="property"><b>Country:</b><?=$countryName?></div>

				<div class="property"><b>Quality:</b><?=$qualityName?></div>
				<div class="property"><b>Category:</b><?=$catName?></div>
             <div id="vid">
             	<div class="vidBut activeBut">Trailer</div>
             	<div class="vidBut">Film</div>
             </div>

             <div id="trailer">
             	<iframe src="<?=$row['trailer']?>" frameborder="0" class="ifr">
             		
             	</iframe>
             </div>
             	<div id="film">
             		
             	<iframe src="<?=$row['code']?>" frameborder="0" class="ifr">
             		
             	</iframe>
             	</div>

             	<div>

                     <input type="hidden" value="<?php echo $_GET['id']; ?>" id="cid">              		
             		<textarea autofocus id="comment"></textarea>
             		<div id="send">Send</div>
             	</div>
             	<div id="comments">
             	</div>




				</div>
<?php
include('footer.php');
?>