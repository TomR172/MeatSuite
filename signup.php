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
    if(isset($_POST['chicken'])) {
        $values['chicken'] = 1;
    } else {
        $values['chicken'] = 0;
    }
    if(isset($_POST['organic'])) {
        $values['organic'] = 1;
    } else {
        $values['organic'] = 0;
    }

    $insert_id = insert('farms', $values);
    
  /*  if(insert('farms', $values)) {*/
        echo "You've been signed up!  View Your profile <a href='?page=profile&id=".$insert_id."'>here</a>.";
        header('Location: index.php?page=profile&id='.$insert_id);
   /* } else {
        echo "You could not be signed up";
    }*/
} else {
    echo "You have not be signed up yet.";
}
?>

<form class="Register" action="index.php?page=signup" method ="post"
      style="padding-top:10px;">
    <div class="container-fluid">
    	<div class="row" >
		<div class="span4 offset2">
                    <h3 style="padding-bottom:10px;">Sign up here</h3>
                    Farm <br>
                    <input type="text" name="FarmName" /><br />
                    Owner <br>
                    <input type="text" name="owner" /><br />
                    Address <br>
                    <input type="text" name="address" /><br />
                    City/State/Zipcode <br>
                    <input type="text" name="csz" /><br />
                    Phone <br>
                    <input type="text" name="phone" /><br />
                    Email <br>
                    <input type="text" name="email" /><br />
                    Website <br>
                    <input type="text" name="website" /><br />
                    <br>
                    <input class="btn btn-inverse" type="submit" value = "Submit"/>
                </div>
		<div class="span4">
                    <h3 style="padding-bottom:10px;">Please check the ones you sell</h3>
                    <input type="checkbox" name="beef" /> Beef<br />
                    <input type="checkbox" name="pork" /> Pork<br />
                    <input type="checkbox" name="chicken" /> Chicken<br />
                    <input type="checkbox" name="organic" /> Organic<br />
                <!---</div>
		<div class="span4">--->
                    <h3 style="padding-bottom:10px;">Add a description of your farm</h3>
                    <textarea style="width:265px;"name="description" cols="350" rows="8">
                    </textarea>
                    <h6>1000 characters max</h6>
                </div>
        </div>
    </div>
</form>