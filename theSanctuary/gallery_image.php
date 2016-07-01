<?php 
	include 'tools/included.php';
	$name = $_POST['name'];
	// $name = 1;
	// echo 'welcom';
	$page = $name-1;
	$page = $page*6;
	// echo $page;
	// get all images in the spotlight 
	$all_spotlight =spotlight_images($handler,"SELECT * FROM `gallery` ORDER BY `gallery_id` ASC LIMIT ".$page.",6");

	$rows_wanted = 6;
	$total_rows = $handler->query("SELECT * FROM `gallery`");
	$total_rows = $total_rows->rowCount();
	$pagnation = ceil($total_rows/$rows_wanted);

	echo "<div class='row gallery_img'>";
	$count = 0;
	while ($all = $all_spotlight->fetch()) {
		echo "<div class='col-xs-4'><div class='row'><img class='img img-responsive img-thumbnail gall_img' src='../gallery/".$all['image']."' height='140px'></div><div class='row'>";
		if ($all['is_active']) {
			echo "<a href='?sp_id={$all['gallery_id']}&&active={$all['is_active']}&&soft_d=5' class='alert bg-success col-xs-4 info' role='alert' style='cursor:pointer;'>Active</a>";
		}else{
			echo "<a href='?sp_id={$all['gallery_id']}&&active={$all['is_active']}&&soft_d=5' class='alert bg-danger col-xs-4 info' role='alert' style='cursor:pointer;'>Not Active</a>";
		}
		if (!$all['is_delete']) {
			echo "<a href='?sp_id={$all['gallery_id']}&&soft_d={$all['is_delete']}&&active=5' class='alert bg-success col-xs-6 info' role='alert' style='cursor:pointer;'>Available</a>";
		}else{
			echo "<a href='?sp_id={$all['gallery_id']}&&soft_d={$all['is_delete']}&&active=5' class='alert bg-danger col-xs-6 info' role='alert' style='cursor:pointer;'>Soft Deleted</a>";
		}
		echo "</div></div>";
		$count ++;
		if ($count == 3) {
			echo "</div><div class='row gallery_img'>";
		}
	}
// while ($all = $all_spotlight->fetch()) {
// 		echo "<tr class='ress'>";
// 		echo "<td><img rowspan='1' src='../spotlight/".$all['image']."' class='row img img-responsive'></td><td><div class='row'>";
// 		if ($all['is_active']) {
// 			echo "<a href='?sp_id={$all['gallery_id']}&&active={$all['is_active']}&&soft_d=5' class='alert bg-success col-xs-4 info' role='alert' style='cursor:pointer;'>Active</a><a class='col-xs-1'>&nbsp;</a>";
// 		}else{
// 			echo "<a href='?sp_id={$all['gallery_id']}&&active={$all['is_active']}&&soft_d=5' class='alert bg-danger col-xs-4 info' role='alert' style='cursor:pointer;'>Not Active</a><a class='col-xs-1'>&nbsp;</a>";
// 		}
// 		if (!$all['is_delete']) {
// 			echo "<a href='?sp_id={$all['gallery_id']}&&soft_d={$all['is_delete']}&&active=5' class='alert bg-success col-xs-4 info' role='alert' style='cursor:pointer;'>Available</a><a class='col-xs-1'>&nbsp;</a>";
// 		}else{
// 			echo "<a href='?sp_id={$all['gallery_id']}&&soft_d={$all['is_delete']}&&active=5' class='alert bg-danger col-xs-4 info' role='alert' style='cursor:pointer;'>Soft Deleted</a><a class='col-xs-1'>&nbsp;</a>";
// 		}
// 		echo "</div><div' class='row'><a' href='?sp_id={$all['gallery_id']}' class='alert bg-warning col-xs-8 info' role='alert' style='cursor:pointer;'>".$all['title']."</a></div></td></tr>";
// }
?>
