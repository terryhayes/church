<?php
    include 'tools/included.php';
    $present_file =basename($_SERVER['REQUEST_URI']);

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/our-church/event-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2015 19:04:38 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Our Church is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
<meta name="keywords" content="Church, Website, Template, Bulletin, Programs, Events, Themeforest, Premium, Charity, Non Profit ">
<meta name="author" content="Surjith SM">
<title>Priest Sanctuary</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/church.css" rel="stylesheet">
<link href="css/fullcalendar.css" rel="stylesheet">

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
<h3>Event Calendar</h3>
<p class="lead">Event calendar integrated with Google Calendar</p>
</div>
</div>


<div class="container has-margin-bottom">
<div class="row">
<div class="col-sm-12 has-margin-xs-bottom">
<div id="loading" class="text-center">loading...</div>

<div class="event-cal-wrap" id="event-calendar"> </div>
</div>
</div>
</div>


<div class="highlight-bg">
<div class="container">
<div class="row">
<form action="http://demo.web3canvas.com/themeforest/our-church/subscribe.php" method="post" class="form subscribe-form" role="form" id="subscribeForm">
<div class="form-group col-md-3 hidden-sm">
<h5 class="susbcribe-head"> SUBSCRIBE <span>TO OUR NEWSLETTER</span></h5>
</div>
<div class="form-group col-sm-8 col-md-6">
<label class="sr-only">Email address</label>
<input type="email" class="form-control input-lg" placeholder="Enter email" name="email" id="address" data-validate="validate(required, email)" required>
<span class="help-block" id="result"></span> </div>
<div class="form-group col-sm-4 col-md-3">
<button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
</div>
</form>
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
<p>Catholic Church<br>
121 King Street, Melbourne <br>
Victoria 3000 Australia<br>
<br>
Phone: +61 3 8376 6284<br>
Email: <a href="#"><span class="__cf_email__" data-cfemail="f09d91999cb0939184989f9c999387959283998495de939f9d">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script></a></p>
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
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/gcal.js"></script>
<script src="js/script.js"></script>

<script type='text/javascript'>

$(document).ready(function() {
    $('#event-calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyCJ5AqFvTnQ5kUZvYgTMAMjXW5dfpV4qew',
        events: {
            googleCalendarId: '6au3emlgjfair5hjhiegs48tcg@group.calendar.google.com'
        },
		eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},

		loading: function(bool) {
				$('#loading').toggle(bool);
		}
    });
});

</script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/our-church/event-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2015 19:04:52 GMT -->
</html>
