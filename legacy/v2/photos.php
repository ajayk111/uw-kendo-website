<?php
	include('includes/header.php');
	include('includes/header2.php');
	include('includes/functions.php');

	$page="photos.php";

	$year = 2008;

	if(isset($_GET['x'])){
		$temp = (int)$_GET["x"];
		if($temp > 2000 && $temp <= $year){
			$year = $temp;
		}
	}
?>

<div class="photos">

<?php include('includes/years.php') ?>

Click on a picture below to see a larger/more detailed version. (Thumbnails are not indicators of
picture quality.) Most photographs have been run through the autolevels filter in Photoshop. It
works wonders.
<br />
<br />
If you have any photos you'd like to see on this page, please submit them
to <img src="Emails/uwkc.gif" />.

<?php

function showPhotos($year){
	//$photosDir = getcwd() . "/photos/" . $year;
	$photosDir = "/nfs/giovanni31/dw00/d24/uwkc/photos/". $year;
	$files = scandir($photosDir, 1);

	$numEvents = sizeof($files) - 2;

	for ( $index = 0; $index < $numEvents; $index++ ){
		$titleName = $year . " " . substr($files[$index], 3);
		$titleName = ereg_replace('_', ' ', $titleName);

		if ( $titleName == "2002 camp" ){
			displayLogoTitle("2002 Camping Trip");
?>
<i>Any similarity, actual or implied, between UWKC members and the individuals depicted
<a href="2002-Camp.php">here</a> is purely coincidental.</i>

<br />
<br />
<?php
			continue;
		}

		$folderName = $year . "/" . $files[$index];

		$photos = scandir($photosDir . "/" . $files[$index]);

		$numPhotos = sizeof($photos) - 2;

		$captions = NULL;

		if ( $numPhotos % 2 == 1 ){
			$numPhotos--;
			$captions = file($photosDir . "/" . $files[$index] . "/captions.txt");
		}

		displayPhotos($titleName, $numPhotos/2, $folderName, $captions);
	}
}

showPhotos($year);

?>

</div>

<?php include('includes/footer.php'); ?>
