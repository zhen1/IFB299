<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-au" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<h1>Add Contractor</h1>
<?php
$success=$_GET['success'];
	if ($success == "1"){
		echo ("Contractor Added Successfully!");			
	}

?>
<form action="AddContractor.php" method="post">
	<table style="width: 100%">
		<tr>
			<td style="width: 236px">Business Name:</td>
			<td>
			<input name="businessName" type="text" maxlength="45" size="45" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Street Number &amp; Street Name:</td>
			<td><input name="street" type="text" maxlength="45" size="45" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Suburb:</td>
			<td><input maxlength="45" name="suburb" size="45" type="text" /></td>
		</tr>
		<tr>
			<td style="width: 236px">State:</td>
			<td><input maxlength="3" name="state" size="3" type="text" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Postcode:</td>
			<td><input maxlength="4" name="postcode" size="4" type="text" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Contact Name:</td>
			<td>
			<input maxlength="45" name="contactName" size="45" type="text" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Phone Number:</td>
			<td>
			<input name="phoneNumber" type="text" maxlength="10" size="10" style="height: 22px" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Email Address:</td>
			<td>
			<input name="emailAddress" type="text" maxlength="45" size="45" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Notes</td>
			<td>
			<textarea name="notes" style="width: 419px; height: 105px" cols="45" rows="10"></textarea></td>
		</tr>
		<tr>
			<td style="width: 236px">
			<input name="clearButton" type="button" value="Clear" /></td>
			<td><input name="addButton" type="submit" value="Add" /></td>
		</tr>
	</table>
</form>

</body>

</html>
