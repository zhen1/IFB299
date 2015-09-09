<?php session_start();
	if(!isset($_SESSION['logged_in']))
	{
	$_SESSION['index_visited'] = true;
	$_SESSION['logged_in'] = false;
	$_SESSION['username'] = "";
	$_SESSION['usertype'] = "";
	
	}
header("location:home.php")
?>