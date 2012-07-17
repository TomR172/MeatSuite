<?php
if(!empty($_POST)) {
    $values = $_POST;
    $error = false;
    $errors = array();

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

    foreach($values as $key => $value) {
        if(trim($value) == "") {
            $error = true;
            $errors[$key] = "Please enter the ".$key;
        }
    }
    
    if(!$error) {    
        $insert_id = insert('farms', $values);
    }
        
    if(isset($insert_id) && $insert_id) {
        //echo 'You have been signed up';
        header('Location: index.php?page=profile&id=' . $insert_id);
    } else {
        $error_message = "You could not be signed up";
    }
}
?>

<form class="form-vertical" action="index.php?page=signup" method ="post"
      style="padding-top:10px;">
    <div class="container-fluid">
        <?php if(isset($error_message)) : ?>
            <div class="row">
                <div class="span12">
                    <div class="alert alert-error">
                        <?php echo $error_message; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row" >
            <div class="span4 offset2">
                <fieldset>
                    <legend>Sign up here</legend>
                    <div class="control-group <?php echo isset($errors['FarmName']) ? 'error' : '' ?>">
                        <label class="control-label" for="FarmName">Farm</label>
                        <div class="controls">
                            <input id="FarmName" type="text" name="FarmName" />
                            <?php if(isset($errors['FarmName'])) : ?>
                                <span class="help-inline"><?php echo $errors['FarmName']; ?></span>                            
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="control-group <?php echo isset($errors['owner']) ? 'error' : '' ?>">
                        <label class="control-label" for="owner">Owner</label>
                        <div class="controls">
                            <input id="owner" type="text" name="owner" />
                            <?php if(isset($errors['owner'])) : ?>
                                <span class="help-inline"><?php echo $errors['owner']; ?></span>                            
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="Address">Address</label>
                        <div class="controls">
                            <input id="Address" type="text" name="Address" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="csz">City/State/Zipcode</label>
                        <div class="controls">
                            <input id="csz" type="text" name="csz" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="phone">Phone</label>
                        <div class="controls">
                            <input id="Phone" type="text" name="phone" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input id="email" type="text" name="email" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="website">Website</label>
                        <div class="controls">
                            <input id="website" type="text" name="website" />
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="span4">
                <fieldset>
                    <legend>Please check all that apply</legend>
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox" name="beef">
                                Beef
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="pork">
                                Pork
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chicken">
                                Chicken
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="organic">
                                Organic
                            </label>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Add a description of your farm</legend>
                    <div class="control-group">
                        <div class="controls">                    
                            <textarea style="width:265px;"name="description" cols="350" rows="8"></textarea>
                            <p class="help-block">1000 characters max</p>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="span8 offset2">
                <div class="form-actions">
                    <input class="btn btn-inverse" type="submit" value = "Submit"/>
                </div>
            </div>
        </div>
    </div>
</form>