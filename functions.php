<?php

    function query($query) {
        $result = mysql_query($query);
        
	if($result) {
            return $result;
        } else {
            echo "Error: ".mysql_error();
            return false;
        }
    }
    

?>
