<?php
if (!loggedin()) {
    ?>
    <form class="form-vertical" action="index.php?page=admin" method ="post"
          style="padding-top:10px;">
        <fieldset>
            <legend>Log in:</legend>
            <div class="control-group <?php echo isset($_POST['user']) && $_POST['user']!=USER ? 'error' : '' ?>">
                <label class="control-label" > </label>
                <div class="controls">
                    Username<br>
                    <input id="user" type="text" name="user" 
                           value= <?php echo isset($_POST['user']) ? $_POST['user'] : '' ?>
                           >   

                    <?php if (isset($_POST['user']) && $_POST['user']!=USER) : ?>
                        <br><span class="help-inline">Please enter your name</span>                            
                    <?php endif; ?>         

                </div>
            </div>

            <div class="control-group <?php echo isset($_POST['password']) && $_POST['password']!=PASS ? 'error' : '' ?>">
                <label class="control-label" > </label>
                <div class="controls">
                    Password<br>
                    <input id="password" type="password" name="password">  
                    <?php if (isset($_POST['password']) && $_POST['password']!=PASS) : ?>
                        <br><span class="help-inline">Incorrect password</span>                            
                    <?php endif; ?>           
                </div>
            </div>

            <div class="form-actions">
                <input class="btn btn-inverse" type="submit" value = "Submit"/>
            </div>
        </fieldset>
    </form>
<?php
}
else {
    ?>
    <h2>Welcome, Matt!</h2>;
    <?php
}
?>