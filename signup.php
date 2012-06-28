<h3>Sign up here</h3>
<form id="Register action="index.php?page=signup" method ="post">
	<input type="text"> Farm <br />
	<input type="text"> Owner <br />
	<input type="text"> Address <br />
	<input type="text"> Phone <br />
	<input type="text"> Email <br />
	<input type="text"> Website <br />
	<input type="text"> Description <br />
	<input type="text"> Organic <br />
	<h3>Please check the ones you sell</h3>
	<input type="checkbox" /> Beef<br />
	<input type="checkbox" /> Pork<br />
	<input type="checkbox" /> Chicken<br />
	<input type="submit" value = "Submit" />
</form>
<?php 
	$farm = $_POST["Farm"];
	$owner = $_POST["Owner"];
	$address = $_POST["Address"];
	$phone = $_POST["Phone"];
	$email = $_POST["Email"];
	$website = $_POST["Website"];
	$description = $_POST["Description"];
	$organic = $_POST["Organic"];
	$beef = $_POST["Beef"];
	$pork = $_POST["Pork"];
	$chicken = $_POST["Chicken"];
	mysql_select_db("db", $con);
	mysql_query("INSERT INTO db (Farm, Owner, Address, Phone, Email, Website, Description, ORganic, Beef, Pork, Chicken)
	VALUES ($farm, $owner, $address, $phone, $email, $website, $description, $organic, $beef, $pork, $chicken)");
?>