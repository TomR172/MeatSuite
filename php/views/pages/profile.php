<div class="container-fluid">
    <?php
    $desc = Database::query("SELECT * FROM farms WHERE id=" . Security::sanitizeForDatabase($_GET['id']) . "");
    $farm = mysql_fetch_array($desc);
    $farm = Security::sanitizeForFrontend($farm);
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
            <h3><?php echo $farm['address']; ?> </h3>
            <h3><?php echo $farm['csz']; ?> </h3>
            <h3><?php echo $farm['phone']; ?></h3>
            <h3><?php echo $farm['email']; ?></h3>
            <h3><?php echo $farm['website']; ?></h3>
            <br>

            <p style="border:1px solid black; padding: 5px 5px 5px 5px;">
                <?php
                if(isset($farm['description'])) {
                    echo $farm['description'];
                } else {
                    echo 'No description available.';
                }
                ?> 
            </p>

            <h4>Categories:</h4>
            <?php include('php/views/partials/_farmCategories.php'); ?>

        </div>       
        <div class="span8">
            <img src="http://www.lisaalber.com/images/Butcher-shop.jpg" style =" margin: 5px 5px 5px 5px;" />
            <div id="map_canvas" style="width:75%; height:60%"></div>
        </div>
    </div>
</div>