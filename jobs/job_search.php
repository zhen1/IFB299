<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>
<link rel="stylesheet" href="../css/style.css">
<title><?=$account?>'s Account </title>

<?php
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	$table = "jobs";
	if  (isset($_POST['id_search'])) {
		$search = $_POST['id_search'];
		$query = "SELECT jobs.jobNumber, jobs.customerID, logins.FirstName AS clientFirstName, logins.LastName AS clientLastName, contractors.contractorID, contractors.businessName AS contractorAssigned, contractors.phoneNumber AS contractorContactNumber, jobs.jobType, jobs.jobDescription, jobs.jobStatus, jobs.progressNotes, jobs.lastUpdateDateTime AS lastUpdate FROM jobs INNER JOIN logins ON jobs.customerID=logins.ID LEFT JOIN contractors ON jobs.contractorID=contractors.contractorID WHERE jobNumber = '$search'";
	}
	if (isset($_POST['client_search'])){
		$search = $_POST['client_search'];
		$query = "SELECT jobs.jobNumber, jobs.customerID, logins.FirstName AS clientFirstName, logins.LastName AS clientLastName, contractors.contractorID, contractors.businessName AS contractorAssigned, contractors.phoneNumber AS contractorContactNumber, jobs.jobType, jobs.jobDescription, jobs.jobStatus, jobs.progressNotes, jobs.lastUpdateDateTime AS lastUpdate FROM jobs INNER JOIN logins ON jobs.customerID=logins.ID LEFT JOIN contractors ON jobs.contractorID=contractors.contractorID WHERE customerID = '$search'";
	}
	
	$result = mysql_query($query);
	
	$i = 0;
	$row = mysql_num_rows($result);
	
	echo "<h1>Work Orders (Jobs)</h1>";
	echo "<h2>Job Number Search Results</h2>";
	echo "<hr /><hr />";
	if ($row > 0){
	echo "<p class='successful'>".$row." Matches Found</p>";
	} else {
	echo "<p class='unsuccessful'>No Matches Found</p>";
	}
	while ($i < $row)
	{
		$jobNumber = mysql_result($result, $i, "jobNumber"); 
		$customerID = mysql_result($result, $i, "customerID");
		$clientFirstName = mysql_result($result, $i, "clientFirstName");
		$clientLastName = mysql_result($result, $i, "clientLastName");
		$contractorID = mysql_result($result, $i, "contractorID");
		$contractorAssigned = mysql_result($result, $i, "contractorAssigned");
		$contractorContactNumber = mysql_result($result, $i, "contractorContactNumber");
		$jobType = mysql_result($result, $i, "jobType");
		$jobDescription = mysql_result($result, $i, "jobDescription");
		$jobStatus = mysql_result($result, $i, "jobStatus");
		$progressNotes = mysql_result($result, $i, "progressNotes");
		$lastUpdate = mysql_result($result, $i, "lastUpdate");
		
		
		echo 
		"
		<form action='edit_job.php' method='POST'>
		<tr><td><b>Job Number: </b></td><td>$jobNumber</td></tr><br/>
		<tr><td><b>Customer ID: </b></td><td>$customerID</td></tr><br/>
		<tr><td><b>Customer First Name: </b></td><td>$clientFirstName</td></tr><br/>
		<tr><td><b>Customer Last Name: </b></td><td>$clientLastName</td></tr><br/>
		<tr><td><b>Contractor ID: </b></td><td>$contractorID</td></tr><br/>
		<tr><td><b>Contractor Assigned: </b></td><td>$contractorAssigned</td></tr><br/>
		<tr><td><b>Contractor Phone: </b></td><td>$contractorContactNumber</td></tr><br/>
		<tr><td><b>Job Type: </b></td><td>$jobType</td></tr><br/>
		<tr><td><b>Job Description: </b></td><td>$jobDescription</td></tr><br/>
		<tr><td><b>Job Status: </b></td><td>$jobStatus</td></tr><br/>
		<tr><td><b>Progress Notes: </b></td><td>$progressNotes</td></tr><br/>
		<tr><td><b>Last Updated: </b></td><td>$lastUpdate</td></tr><br/>
		<tr><td><input value='$jobNumber' name='jobid' type='hidden' /></td>
		<td><input type='submit' value='Update Job' /></td></tr>
		</form>
		";
		
		$i++;
	}
	echo "<hr />";
	echo "<p><a href='job_home.php'>Back to Jobs Menu</a></p>";
	
?>

<?php require("../templates/footer.php");?>