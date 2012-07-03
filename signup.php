<?php 
    if(!empty($_POST)) {      
	$farmName = $_POST["FarmName"];
	$owner = $_POST["Owner"];
	$address = $_POST["Address"];
	$phone = $_POST["Phone"];
	$email = $_POST["Email"];
	$website = $_POST["Website"];
	if(isset($_POST['Beef'])){
		$beef = 1;
	}
	else {
		$beef=0;
	}
	if(isset($_POST['Pork'])){
		$pork=1;
	}
	else {
		$pork=0;
	}
	if(isset($_POST['Chicken'])){
		$chicken=1;
	}
	else {
		$chicken=0;
	}	
	if(isset($_POST['Organic'])){
		$organic=1;
	}
	else {
		$organic=0;
	}
	
	if(mysql_query("INSERT INTO farms (FarmName, owner, address, phone, email, website, organic, beef, pork, chicken) VALUES ('$farmName', '$owner', '$address', '$phone', '$email', '$website', '$organic', '$beef', '$pork', '$chicken' )")) {
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
	
	<h3>Please check the ones you sell</h3>
	<input type="checkbox" /> Beef<br />
	<input type="checkbox" /> Pork<br />
	<input type="checkbox" /> Chicken<br />
	<input type="checkbox" /> Organic<br />
	<input type="submit" value = "Submit" />
</form>