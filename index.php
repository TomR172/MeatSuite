<?php 
	if (isset($_GET ["page"])){
		$page = $_GET ["page"];
	}
	else{
		$page = "Home";
	}
	if (isset($_GET ["pageFile"])){
		$pageFile = $_GET ["pageFile"] . ".php";
	}
	else{
		$pageFile = "home.php";
	}
	include "template.php";
	?>