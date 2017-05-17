<div class="block u-cf">

	<div id="map" style="width:100%;height:500px;"></div>
	<input id="origin-input" class="controls" type="text" placeholder="<?= $t->mapinput ?>">

</div>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARTyuRbHhNojIZedJ2Rivvtw6ZzNOFGzY&libraries=places&callback=initMap"
    async defer></script>
    <script>
function initMap() {

	var origin_place_id = null;
	var destination_place_id = null;
	var travel_mode = google.maps.TravelMode.DRIVING;
	var myLatLng = {lat: 20.994624, lng: -86.858350};

	var locations = [
		["/img/logos/xcaret-c.png", 20.580906, -87.119698,5],
		["/img/logos/xelha-c.png", 20.319339, -87.357812,4],
		["/img/logos/xplor-c.png", 20.591191, -87.125349,3],
		["/img/logos/xenses-c.png", 20.584815, -87.125845,1],
		["/img/logos/xoximilco-c.png", 20.994624, -86.858350,2]
	];

/* Create a map object and specify the DOM element for display */
var map = new google.maps.Map(document.getElementById('map'), {
	center: {lat:20.994263, lng: -86.858371},
	scrollwheel: false,
	zoom: 9,
	mapTypeControl: false
});

 var infowindow = new google.maps.InfoWindow();

	var directionsService = new google.maps.DirectionsService;
	var directionsDisplay = new google.maps.DirectionsRenderer;
	directionsDisplay.setMap(map);

	var origin_input = document.getElementById('origin-input');
	map.controls[google.maps.ControlPosition.TOP_LEFT].push(origin_input);

	var origin_autocomplete = new google.maps.places.Autocomplete(origin_input);
	origin_autocomplete.bindTo('bounds', map);

	function expandViewportToFitPlace(map, place) {
		if (place.geometry.viewport) {
			map.fitBounds(place.geometry.viewport);
		} else {
			map.setCenter(place.geometry.location);
			map.setZoom(17);
		}
	}

	origin_autocomplete.addListener('place_changed', function() {
		var place = origin_autocomplete.getPlace();
		if (!place.geometry) {
			window.alert("Autocomplete's returned place contains no geometry");
			return;
		}
		expandViewportToFitPlace(map, place);

		origin_place_id = place.place_id;
		route(origin_place_id, destination_place_id, travel_mode, directionsService, directionsDisplay);
	});

	destination_place_id = 'ChIJAaiTPh-BTo8RAPOO1Vr90Mk';
    route(origin_place_id, destination_place_id, travel_mode, directionsService, directionsDisplay);

  function route(origin_place_id, destination_place_id, travel_mode, directionsService, directionsDisplay) {
    if (!origin_place_id || !destination_place_id) { return; }
    directionsService.route({
		origin: {'placeId': origin_place_id},
		destination: {'placeId': destination_place_id},
		travelMode: travel_mode
    }, function(response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
		directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  };
        var marker, infoWindow, i;

        for (i = 0; i < locations.length; i++) {
			infoWindow = new google.maps.InfoWindow();

			marker = new google.maps.Marker({
				position : new google.maps.LatLng(locations[i][1], locations[i][2]),
				map : map
			});
			google.maps.event.addListener(marker, 'click', (function (marker, i) {
				return function () {
					infowindow.setContent('<img class="img--responsive" src="' + locations[i][0] + '" alt="">');
					infowindow.open(map, marker);
				}
			})(marker, i));

			infowindow.setContent('<img class="img--responsive" src="' + locations[i][0] + '" alt="">');
			infowindow.open(map, marker);
        }


        map.setOptions({styles: styles['default']});

};


        var styles = {
        	default : [
          {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#38414e'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
          }
        ]
        }

    </script>
