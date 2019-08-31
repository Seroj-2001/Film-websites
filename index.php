<?php 
include('header.php');
?>



<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 1;
}

$itemPerPage = 3;
$request = $DB->query("SELECT * FROM videos ");
$videosCount = mysqli_num_rows($request);
$pagesCount = ceil($videosCount/$itemPerPage);
$start = ($page-1)*$itemPerPage;
?>
<!--pageing Start -->
<?php if($pagesCount>1) { ?>
<div id="pageing">
	<?php if($page!=1){?>

	<a href="index.php?page=1">&laquo;</a>
	<a href="index.php?page=<?php echo $page-1; ?>">&lsaquo;</a>
<?php }?>
	<?php
for($p=1;$p<=$pagesCount;$p++){
	if($p==$page || $p==$page-1 || $p==$page+1 || $p==$pagesCount || $p==1){
	echo "<a href='index.php?page=$p' ";
	if($page==$p){
	echo " id='activePage'";
}
	echo ">$p</a>";
}
if($p==1 && $page>=4){
	echo '<span id="dots">...</span>';

}
if($p==$pagesCount-1 && $page<$pagesCount-2){
	echo '<span id="dots">...</span>';

}
}


?>
   <?php if($page<$pagesCount){?>
	<a href="index.php?page=<?php echo $page+1; ?>">&rsaquo;</a>
	<a href="index.php?page=<?=$pagesCount?>">&raquo;</a>
	<?php } ?>
	<!--<?php $page = ['page']; if($page.length){ ?> -->

<!--<?php }?> -->

</div>
<?php  } ?>
<!--pageing Finish -->



<?php






$request = $DB->query("SELECT * FROM videos LIMIT $start,$itemPerPage");
while($row=mysqli_fetch_array($request)){
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
				<a href="video.php?id=<?=$row['id']?>"><h2><?=$row['title']?>(<?=$row['year']?>)</h2></a>
				<p><?php

					 echo mb_substr ($row['description'],0,600,"utf-8");
					 if(mb_strlen($row['description'],"utf-8")>600){
					 echo ".....";
                     }
					?></p>
				<div class="property"><b>Country:</b><?=$countryName?></div>
				<div class="property"><b>Quality:</b><?=$qualityName?></div>
				<div class="property"><b>Category:</b><?=$catName?></div>
				</div>


<?php
}
?>

<?php
include('footer.php');
?>