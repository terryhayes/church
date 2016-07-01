<?php
	include 'tools/included.php';
	$spot_number = get_spotlight_number($handler);
	$spot_pic = get_spotlight_images($handler);
	// echo ".slide";
	$upcoming_prog = upcoming_prog($handler);
	$all_prog = all_prog($handler);
	$all_prog_number = all_prog_num($handler);
	$present_file =basename($_SERVER['REQUEST_URI']);

	if (empty($upcoming_prog)){
	 $retn ="NO UPCOMING EVENT";
	 $date = date_create();
	$upcoming_prog[0]['name'] = $retn;
	$upcoming_prog[0]['leader'] ='';
	 $upcoming_prog[0]['date_of_event'] = date_timestamp_get($date);
		}
	 else{
	 	$retn = "";
	 }

?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="author" content="">
<title>Priest Sanctuary</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/church.css" rel="stylesheet">
<link href="css/fancybox.css" rel="stylesheet">

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="images/favicon.png">

<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">
<?php
echo $sticky_nav;
// for the background image of the carousel
$start = 0;
while ($start < $spot_number) {
	echo ".slide-".$words[$start]."{
		background: url(../spotlight/".$spot_pic[$start]['image'].") no-repeat;
		background-size: cover;
	}\n";
	$start++;
}
?>
</style>

</style>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <?//php echo $top;?>



 <?php
 // echo $top;

 navigation($present_file);
 ?>
<!-- <div class="navbar navbar-default " data-spy="affix" data-offset="60px" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	 <span class="sr-only">Toggle navigation</span>
	 <span class="icon-bar"></span>
	 <span class="icon-bar"></span>
	 <span class="icon-bar"></span>
</button>
	<a class="navbar-brand" href="index.php">
		<img src="images/church-logo.png" alt="church logo" class="img-responsive">
	</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown active">
	<a href="index.php" class="dropdown-toggle" data-toggle="dropdown">HOME </a>
</li>
<li><a href="about.php">ABOUT</a></li>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">MINISTRY <span class="caret"></span></a>
	<ul class="dropdown-menu dropdown-menu-left" role="menu">
		<li><a href="intercessory-ministry.php">Intercessory Ministry</a></li>
		<li><a href="children-ministry.php">Children Ministry</a></li>
		<li><a href="singing-ministry.php">Singing Ministry</a></li>
		<li><a href="ushering-ministry.php">Ushering Ministry</a></li>
	</ul>
</li>
<li><a href="sermons.php">SERMON</a></li>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <span class="caret"></span></a>
	<ul class="dropdown-menu dropdown-menu-left" role="menu">
		<li><a href="image-gallery.php">Image Gallery</a></li>
		<li><a href="video-gallery.php">Video Gallery</a></li>
		<li class="divider"></li>
		<li><a href="prayers.php">Prayers</a></li
		<li class="divider"></li>
		<li><a href="events-programs.php">Events &amp; Programs</a></li>
		<li><a href="event-calendar.php">Event Calendar</a></li>
	</ul>
</li>
<li><a href="contact.php">CONTACT</a></li>
</ul>
</div>

</div>
</div> -->



<div id="myCarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
		<!-- fetch number of images for the carousel slider -->
<?php
// for thr carousel indicator
$start = 0;
while ($start < $spot_number) {
	echo '<li data-target="#myCarousel" data-slide-to="'.$start.'"></li>';
	$start++;
}
?>
		<!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li> -->
	</ol>
<div class="carousel-inner">
<?php
	// fetching the Details for the carousel images
$start = 0;
while ($start < $spot_number) {
	echo "<div class='item slide-".$words[$start]." ";
	if ($start == 0) {
		echo('active');
	}
	echo "'>\n
			<div class='container'>\n
				<div class='carousel-caption'>\n
					<h3>".$spot_pic[$start]['title']."</h3>\n
					<h1 class=''>".$spot_pic[$start]['description']."</h1>\n
				</div>\n
			</div>\n
		</div>\n ";
		$start++;
}

