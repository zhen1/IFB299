<?php require("templates/header.php"); ?>

<title>Home</title>

<?php if($_SESSION['user_type'] == 'Admin'){ ?>


	<h1>Welcome Admin</h1>

<?php } else if($_SESSION['user_type'] == 'Manager') { ?>

	<h1>Welcome Manager</h1>
	
<?php } else if($_SESSION['user_type'] == 'Volunteer') { ?>

	<h1>Welcome Volunteer</h1>
	<p><a href="job_home.php">Work Orders</a></p>
<p><a href="contractor.php">Contractors</a></p>
	
<?php } else if($_SESSION['user_type'] == 'Migrant') { ?>

	<h1>Welcome Migrant</h1>
	
<?php } else { ?>

	<h1>Welcome</h1>
	<p>Welcome to the Migrant Help Desk. Please <a href="login_page.php">login</a> to view our services or <a href="signup.php">create an account.</a></p>

<?php } ?>

<?php require("templates/footer.php"); ?>