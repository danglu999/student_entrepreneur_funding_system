<?php
	require_once('config.php');
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['id']);
	unset($_SESSION['admin']);

	unset($_SESSION['phone']);
	unset($_SESSION['school']);
	unset($_SESSION['email']);

	session_write_close();
	header("location: ".HOMEURL);
	exit();
?>