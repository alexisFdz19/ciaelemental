<div id="map" style="width: 600px; height: 500px"></div>
<script>


    function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map<?php echo $value["idR"] ?>'), {
            zoom: 4,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }


</script>