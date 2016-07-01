<?php
	include 'session_setting.php';
	$css ="
	<link href='css/custom.css' rel='stylesheet'>
    <link rel='shortcut icon' href='tools/favicon.png'>";
	$sidebar ="
    <nav id='mainnav-container'>
    <div id='mainnav'>
        <!--Menu-->
        <div id='mainnav-menu-wrap'>
            <div class='nano'>
                <div class='nano-content'>
                    <ul id='mainnav-menu' class='list-group'>
                        <!--Category name-->
                        <li class='list-header'>Navigation</li>
                        <!--Menu list item-->
                        <li class='active-link'>
                            <a href='index.php'>
                                <i class='fa fa-dashboard'></i>
                                <span class='menu-title'>
                                    <strong>Dashboard</strong>
                                </span>
                            </a>
                        </li>
                        <li class='list-divider'></li>
                        <!--Category name-->
                        <li class='list-header'>Management</li>
                        <!--Menu list item-->
                        <li>
                            <a href='#'>
                                <i class='fa fa-briefcase'></i>
                                <span class='menu-title'> Manage Spotlight</span>
                                <i class='fa arrow'></i>
                            </a>
                            <!--Submenu-->
                            <ul class='collapse'>
                                <li><a href='add-spotlight.php'>Add Spotlight</a></li>				
                                <li><a href='view-spotlight.php'>View Spotlight</a></li>
                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href='#'>
                                <i class='fa fa-user'></i>
                                <span class='menu-title'>Manage Albums</span>
                                <i class='fa arrow'></i>
                            </a>
                            <!--Submenu-->
                            <ul class='collapse'>
                                <li><a href='add-album.php'>Add Album</a></li>
                                <li><a href='view-album.php'>View Album</a></li>
                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href='#'>
                                <i class='fa fa-table'></i>
                                <span class='menu-title'>Manage Gallery</span>
                                <i class='fa arrow'></i>
                            </a>
                            <!--Submenu-->
                            <ul class='collapse'>
                                <li><a href='add-gallery.php'>Add Gallery</a></li>
                                <li><a href='view-gallery.php'>View Gallery </a></li>
                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href='#'>
                                <i class='fa fa-table'></i>
                                <span class='menu-title'>Manage Programmes & Events</span>
                                <i class='fa arrow'></i>
                            </a>
                            <!--Submenu-->
                            <ul class='collapse'>
                                <li><a href='add-programme.php'>Add Programme / Events</a></li>
                                <li><a href='view-programme.php'>View Programme / Events </a></li>
                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href='#'>
                                <i class='fa fa-table'></i>
                                <span class='menu-title'>Manage Sermons</span>
                                <i class='fa arrow'></i>
                            </a>
                            <!--Submenu-->
                            <ul class='collapse'>
                                <li><a href='add-video.php'>Add Sermons</a></li>
                                <li><a href='view-video.php'>All Sermons</a></li>
                            </ul>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href='view-message.php'>
                                <i class='fa fa-file'></i>
                                <span class='menu-title'>Manage Messages</span>
                            </a>
                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href='view-prayer.php'>
                                <i class='fa fa-file'></i>
                                <span class='menu-title'>Manage Prayer Request</span>
                            </a>
                        </li>
                        <!-- Menu list item -->
                        <li>
                            <a href='#'>
                                <i class='fa fa-user'></i>
                                <span class='menu-title'>Manage Users</span>
                                <i class='fa arrow'></i>
                            </a>
                            <!--Submenu-->
                            <ul class='collapse'>
                                <li><a href='add-user.php'>Add Users</a></li>
                                <li><a href='view-user.php'>View Users</a></li>
                            </ul>
                        </li>
                        <li class='list-divider'></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End menu-->
    </div>
</nav>";
?>