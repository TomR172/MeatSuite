<?php 
    if(!empty($_POST)) {      
	$farmName = $_POST["FarmName"];
	$farmName = mysql_real_escape_string($farmName);
	$owner = $_POST["Owner"];
	$owner = mysql_real_escape_string($owner);
	$address = $_POST["Address"];
	$address = mysql_real_escape_string($address);
	$phone = $_POST["Phone"];
	$phone = mysql_real_escape_string($phone);
	$email = $_POST["Email"];
	$email = mysql_real_escape_string($email);
	$website = $_POST["Website"];
	$website = mysql_real_escape_string($website);
	$desc = $_POST["desc"];
	$desc = mysql_real_escape_string($desc);
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
	

	if(mysql_query("INSERT INTO farms (FarmName, owner, address, phone, email, website, organic, beef, pork, chicken, description, key) VALUES ('$farmName', '$owner', '$address', '$phone', '$email', '$website', '$organic', '$beef', '$pork', '$chicken', '$desc', '$key' )")) {
            echo "You've been signed up!";
        } else {
            echo "Error: ".mysql_error();
        }
    }
    
?>

<h3>Sign up here</h3>
<form class="Register" action="index.php?page=signup" method ="post">
	Farm <input type="text" name="FarmName" /><br />
	Owner <input type="text" name="Owner" /><br />
	Address <input type="text" name="Address" /><br />
	Phone <input type="text" name="Phone" /><br />
	Email <input type="text" name="Email" /><br />
	Website <input type="text" name="Website" /><br />
	
	<h3>Please check the ones you sell</h3>
	<input type="checkbox" name="Beef" /> Beef<br />
	<input type="checkbox" name="Pork" /> Pork<br />
	<input type="checkbox" name="Chicken" /> Chicken<br />
	<input type="checkbox" name="Organic" /> Organic<br />
	
	<h3>Add a description of your farm</h3>
	<textarea name="desc" cols="40" rows="10">
		No more than 1000 characters
	</textarea><br>
	<input type="submit" value = "Submit"/>
</form>