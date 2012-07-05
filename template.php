<html>
	<head>
		<title>MeatSuite</title>
		<link rel="stylesheet" href="meatsuite.css" />
	</head>
	
	<body>
	<div class="Container">
		<div id="Headers">
			<h1>Welcome To MeatSuite</h1>
			<h2>
				<?php
					if ($pageHeader == 'Profile'){
						$desc = mysql_query("SELECT * FROM farms WHERE id='".$_GET['id']."'");
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

		
		<?php include 'Menu.php'; ?>
		
		<div class="Paragraph">
			<?php include $pageFile; ?>
			<br style= "clear: both;"/>
		</div>	
		<footer style= "background-color:#b82820;">
			<img id ="Tompkins" src="http://ccetompkins.org/sites/all/themes/ccetompkins/images/logo.jpg" />
		</footer>
	</div>	
	</body>

</html>