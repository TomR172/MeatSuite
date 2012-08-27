$(document).ready(function() {
    geocoder = new google.maps.Geocoder();

    var loc = geocoder.geocode({
        "address": "1600 Amphitheatre Parkway, Mountain View, CA"
    },
    function(data, status)
    {
        console.log(data);
    });

    var mapOptions = {
        center: new google.maps.LatLng(42.4406, -76.4969),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.HYBRID 
    };
        
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
                
    geocoder = new google.maps.Geocoder();

    geocoder.geocode( {
        'address': '615 Willow Ave Ithaca NY 14850'
    },
    function(data, status) {
        mapLocation = data[0].geometry.location;
        var marker = new google.maps.Marker({
            position: mapLocation, 
            map: map
        });
                
        map.setCenter(marker.getPosition());

    });
});
