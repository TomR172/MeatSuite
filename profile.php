<img class ="ImageCow" src="http://static.swap-bot.com/images/swaps/55393/swap.jpg" />
<p>Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, `and what is the use of a book,' thought Alice `without pictures or conversation?' </p>
<p><?php
	echo $_GET['farm'];
	/*$desc = mysql_query("SELECT * FROM farms WHERE FarmName='".$_GET['farm']."'");*/
	echo "SELECT description FROM farms WHERE FarmName='".$_GET['farm']."'";
	
	$desc = mysql_query("SELECT * FROM farms WHERE FirstName='Butcher Shop'");
	if ($desc) {echo "Yes";} else {echo mysql_error();}
	echo $desc;
	$row = mysql_fetch_array($desc);
	echo $row['description'];
?></p>