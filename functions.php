<?php

    function query($query) {
        $con = mysql_connect("localhost", "root", "root");
	if (!$con) {
            die ('Could not connect: ' . mysql_error());
	}
        
	mysql_select_db("db", $con);
        
        $result = mysql_query($query);
        
	if($result) {
            return $result;
        } else {
            echo "Error: ".mysql_error();
            return false;
        }
    }
    

?>
