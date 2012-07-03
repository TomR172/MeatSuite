<?php 
	error_reporting(E_ALL);
        ini_set('display_errors', '1');
        
        $con = mysql_connect("localhost", "root");
	if (!$con) {
		die ('Could not connect: ' . mysql_error());
	}
        
	mysql_select_db("db", $con);
        
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
			"signup" => array (
				"header" => "Sign Up"
			),
			
			"profile" => array (
				"header" => "Profile",
                                "showInMenu" => false
			),
			
			"learnmore" => array (
				"header" => "Learn More"
			),
			
			"description" => array (
				"header" => "Sign Up"
			)
        );
		
        if (isset($_GET ["page"]) && isset($pages[$_GET["page"]])) {
            $currentPage = $_GET["page"];                
        } else {
            $currentPage = "home";
        }
		
        $pageHeader = $pages[$currentPage]["header"];
        $pageFile = $currentPage.".php";                
        
        include "template.php";
	?>