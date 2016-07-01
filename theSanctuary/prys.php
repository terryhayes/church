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
    <button type="button" class="close" data-dismiss="" aria-hidden="true"><a href=''>&times;</a></button>
    <h4 class="modal-title" id="myModalLabel">Message Detail</h4>
</div>
<div class="modal-body">
	<?php
	if (isset($_GET['msg_id'])) {
		$user_pid =$_GET['msg_id'];
		$user_pro = $handler->query("SELECT * FROM `prayer` WHERE `pry_id`='{$user_pid}'");
		$user_pro =$user_pro->fetch();
		// echo 'heii';

	}?>
    <!-- <div class="col-md-6"> -->
	<form role="form" method='POST' action='#' enctype='multipart/form-data'>						
		<div class="form-group">
            <label><u>Sender's Name</u></label>
			<p><?php echo $user_pro['sender']; ?></p>
		</div>
		<div class="form-group">
            <label><u>Sender's Email</u></label>
            <p><a href='mailto:<?php echo $user_pro['email']; ?>'><?php echo $user_pro['email']; ?></a></p>
		</div>
		<div class="form-group">
            <label><u>Telephone</u></label>
			<p><?php echo $user_pro['phone']; ?></p>					
		</div>
		<div class="form-group">
            <label><u>Title</u></label>
			<p><?php echo $user_pro['title']; ?></p>					
		</div>	
		<div class="form-group">
            <label><u>Message</u></label>
			<p><?php echo $user_pro['message']; ?></p>
		</div>		
		<div class="form-group">
            <label><u>Created On</u></label>
			<p><?php echo $user_pro['created_on']; ?></p>
		</div>
	</form>
<!-- </div> -->
</div>
<div class="modal-footer" style='margin:15px; padding:10px;'>
<!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
     <button type="button" class="btn btn-primary"><a href='' style='text-decoration:none; color:blue;'>Save</a></button> 
</div>