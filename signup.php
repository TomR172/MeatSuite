<?php
if(!empty($_POST)) {
    $values = $_POST;
    
    if(isset($_POST['beef'])) {
        $values['beef'] = 1;
    } else {
        $values['beef'] = 0;
    }
    if(isset($_POST['pork'])) {
        $values['pork'] = 1;
    } else {
        $values['pork'] = 0;
    }
    if(isset($_POST['Chicken'])) {
        $values['chicken'] = 1;
    } else {
        $values['chicken'] = 0;
    }
    if(isset($_POST['Organic'])) {
        $values['organic'] = 1;
    } else {
        $values['organic'] = 0;
    }

    $insert_id = insert('farms', $values);
    
    if(insert('farms', $values)) {
        echo "You've been signed up!  View Your profile <a href='?page=profile&id=".$insert_id."'>here</a>.";
    } else {
        echo "You could not be signed up";
    }
} else {
    echo "You have not be signed up yet.";
}
?>

<h3>Sign up here</h3>
<form class="Register" action="index.php?page=signup" method ="post">
	Farm <input type="text" name="FarmName" /><br />
	Owner <input type="text" name="owner" /><br />
	Address <input type="text" name="address" /><br />
	Phone <input type="text" name="phone" /><br />
	Email <input type="text" name="email" /><br />
	Website <input type="text" name="website" /><br />
	
	<h3>Please check the ones you sell</h3>
	<input type="checkbox" name="beef" /> Beef<br />
	<input type="checkbox" name="pork" /> Pork<br />
	<input type="checkbox" name="chicken" /> Chicken<br />
	<input type="checkbox" name="organic" /> Organic<br />
	
	<h3>Add a description of your farm</h3>
	<textarea name="description" cols="40" rows="10">
		No more than 1000 characters
	</textarea><br>
	<input type="submit" value = "Submit"/>
</form>