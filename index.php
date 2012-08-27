<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

include('php/config.php');
include('php/functions.php');


if (!empty($_POST)) {
    if (isset($_POST['user']) && $_POST['user'] == USER) {
        if (isset($_POST['password']) && $_POST['password'] == PASS) {
            $_SESSION['user'] = USER;
        }
    }
}

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    $_SESSION['user'] = null;
}


$pages = array(
    "home" => array(
        "header" => "Home"
    ),
    "about" => array(
        "header" => "About"
    ),
    "contactInfo" => array(
        "header" => "Contact Information"
    ),
    "farms" => array(
        "header" => "Farms"
    ),
    "signup" => array(
        "header" => "Sign Up"
    ),
    "profile" => array(
        "header" => "Profile",
        "showInMenu" => false
    ),
    "learnmore" => array(
        "header" => "Learn More"
    ),
    "description" => array(
        "header" => "Sign Up",
        "showInMenu" => false
    ),
    "map" => array(
        "header" => "Map"
    ),
    "admin" => array(
        "header" => "Admin"
    ),
    "edit" => array(
        "header" => "Edit",
        "showInMenu" => false
    )
);

if (isset($_GET ["page"]) && isset($pages[$_GET["page"]])) {
    $currentPage = $_GET["page"];
} else {
    $currentPage = "home";
}

$pageHeader = $pages[$currentPage]["header"];
$pageFile = "php/pages/".$currentPage . ".php";

include "php/template.php";