?>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>


<div class="highlight-bg has-margin-bottom">
<div class="container event-cta">
<div class="ec-txt"> <span>UPCOMING EVENT</span>
<p>"<?php echo $upcoming_prog[0]['name'];?>" - <?php echo $upcoming_prog[0]['leader'];?></p>
	</div>
		<!-- <a class="btn btn-lg btn-primary" href="events-programs.php" role="button">All Programs →</a>  -->
		<!-- <p id="countdown" style='float:right;' class='row'></p>  -->
		<div id="countdown" style='float:right;text-align:center;' class='row'>
			<div class='col-xs-3'>
				<label>DAYS</label>
				<p id="countdown1">10</p>
			</div>
			<div class='col-xs-3' style='border-left:1px solid black;'>
				<label>HOURS</label>
				<p id="countdown2">10</p>
			</div>
			<div class='col-xs-3' style='border-left:1px solid black;'>
				<label>MINUTES</label>
				<p id="countdown3">10</p>
			</div>
			<div class='col-xs-3' style='border-left:1px solid black;'>
				<label>SECONDS</label>
				<p id="countdown4">10</p>
			</div>
		</div>
	</div>
</div>


<div class="container">
<div class="row feature-block">
<div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/thumb-1.jpg" alt="catholic church">
<h5>GUIDED BY THE HOLY SPIRIT</h5>
<p>Experience God's Wisdom each day as you are lead by the Holy Spirit. Walk effortlessly into success and happiness and understand the Father's love for you. </p>
<p><a href="about.html" role="button">View details →</a></p>
</div>

<div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/thumb-2.jpg" alt="ministry sermon">
<h5>LAW DEMANDS; GRACE SUPPLIES</h5>
<p>Jesus came and fulfilled the laws, the only one who could keep the laws so that in Him we can be made righteous and not have to suffer death for our sins. </p>
<p><a href="sermons.html" role="button">View details →</a></p>
</div>

<div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom"> <img class="img-responsive" src="images/thumb-3.jpg" alt="bulletin programs">
<h5>CHRIST OCCUPIED</h5>
<p>It may sound good to Mankind to be self-occupied. But God wants you to be Christ-Occupied and receive all of your blessings through resting in the work of Jesus.</p>
<p><a href="events-programs.html" role="button">View details →</a></p>
</div>

</div>
</div>

  <!-- Message-->
<div class="container has-margin-bottom" style="border-top : 1px">
<div class="row">
<div class="col-md-12 has-margin-bottom">
<div class="section-title left-align-desktop">
<h4> Message from Head Pastor</h4>
</div>
<div class="row">
<div class="col-md-6 col-sm-6 bulletin">

	<p>
		Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            <p>Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue. Fusce  mauris condimentum.</p>

	</p>


 </div>
 <div class="col-md-6 col-sm-6 bulletin">
#pic

 </div>
</div>
</div>
</div>
</div>

<div class="highlight-bg has-margin-bottom">
	<div class="container event-list">
		<div class="section-title">
			<h4> PROGRAMS &amp; EVENTS </h4>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel">
<?php
$start = 0;
while ($start < $all_prog_number){
    $date = change_date($all_prog[$start]['date_of_event']);
    $day = change_day($all_prog[$start]['date_of_event']);
	echo "<div class='el-block item'>\n
			<h4>".$date."</h4>\n
			<p class='el-head'>".$all_prog[$start]['name']."</p>\n
			<span>".$day."  ".$all_prog[$start]['time_of_event']."</span>\n
						<p class='el-cta'><span>".$all_prog[$start]['location']."</span></p>\n
					</div>\n";
					$start++;
}
?>
				</div>
			</div>
		</div>
	</div>
</div>

 <!-- SOCIAL MEDIA-->
<div class="container has-margin-bottom">
<div class="row">
<div class="col-md-9 has-margin-bottom">
<div class="section-title left-align-desktop">
<h4> Social Media </h4>
</div>
<div class="row">
<div class="col-md-6 col-sm-6 bulletin">

