<?php

//Connection to MySQL
$username = "root";
$password = "team5";
$hostname = "localhost";
$database = "IFB299";
$table = "Contractors";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
$selecttable = mysql_select_db($database, $dbhandle);


//Form variables for submission to database
$businessName = $_POST['businessName'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$contactName = $_POST['contactName'];
$notes = $_POST['notes'];

//Insert new company into the database
mysql_query("INSERT INTO $table (businessName, address, postcode, contactName, notes) VALUES ('$businessName', '$address', '$postcode', '$contactName', '$notes')");
 

?>