<?php
	include 'tools/included.php';
	$message = "";

	
	if (isset($_POST['send'])) {
		$uploadOk = 1; 
		$target_folder='../spotlight/';
		$target_file = $target_folder;
		$file_name =  $_FILES['spot_pic']['name'];
		echo $file_name.'<br>';

		// getting the image path
		$file_ext=strtolower(end(explode('.',$_FILES['spot_pic']['name'])));;

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
		if (file_exists('../spotlight/'.$file_name)) {
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
		    if (move_uploaded_file($_FILES["spot_pic"]["tmp_name"], $target_folder.$file_name)) {
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
			// entering into db
			$sql = "INSERT INTO `spotlight`(`title`,`image`, `description`, `is_active`, `is_delete`, `created_on`) VALUES (:title,:image,:description,'1','0',NOW())";
		    $file_arr = array(
		    	':title' => $_POST['spot_title'],
		    	':image' => $file_name,
		    	':description' => $_POST['spot_descibe'],
		    	);
		    spotlight_add_image($handler,$sql,$file_arr);
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
    <?php echo $css;?>

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
								<div class="username hidden-xs"><?php echo $user_logged_name; ?></div>
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
					<h1 class="page-header text-overflow">Spotlight</h1>
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
									<h3 class="panel-title">Add Spotlight</h3>
								</div>
                                <?php echo $message; ?>
								<form class="form-horizontal" name="pledge"method="post" action="" enctype="multipart/form-data">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Title</label>
											<div class="col-sm-9">
												<input type="text"  autocomplete="off" placeholder="Spotlight Title" id="title" name='spot_title' class="form-control" style='border:1px solid black;'  required>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Description</label>
											<div class="col-sm-9">
												<textarea name='spot_descibe' placeholder='Short Description of Spotlight' class="form-control" rows="5" style='border:1px solid black;'></textarea>
											</div>
											 
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Add Spotlight Image</label>
											<div class="col-sm-9">
												
											<input type="file" name='spot_pic' style="border-radius:0px" class="btn btn-info">
											
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
			<?php echo $sidebar;?>
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
