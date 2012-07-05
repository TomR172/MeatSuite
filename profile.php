<?php
	
	$desc = query("SELECT * FROM farms WHERE FarmName='".$_GET['farm']."'");
	$row = mysql_fetch_array($desc);?>
	
	<h2 id="ShopName">Owner: <?php echo $row['owner']; ?> </h2>
	<!--<h2 id="ShopName" class ="under"><?php echo $row['owner']; ?> </h2>-->
<div id="profileTable">
	<table border="1">
		<tr>
			<th>Address</th>
			<td><?php echo $row['address']; ?></td>
		</tr>
		<tr>
			<th>Phone Number</th>
			<td><?php echo $row['phone']; ?></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><?php echo $row['email']; ?></td>
		</tr>
		<tr>
			<th>Website</th>
			<td><?php echo $row['website']; ?></td>
		</tr>
	</table>
</div>
<p>
	<?php 
		if (isset ($row['description'])){
			echo $row['description'];
		}
		else{
			echo 'No description available.';
		}
	?> 
</p>