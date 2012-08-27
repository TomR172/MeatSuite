<?php if (!User::loggedIn()) : ?>
    <div class="row">
        <div class="span5 offset3">
            <form class="form-vertical" action="index.php?script=login" method="post"
                  style="padding-top:10px;">
                <div class="control-group <?php echo isset($_POST['user']) && $_POST['user']!=USER ? 'error' : '' ?>">
                    <label class="control-label" > </label>
                    <div class="controls">
                        Username<br>
                        <input id="user" type="text" class="span5" name="user" 
                               value= <?php echo isset($_POST['user']) ? $_POST['user'] : '' ?>
                               >   
                    </div>
                </div>

                <div class="control-group <?php echo isset($_POST['password']) && $_POST['password']!=PASS ? 'error' : '' ?>">
                    <label class="control-label" > </label>
                    <div class="controls">
                        Password<br>
                        <input id="password" type="password" name="password" class="span5">  
                    </div>
                </div>

                <div class="form-actions">
                    <input class="btn btn-primary" type="submit" value="Submit"/>
                </div>
            </form>
        </div>
    </div>
<?php else : ?>
    <div class="alert alert-error">
        You are already logged in.
    </div>
<?php endif ?>