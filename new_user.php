<?php
	    $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "mysql";
        $table = "login";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);
		
		mysql_close();
?>