<?php
	// include 'connections.php';
 
function upload_image($image_name,$image_ext,$image_tmp){
 	$uploadOk = 1; 
		$target_folder='../gallery/';
		$target_file = $target_folder;
		$file_name =  $image_name;
		// echo $file_name.'<br>';

		// getting the image path
		// $file_ext=strtolower(end(explode('.',$_FILES['spot_pic']['name'])));;
		$file_ext = $image_ext;

		// checking the image type
		$expensions= array("jpeg","jpg","png");
		if(!in_array($file_ext,$expensions)) {
		   $message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-warning' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Warning : File Upload Failed</h4>
                        <p class='alert-message'>Sorry, only JPG, JPEG, PNG & GIF files are allowed</p>
                    </div>
                </div>
            </div></div></div>";
		    $uploadOk = 0;
		}
		// Check if file already exists
		if (file_exists('../gallery/'.$file_name)) {
		   $message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-warning' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Warning : File Upload Failed</h4>
                        <p class='alert-message'>Sorry, file already exists.</p>
                    </div>
                </div>
            </div></div></div>";
		    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-warning' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Warning : File Upload Failed</h4>
                        <p class='alert-message'>Sorry, your file was not uploaded. File may Already Exist!!</p>
                    </div>
                </div>
            </div></div></div>";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($image_tmp ,$target_folder.$file_name)) {
		    	$message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-success' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Success: File Uploaded</h4>
                        <p class='alert-message'>The file has been uploaded.!</p>
                    </div>
                </div>
            </div></div></div>";
		    } else {
		        $message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-warning' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Warning : File Upload Failed</h4>
                        <p class='alert-message'>Sorry, there was an error uploading your file.!</p>
                    </div>
                </div>
            </div></div></div>";
		    }

		}
		return $message;
 }
// insert image into spotlight
function spotlight_add_image($handler,$sql,$file_array){
	$query = $handler->prepare($sql);
	$query -> execute($file_array);
}
// to select all images for the spotlight
function spotlight_images($handler,$sql){
	$query= $handler->query($sql);
	return $query;
}
function update_spot($handler,$sql,$status,$id){
	if ($sql) {
		$sql1 = "UPDATE `spotlight` SET `is_active`= :active WHERE `spot_id`= :spid";
	}
	else{
		$sql1 = "UPDATE `spotlight` SET `is_delete`= :active WHERE `spot_id`= :spid";
	}
	// $sql1 = "UPDATE `spotlight` SET `$sql`= $status WHERE `spot_id`= $id";
	$query= $handler->prepare($sql1);
	$query -> execute(array(
		':active'=>$status,
		':spid'=>$id
		));
	return 1;
}

function update_gal($handler,$sql,$status,$id){
	if ($sql) {
		$sql1 = "UPDATE `gallery` SET `is_active`= :active WHERE `gallery_id`= :spid";
	}
	else{
		$sql1 = "UPDATE `gallery` SET `is_delete`= :active WHERE `gallery_id`= :spid";
	}
	// $sql1 = "UPDATE `spotlight` SET `$sql`= $status WHERE `spot_id`= $id";
	$query= $handler->prepare($sql1);
	$query -> execute(array(
		':active'=>$status,
		':spid'=>$id
		));
	return 1;
}

