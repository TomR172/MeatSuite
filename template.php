<html>
	<head>
		<title>MeatSuite</title>
		<link rel="stylesheet" href="meatsuite.css" />
	</head>
	
	<body>
	<div class="Container">
		<div id="Headers">
			<h1>Welcome To MeatSuite</h1>
			<h2><?php echo $pageHeader ?></h2>
			<br style= "clear: both;"/>
		</div>
		
		<?php include 'Menu.php'; ?>
		
		<div class="Paragraph">
			<?php include $pageFile; ?>
			<br style= "clear: both;"/>
		</div>
	</div>
	</body>
	
</html>