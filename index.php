<?php 
	error_reporting(E_ALL);
        ini_set('display_errors', '1');
        
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
            "commonCattleBreeds" => array(
                "header" => "Common Cattle Breeds"
            ),
			"farms" => array(
				"header" => "Farms"
			), 
			"signup" => array (
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