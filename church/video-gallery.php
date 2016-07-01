<?php
    include 'tools/included.php';
    $present_file =basename($_SERVER['REQUEST_URI']);

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Our Church is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
<meta name="keywords" content="Church, Website, Template, Bulletin, Programs, Events, Themeforest, Premium, Charity, Non Profit ">
<meta name="author" content="Surjith SM">
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
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a class="navbar-brand" href="index-2.html"> <img src="images/church-logo.png" alt="church logo" class="img-responsive"></a> </div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-left" role="menu">
<li><a href="index-2.html">Home Default</a></li>
<li><a href="index-slider-alt.html">Home Animated Slider</a></li>
</ul>
</li>
<li><a href="about.html">ABOUT</a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">MINISTRY <span class="caret"></span></a>
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
<h3>Video Gallery</h3>
<p class="lead">A collection of our church  videos</p>
</div>
</div>


<div class="container has-margin-bottom">
<div class="row">
<div class="col-sm-6 has-margin-xs-bottom">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/72772592?badge=0&amp;byline=0" webkitallowfullscreen mozallowfullscreen allowfullscreen>

</iframe>
</div>
<h4>Heavens and the earth</h4>
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
</div>
<div class="col-sm-6 has-margin-xs-bottom">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/96213451?badge=0&amp;byline=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
<h4>Prayer and petition</h4>
<p>Sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
</div>
<div class="col-sm-6 has-margin-xs-bottom">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/19NMXAhbgvE?autohide=1&amp;iv_load_policy=3&amp;modestbranding=1&amp;rel=0&amp;showinfo=0" allowfullscreen></iframe>
</div>
<h4>Fruit of the Spirit</h4>
<p>Lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
</div>
<div class="col-sm-6">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/9bqrRNowf1Q?autohide=1&amp;iv_load_policy=3&amp;modestbranding=1&amp;rel=0&amp;showinfo=0" allowfullscreen></iframe>
</div>
<h4>Do not be afraid; keep going</h4>
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
</div>
</div>
</div>

<footer>
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-3">
<h5>ABOUT THE CHURCH</h5>
<p>For the word of God is living and active. Sharper than any double-edged sword,
   it penetrates even to dividing soul and spirit, joints and marrow; it judges
   the thoughts and attitudes.
</p>
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
<p>Catholic Church<br>
121 King Street, Melbourne <br>
Victoria 3000 Australia<br>
<br>
Phone: +61 3 8376 6284<br>
</div>
<div class="col-sm-6 col-md-3">
<h5>CONNECT</h5>
<div class="social-icons"><a href="#"><img src="images/fb-icon.png" alt="social"></a> <a href="#"><img src="images/tw-icon.png" alt="social"></a> <a href="#"><img src="images/in-icon.png" alt="social"></a></div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<p class="text-center">Copyright © 2014 All rights reserved</p>
</div>
</div>
</footer>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ketchup.all.js"></script>
<script src="js/script.js"></script>
</body>
</html>
