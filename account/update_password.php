<?php 
	require("../templates/header_sub.php");
	require("../db_connect.php");
	$table = "logins";
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	
	$account = $_SESSION['Username'];
	
	$pass = $_POST['pass'];
	$retype = $_POST['retype'];
	
	if ($pass == $retype)
	{
		$password = password_hash($pass, PASSWORD_DEFAULT);
		$update = " UPDATE $table SET Password='$password' WHERE Username='$account'";
		mysql_query($update);
		mysql_close();
		header("Location:../logout.php?success=1");
	}
	else
	{
		header("Location:password.php?success=0");
	}
?>