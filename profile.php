<div class="container-fluid">
    <?php
        $desc = query("SELECT * FROM farms WHERE id=".db_sanitize($_GET['id'])."");
        $row = mysql_fetch_array($desc);
    ?>
    <h3><?php echo $row['address']; ?> </h3>
    <h3><?php echo $row['csz']; ?> </h3>
    <h3><?php echo $row['phone']; ?></h3>
    <h3><?php echo $row['email']; ?></h3>
    <h3><?php echo $row['website']; ?></h3>
    <br>
    <div class="row-fluid">
        <div class="span4">
            <p style="border:1px solid black; padding: 5px 5px 5px 5px;">
                <?php 
                    if (isset ($row['description'])){
                        echo $row['description'];
                    }
                    else{
                        echo 'No description available.';
                    }
                ?> 
            </p>
            
            <h4>Organic:  
             <?php if($row['organic']==1)
                        echo 'yes';
                   else
                     echo 'no';
             ?>
            </h4>
            <h4>Beef:  
             <?php if($row['beef']==1)
                        echo 'yes';
                   else
                     echo 'no';
             ?>
            </h4>
             <h4>Pork:  
             <?php if($row['pork']==1)
                        echo 'yes';
                   else
                     echo 'no';
             ?>
            </h4>            
            <h4>Chicken:  
             <?php if($row['chicken']==1)
                        echo 'yes';
                   else
                     echo 'no';
             ?>
            </h4>
        </div>
        <div class="span4">
            
        </div>
    </div>
</div>