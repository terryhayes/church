<?php

// session_start();
try{
	$handler = new PDO('mysql:host=localhost;dbname=church_db','root','');
	$handler-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
	echo $e->getMessage();
	die('no db found');
}
$GLOBALS['conn'] = $handler;
?>
