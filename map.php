
<script type="text/javascript">
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(42.4406, -76.4969),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.HYBRID 
        };
        
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
                
        var marker = new google.maps.Marker({
            map: map,
            title: 'Ithaca'
        });
            
        geocoder = new google.maps.Geocoder();

        geocoder.geocode( {'address': '615 Willow Ave Ithaca NY 14850' },
            function(data, status) {
                mapLocation = data[0].geometry.location;
                var marker = new google.maps.Marker({
                    position: mapLocation, 
                    map: map
                });
                
                map.setCenter(marker.getPosition());

            });
            
    }
</script>

<div id="map_canvas" style="width:100%; height:75%"></div>