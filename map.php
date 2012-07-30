
<script type="text/javascript">
    function initialize() {
        
        geocoder = new google.maps.Geocoder();

        var loc = geocoder.geocode("1600 Amphitheatre Parkway, Mountain View, CA");

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

<div id="map_canvas" style="width:100%; height:100%"></div>