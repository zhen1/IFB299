<!--
page for searching the database for existing migrant users.
-->

<?php require("../templates/header_sub.php"); ?>

<title>Customer Management System - Main Menu</title>

<h1>Migrant User Management</h1>		
<hr>
<hr>
<p class="information">Please complete the form to search for an existing
client.</p>




<form action="search_results.php" method="post" autocomplete="off">
<table>
<tr><td style="height: 42px">Enter Search: </td>
	<td colspan="2" style="height: 42px">
	<input name="search_box" type="text" /></td></tr>
<tr><td>Search By:	</td>

<td>Last Name:</td><td><input name="radioGroup1" type="radio" value="lastName" required/></td></tr>

<tr><td></td><td>Phone Number:</td><td>
	<input name="radioGroup1" type="radio" value="phoneNumber" required/></td></tr>

<tr><td></td><td>Client Number:</td><td>
	<input name="radioGroup1" type="radio" value="clientNumber" required /></td></tr>

<tr><td></td><td><input name="searchButton" type="submit" value="Search"/></td></tr>

</table>
</form>





<?php require("../templates/footer.php"); ?>