<?php
	include 'tools/included.php';
	$spot_number = get_spotlight_number($handler);
	$spot_pic = get_spotlight_images($handler);
	// echo ".slide";

?>
<?php
$start = 0;
while ($start < $spot_number) {
	echo ".slide-".$words[$start]."{
		background: url(".$spot_pic[$start]['image'].") no-repeat;
		background-size: cover;
	}";
	$start++;
}
echo basename($_SERVER['REQUEST_URI'])."<br>";
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SCRIPT_FILENAME'];
?>
