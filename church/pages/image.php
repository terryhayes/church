<?php 
//	include '../tools/included.php';
    include '../../theSanctuary/tools/connections.php';
    include '../tools/functions.php';
    
//$_POST['name'] = 1;
//$_POST['age'] = 2;
        if(!isset($_POST['age'])){
            $_POST['age']=0;
        }
else {
	$name = $_POST['name'];
	$age = $_POST['age'];

//echo $age.'\n';
//echo $name;
	// $name = 1;
	// echo 'welcom';
	$page = $name-1;
	$page = $page*8;
	// echo $page;
	// get all images in the spotlight 
	$all_images = $handler->query("SELECT * FROM `gallery`, `album` WHERE gallery.album_id=".$age."&& gallery.album_id = album.album_id && gallery.is_delete =  '0' && gallery.is_active =1 ORDER BY `gallery_id` ASC LIMIT ".$page.",8");

	$rows_wanted = 8;
	$total_rows = $handler->query("SELECT * FROM `gallery` WHERE `album_id`=".$age);
	$total_rows = $total_rows->rowCount();
	$pagnation = ceil($total_rows/$rows_wanted);

//	echo "<div class='row gallery_img'>";
	$count = 0;
//    echo '<div class="col-xs-11">';
    echo '<div class="img-gallery row">';
	while ($all = $all_images->fetch()) {
        echo '<div class="col-sm-4 col-md-3"> ';
        echo  "<a class='fancybox' href='../gallery/".$all['image']."' data-fancybox-group='gallery' title='".$all['description']."' > 
                <img src='../gallery/".$all['image']."' class='img-responsive gal_thmb' width='270' height='270' alt='image from ".$all['title']." album'> ";
        echo '</a></div>';
		$count ++;
//		if ($count == 3) {
//			echo "</div><div class='row gallery_img'>";
//		}
	}
    echo '</div>';
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
    }
?>
