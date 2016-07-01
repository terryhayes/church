<?php
	include 'tools/included.php';
	$message = "";


	if (isset($_POST['send'])) {
		$album = $_POST['album'];
		$image1 =$_FILES['image1']['name'];
		$image2 =$_FILES['image2']['name'];
		$image3 =$_FILES['image3']['name'];
		$image4 =$_FILES['image4']['name'];
		$image_array = $arrayName = array($image1,$image2,$image3 ,$image4);
		
		foreach ($image_array as $ky => $val) {
			if (empty($val)) {
		
			}
			else{
				$ky +=1;
				$image_tmp = $_FILES['image'.$ky]['tmp_name'];
				$image_name = $_FILES['image'.$ky]['name'];
                $part = pathinfo($image_name);
//				$image_ext = strtolower($part['extension']);
				$image_ext = strtolower(end(explode('.',$_FILES['image'.$ky]['name'])));
				$message = upload_image($image_name,$image_ext,$image_tmp);
				$sql1="INSERT INTO `gallery`(`image`, `album_id`, `is_delete`, `is_active`, `created_on`) VALUES (:image,:album,'0','1',NOW())";
				$file_array=array(
					':image'=> $image_name,
					':album'=> $album 
					);
				spotlight_add_image($handler,$sql1,$file_array);
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
					<h1 class="page-header text-overflow">Gallery</h1>
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
									<h3 class="panel-title">Add Images</h3>
								</div>
                                <?php echo $message; ?>
								<form class="form-horizontal" name="pledge"method="post" action="" enctype="multipart/form-data">
									<div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Select An Album</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" name='album' required>
                                                    <option value=''>Please Select An Album</option>
                                                    <?php
                                                $sql="SELECT * FROM `album` WHERE `is_delete` = '0' ORDER BY `album_id` ASC";
                                                $query= $handler->query($sql);
                                                while ($ray = $query->fetch()) {
                                                    echo "<option value='".$ray['album_id']."'>".$ray['title']."</option>";
                                                }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Image 1</label>
											<div class="col-sm-9">											
											<input type="file" name='image1' class="btn btn-info">	
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Image 2</label>
											<div class="col-sm-9">											
											<input type="file" name='image2' class="btn btn-info">	
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Image 3</label>
											<div class="col-sm-9">											
											<input type="file" name='image3' class="btn btn-info">	
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="name">Image 4</label>
											<div class="col-sm-9">											
											<input type="file" name='image4' class="btn btn-info">	
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
