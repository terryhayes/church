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
    <button type="button" class="close" data-dismiss="" aria-hidden="true"><a href='all_users.php'>&times;</a></button>
    <h4 $class="modal-title" $id="myModalLabel">User Profile</h4>
</div>
<div class="modal-body">
	<?php
	if (isset($_GET['prof_id'])) {
		$user_pid =$_GET['prof_id'];
		$user_pro = $handler->query("SELECT * FROM `admin` WHERE `admin_id` ='{$user_pid}'");
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
			<label>Username</label>
			<p><?php echo $user_pro['username']; ?></p>					
		</div>	
		<div class="form-group">
			<label>Telephone</label>
			<p><?php echo $user_pro['phone']; ?></p>
		</div>		
		<div class="form-group">
			<label>Email</label>
			<p><?php echo $user_pro['email']; ?></p>
		</div>
		<div class="form-group">
			<label>Type Of User</label>
			<p>
				<?php
				if ($user_pro['status'] == 1) {
					echo 'ADMINSTRATOR';
				}else{
					echo 'CONTENT MANAGER';
				}
				?>
			</p>
		</div>
	</form>
<!-- </div> -->
</div>
<div class="modal-footer" style='margin:15px; padding:10px;'>
    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
    <button type="button" class="btn btn-primary"><a href='' style='text-decoration:none; color:blue;'>Save</a></button>
</div>