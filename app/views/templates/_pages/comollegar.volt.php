<?php $buybox_script = true; ?>
<main class="container">
    <div class="block breadcrumb u-cf">
	<nav>
		<ul class="nav nav--inline">
			<?php $v2913504734490919761iterator = $t->breadcrumbs; $v2913504734490919761incr = 0; $v2913504734490919761loop = new stdClass(); $v2913504734490919761loop->self = &$v2913504734490919761loop; $v2913504734490919761loop->length = count($v2913504734490919761iterator); $v2913504734490919761loop->index = 1; $v2913504734490919761loop->index0 = 1; $v2913504734490919761loop->revindex = $v2913504734490919761loop->length; $v2913504734490919761loop->revindex0 = $v2913504734490919761loop->length - 1; ?><?php foreach ($v2913504734490919761iterator as $b) { ?><?php $v2913504734490919761loop->first = ($v2913504734490919761incr == 0); $v2913504734490919761loop->index = $v2913504734490919761incr + 1; $v2913504734490919761loop->index0 = $v2913504734490919761incr; $v2913504734490919761loop->revindex = $v2913504734490919761loop->length - $v2913504734490919761incr; $v2913504734490919761loop->revindex0 = $v2913504734490919761loop->length - ($v2913504734490919761incr + 1); $v2913504734490919761loop->last = ($v2913504734490919761incr == ($v2913504734490919761loop->length - 1)); ?>
				<li><a href="<?= $this->url->get($lang . '/' . $b->href) ?>"><?php if ($v2913504734490919761loop->first) { ?><i class="icon icon-home"></i><?php } ?> <?= $b->text ?></a></li>
			<?php $v2913504734490919761incr++; } ?>
		</ul>
	</nav>
</div>
    <div class="row">
        <section class="two-thirds column" id="use">
            <h1><?= $t->introduccion->h ?></h1>
                <div class="separator u-cf">
