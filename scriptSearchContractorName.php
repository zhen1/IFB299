<html>
<head></head>
<body>
<p>
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
$searchBox = $_POST['searchBox'];

//Insert new company into the database and return success=1
$query = "SELECT * FROM $table";
$result = mysql_query($query);
$rows = mysql_num_rows($result);

$i=0;
while($i < 10){

$contractorID = mysql_result($result,$i,"contractorID");
$businessName = mysql_result($result,$i,"businessName");
$street = mysql_result($result,$i,"street");
$suburb = mysql_result($result,$i,"suburb");
$state = mysql_result($result,$i,"state");
$postcode = mysql_result($result,$i,"postcode");
$contactName = mysql_result($result,$i,"contactName);
$phoneNumber = mysql_result($result,$i,"phoneNumber");
$emailAddress = mysql_result($result,$i,"emailAddress");
$notes = mysql_result($result,$i,"notes");

echo "$contractorID $businessName $street $suburb $state $postcode $contactName $phoneNumber $emailAddress $notes"<br><br>"

}
echo $result
mysql_close();

?>
</p>
</body>
</html>