<?php 
    if(!empty($_POST)) {      
	$farmName = $_POST["farmName"];
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];

        $con = mysql_connect("localhost", "root");
	if (!$con) {
		die ('Could not connect: ' . mysql_error());
	}
        
	mysql_select_db("db", $con);
	if(mysql_query("INSERT INTO farms (FarmName, FirstName, LastName) VALUES ('$farmName', '$firstName', '$lastName')", $con)) {
            echo "You've been signed up!";
        } else {
            echo "Error: ".mysql_error();
        }
    }
    
?>

<h3>Sign up here</h3>
<form id="Register" action="index.php?page=signup" method ="post">
	Farm Name <input type="text" name="farmName" /><br />
	First Name <input type="text" name="firstName" /><br />
	Last Name <input type="text" name="lastName" /><br />
	
	<h3>Please check the ones you sell</h3>
	<input type="checkbox" /> Beef<br />
	<input type="checkbox" /> Pork<br />
	<input type="checkbox" /> Chicken<br />
	<input type="submit" value = "Submit" />
</form>