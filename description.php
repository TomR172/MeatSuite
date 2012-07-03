<h3>Please give us a description of your farm</h3>

<form class="Register" method="post" action="">
	<textarea name="desc" cols="40" rows="10">
	No more than 1000 characters
	</textarea><br>
	<input type="submit" value="Submit" />
</form>
<?php

	$desc = $_POST["desc"];
	mysql_select_db("db", $con);
	if(mysql_query("INSERT INTO farms (description) VALUES ('$desc')", $con)) {
            echo "You've been signed up!";
        } else {
            echo "Error: ".mysql_error();
        }
?>