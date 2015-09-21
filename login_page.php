<?php require("templates/header.php"); ?>
<?php require("db_connect.php"); ?>

	<?php
		if(isset($_POST['submit']))
		{
			$user = htmlentities($_POST['username']);
			$pass = htmlentities($_POST['password']);
			
			$table = "logins";
			
			$con = mysqli_connect($hostname, $username, $password, $database) or die("Could not connect to database");
			$query = "SELECT * FROM $table WHERE username='$user'";
			
			$query = mysqli_query($con, $query);
			$result = mysqli_fetch_assoc($query);
			if($result == NULL)
			{
				echo "Incorrect username or password";
			}
			else
			{
				if($result['Password'] == $pass)
				{
					if($result['Approved'] == 1)
					{
						$_SESSION['logged_in'] = true;
						$_SESSION['Username'] = $user;
						$_SESSION['user_type'] = $result["UserLevel"];
						header("Location:home.php");
					}
					else
					{
						echo "User is not approved";
					}
					
				}
				else
				{
					echo "Incorrect username or password";
				}
			}

		}
	?>
	<title>Login</title>
	<h1>System Login</h1>
	<section id="logincontent">
		<p>Please enter your username and password to continue.</p>
		<form action="" method="POST">
			<table>
			<tr>
			<td>Username: </td><td><input type="text" name="username" placeholder="Username" required></td>
			</tr>
			<tr>
			<td>Password: </td><td><input type="password" name="password" placeholder="Password" required></td>
			</tr>
			<tr>
			<td></td><td><input type="submit" name="submit" value="Login" /></td>
			</tr>
		</table>
		</form>
		<p><a href="signup.php">I don't have an account</a></p>
	</section>
	
<?php require("templates/footer.php"); ?>