function update_user_profile($handler,$sql,$status,$id){
	if ($sql) {
		$sql1 = "UPDATE `admin` SET `is_active`= :active WHERE `admin_id`= :spid";
	}
	else{
		$sql1 = "UPDATE `admin` SET `is_active`= :active WHERE `admin_id`= :spid";
	}
	// $sql1 = "UPDATE `spotlight` SET `$sql`= $status WHERE `spot_id`= $id";
	$query= $handler->prepare($sql1);
	$query -> execute(array(
		':active'=>$status,
		':spid'=>$id
		));
	return 1;
}
function update_alb($handler,$sql,$status,$id){
	if ($sql) {
		$sql1 = "UPDATE `album` SET `is_active`= :active WHERE `album_id`= :spid";
	}
	else{
		$sql1 = "UPDATE `album` SET `is_delete`= :active WHERE `album_id`= :spid";
	}
	// $sql1 = "UPDATE `spotlight` SET `$sql`= $status WHERE `spot_id`= $id";
	$query= $handler->prepare($sql1);
	$query -> execute(array(
		':active'=>$status,
		':spid'=>$id
		));
	return 1;
}
function update_event($handler,$sql,$status,$id){
	if ($sql) {
		$sql1 = "UPDATE `program` SET `is_delete` = :active WHERE `prog_id`= :spid";
	}
	else{
		$sql1 = "UPDATE `program` SET `is_delete` = :active WHERE `prog_id`= :spid";
	}
	// $sql1 = "UPDATE `spotlight` SET `$sql`= $status WHERE `spot_id`= $id";
	$query= $handler->prepare($sql1);
	$query -> execute(array(
		':active'=>$status,
		':spid'=>$id
		));
	return 1;
}
function update_msg($handler,$sql,$status,$id){
	if ($sql) {
		$sql1 = "UPDATE `message` SET `is_delete` = :active WHERE `msg_id`= :spid";
	}
	else{
		$sql1 = "UPDATE `message` SET `is_delete` = :active WHERE `msg_id`= :spid";
	}
	// $sql1 = "UPDATE `spotlight` SET `$sql`= $status WHERE `spot_id`= $id";
	$query= $handler->prepare($sql1);
	$query -> execute(array(
		':active'=>$status,
		':spid'=>$id
		));
	return 1;
}
function create_user($handler,$file_array){
	
	$sql1 = "INSERT INTO `admin`(`name`, `username`, `password`, `pass_recovery`, `phone`, `email`, `status`, `is_delete`, `is_active`, `created_on`) VALUES (:name,:username,:password,:rec_password,:phone,:email,:status,'0','1',NOW())";
	$query= $handler->prepare($sql1);
	// $query -> execute($file_array);
	if ($query -> execute($file_array)) {
		return 1;
	}
	
}
function password_encrypt($key){
	$pass = md5($key);
	$password = sha1($pass);
	$pass = crypt($password,'church_website_2016');
	return $pass;
}
function user_check($handler,$username){
	$sql = "SELECT * FROM `admin` WHERE `username` = '{$username}'";
	$query = $handler->query($sql);
	// $query -> execute($file_array);
	$total_rows = $query->rowCount();
	if ($total_rows) {
		return 1;
	}
}
function event_check($handler,$programme){
	$sql = "SELECT * FROM `program` WHERE `Name` = '{$programme}'";
	$query = $handler->query($sql);
	// $query -> execute($file_array);
	$total_rows = $query->rowCount();
	if ($total_rows) {
		return 1;
	}
}

function user_password_validate($handler,$username,$password){
	$sql = "SELECT * FROM `admin` WHERE `username`= '{$username}' && `password` = '{$password}'  && `is_active` = '1'";
	$query = $handler->query($sql);
	// $query -> execute($file_array);
	$total_rows = $query->rowCount();
	if ($total_rows) {
		return 1;
	}
}
function get_number($handler,$field){
	$total_rows = $handler->query("SELECT * FROM `{$field}`");
	$total_rows = $total_rows->rowCount();
	return $total_rows;
}

function event_make($handler,$file_array){
	
	$sql1 = "INSERT INTO `program`( `name`,`leader`, `description`, `location`, `created_on`, `date_of_event`, `time_of_event`, `is_delete`) VALUES (:name,:leader,:describe,:location,NOW(),:dat,:tim,'0')";
	$query= $handler->prepare($sql1);
	// $query -> execute($file_array);
	if ($query -> execute($file_array)) {
		return 1;
	}
	
}

?>