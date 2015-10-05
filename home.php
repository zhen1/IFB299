<?php require("templates/header.php"); ?>

<title>Home</title>

<?php if($_SESSION['user_type'] == 'Admin'){ ?>


	<h1>Welcome Admin</h1>
		<ul>
			<li><a href="account/manager.php">View/Update Manager Accounts</a></li>
			<li><a href="account/volunteers.php">View/Update Volunteer Accounts</a></li>
			<li><a href="contractor.php">Contractor Management</a></li>
			<li><a href="job_home.php">Work Orders (Jobs)</a></li>
		</ul>
<?php } else if($_SESSION['user_type'] == 'Manager') { ?>

	<h1>Welcome Manager</h1>
		<ul>
			<li><a href="account/volunteers.php">View/Update Volunteer Accounts</a></li>
			<li><a href="contractor.php">Contractor Management</a></li>
			<li><a href="job_home.php">Work Orders (Jobs)</a></li>
		</ul>
	
<?php } else if($_SESSION['user_type'] == 'Volunteer') { ?>

	<h1>Welcome Volunteer</h1>
		<ul>
			<li><a href="contractor.php">Contractor Management</a></li>
			<li><a href="job_home.php">Work Orders (Jobs)</a></li>
		</ul>
	
<?php } else if($_SESSION['user_type'] == 'Migrant') { ?>

	<h1>Welcome Migrant</h1>
		<ul>
			<li><a href="account/job_status.php">Job Status</a></li>
			<li><a href="account/job_history.php">Job History</a></li>
		</ul>
	
<?php } else { ?>

	<h1>Welcome</h1>
	<p>Welcome to the Migrant Help Desk. Please <a href="login_page.php">login</a> to view our services or <a href="signup.php">create an account.</a></p>

<?php } ?>

<?php require("templates/footer.php"); ?>