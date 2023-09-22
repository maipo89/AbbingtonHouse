<?php $title = get_sub_field('title');
      $text = get_sub_field('text');
      $goole_map = get_sub_field("google_map")
?>

<div class="map-text">
    <h2><?php echo($title) ?></h2>
    <div class="map-text__map">
        <div id="map"></div>
        <div class="map-text__map__container">
            <div class="map-text__map__text">
                <p><?php echo($text) ?></p>
            </div>
        </div>
    </div>
</div>

<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMqSLoDfBqzu0bVuT1USXebfMK83OX42M&callback=initMap&v=weekly"
      defer
></script>

<script>

    // Initialize and add the map
    function initMap() {
    // The location of Uluru
    const uluru = { lat: <?php echo $goole_map['lat'] ?>, lng: <?php echo $goole_map['lng'] ?> };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: <?php echo $goole_map['zoom'] ?>,
        center: uluru,
        styles: [
                    {
                        "featureType": "all",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "color": "#878787"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f9f5ed"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#c9c9c9"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#aee0f4"
                            }
                        ]
                    }
                ],
    });

    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
    }

    window.initMap = initMap;

</script>