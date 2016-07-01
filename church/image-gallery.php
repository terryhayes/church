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
<link href="css/fancybox.css" rel="stylesheet">

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="images/favicon.png">

<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript">
    function get(hut,nut) {
        $.post('pages/image.php',{name:hut,age:nut},
            function (output) {
                $('#album_display').html(output).show();
            });
    }
</script>
</head>
<style>
    .gal_thmb{
        height: 140px;
    }
</style>
<body <?php if(isset($_GET['album'])){
    $id=$_GET['album'];
        echo "onload='get(1,$id);'";
    } else{
        echo "onload='get(1,1);'";}?> >

  <?php
  // echo $top;
  $present_file =basename($_SERVER['REQUEST_URI']);
  navigation($present_file);
  ?>
<div class="subpage-head has-margin-bottom">
<div class="container">
<h3>Gallery</h3>
<p class="lead">Curated images of our church programs and events</p>
</div>
</div>

<div class='row container '>
    <div id='album_display' class='container col-xs-10' style="margin-left: 50px;">
    </div>
    <div class="col-xs-1 container-fluid">
        <h4>Albums</h4>
<?php
    $query = $handler->query("SELECT * FROM `album` WHERE `is_delete` ='0' ORDER BY `album_id` ASC");
    echo '<ul>';
    while($album = $query->fetch()){
        echo "<li><a href='?album=".$album['album_id']."' onclick='get(1);'>".$album['title']."</a></li>";
    }
    echo '</ul>';
?>
</div>
</div>
    <div class='row container' style="margin-left: 50px;">
<?php
    if(isset($_GET['album'])){
        $g_id = $_GET['album'];
        $rows_wanted = 8;
			$total_rows = $handler->query("SELECT * FROM `gallery` WHERE `album_id` = ".$g_id);
			$total_rows = $total_rows->rowCount();
			$pagnation = ceil($total_rows/$rows_wanted);
            echo "<ul class='pagination pagination-lg'>";
            while ($pagnation) {
                echo "<li><input type='button' name='pagers' value='".$pagnation."' onclick='get(".$pagnation.",$g_id);'></li>";
                $pagnation--;
            }
            echo "</ul>";
        echo "<script type'text/javascript'>
    get(5);
</script>";
    }
?>
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
<script src="js/fancybox.js"></script>
<script src="js/script.js"></script>
</body>

</html>
