
<head>
<meta content="en-au" http-equiv="Content-Language">
</head>

<?php 
	require("../templates/header_sub.php");
	require("../db_connect.php");
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);

	$userid = $_POST['user'];
	$pass = rand(1000000, 9999999);
	
	$userinfo = "SELECT * FROM $table WHERE ID='$userid'";
	$result = mysql_query($query);
	$username = mysql_result($result, $i, "Username");
		
	$password = password_hash($pass, PASSWORD_DEFAULT);
	$update = " UPDATE $table SET Password='$password' WHERE Username='$account'";
	mysql_query($update);
	mysql_close();
?>
<h1>Password Reset</h1>
<hr><hr>
<?php
echo "<p class='successful'> The account with username '".$username."' has had its password reset to '".$pass."'. Please advise the user that they will need to select a password at the next logon.</p>";
?>