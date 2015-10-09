<!--
page for searching the database for existing migrant users.
-->

<?php require("../templates/header_sub.php"); ?>

<title>Customer Management System - Main Menu</title>

<h1>Migrant User Management</h1>		
<hr>
<hr>
<p class="information">Please complete the form to search for an exisiting 
client.</p>




<form action="" method="post" autocomplete="off">
<table>
<tr><td>Search Terms: </td><td colspan="2">
	<input name="lastName" type="text" style="width: 197px" /></td></tr>
<tr><td>Criteria to Seach:	</td><td>Last Name:<input name="Radio1" type="radio" /></td><td>Phone Number:<input name="Radio1" type="radio" /></td><td>Client Number:<input name="Radio1" type="radio" /></td></tr>
</table>
</form>





<?php require("../templates/footer.php"); ?>