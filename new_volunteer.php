<?php
	    $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "ifb299db";
        $table = "logins";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);
		
		
		
		
		if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['email']))
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$email = $_POST['email'];

			$query = mysql_query("SELECT * FROM $table WHERE Username='$user'");
			if(mysql_num_rows($query) > 0)
			{
				echo 'Username already taken';
			}
			else
			{
				mysql_query("INSERT INTO $table (FirstName, LastName, Username, Password, Email, UserLevel, Approved) VALUES ('$fname', '$lname', '$user', '$pass', '$email', 'Volunteer', '0')"); 
				echo("User created successfully");
				header("Location:home.php");
			}
		}
		mysql_close();
?>

<?php require("templates/header.php"); ?>
<title>Signup</title>
  
	<h1>Volunteer Signup</h1>
<p>Please complete the form to create a new volunteer account. Please note that 
a manager must approve this request before you are able to login to the system.</p>
	<form action="new_volunteer.php" method="POST">
	<table>
		<tr>
		<td>First Name:</td><td><input type="text" name="fname" /></td>
		</tr>
		<tr>
		<td>Last Name:</td><td><input type="text" name="lname" /></td>
		</tr>
		<tr>
		<td>Username:</td><td><input type="text" name="user" /></td>
		</tr>
		<tr>
		<td>Password:</td><td><input type="password" name="pass" /></td>
		</tr>
		<tr>
		<td>Email:</td><td><input type="text" name="email" /></td>
		</tr>
		<tr>
		<td></td><td><input type="submit" value="Submit" name="Submit" /></td>
		</tr>
	</table>
	</form>
	
	<?php require("templates/footer.php"); ?>