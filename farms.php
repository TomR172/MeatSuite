<html>
<h3 class="title" style="margin-bottom:5px;">Search for Farms</h3>
	<div id="bar">
	<form method="get" action="index.php">
		<input type = "hidden" name = "page" value = "farms">
        <input type="text" name="search" size="30" maxlength="50"><input type="submit" value="Go">
		<br><br>
		<input type="submit" value = "Beef" name = "Beef"/>
		<input type="submit" value = "Pork" name = "Pork"/>
		<input type="submit" value = "Chicken" name = "Chicken" />
		<input type="submit" value = "Organic" name = "Organic"/>
	</form>
	</div>
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


		
		<?php if(!empty($_POST)) {  
				$row = query("SELECT * FROM farms WHERE search=".$_GET['search']."");
			}
		?>
		
		<?php while($row = mysql_fetch_array($result)){?>
			<tr>
				<td class="farm"> 
					<a href="index.php?page=profile&id=<?php echo $row['id'] ?>" >
					<?php echo $row['FarmName'] ?> 
					</a>
				</td>
				<td> <?php echo $row['owner'] ?></td>
				<td> <?php echo $row['address'] ?></td>
				<td> <?php echo $row['phone'] ?></td>
				<td> <?php echo $row['email'] ?></td>
				<td> <a class = "link" href = "<?php echo $row['website'] ?>"> <?php echo $row['website'] ?> </a> </td>
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