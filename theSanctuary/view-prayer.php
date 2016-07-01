<?php
	include 'tools/included.php';
	$message = "";

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
		if(update_msg($handler,$sql_1,$status,$id)){
            $message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-success' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Success:</h4>
                        <p class='alert-message'>Update Successful</p>
                    </div>
                </div>
            </div></div></div>";
		}
		else{
            $message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-warning' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Warning : </h4>
                        <p class='alert-message'>Update Unsuccessful</p>
                    </div>
                </div>
            </div></div></div>";
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
					<h1 class="page-header text-overflow">Prayer Request</h1>
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
									<h3 class="panel-title">All Prayer Request</h3>
								</div>
                                <?php echo $message;?>
                                <!--Data Table-->
						<!--===================================================-->
						<div class="panel-body">
							<h4 id="demo-custom-toolbar" class="box-inline text-thin">Data Table</h4>
							<table id="demo-table" class="table-striped" data-toolbar="#demo-custom-toolbar" data-sort-name="id" data-sort-order="desc" data-pagination="true" data-url="data/data-table.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
								<thead>
									<tr>
										<th data-field="number" data-align="center" data-sortable="true" data-formatter="">No.</th>
										<th data-field="name" data-sortable="true" data-formatter="">Title</th>
										<th data-field="location" data-sortable="true" data-formatter="">Date</th>
										<th data-field="other" data-align="center" data-sortable="true" data-formatter="">Status</th>
									</tr>
								</thead>
                                <tbody>
                                    <?php
					$sql="SELECT * FROM `prayer` ORDER BY `created_on` DESC";
					$query= $handler->query($sql);
					$count = 1;
					while ($ray = $query->fetch()) {
						// echo "<tr><td>".$count."</td><td>".$ray['name']."</td>";
						echo "<tr><td>".$count."</td>";
						echo "<td <a href='msgs.php?msg_id={$ray['pry_id']}' class='' data-toggle='modal' data-target='#largeModal' style='cursor:pointer;'>".$ray['sender']."</a></td>";
						echo "<td>".$ray['created_on']."</td><td>";

						if (!$ray['is_delete']) {
							echo "<a href='?sp_id={$ray['pry_id']}&&soft_d={$ray['is_delete']}' class='alert bg-success col-xs-3 info' role='alert'style='cursor:pointer;'>A</a>";
						}else{
							echo "<a href='?sp_id={$ray['pry_id']}&&soft_d={$ray['is_delete']}' class='alert bg-danger col-xs-3 info' role='alert' style='cursor:pointer;'>D</a>";
						}
						// echo "</td><td>";
						echo "<a href='prys.php?msg_id={$ray['pry_id']}' class='alert bg-warning col-xs-6 info' data-toggle='modal' data-target='#largeModal' role='alert' style='cursor:pointer;'>View</a>"; 
						echo "</td></tr>";
						// echo "<option value='".$ray['album_id']."'>".$ray['title']."</option>";
						$count++;
					}
						?>
                                </tbody>
							</table>
						</div>
						<!--===================================================-->
						<!--End Data Table-->
							</div>
				<div class="modal fade row" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    </div>
                  </div>
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

		
        <?php echo $modal_call;?>
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
    <!--Data Table [ SAMPLE ]-->
	<script src="js/demo/tables.js"></script>

</body>
</html>
