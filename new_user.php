<?php
	    $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "mysql";
        $table = "login";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);
		
		mysql_close();
?>

<html>
	<body>
		<h1>Signup</h1>
			<form action="new_user.php" method="POST">
				<p>First Name:</p><input type="text" name="fname" />
				<p>Last Name:</p><input type="text" name="lname" />
				<p>Username:</p><input type="text" name="user" />
				<p>Password:</p><input type="password" name="pass" />
				<p>Email:</p><input type="text" name="email" />
				<p>Phone Number:</p><input type="text" name="phone" />
				<p>Address:/p><input type="text" name="address" />
				<br />
				<input type="submit" value="Signup" />
			</form>
	</body>
</html>