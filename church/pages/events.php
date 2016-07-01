<?php 
//	include '../tools/included.php';
include '../../theSanctuary/tools/connections.php';
include '../tools/functions.php';
	$name = $_POST['name'];
//	 $name = 1;
	// echo 'welcom';
	$page = $name-1;
	$page = $page*8;
	// echo $page;
	// get all images in the spotlight 
	$all_program = $handler->query("SELECT * FROM `program` WHERE `is_delete` = 0 ORDER BY `date_of_event` ASC LIMIT ".$page.",8");

	$rows_wanted = 8;
	$total_rows = $handler->query("SELECT * FROM `program`");
	$total_rows = $total_rows->rowCount();
	$pagnation = ceil($total_rows/$rows_wanted);

//	echo "<div class='row gallery_img'>";
	$count = 0;
	while ($all_prog = $all_program->fetch()) {
        $date = date('F jS, Y',strtotime($all_prog['date_of_event']));
        $day = change_day($all_prog['date_of_event']);
        echo "
        <div class='row'>
        <div class='col-md-4 col-sm-4'>
        <div class='highlight-bg has-padding-xs event-details'>
        <div class='ed-title'>EVENT DETAILS</div>
        <div class='ed-content'> <span class='glyphicon glyphicon-calendar'></span> ".$date."<br>
        <span class='glyphicon glyphicon-time'></span> ".$all_prog['time_of_event']."<br>
        <span class='glyphicon glyphicon-map-marker'></span> ".$all_prog['location']."</div>
        </div>
        </div>
        <div class='col-md-8 col-sm-8 bulletin'>
        <h4 class='media-heading'>".$all_prog['name']."</h4>
        <p class='media-content'>".$all_prog['description']."</p>
        <p class='media-content'>with ".$all_prog['leader']."</p>
        </div>
        </div>
        <hr>
        ";
		$count ++;
	}
?>
