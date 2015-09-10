<?php session_start();
	if(!isset($_SESSION['logged_in']))
	{
	$_SESSION['index_visited'] = true;
	$_SESSION['logged_in'] = false;
	$_SESSION['username'] = "";
	$_SESSION['user_type'] = "Admin";
	}
	
	// Test to see if pages change dempending on user_type (remove when no longer needed)
	//$_SESSION['user_type'] = "Manager";
	
	header("location:home.php")
?>