<svg viewBox="0 0 635.3 29.3"><defs><style>.a{fill:#fb0;}</style></defs><title>pleca</title><path class="a" d="M630.4,4.4H4.9V7.7H281.3A9.5,9.5,0,0,0,300.2,9a17.4,17.4,0,0,0,34.6,0,9.5,9.5,0,0,0,18.9-1.4H630.4Zm-340.7,11-1-.5-1.3-.8L286.1,13,285,11.7l-.8-1.3-.5-1V9h.4l1,.5,1.3.8,1.3,1.1,1.1,1.3.8,1.3.5,1v.4Zm8.2-6-.5,1-.8,1.3L295.5,13l-1.3,1.1-1.3.8-1,.5h-.4v-.4l.5-1,.8-1.3,1.1-1.3,1.3-1.1,1.3-.8,1-.5h.4Zm17.7,12.4-1.9-.8-2.3-1.5a21.4,21.4,0,0,1-2.3-2,21.2,21.2,0,0,1-2-2.3,17.9,17.9,0,0,1-1.5-2.3,13.9,13.9,0,0,1-.8-1.9l-.2-.8.8.2,1.9.8,2.3,1.5a21.2,21.2,0,0,1,2.3,2,21.5,21.5,0,0,1,2,2.3,18,18,0,0,1,1.5,2.3,14.1,14.1,0,0,1,.8,1.9l.2.8Zm14.9-10.9a13.9,13.9,0,0,1-.8,1.9,17.9,17.9,0,0,1-1.5,2.3,21.2,21.2,0,0,1-2,2.3,21.5,21.5,0,0,1-2.3,2L321.4,21l-1.9.8-.8.2.2-.8a14.1,14.1,0,0,1,.8-1.9,18.1,18.1,0,0,1,1.5-2.3,21.5,21.5,0,0,1,2-2.3,21.1,21.1,0,0,1,2.3-2l2.3-1.5,1.9-.8.8-.2Zm12.7,4.4-1-.5-1.3-.8L339.6,13l-1.1-1.3-.8-1.3-.5-1V9h.4l1,.5,1.3.8,1.3,1.1,1.1,1.3L343,14l.5,1v.4Zm8.2-6-.5,1-.8,1.3L349,13l-1.3,1.1-1.3.8-1,.5h-.4v-.4l.5-1,.8-1.3,1.1-1.3,1.3-1.1,1.3-.8,1-.5h.4Z"/></svg>
</div>
            
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

    <?php foreach ($t->introduccion->parrafos as $p) { ?>
        <p>
            <?= $p ?>
        </p>
    <?php } ?>
    <div class="block">
    	<div class="seven columns">
            <h5><?= $t->tiempos->title ?></h5>
            <span><?= $t->tiempos->subtitle ?></span>
            <ul>
                <?php foreach ($t->tiempos->recorridos as $recorrido) { ?>
                    <li><?= $recorrido ?></li>
                <?php } ?>
            </ul>
        </div>
    	<div class="five columns"><a href="<?= $this->url->get($lang . '/' . $t->tiempos->img->href) ?>"> <img class="img--responsive bus" src="<?= $this->url->get($t->tiempos->img->src) ?>" alt=""> </a></div>
    </div>

        </section>
        <aside class="one-third column">
            <div id="buybox">
                <?php if (!$mobile) { ?>
                    
                        <?php $banner = true; ?>
                        <div  class="buybox block u-pull-right">
    <?php if (!$mobile) { ?>
	<div class="banner text--align-center">
	<a href="#precio">
	    <h4><?= $g->buybox->banner->title ?></h4>
	    <p><?= $g->buybox->banner->text ?></p>
	</a>
</div>
    <?php } ?>
	<div id="precio" class="buybox--block row">
		<div>
			<span class="amount amount--regular"><small><s><?= $g->buybox->regular ?></s></small></span><var class="amount amount--regular amount-linetrought u-pull-right" id="regular"><s><i class="loading_dots"><i></i><i></i><i></i></i></s></var>
		</div>
		<hr>
		<div>
			<span class="amount amount--online"><small><?= $g->buybox->online ?></small></span><var class="amount amount--online u-pull-right" id="onlineBase"><i class="loading_dots"><i></i><i></i><i></i></i></var>
		</div>
		<hr>
		
		<?php if (!isset($notransportation)) { ?>
		<div>
			<label>
				
				<span class="amount amount--regular"><?= $g->buybox->transportacion ?></span>
				<div class="input-container">
					<input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle variants" value="T">
					<label for="checkbox1" class="checkbox-label" data-off="\e027" data-on="\e027"></label>
				</div>
			</label>
			<var class="amount amount--regular u-pull-right" id="T"><i class="loading_dots"><i></i><i></i><i></i></i></var>
		</div>
		<hr>
        <?php } ?>
		
		
		<div id="optionsCart">
				<div class="">
					<select id="location" class="geo" style="display: none;"></select>
				</div>
				<i class="loading_dots"><i></i><i></i><i></i></i>
		</div>
		<div class="text--align-center">
			<span class="amount amount--online">Total :</span>
			<var class="amount amount--online digit" id="online"><i class="loading_dots"><i></i><i></i><i></i></i></var>
		</div>
		<div class="variants"></div>
		<button class="button button--block button-first-pay" id="addProduct"><?= $g->buybox->button ?></button>
	</div>
	<?php if ($mobile) { ?>
		<div class="savings savings--tab u-cf">
	<div class="savings--header text--align-center">
		<h5><?= $g->discounts->tabs->title ?></h5>
	</div>
	<div class="flex--wrap" data-items="3">
		<?php foreach ($g->discounts->tabs->items as $discount) { ?>
		<div class="flex--item savings--item text--align-center">
			<button class="toModal button button--square" href="#modals" data-modal="<?= $this->url->get('helpers/discounts') ?>" data-toggle="modal" data-json = '{"discounts" : <?= json_encode($g->discounts->tabs) ?> }'><?= $discount->title ?></button>
			
		</div>
        <?php } ?>
	</div>
</div>
	<?php } ?>
	<!-- <p><small>*Precios sujetos a cambios sin previo aviso. Niños de 5-11 años pagan -50% e infantes menores de 5 años entran gratis. Aplican restricciones</small></p> -->
</div>
                    
                    <div class="savings savings--tab u-cf">
	<div class="savings--header text--align-center">
		<h5><?= $g->discounts->tabs->title ?></h5>
	</div>
	<div class="flex--wrap" data-items="3">
		<?php foreach ($g->discounts->tabs->items as $discount) { ?>
		<div class="flex--item savings--item text--align-center">
			<button class="toModal button button--square" href="#modals" data-modal="<?= $this->url->get('helpers/discounts') ?>" data-toggle="modal" data-json = '{"discounts" : <?= json_encode($g->discounts->tabs) ?> }'><?= $discount->title ?></button>
			
		</div>
        <?php } ?>
	</div>
</div>
                    <?php if ($lang == 'es') { ?>
                    <div class="block">
                        <button class="button button--block button-ghost toModal" href="#modals" data-json='{"msi" : <?= json_encode($g->msi->modal) ?> }' data-modal="<?= $this->url->get('helpers/msi') ?>" data-toggle="modal">Ver formas de pago</button>
                    </div>
                    <?php } ?>
                <?php } ?>
                <div class="separator u-cf">
<svg viewBox="0 0 635.3 29.3"><defs><style>.a{fill:#fb0;}</style></defs><title>pleca</title><path class="a" d="M630.4,4.4H4.9V7.7H281.3A9.5,9.5,0,0,0,300.2,9a17.4,17.4,0,0,0,34.6,0,9.5,9.5,0,0,0,18.9-1.4H630.4Zm-340.7,11-1-.5-1.3-.8L286.1,13,285,11.7l-.8-1.3-.5-1V9h.4l1,.5,1.3.8,1.3,1.1,1.1,1.3.8,1.3.5,1v.4Zm8.2-6-.5,1-.8,1.3L295.5,13l-1.3,1.1-1.3.8-1,.5h-.4v-.4l.5-1,.8-1.3,1.1-1.3,1.3-1.1,1.3-.8,1-.5h.4Zm17.7,12.4-1.9-.8-2.3-1.5a21.4,21.4,0,0,1-2.3-2,21.2,21.2,0,0,1-2-2.3,17.9,17.9,0,0,1-1.5-2.3,13.9,13.9,0,0,1-.8-1.9l-.2-.8.8.2,1.9.8,2.3,1.5a21.2,21.2,0,0,1,2.3,2,21.5,21.5,0,0,1,2,2.3,18,18,0,0,1,1.5,2.3,14.1,14.1,0,0,1,.8,1.9l.2.8Zm14.9-10.9a13.9,13.9,0,0,1-.8,1.9,17.9,17.9,0,0,1-1.5,2.3,21.2,21.2,0,0,1-2,2.3,21.5,21.5,0,0,1-2.3,2L321.4,21l-1.9.8-.8.2.2-.8a14.1,14.1,0,0,1,.8-1.9,18.1,18.1,0,0,1,1.5-2.3,21.5,21.5,0,0,1,2-2.3,21.1,21.1,0,0,1,2.3-2l2.3-1.5,1.9-.8.8-.2Zm12.7,4.4-1-.5-1.3-.8L339.6,13l-1.1-1.3-.8-1.3-.5-1V9h.4l1,.5,1.3.8,1.3,1.1,1.1,1.3L343,14l.5,1v.4Zm8.2-6-.5,1-.8,1.3L349,13l-1.3,1.1-1.3.8-1,.5h-.4v-.4l.5-1,.8-1.3,1.1-1.3,1.3-1.1,1.3-.8,1-.5h.4Z"/></svg>
</div>
                <div class="why u-cf text--align-center">
	<h4><?= $g->why->title ?></h4>
	<!-- <button class="button" id="toModal" data-target="#modals"  data-modal="modal.php" data-toggle="modal">adsad</button > -->
	<a id="trigger-por-que-reservar" class="toModal" href="#modals" data-modal="<?= $this->url->get('helpers/why') ?>" data-toggle="modal" data-json = '{"why" : <?= json_encode($g->why) ?> }'>
		<div class="flex--wrap" data-items="3">
			<?php foreach ($g->why->benefits as $benefit) { ?>
				<div class="flex--item square">
					<img src="<?= $this->url->get($benefit->img) ?>" alt="">
					<span><?= $benefit->name ?></span>
				</div>
			<?php } ?>
		</div>
	</a>
</div>
            </div>
        </aside>
        <div class="container block--msi u-cf">
	<?php if (isset($g->msi->modal)) { ?>
	<a class="toModal row" href="#modals" data-json='{"msi" : <?= json_encode($g->msi->modal) ?> }' data-modal="<?= $this->url->get('helpers/msi') ?>" data-toggle="modal">
	<?php } ?>
		<div class="flex--wrap text--align-center" data-items="2">
			<div class="flex--item ">
				<h4><?= $g->msi->title ?></h4>
			</div>
			<div class="flex--item">
				<?php if (!$mobile) { ?>
					<img class="img--responsive" src="<?php if (($current_page != '/' . $lang . '/')) { ?><?= $this->url->get('img/msi.png') ?><?php } else { ?><?= $this->url->get('img/msi_02.png') ?><?php } ?>" alt="">
				<?php } else { ?>
					<img class="img--responsive" src="<?php if (($current_page != '/' . $lang . '/')) { ?><?= $this->url->get('img/msi-mobile.png') ?><?php } else { ?><?= $this->url->get('img/msi-mobile_02.png') ?><?php } ?>" alt="">
				<?php } ?>
				<?php if (isset($g->msi->text)) { ?>
					<p><small><?= $g->msi->text ?></small></p>
				<?php } ?>
			</div>
		</div>
	<?php if (isset($g->msi->modal)) { ?>
	</a>
	<?php } ?>
</div>
    </div>
</main>