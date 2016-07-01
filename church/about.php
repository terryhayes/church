<?php
    include 'tools/included.php';
    $present_file =basename($_SERVER['REQUEST_URI']);
    // echo $present_file;

?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<title>Priest Sanctuary</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/church.css" rel="stylesheet">

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="images/favicon.png">

<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php
    // echo $top;
    $present_file =basename($_SERVER['REQUEST_URI']);
    navigation($present_file);
    ?>
<!--
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
		<a class="navbar-brand" href="index-2.html">
			<img src="images/church-logo.png" alt="church logo" class="img-responsive">
		</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-left" role="menu">
<li><a href="index-2.html">Home Default</a></li>
<li><a href="index-slider-alt.html">Home Animated Slider</a></li>
</ul>
</li>
<li class="active"><a href="about.html">ABOUT</a></li>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">MINISTRY <span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-left" role="menu">
<li><a href="ministry.html">Childrens Ministry</a></li>
<li><a href="ministry.html">Students Ministry</a></li>
<li><a href="ministry.html">Groups</a></li>
</ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERMONS <span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-left" role="menu">
<li><a href="sermons.html">Christ-Occupied</a></li>
<li><a href="sermons.html">God's Love</a></li>
<li><a href="sermons.html">Faithfulness</a></li>
<li><a href="sermons.html">Praise Him</a></li>
</ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-left" role="menu">
<li><a href="image-gallery.html">Image Gallery</a></li>
<li><a href="video-gallery.html">Video Gallery</a></li>
</ul>
</li>
<li><a href="contact.html">CONTACT</a></li>
</ul>
</div>

</div>
</div>
-->


<div class="subpage-head has-margin-bottom">
<div class="container">
<h3>About us</h3>
<p class="lead"> Welcome to Priests Sanctuary Ministry (PSM)</p>
</div>
</div>

<div class="container has-margin-bottom">
<div class="row">
<div class="col-md-9 has-margin-bottom">
<p class="lead">
	<blockquote>We warmly welcome you to Priests Sanctuary Ministry (PSM) Koforidua, Ghana,
		       a heavenly family of believers right here on earth.
	</blockquote>
	</p>
<p> We believe that the key to reigning in the abundant life which Christ has brought us both on earth and later in heaven, is for believers to walk in their mandate as Kings and Priests of the Most High God. </p>
<p>Through the revelation of God's word and by the Power of the Holy Spirit, we help believers to identify their purpose, destiny and inheritance in Christ Jesus and equips them unto fulfillment, success and prosperity. </p><br>
<h4>Our Hallmark</h4>
<p>Our hallmark is Prayer and our mandate in this Great Commission is to reach out to the lost, as well as awaken and revive the Church of God into her golden age.</p>
<p>You are invited to be a part of this new dispensation and great move of God which has dawned on us. Join us in any of our life-transforming services and become more like Christ, the author and finisher of our faith.</p>
</div>

<div class="col-md-3 visible-md-block visible-lg-block">
<div class="well">
	<div class="section-title">
		<h4> RECENT SERMONS </h4>
	</div>
<a href="#">
	<img src="images/video-thumb.jpg" class="img-responsive center-block" alt="video thumb"></a>
<div class="list-group">
	<a href="#" class="list-group-item">
		<p class="list-group-item-heading">Heavens and the earth</p>
		<p class="list-group-item-text">24:15 mins</p>
	</a>
	<a href="#" class="list-group-item">
		<p class="list-group-item-heading">Prayer and petition</p>
		<p class="list-group-item-text">12:00 mins</p>
	</a>
	<a href="#" class="list-group-item">
		<p class="list-group-item-heading">Fruit of the Spirit</p>
		<p class="list-group-item-text">30:25 mins</p>
	</a>
	<a href="#" class="list-group-item">
		<p class="list-group-item-heading">Do not be afraid; keep on...</p>
		<p class="list-group-item-text">17:00 mins</p>
	</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
<div class="section-title">
<h4> OUR PASTORS </h4>
</div>
<div class="row feature-block">
	<div class="col-md-4 col-sm-6 has-margin-bottom">
			<img class="img-responsive" src="images/team-1.jpg" alt="catholic church">
		<h5>REV JOSE ASAMOAH</h5>
		<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa. </p>
		<p>
			<a href="#" role="button" class="pick">Facebook</a> /
			<a href="#" role="button" class="pick-t">Twitter</a>
		</p>
	</div>

	<div class="col-md-4 col-sm-6 has-margin-bottom">
		<img class="img-responsive" src="images/team-2.jpg" alt="ministry sermon">
		<h5>SNR. PASTOR VINCENT AMOAKO</h5>
		<p>Fermentum massa.Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
		<p>
		<a href="#" role="button" class="pick">Facebook</a> /
		<a href="#" role="button" class="pick-t">Twitter</a>
	</p>
	</div>

	<div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom">
		<img class="img-responsive" src="images/team-3.jpg" alt="bulletin programs">
		<h5>PASTOR TIMOTHY DONKOR</h5>
		<p> Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa etiam porta fusce dapibus.</p>
		<p><a href="#" role="button" class="pick">Facebook</a> /
			<a href="#" role="button" class="pick-t">Twitter</a>
		</p>
	</div>

</div>
</div>



<footer>
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-3">
<h5>ABOUT THE CHURCH</h5>
<p>For the word of God is living and active. Sharper than any double-edged sword, it penetrates even to dividing soul and spirit, joints and marrow; it judges the thoughts and attitudes.</p>
</div>
<div class="col-sm-6 col-md-3">
<h5>QUICK LINKS</h5>
<ul class="footer-links">
<li><a href="#">Upcoming events</a></li>
<li><a href="#">Ministries</a></li>
<li><a href="#">Recent Sermons</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
<div class="col-sm-6 col-md-3">
<h5>OUR ADDRESS</h5>
<p><i class="glyphicon glyphicon-map-marker"></i> Old Estate SSNIT Junction<br>
P. O. Box KF 2276  <br>
Koforidua- Ghana <br><br>
<i class="glyphicon glyphicon-phone-alt"></i> +233(0)246704480<br>
<i class="glyphicon glyphicon-phone-alt"></i> +233(0)208255630</i><br>
<i class="glyphicon glyphicon-envelope"></i> <a href="info@psgm.org">info@psm-ghana.org</a>
</div>
<div class="col-sm-6 col-md-3">
<h5>CONNECT</h5>
	<div class="social-icons">
		<a href="#">
			<img src="images/fb-icon.png" alt="social">
		</a>
		<a href="#">
			<img src="images/tw-icon.png" alt="social">
		</a>
		<a href="#">
			<img src="images/in-icon.png" alt="social">
		</a>
		<a href="#">
			<img src="images/youtube.png" alt="social">
		</a>
	</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<p class="text-center">Copyright © 2016 All rights reserved</p>
</div>
</div>
</footer>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ketchup.all.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/our-church/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2015 19:04:31 GMT -->
</html>
