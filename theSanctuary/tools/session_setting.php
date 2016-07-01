<?php
if(!isset($_SESSION['username'])){
//    $_SESSION['username'] = 'Asamoah';
    header("Location:pages-login.php");
}
else{
        $user_logged_in = $_SESSION['username'];
   		$user_logged_id = $_SESSION['user_id'];
   		$user_logged_name = $_SESSION['user_name'];
   		$user_logged_type = $_SESSION['account'];
    
} 
?>