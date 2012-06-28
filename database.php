<?php

	// Report all PHP errors (see changelog)
	error_reporting(E_ALL);

	$con = mysql_connect("localhost", "root");
	if (!$con) {
		die ('Could not connect: ' . mysql_error());
	}
	
	/*Farm ID is a number*/
	
	mysql_select_db("db", $con);

	
	if(mysql_query("ALTER TABLE farms Drop FarmName VARCHAR(30)")){
				echo "Altered table"; }
	else { 
		echo mysql_error(); }
?>