<html>
<?php
	$con = mysql_connect("localhost", "root");
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("db", $con);

	$result = mysql_query("SELECT * FROM farms");
?>
	<table border='1'>
		<tr>
			<th>Farm</th>
			<th>Owner</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Website</th>
			<th>Organic</th>
			<th>Products</th>
		</tr>

		<?php while($row = mysql_fetch_array($result)){?>
			<tr>
				<td> <!---id = "farm"---> <?php echo $row['Farm'] ?> </td>
				<td> <?php echo $row['Owner'] ?></td>
				<td> <?php echo $row['Address'] ?></td>
				<td> <?php echo $row['Phone'] ?></td>
				<td> <?php echo $row['Email'] ?></td>
				<td> <?php echo $row['Website'] ?></td>
				<td> <?php echo $row['Organic'] ?></td>
				<td> <?php echo $row['Products'] ?></td>
			</tr>
		<?php } ?>
	</table>
	
	<?php mysql_close($con); ?>
</html>