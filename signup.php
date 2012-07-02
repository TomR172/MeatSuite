<?php 
    if(!empty($_POST)) {      
	$farmName = $_POST["FarmName"];
	$owner = $_POST["Owner"];
	$address = $_POST["Address"];
	$phone = $_POST["Phone"];
	$email = $_POST["Email"];
	$website = $_POST["Website"];
	$organic = $_POST["Organic"];
	$products = $_POST["Products"];
	

        $con = mysql_connect("localhost", "root");
	if (!$con) {
		die ('Could not connect: ' . mysql_error());
	}
        
	mysql_select_db("db", $con);
	if(mysql_query("INSERT INTO farms (Farm, Owner, Address, Phone, Email, Website, Organic, Products) VALUES ('$farmName', '$owner', '$address', '$phone', '$email', '$website', '$organic', '$products' )", $con)) {
            echo "You've been signed up!";
        } else {
            echo "Error: ".mysql_error();
        }
    }
    
?>

<h3>Sign up here</h3>
<form id="Register" action="index.php?page=signup" method ="post">
	Farm <input type="text" name="FarmName" /><br />
	Owner <input type="text" name="Owner" /><br />
	Address <input type="text" name="Address" /><br />
	Phone <input type="text" name="Phone" /><br />
	Email <input type="text" name="Email" /><br />
	Website <input type="text" name="Website" /><br />
	Organic <input type="text" name="Organic" /><br />
	Products <input type="text" name="Products" /><br />
	
	<h3>Please check the ones you sell</h3>
	<input type="checkbox" /> Beef<br />
	<input type="checkbox" /> Pork<br />
	<input type="checkbox" /> Chicken<br />
	<input type="submit" value = "Submit" />
</form>