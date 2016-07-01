<?php
	include 'tools/included.php';
	// if (isset($_GET['prof_id'])) {
	// 	$user_pid =$_GET['prof_id'];
	// 	$user_pro = $handler->query("SELECT * FROM `admin` WHERE `admin_id` ='{$user_pid}'");
	// 	$user_pro =$user_pro->fetch();
	// 	// echo 'heii';

	// }
?>
<div class="modal-header" style='margin:15px;'>
    <button type="button" class="close" data-dismiss="" aria-hidden="true"><a href='programmes.php'>&times;</a></button>
    <h4 class="modal-title" id="myModalLabel">Programme Detail</h4>
</div>
<div class="modal-body">
	<?php
	if (isset($_GET['prof_id'])) {
		$user_pid =$_GET['prof_id'];
		$user_pro = $handler->query("SELECT * FROM `program` WHERE `prog_id`='{$user_pid}'");
		$user_pro =$user_pro->fetch();
		// echo 'heii';

	}?>
    <!-- <div class="col-md-6"> -->
	<form role="form" method='POST' action='#' enctype='multipart/form-data'>						
		<div class="form-group">
			<label>Name</label>
			<p><?php echo $user_pro['name']; ?></p>
		</div>
		<div class="form-group">
			<label>Leader</label>
			<p><?php echo $user_pro['leader']; ?></p>
		</div>
		<div class="form-group">
			<label>Description</label>
			<p><?php echo $user_pro['description']; ?></p>					
		</div>	
		<div class="form-group">
			<label>Location</label>
			<p><?php echo $user_pro['location']; ?></p>
		</div>		
		<div class="form-group">
			<label>Created On</label>
			<p><?php echo $user_pro['created_on']; ?></p>
		</div>		
		<div class="form-group">
			<label>Date of Event</label>
			<p><?php echo $user_pro['date_of_event']; ?></p>
		</div>	
		<div class="form-group">
			<label>Time of Event</label>
			<p><?php echo $user_pro['time_of_event']; ?></p>
		</div>
	</form>
<!-- </div> -->
</div>
<div class="modal-footer" style='margin:15px; padding:10px;'>
<!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
     <button type="button" class="btn btn-primary"><a href='' style='text-decoration:none; color:blue;'>Save</a></button> 
</div>