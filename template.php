<html>
	<head>
		<title>MeatSuite</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		    <style>
				body {
					padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
				}
			</style>
	</head>
	
	<body>
		<?php include 'Menu.php'; ?>

		
		<div class="container">
			<div id="Headers">
				<h2>
					<?php
						if ($pageHeader == 'Profile'){
							$desc = query("SELECT * FROM farms WHERE id='".db_sanitize($_GET['id'])."'");
							$row = mysql_fetch_array($desc);
							echo $row['FarmName'];
						}
						else{
							echo $pageHeader;
						}
					?>
				</h2>
				<br style= "clear: both;"/>
			</div>
			<?php include $pageFile; ?>
			<br style= "clear: both;"/>
		</div>	
		
		<footer style= "background-color:#b82820;">
			<img id ="Tompkins" src="http://ccetompkins.org/sites/all/themes/ccetompkins/images/logo.jpg" />
		</footer>
	</body>

</html>