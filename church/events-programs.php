<?php
    include 'tools/included.php';
    $present_file =basename($_SERVER['REQUEST_URI']);

	$all_prog = all_prog($handler);
	$all_prog_number = all_prog_num($handler);
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content=" ">
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
<script type="text/javascript">
//    alert('hello');

    function get(hut) {
        $.post('pages/events.php',{name:hut},
            function (output) {
                $('#events_detail').html(output).show();
            });
    }
</script>
</head>
<body onload ="get(1)">
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
<li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <span class="caret"></span></a>
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
<li><a href="faq.html">FAQ</a></li>
<li><a href="shortcodes.html">Shortcodes</a></li>
<li><a href="full-width.html">Full Width</a></li>
<li><a href="left-sidebar.html">Left Sidebar</a></li>
<li><a href="http://themeforest.net/user/surjithctly/portfolio">Buy this Template</a></li>
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
<h3>Programs &amp; Events </h3>
<p class="lead">List of Upcoming Events and Programs</p>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-9 has-margin-bottom">
    <div id='events_detail'></div>
<div class="text-center center-block">
    <?php
$rows_wanted = 8;
$total_rows = $handler->query("SELECT * FROM `program`");
$total_rows = $total_rows->rowCount();
$pagnation = ceil($total_rows/$rows_wanted);
    echo "<ul class='pagination pagination-lg'>";
    while ($pagnation) {
        echo "<li><input type='button' name='pagers' value='".$pagnation."' onclick='get(".$pagnation.");'></li>";
        $pagnation--;
    }
    echo "</ul>";
?>
</div>
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
<script>
$(document).ready(function() {
//    get(1);
    alert('hello');
} );
</script>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ketchup.all.js"></script>
<script src="js/script.js"></script>
</body>

</html>
