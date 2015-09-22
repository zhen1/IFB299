	<?php
	    $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "ifb299db";
        $table = "logins";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);
		
		
		
		
		if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['address']))
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];

			$query = mysql_query("SELECT * FROM $table WHERE Username='$user'");
			if(mysql_num_rows($query) > 0)
			{
				echo 'Username already taken';
			}
			else
			{
				mysql_query("INSERT INTO $table (FirstName, LastName, Username, Password, Email, PhoneNumber, Address, UserLevel, Approved) VALUES ('$fname', '$lname', '$user', '$pass', '$email', '$phone', '$address', 'Migrant', '1')"); 
				header("Location:home.php");
			}
		}
		mysql_close();
		
?> 

<?php require("templates/header.php"); ?>
<title>Signup</title>


	<h1>New Migrant User Signup</h1>
	<p>Please complete this form to signup for a new account.</p>
	
	<form action="signup.php" method="POST">
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
		<td>Phone Number:</td><td><input type="text" name="phone" /></td>
		</tr>
		<tr>
		<td>Address:</td><td><input type="text" name="address" /></td>
		</tr>
		<tr>
		
		<td></td><td><input type="submit" value="Submit" name="Submit" /></td>
	</tr>
	</table>
	</form>
	<p><a href="new_volunteer.php">Volunteer Signup</a></p>
	
<?php require("templates/footer.php"); ?>
