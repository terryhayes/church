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

<!-- <div class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
	<a class="navbar-brand" href="index-2.html">
	<img src="images/church-logo.png" alt="church logo" class="img-responsive"></a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <span class="caret"></span></a>
</li>
<li><a href="about.html">ABOUT</a></li>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">MINISTRY <span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-left" role="menu">
<li><a href="priest-choir.html">Singing Ministry</a></li>
<li><a href="ushering-ministry.html">Ushering Ministry</a></li>
<li><a href="intercessory-ministry.html">Intercessory Ministry</a></li>
<li><a href="student-ministry.html">Youth Ministry</a></li>
<li><a href="children-ministry.html">Children Ministry</a></li>
</ul>
</li>
<li > <a href="#" >SERMONS </a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-left" role="menu">
<li><a href="image-gallery.html">Image Gallery</a></li>
<li><a href="video-gallery.html">Video Gallery</a></li>
<li><a href="blog.html">Blog list</a></li>
<li><a href="blog-single.html">Blog Single</a></li>
<li><a href="events-programs.html">Events &amp; Programs</a></li>
<li><a href="event-single.html">Event Single</a></li>
<li><a href="event-calendar.html">Event Calendar</a></li>
<li><a href="charity-donation.html">Charity &amp; Donations</a></li>
<li class="divider"></li>
<li class="dropdown-header">OTHER PAGES</li>
<li><a href="prayers.html">Prayers</a></li>
</ul>
</li>
<li><a href="contact.html">CONTACT</a></li>
</ul>
</div>

</div>
</div> -->


<div class="subpage-head has-margin-bottom">
<div class="container">
<h3>CHildren Ministry</h3>
<p class="lead"> God is faithful; he will not let you be tempted beyond what you can bear. </p>
</div>
</div>

<div class="container has-margin-bottom">
<div class="row">
<div class="col-md-9 has-margin-bottom"> <img src="images/ministry-pic.jpg" class="img-responsive has-margin-xs-bottom" alt="ministry">
<p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. </p>
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
<blockquote> And we know that in all things God works for the good of those who love him, who have been called according to his purpose. </blockquote>
<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
<h4>Another Heading</h4>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
</div>


<div class="col-md-3">
<div class="event-right-block has-border has-margin-bottom">
<div class="section-title highlight-bg has-padding-xs-top has-padding-bottom">
<h4> UPCOMING EVENTS </h4>
</div>
<div class="el-block has-margin-xs-bottom">
<h4> JULY 16 </h4>
<p class="el-head">Weekly meeting &amp; prayer</p>
<span>Monday 07:00 AM</span>
<p class="el-cta"><a class="btn btn-primary" href="#" role="button">Details →</a></p>
</div>
<div class="el-block ">
<h4> JUL 29 </h4>
<p class="el-head">Show me your faith</p>
<span>Thursday 02:00 PM</span>
<p class="el-cta"><a class="btn btn-primary" href="#" role="button">Details →</a></p>
</div>
</div>
<div class="well">
<div class="section-title">
<h4> RECENT SERMONS </h4>
</div>
<div class="list-group"> <a href="#" class="list-group-item">
<p class="list-group-item-heading">Heavens and the earth</p>
<p class="list-group-item-text">24:15 mins</p>
</a> <a href="#" class="list-group-item">
<p class="list-group-item-heading">Prayer and petition</p>
<p class="list-group-item-text">12:00 mins</p>
</a> <a href="#" class="list-group-item">
<p class="list-group-item-heading">Fruit of the Spirit</p>
<p class="list-group-item-text">30:25 mins</p>
</a> <a href="#" class="list-group-item">
<p class="list-group-item-heading">Do not be afraid; keep on...</p>
<p class="list-group-item-text">17:00 mins</p>
</a> </div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="section-title">
<h4> RELATED MINISTRIES </h4>
</div>
<div class="row feature-block">
  <div class="col-md-3 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_1.jpg" alt="catholic church">
    <h5>SINGING MINISTRY</h5>
    <p>
      Indeed it came to pass, when the trumpeters and singers were as one, to make one sound
    to be heard in praising and thanking the LORD,
    </p>
    <p><a href="singing-ministry.php" role="button">Read more →</a></p>
  </div>
  <div class="col-md-3 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_1.jpg" alt="catholic church">
    <h5>YOUTH MINISTRY</h5>
    <p>God is faithful; he will not let you be tempted beyond what you can bear</p>
    <p><a href="children-ministry.php" role="button">Read more →</a></p>
  </div>
  <div class="col-md-3 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_1.jpg" alt="catholic church">
    <h5>USHERING MINISTRY</h5>
    <p>No temptation has seized you except what is common to man. And God is faithful; he will not let you be tempted beyond what you can bear.	Distributing to the needs of the saints, given to hospitality. Romans 12:13 </p>
    <p><a href="ushering-ministry.php" role="button">Read more →</a></p>
  </div>
  <div class="col-md-3 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_1.jpg" alt="catholic church">
    <h5>INTERCESSORY MINISTRY</h5>
    <p> I have set watchmen on your walls, O Jerusalem; they shall not hold their peace day or night... Isaiah 66:6-7</p>
    <p><a href="intercessory-ministry.php" role="button">Read more →</a></p>
  </div>

</div>
</div>


<footer>
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-3">
<h5>ABOUT THE CHURCH</h5>
<p>We believe that the key to reigning in the abundant life which Christ has brought us both on earth and later in heaven, is for believers to walk in their mandate as Kings and Priests of the Most High God.</p>
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

</html>
