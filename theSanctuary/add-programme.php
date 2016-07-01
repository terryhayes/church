<?php
	include 'tools/included.php';
	$message = "";
	
	if (isset($_POST['send'])) {
		$name = strtoupper($_POST['name']);
		$leader = strtoupper($_POST['leader']);
		$description = $_POST['describe'];
		$location = ucwords($_POST['location']);
		$event_date = $_POST['event_date'];
		$event_time = $_POST['time_date'];

		$programme_exist = event_check($handler,$name);
		if (!$programme_exist) {
			$file_array = array(
				':name'=>$name,
				':leader'=>$leader,
				':describe'=>$description,
				':location'=>$location,
				':dat'=>$event_date,
				':tim'=>$event_time
				);
			$event_check = event_make($handler,$file_array);
			if($event_check){
				$message = "<div class='alert bg-success' role='alert'>
					<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>Username Created<a href='#add_spotlight' data-dismiss='alert' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>
				</div>";
			}
		}
		else{
			$message = "<div class='alert bg-danger' role='alert'>
						<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>Programme With Such Name Already Exist<a href='#add_spotlight' data-dismiss='alert' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>
					</div>";
		}
	}
	if (isset($_GET['sp_id'])) {
		$id=$_GET['sp_id'];
		if ($_GET['soft_d']==1) {
			$status = 0;
			$sql_1 = 0;
		}
		if ($_GET['soft_d']==0){
			$status = 1;
			$sql_1 = 0;	
		}
		if(update_event($handler,$sql_1,$status,$id)){
			$message = "<div class='alert bg-success' role='alert'>
				<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>Update Successful<a href='#add_spotlight' data-dismiss='alert' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>
			</div>";
		}
		else{
			$message = "<div class='alert bg-danger' role='alert'>
				<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>Update Unsuccessful<a href='#add_spotlight' data-dismiss='alert' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>
			</div>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard |PSM Admin.</title>


	<!--STYLESHEET-->
   <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/nifty.min.css" rel="stylesheet">
    <?php echo $css; ?>

</head>

<body>
	<div id="container" class="effect mainnav-lg">
		
		<!--NAVBAR-->
		<header id="navbar">
			<div id="navbar-container" class="boxed">

				<!--Brand logo & name-->
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">
						<img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
						<div class="brand-title">
							<span class="brand-text">Priest Sanctuary Ministries</span>
						</div>
					</a>
				</div>
				<!--End brand logo & name-->

				<div class="navbar-content clearfix">
					<ul class="nav navbar-top-links pull-left">

						<!--Navigation toogle button-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="tgl-menu-btn">
							<a class="mainnav-toggle" href="#">
								<i class="fa fa-navicon fa-lg"></i>
							</a>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End Navigation toogle button-->

						
						<!--Mega dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li class="dropdown mega-dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								<i class="fa fa-th-large fa-lg"></i>
							</a>
							<div class="dropdown-menu mega-dropdown-menu">
								
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End mega dropdown-->

					</ul>
					<ul class="nav navbar-top-links pull-right">

						
						<!--User dropdown-->
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<li id="dropdown-user" class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
								<span class="pull-right">
									<img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture">
								</span>
								<div class="username hidden-xs"><?php echo $user_logged_name?></div>
							</a>


							<div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

								<!-- Dropdown footer -->
								<div class="pad-all text-right">
									<a href="pages-login.php?logout=1" class="btn btn-primary">
										<i class="fa fa-sign-out fa-fw"></i> Logout
									</a>
								</div>
							</div>
						</li>
						<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
						<!--End user dropdown-->

					</ul>
				</div>


				

			</div>
		</header>
		<!--===================================================-->
		<!--END NAVBAR-->

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				
				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Dashboard</h1>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->

				<!--Page content-->
				<!--===================================================-->
				<!--Page content-->
				<div id="page-content">
					
					<div class="col-sm-9">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Add Programme </h3>
								</div>
                                <?php echo $message;?>
								<form class="form-horizontal" name="pledge"method="post" action="" enctype="multipart/form-data">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Name</label>
											<div class="col-sm-9">
												<input type="text"  autocomplete="off" placeholder="Programme Name" id="name" name="name" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Speaker</label>
											<div class="col-sm-9">
												<input type="text"  autocomplete="off" placeholder="Programme Speaker" id="speaker" name='leader' class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Description</label>
											<div class="col-sm-9">
												<textarea class="form-control" name='describe' rows="5" id="description"></textarea>
											</div>
											 
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Location</label>
											<div class="col-sm-9">
												<input type="text"  autocomplete="off" placeholder="Programe Location" id="location" name="location" class="form-control" required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Date</label>
											<div>
													<div class="input-group date ">
														<input type="date" name='event_date'  class="form-control ">
														<span class="input-group-addon"><i class="fa fa-calendar fa-sm"></i></span>
													</div>
													
												</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Time</label>
											<div class="input-group date">
													<input type="time" name='time_date' class="form-control">
													<span class="input-group-addon"><i class="fa fa-clock-o fa-sm"></i></span>
												</div>
										</div>


									</div>
									<div class="panel-footer text-right">
										<button type="submit" name='send' class="btn btn-primary">Submit Button</button>
									<button type="reset" class="btn btn-default">Reset Button</button>
									</div>
								</form>							
					
							</div>
					
				</div>
				<!--End page content-->
				</div>
				<!--===================================================-->
				<!--End page content-->


			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->


			
			<!--MAIN NAVIGATION-->
			<!--===================================================-->
			<?php echo $sidebar; ?>
            <!--END MAIN NAVIGATION-->
			
			<!--ASIDE-->
			<aside id="aside-container">
				<div id="aside">
					<div class="nano">
						<div class="nano-content">
							
							<!--Nav tabs-->
							<ul class="nav nav-tabs nav-justified">
								<li class="active">
									<a href="#demo-asd-tab-1" data-toggle="tab">
										<i class="fa fa-comments"></i>
										<span class="badge badge-purple">7</span>
									</a>
								</li>
								<li>
									<a href="#demo-asd-tab-2" data-toggle="tab">
										<i class="fa fa-info-circle"></i>
									</a>
								</li>
								<li>
									<a href="#demo-asd-tab-3" data-toggle="tab">
										<i class="fa fa-wrench"></i>
									</a>
								</li>
							</ul>
							<!--End nav tabs-->

							
						</div>
					</div>
				</div>
			</aside>
			<!--===================================================-->
			<!--END ASIDE-->

		</div>

		

		<!-- FOOTER -->
		<footer id="footer">

			
			
			<p class="pad-lft">&#0169; 2016 </p>



		</footer>
		<!-- END FOOTER -->


		<!-- SCROLL TOP BUTTON -->
		<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>



	</div>
	<!-- END OF CONTAINER -->


	
	<!--JAVASCRIPT-->

	<!--jQuery [ REQUIRED ]-->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/demo/dashboard.js"></script>

</body>
</html>
