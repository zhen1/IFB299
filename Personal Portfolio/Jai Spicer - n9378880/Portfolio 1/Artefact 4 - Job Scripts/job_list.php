<?php 
	require("../db_connect.php");
	require("../templates/header_sub.php"); 
	$account = $_SESSION['Username'];
?>
	<link rel="stylesheet" href="../css/style.css">
	<title><?=$account?>'s Account </title>

<?php require("../templates/account_menu_sub.php") ?>

<?php
	$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$database = mysql_select_db($database, $con);
	$table = "jobs";
	$query = "SELECT * FROM $table";
	$job_result = mysql_query($query);
	$row = mysql_num_rows($job_result);
	$i = 0;
	
	while ($i < $row)
	{
		$jobnumber = mysql_result($job_result, $i, "jobNumber"); 
		$contid = mysql_result($job_result, $i, "contractorID");
		$custid = mysql_result($job_result, $i, "customerID");
		$jobdesc = mysql_result($job_result, $i, "jobDescription");
		$jobtype = mysql_result($job_result, $i, "jobType");
		$jobstat = mysql_result($job_result, $i, "jobStatus");
		$time = mysql_result($job_result, $i, "lastUpdateDateTime");
		$notes = mysql_result($job_result, $i, "progressNotes");
		
		echo 
		"
		<tr><td><b>Job Number: </b></td><td>$jobnumber</td></tr><br/>
		<tr><td><b>Contractor ID: </b></td><td>$contid</td></tr><br/>
		<tr><td><b>Customer ID: </b></td><td>$custid</td></tr><br/>
		<tr><td><b>Job Description: </b></td><td>$jobdesc</td></tr><br/>
		<tr><td><b>Job Type: </b></td><td>$jobtype</td></tr><br/>
		<tr><td><b>Job Status: </b></td><td>$jobstat</td></tr><br/>
		<tr><td><b>Time Stamp: </b></td><td>$time</td></tr><br/>
		<tr><td><b>Notes: </b></td><td>$notes</td></tr><br/>
		<form action='edit_job.php' method='POST'>
			<input type='hidden' value='$jobnumber' name='jobid' />
			<input type='submit' value='Edit Details' />
		</form>
		<br />
		";
		
		$i++;
	}
	
?>

<?php require("../templates/footer.php"); ?>