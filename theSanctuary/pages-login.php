<?php
	include 'tools/functions.php';
	include 'tools/connections.php';
//	include 'tools/header.php';
    session_start();

	$message='<h3>For <strong>Validation Reasons</strong>,<br> You Will Be Made to <b>Log-In Twice</b></h3>';
	if (isset($_POST['send'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = password_encrypt($password);

		$username_exist = user_check($handler,$username);
		$correct_user_pass = user_password_validate($handler,$username,$password);

		if ($username_exist) {
			if ($correct_user_pass) {
				$_SESSION['username'] = $username;
				$user_id = $handler->query("SELECT * FROM `admin` WHERE `username` ='{$username}'");
				$user_id =$user_id->fetch();

				$_SESSION['user_id'] = $user_id['admin_id'];
				$_SESSION['user_name'] = $user_id['name'];
				$_SESSION['account'] = $user_id['status'];

				header("Location:index.php");
			}else{
                $message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-warning' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Warning : Login Error</h4>
                        <p class='alert-message'>Invalid Username and Password!</p>
                    </div>
                </div>
            </div></div></div>";
			}
			
		}else{
            $message = "<div id='page-alert'><div class='alert-wrap in'>
                <div class='alert alert-warning' role='alert'>
                    <button class='close' type='button'><i class='fa fa-times-circle'></i></button>
                    <div class='media'><div class='media-left'>
                        <span class='icon-wrap icon-wrap-xs icon-circle alert-icon'><i class='fa fa-bolt fa-lg'></i></span>
                    </div>
                    <div class='media-body'>
                        <h4 class='alert-title'>Warning : Login Error</h4>
                        <p class='alert-message'>Invalid Username!</p>
                    </div>
                </div>
            </div></div></div>";
		}
		
	}
	if (isset($_GET['logout'])) {
		session_unset();
		session_destroy();
		header('Location:pages-login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page | PSM </title>


	<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">


	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/nifty.min.css" rel="stylesheet">
    <link href='css/custom.css' rel='stylesheet'>
    <link rel='shortcut icon' href='tools/favicon.png'>

</head>
<body>
	<div id="container" class="cls-container">
		
		<div id="bg-overlay" class="bg-img img-balloon"></div>
		
		
		<div class="cls-header cls-header-lg">
			<div class="cls-brand">
				<a class="box-inline" href="index.html">
					<!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
					<span class="brand-title">Priest Sanctuary Ministry <span class="text-thin">Admin</span></span>
				</a>
			</div>
		</div>
		
		
		<!-- LOGIN FORM -->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
                    <?php echo $message;?>
					<p class="pad-btm">Sign In to your account</p>
					<form method='post' action="">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" class="form-control" placeholder="Username" name="username">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
						</div>
<!--
                        <p class="pad-btm"><a href='pages-password-reminder.php' style="color:black; text-decoration:none">Forgot my password</a></p>
                        <p class="pad-btm"><a href='pages-password-reminder.php' style="color:black; text-decoration:none">To Site</a></p>
-->
						<div class="row">
								<div class="col-xs-4">
								<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit" name='send' >Sign In</button>
								</div>
							</div>
						</div>						
					</form>
                    <p class="pad-btm"><a href='pages-password-reminder.php' style="color:black; text-decoration:none">Forgot my password</a></p>
                    <p class="pad-btm"><a href='../church/' style="color:black; text-decoration:none">To Site</a></p>                    
				</div>
			</div>			
		</div>		

	<!--jQuery [ REQUIRED ]-->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.min.js"></script>

</body>

</html>
