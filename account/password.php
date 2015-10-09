<?php 
require("../templates/header_sub.php"); 
require("../db_connect.php");
$account = $_SESSION['Username'];
?>
	<h1>Change Password</h1>
	
	<em class="unsuccessful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "0") {
				echo ("Error, The passwords did not match. Please try again!");
			}
	} ?></em>

	<link rel="stylesheet" href="../css/style.css">
	<title>Update <?=$account?>'s Password</title>

	<form action="update_password.php" method="POST">
		<p>Password: </p><input type="password" placeholder="Password" name="pass" />
		<p>Re-Type: </p><input type="password" placeholder="Password" name="retype" />
		<br />
		<input type="submit" value="Update" />
	</form>

<?php require("../templates/footer.php"); ?>