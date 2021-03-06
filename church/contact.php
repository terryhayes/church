<?php
    include 'tools/included.php';
    $mess = "";
    if(isset($_POST['send_msg'])){
        $name= strtoupper($_POST['name']);
        $mail = $_POST['email'];
        $phone = $_POST['mobile'];
        $message = $_POST['message'];

        $file_array = array(
            ':name' => $name ,
            ':mail'=> $mail,
            ':phone'=> $phone,
            ':message'=> $message
        );
        $sql = "INSERT INTO `message`(`sender`, `email`, `phone`, `message`, `created_on`, `is_delete`) VALUES (:name,:mail,:phone,:message,NOW(),'0')";
        $query = $handler->prepare($sql);
        if($query -> execute($file_array)){
            $mess = "<div class='alert bg-success' role='alert'>
				<h3>Message Sent</h3><a href='#add_spotlight' data-dismiss='alert' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>
					</div>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/our-church/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2015 19:04:54 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Our Church is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
<meta name="keywords" content="Church, Website, Template, Bulletin, Programs, Events, Themeforest, Premium, Charity, Non Profit ">
<meta name="author" content="Surjith SM">
<title>Church Website Template - Our Church Responsive HTML5</title>

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
<li><a href="faq.html">FAQ</a></li>
<li><a href="shortcodes.html">Shortcodes</a></li>
<li><a href="full-width.html">Full Width</a></li>
<li><a href="left-sidebar.html">Left Sidebar</a></li>
<li><a href="http://themeforest.net/user/surjithctly/portfolio">Buy this Template</a></li>
</ul>
</li>
<li class="active"><a href="contact.html">CONTACT</a></li>
</ul>
</div>

</div>
</div>

-->

<div class="subpage-head has-margin-bottom">
<div class="container">
<h3>Contact us</h3>
<p class="lead">Our Church address and contact details</p>
</div>
</div>

<div class="container">
<div class="row">
    <?php echo $mess;?>
</div>
<div class="row">
<div class="col-md-6 has-margin-bottom">

    <form id="phpcontactform" role="form" method="post" action="">
        <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
        <label>Email ID</label>
        <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="mobile" id="mobile">
        </div>
        <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" rows="5" name="message" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg" name='send_msg'>Send message</button>
        <span class="help-block loading"></span>
    </form>
</div>

<div class="col-md-6 has-margin-bottom">
<h5>OUR ADDRESS</h5>
<div class="row">
<div class="col-lg-6">Catholic Church<br>
121 King Street, Melbourne <br>
Victoria 3000 Australia</div>
<div class="col-lg-6">Phone: +61 3 8376 6284<br>
Fax: +61 38 376 6284<br>
Email: <a href="#"><span class="__cf_email__" data-cfemail="ee838f8782ae8d8f9a868182878d998b8c9d879a8bc08d8183">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script></a></div>
</div>
<hr>
<h5>ANOTHER ADDRESS</h5>
<div class="row">
<div class="col-lg-6">Catholic Church<br>
121 King Street, Melbourne <br>
Victoria 3000 Australia</div>
<div class="col-lg-6">Phone: +61 3 8376 6284<br>
Fax: +61 38 376 6284<br>
Email: <a href="#"><span class="__cf_email__" data-cfemail="117c70787d51727065797e7d7872667473627865743f727e7c">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script></a></div>
</div>
</div>
</div>
</div>

<div class="location-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1575.9186034720387!2d144.95541222452604!3d-37.817281929786624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642c9a8d8495f%3A0xedc33f230d1355b1!2sEnvato+Pty+Ltd!5e0!3m2!1sen!2sin!4v1407063773571" height="260"></iframe>
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
Email: <a href="#"><span class="__cf_email__" data-cfemail="422f232b2e022123362a2d2e2b21352720312b36276c212d2f">[email&#160;protected]</span><script cf-hash='f9e31' type="text/javascript">
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
<script src="js/contact_form.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/our-church/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2015 19:04:55 GMT -->
</html>
