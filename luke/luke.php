<html>

<p>
<?php
$c = mysql_connect("localhost", "root", "team5");
mysql_select_db("Luke");

$result = mysql_query("SELECT * FROM `testTable`");

$row = mysql_fetch_assoc($result);

echo htmlentities($row['_message']);

?>
</p>

</html>