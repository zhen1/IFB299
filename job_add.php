<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Contractor Management System - Add New Contractor</title>
<link href="css/contractor.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Work Orders</h1>
<h2>Add New Work Order</h2>
<hr><hr>
<p class="information">Please complete the form to lodge a new work order. All fields 
with * are required to be completed.</p>
<?php
	//code checks to see if field in the form has been posted, if correct all following code executes
    if (isset($_POST['customerID'])) {
        //Connection to MySQL
        $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "ifb299db";
        $table = "jobs";

        $connection = mysqli_connect($hostname, $username, $password, $database);
        if (!$connection){
        	die("Connection failed: " . mysqli_connect_error());
        }

        //Form variables for submission to database
            $customerID = mysqli_real_escape_string($connection, $_POST['customerID']); 
            $jobDescription = mysqli_real_escape_string($connection, $_POST['jobDescription']);
            $jobType = mysqli_real_escape_string($connection, $_POST['jobType']);
            $jobStatus = mysqli_real_escape_string($connection, $_POST['jobStatus']);
            $progressNotes = mysqli_real_escape_string($connection, $_POST['progressNotes']);
            
        //Insert new company into the database and return success=1

        $query = "INSERT INTO $table (customerID, jobDescription, jobType, jobStatus, progressNotes) VALUES ('$customerID', '$jobDescription', '$jobType', '$jobStatus', '$progressNotes')";
        
		mysqli_query($connection, $query);        
        mysqli_close($connection);
        header("Location:job_add.php?success=1");

    }
    
    //error and success messages for add operation. Error message currently not used as form fields are checked by html value.
    //may change this if we need to implement further validation checks on the data.
    ?><em class="successful"><?php
        if (isset($_GET["success"])) {
            $success = $_GET['success'];
            if ($success == "1") {
                echo ("Work Order Created Successfully!");
            }
        }
        ?></em><em class="unsuccessful"><?php
        if (isset($_GET["success"])) {
            $success = $_GET['success'];
            if ($success == "0") {
                echo ("Error! Unsuccessful, Please try again!");
            }
        }
        ?></em>
<form action="job_add.php" method="post">
	<table>
		<tr>
			<td>Customer ID:</td>
			<td>
			<input maxlength="45" name="customerID" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Job Description:</td>
			<td>
			<input maxlength="45" name="jobDescription" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Job Type:</td>
			<td><select name="jobType">
			<option>Building</option>
			<option>Plumbing</option>
			<option>Electrical</option>
			<option>Landscaping</option>
			<option>Other</option>
			</select>*</td>
		</tr>
		<tr>
			<td>Job Status:</td>
			<td><select name="jobStatus">
			<option selected="">Open</option>
			<option>In Progress</option>
			<option>Closed</option>
			</select>*</td>
		</tr>
		<tr>
			<td>Notes</td>
			<td><textarea name="progressNotes" cols="20" rows="5"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input name="addButton" type="submit" value="Submit Work Order" /></td>
		</tr>
	</table>
</form>
<hr>
<p><a href="job_home.php">Return to Main Menu</a></p>

</body>

</html>
