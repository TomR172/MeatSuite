<div class="container-fluid">
    <?php
        $desc = query("SELECT * FROM farms WHERE id=".db_sanitize($_GET['id'])."");
        $row = mysql_fetch_array($desc);
    ?>
    
    <script type="text/javascript">
        function initialize() {

            geocoder = new google.maps.Geocoder();

            //var loc = geocoder.geocode("1600 Amphitheatre Parkway, Mountain View, CA");

            var mapOptions = {
                center: new google.maps.LatLng(42.4406, -76.4969),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.HYBRID 
            };

            var map = new google.maps.Map(document.getElementById("map_canvas"),
                mapOptions);

            var marker = new google.maps.Marker({
                position: loc,
                map: map,
                title: 'Ithaca'
            });

        }
    </script>
    
    

    <div class="row-fluid">
        <div class="span4">
            <h3><?php echo $row['address']; ?> </h3>
            <h3><?php echo $row['csz']; ?> </h3>
            <h3><?php echo $row['phone']; ?></h3>
            <h3><?php echo $row['email']; ?></h3>
            <h3><?php echo $row['website']; ?></h3>
            <br>
            
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
        <div class="span8">
            <img src="http://www.lisaalber.com/images/Butcher-shop.jpg" style =" margin: 5px 5px 5px 5px;" />
            <div id="map_canvas" style="width:75%; height:60%"></div>
        </div>
    </div>
</div>