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
			<td style="width: 236px">Business Name</td>
			<td><input name="businessName" type="text" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Address</td>
			<td><input name="address" type="text" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Postcode</td>
			<td><input name="postcode" type="text" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Contact Name</td>
			<td><input name="contactName" type="text" /></td>
		</tr>
		<tr>
			<td style="width: 236px">Notes</td>
			<td><textarea name="notes" style="width: 419px; height: 105px"></textarea></td>
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
