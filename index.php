<?php

session_start();

include('php/config.php');

include('php/lib/Database.php');
include('php/lib/User.php');
include('php/lib/Security.php');
include('php/lib/Routing.php');
include('php/lib/Page.php');

if(isset($_GET['script'])) {
    include("php/scripts/" . Security::sanitizeForFrontend($_GET['script']) . ".php");
} else {
    Routing::initalize();
    include("php/views/template.php");
    unset($_SESSION['flashes']);
}