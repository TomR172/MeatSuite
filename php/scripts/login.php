<?php

if(isset($_POST['user']) && $_POST['user'] == USER
    && isset($_POST['password']) && $_POST['password'] == PASS) {
        $_SESSION['user'] = USER;
        
        $_SESSION['flashes']['success'] = "You are now logged in.";
        
        header("Location: index.php");
} else {
    $_SESSION['flashes']['error'] = "You could not be logged in.";
    
    header("Location: index.php?page=login");
}
