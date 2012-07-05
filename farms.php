<html>
<?php
	$result = query("SELECT * FROM farms");
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
			<th>Beef</th>
			<th>Pork</th>
			<th>Chicken</th>
		</tr>


		
		
		<?php while($row = mysql_fetch_array($result)){?>
			<tr>
				<td class="farm"> 
					<a href="index.php?page=profile&farm=<?php echo $row['FarmName'] ?>" >
					<?php echo $row['FarmName'] ?> 
					</a>
				</td>
				<td> <?php echo $row['owner'] ?></td>
				<td> <?php echo $row['address'] ?></td>
				<td> <?php echo $row['phone'] ?></td>
				<td> <?php echo $row['email'] ?></td>
				<td> <?php echo $row['website'] ?></td>
				<td> <?php 
					if ($row['organic']==0){
						echo 'No';
					}
					else {
						echo 'Yes';
					}	
				?></td>				
				<td> <?php 
					if ($row['beef']==0){
						echo 'No';
					}
					else {
						echo 'Yes';
					}	
				?></td>				
				<td> <?php 
					if ($row['pork']==0){
						echo 'No';
					}
					else {
						echo 'Yes';
					}	
				?></td>				
				<td> <?php 
					if ($row['chicken']==0){
						echo 'No';
					}
					else {
						echo 'Yes';
					}	
				?></td>
			</tr>
		<?php } ?>
	</table>
	
	<?php mysql_close($con); ?>
</html>