<div class="fb-page" data-href="https://www.facebook.com/Priests-Sanctuary-Ministry-1646349782354276/" data-tabs="timeline" data-width="438" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
	<blockquote cite="https://www.facebook.com/Priests-Sanctuary-Ministry-1646349782354276/" class="fb-xfbml-parse-ignore">
		<a href="https://www.facebook.com/Priests-Sanctuary-Ministry-1646349782354276/">Priests Sanctuary Ministry</a>
	</blockquote>
</div>
 </div>
<div class="col-md-6 col-sm-6 bulletin">

	<a class="twitter-timeline" data-width="438" data-height="500" data-theme="light" href="https://twitter.com/RMateyKorley">Tweets by RMateyKorley</a>
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

 </div>
	</div>
</div>


<div class="col-md-3">
<div class="well">
<div class="section-title">
<h4> RECENT SERMONS </h4>
</div>
<a href="#"><img src="images/video-thumb.jpg" class="img-responsive center-block" alt="video thumb"></a>
<div class="list-group"> <a href="sermons.html" class="list-group-item">
<p class="list-group-item-heading">Heavens and the earth</p>
<p class="list-group-item-text">24:15 mins</p>
</a> <a href="sermons.html" class="list-group-item">
<p class="list-group-item-heading">Prayer and petition</p>
<p class="list-group-item-text">12:00 mins</p>
</a> <a href="sermons.html" class="list-group-item">
<p class="list-group-item-heading">Fruit of the Spirit</p>
<p class="list-group-item-text">30:25 mins</p>
</a> <a href="sermons.html" class="list-group-item">
<p class="list-group-item-heading">Do not be afraid; keep on...</p>
<p class="list-group-item-text">17:00 mins</p>
</a> </div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="section-title">
<h4> OUR MINISTRIES </h4>
</div>
<div class="row feature-block">
<div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_1.jpg" alt="catholic church">
<h5>YOU CANNOT, BUT GOD CAN</h5>
<p>The world says that blood and sweat equals success. But we can rest in Jesus' finished work at the cross because of His blood, sweat, tears... </p>
<p><a href="ministry.html" role="button">Read more →</a></p>
</div>

<div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="images/ministry_2.jpg" alt="ministry sermon">
<h5>DELIGHT YOURSELF IN LORD</h5>
<p>When we rest in the Lord and draw from His Word every day, we have the confidence in knowing our Father has already opened doors...</p>
<p><a href="ministry.html" role="button">Read more →</a></p>
</div>

<div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom"> <img class="img-responsive" src="images/ministry_3.jpg" alt="bulletin programs">
<h5>FAITH DEVELOPS PERSEREVANCE</h5>
<p>Through these he has given us his very great and precious promises, so that through them you may participate in the divine nature...</p>
<p><a href="ministry.html" role="button">Read more →</a></p>
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
	<div class="social-icons row">
		<a href="#">
			<img src="images/fb-icon.png" alt="social">
		</a>
		<a href="#">
			<img src="images/tw-icon.png" alt="social">
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
<script src="js/jquery.countdown.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
	// alert('hello');
	  $('#countdown1').countdown("<?php echo $upcoming_prog[0]['date_of_event'];?>", function(event) {
	    $(this).html(event.strftime("%d"));
	  });
	  $('#countdown2').countdown("<?php echo $upcoming_prog[0]['date_of_event'];?>", function(event) {
	    $(this).html(event.strftime("%H"));
	  });
	  $('#countdown3').countdown("<?php echo $upcoming_prog[0]['date_of_event'];?>", function(event) {
	    $(this).html(event.strftime("%M"));
	  });
	  $('#countdown4').countdown("<?php echo $upcoming_prog[0]['date_of_event'];?>", function(event) {
	    $(this).html(event.strftime("%S"));
	  });


// 	  $('#nav').affix({
//       offset: {
//         top: $('header').height()
//       }
// });
//
// $('#sidebar').affix({
//       offset: {
//         top: 200
//       }
// });

</script>
</body>

</html>
