<?php require("db_connect.php"); ?>
<?php require("templates/header.php"); ?>
<title><?php echo $firstname ?>s Account</title>

<?php
	$con = mysqli_connect($hostname, $username, $password, $database) or die("Could not connect to database");
	$account = $_SESSION['username'];
	$table = "logins";
	$query = mysql_query("SELECT * FROM $table WHERE username='$account'");
	while($row = mysql_fetch_array($query, MYSQL_ASSOC))
	{
		$firstname = $row['FirstName'];
		$lastname = $row['LastName'];
		$username = $row['Username'];
		$email = $row['email'];
		$phone = $row['PhoneNumber'];
		$address = $row['Address'];
	}
?>



<?php require("templates/footer.php"); ?>