<?php
	$words = array('one','two','three',
		'four','five','six',
		'seven','eight','nine',
		'ten','eleven','twelve',
		'thirteen','fourteen','fifteen');
// function to_activate($present_file){
// 		  switch ($present_file) {
// 		    case 'about.php':
// 		        echo 'active';
// 		      break;
//
// 		    default:
// 		        echo ' ';
// 		      break;
// 		  }
// 		}
	function get_spotlight_number($handler){
		$number = $handler->query('SELECT * FROM `spotlight` WHERE `is_active` = 1 && `is_delete` = 0  ORDER BY `created_on` DESC ');
		$number = $number->rowCount();
		return $number;
	}

	function get_spotlight_images($handler){
		$number = $handler->query('SELECT * FROM `spotlight` WHERE `is_active` = 1 && `is_delete` = 0  ORDER BY `created_on` DESC ');
		$spot_images = $number->fetchAll();
		return $spot_images;
	}
	function upcoming_prog($handler){
		$number = $handler->query('SELECT * FROM `program` WHERE `is_delete`= 0 && `date_of_event` > CURDATE() ORDER BY `created_on` ASC LIMIT 1');
		$upcome_pro = $number->fetchAll();
		return $upcome_pro;
	}

	function all_prog($handler){
		$number = $handler->query('SELECT * FROM `program` WHERE `is_delete`= 0 && `date_of_event` > CURDATE() ORDER BY `created_on` ASC LIMIT 4');
		$all_pro = $number->fetchAll();
		return $all_pro;
	}
	function all_prog_num($handler){
		$number = $handler->query('SELECT * FROM `program` WHERE `is_delete`= 0 && `date_of_event` > CURDATE() ORDER BY `created_on` ASC LIMIT 4');
		$number = $number->rowCount();
		return $number;
	}
	function change_date($date){
		$mydate = strtotime($date);
		return date('F j', $mydate);
	}
	function change_day($date){
		$mydate = strtotime($date);
		return  date('l', $mydate);
	}
?>
