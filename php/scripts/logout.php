<?php

$_SESSION['user'] = null;

$_SESSION['flashes']['success'] = "You are now logged out.";

header("Location: index.php");