<?php
	$query = "SELECT * FROM farms WHERE 1";
        
        if(isset($_GET['search']) && trim($_GET['search']) != "") {  
            $query .= " AND farmName LIKE '%".$_GET['search']."%'";
        }
        if(isset($_GET['Beef'])) {  
            $query .= " AND beef=1";
        }
        if(isset($_GET['Pork'])) {  
            $query .= " AND pork=1";
        }
        if(isset($_GET['Chicken'])) {  
            $query .= " AND chicken=1";
        }
        if(isset($_GET['Organic'])) {  
            $query .= " AND organic=1";
        }
        
        echo '<b>Query:</b> '.$query.'<br/><br/>';
        
        $result = query($query);
        
?>
<h3 class="title" style="margin-bottom:5px;">Search for Farms</h3>
<div id="bar">
    <form method="get" action="index.php">
            <input type = "hidden" name = "page" value = "farms">
            <input type="text" name="search" size="30" maxlength="50"><input type="submit" value="Go">
            <br><br>
            <a class="<?php echo count($_GET) == 1 ? 'active' : '' ?>" href="index.php?page=farms">All</a>
            <a class="<?php echo isset($_GET['Beef']) ? 'active' : ''?>" href="index.php?page=farms&Beef=1">Beef</a>
            <a class="<?php echo isset($_GET['Chicken']) ? 'active' : ''?>" href="index.php?page=farms&Chicken=1">Chicken</a>
            <a class="<?php echo isset($_GET['Pork']) ? 'active' : ''?>" href="index.php?page=farms&Pork=1">Pork</a>
            <a class="<?php echo isset($_GET['Organic']) ? 'active' : ''?>" href="index.php?page=farms&Organic=1">Organic</a>
    </form>
    
    <?php if(isset($_GET['search'])) : ?>
        Showing <?php echo mysql_num_rows($result) ?> results for search term "<i><?php echo $_GET['search'] ?></i>". <a href="index.php?page=farms">clear search</a><br/>
    <?php endif ?>
</div>
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