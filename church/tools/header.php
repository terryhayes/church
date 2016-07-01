<?php
// $present_file =basename($_SERVER['REQUEST_URI']);
// function to_activate($present_file){
//   switch ($present_file) {
//     case 'about.php':
//         echo 'active';
//       break;
//
//     default:
//         echo ' ';
//       break;
//   }
// }

    function navigation($present_file){
      function to_activate($present_file,$current_loc){
      		  if($present_file == $current_loc) {
              return 'active';
      		  }
      		}
      // function to_activate_gal($present_file){
      // 		  if($present_file = 'image-gallery.php') {
      //         return 'active';
      // 		  }
      // 		}
          function to_avctivate_page($present_file){
            $pages = array('image-gallery.php','video-gallery.php','prayers.php','events-programs.php','event-calendar.php');
            if(in_array($present_file,$pages)){
              return 'active';
            }
            if($present_file == 'image-gallery.php') {
              return 'active';
            }
          }
          function to_avctivate_ministry($present_file){
            $ministry = array('intercessory-ministry.php','creche.php','children-ministry.php','singing-ministry.php','ushering-ministry.php');
            if(in_array($present_file,$ministry)){
              return 'active';
            }
          }
      echo "
<header><img src='images/logo.png'  style=' width : 100% ;height : 60px'alt='logo' class='img-responsive'></header>
<div id='navbar-main' class='navbar navbar-default' role='navigation' data-spy='affix' data-offset-top='137'>

<div class='container'>
<div class='navbar-header'>
<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
	 <span class='sr-only'>Toggle navigation</span>
	 <span class='icon-bar'></span>
	 <span class='icon-bar'></span>
	 <span class='icon-bar'></span>
</button>
	<a class='navbar-brand' href='index.php'>
		<img src='images/church-logo.png' alt='church logo' class='img-responsive'>
	</a>
</div>
<div class='navbar-collapse collapse'>
<ul class='nav navbar-nav navbar-right'>
<li class='".to_activate($present_file,'index.php')."'><a href='index.php'>HOME</a></li>
<li class='".to_activate($present_file,'about.php')."'><a href='about.php'>ABOUT</a></li>
<li class='dropdown ".to_avctivate_ministry($present_file)."'>
	<a href='#' class='dropdown-toggle' data-toggle='dropdown'>MINISTRY <span class='caret'></span></a>
	<ul class='dropdown-menu dropdown-menu-left' role='menu'>
		<li><a href='intercessory-ministry.php'>Intercessory Ministry</a></li>
		<li><a href='children-ministry.php'>Youth Ministry</a></li>
		<li><a href='creche.php'>Children Ministry</a></li>
		<li><a href='singing-ministry.php'>Singing Ministry</a></li>
		<li><a href='ushering-ministry.php'>Ushering Ministry</a></li>
	</ul>
</li>
<li class='".to_activate($present_file,'sermons.php')."'><a href='sermons.php'>SERMON</a></li>
<li class='dropdown ".to_avctivate_page($present_file)."'>
	<a href='#' class='dropdown-toggle' data-toggle='dropdown'>PAGES <span class='caret'></span></a>
	<ul class='dropdown-menu dropdown-menu-left' role='menu'>
		<li><a href='image-gallery.php'>Image Gallery</a></li>
		<li><a href='video-gallery.php'>Video Gallery</a></li>
		<li class='divider'></li>
		<li><a href='prayers.php'>Prayers</a></li
		<li class='divider'></li>
		<li><a href='events-programs.php'>Events &amp; Programs</a></li>
		<li><a href='event-calendar.php'>Event Calendar</a></li>
	</ul>
</li>
<li class='".to_activate($present_file,'contact.php')."'><a href='contact.php'>CONTACT</a></li>
</ul>
</div>

</div>
</div>

";}

$sticky_nav = "
.affix {
      top: 0;
      width: 100%;
      /*position: absolute;*/
	left: 0px;
	z-index: 2;
	/*background-color: black;*/
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
#navbar-main{

} ";
?>
