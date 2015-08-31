<?php

$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "users"; // the name of the database that you are going to use for this project
$dbuser = "root"; // the username that you created, or were given, to access your database
$dbpass = "team5"; // the password that you created, or were given, to access your database

$dbhandle = mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());

$myusername = $_POST['user'];
$mypassword = $_POST['pass'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword); 

$query = "SELECT * FROM 'dbname' WHERE Username='$myusername' and Password='$mypassword'";
$result = mysql_query($query);
$count = mysql_num_rows($result);

if($count==1)
{
	echo 'It worked';
}

?>

mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());