<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-au" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Contractor Management System - Add</title>
<link href="css/contractor.css" rel="stylesheet" type="text/css" />
</head>

<body>

<h1>Contractor Management System</h1>
<h2>Add New Contractor</h2>
<?php
$success=$_GET['success'];
	if ($success == "1"){
		echo ("Contractor Added Successfully!");			
	}

?>
	<form action="scriptAddContractor.php" method="post">
		<table>
		<tr>
			<td>Business Name:</td>
			<td>
			<input name="businessName" type="text" maxlength="45" /></td>
		</tr>
		<tr>
			<td>Street Number &amp; Street Name:</td>
			<td><input name="street" type="text" maxlength="45" /></td>
		</tr>
		<tr>
			<td>Suburb:</td>
			<td><input maxlength="45" name="suburb" type="text" /></td>
		</tr>
		<tr>
			<td>State:</td>
			<td><input maxlength="3" name="state" type="text" /></td>
		</tr>
		<tr>
			<td>Postcode:</td>
			<td><input maxlength="4" name="postcode" type="text" /></td>
		</tr>
		<tr>
			<td>Contact Name:</td>
			<td><input maxlength="45" name="contactName" type="text" /></td>
		</tr>
		<tr>
			<td>Phone Number:</td>
			<td><input name="phoneNumber" type="text" maxlength="10" /></td>
		</tr>
		<tr>
			<td>Email Address:</td>
			<td><input name="emailAddress" type="text" maxlength="45" /></td>
		</tr>
		<tr>
			<td>Notes</td>
			<td><textarea name="notes"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="clearButton" type="reset" value="Clear" /><input name="addButton" type="submit" value="Add" /></td>
		</tr>
		</table>
</form>

<p><a href="contractor_home.php">Contractor Management System Home</a></p>

</body>

</html>
