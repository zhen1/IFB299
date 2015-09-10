<?php require("templates/header.php"); ?>

<title>Home</title>

<?php if($_SESSION['user_type'] == 'Admin'){ ?>

	<h1>Welcome Admin</h1>

<?php } else if($_SESSION['user_type'] == 'Manager') { ?>

	<h1>Welcome Manager</h1>
	<div>
		<ul>
			<li><a href="volunteers.php">Volunteers</a></li>
			<li><a href="contractor.php">Contractor</a></li>
		</ul>
	</div>
<?php } else if($_SESSION['user_type'] == 'Volunteer') { ?>

	<h1>Welcome Volunteer</h1>
<?php } else if($_SESSION['user_type'] == 'Migrant') { ?>

	<h1>Welcome Migrant</h1>

<?php } else { ?>

	<h1>Welcome</h1>

<?php } ?>

<?php require("templates/footer.php"); ?>