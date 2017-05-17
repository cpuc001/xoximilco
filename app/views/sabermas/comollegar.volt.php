<!DOCTYPE html>
<html lang="<?= $lang ?>">
    <head>
        

    
    





<script> dataLayer = [{
        'idioma': '<?= $lang ?>', 
        'userCurrency': '<?= $moneda[0] ?>', 
        'seccion': '<?= $seccion ?>'
}]; </script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TDHHR4J');</script>
<!-- End Google Tag Manager -->


<meta charset="utf-8" />
<title><?= $t->meta->title ?></title>
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="copyright" content="Experiencias Xcaret S.A. de C.V" />
<meta name="keywords" content="<?= $t->meta->keywords ?>"/>
<meta name="description" content="<?= $t->meta->description ?>"/>
<link rel="icon" href="<?= $this->url->get('favicon.ico') ?>" type="image/x-icon" />
<!-- Icons Reel -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $this->url->get('apple-touch-icon-72x72-precomposed.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $this->url->get('apple-touch-icon-114x114-precomposed.png') ?>" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $this->url->get('apple-touch-icon-144x144-precomposed.png') ?>" />
<meta name="msapplication-TileImage" content="<?= $this->url->get('windows.png') ?>" />
<meta name="msapplication-TileColor" content="#990066" />
<link rel="fluid-icon" href="<?= $this->url->get('iTunesArtwork.png') ?>" title="Experiencias Xcaret" />

<!-- NO FOLLOW  -->
<?php if (isset($t->meta->nofollow)) { ?>
    <meta name="robots" content="noindex, nofollow">
<?php } ?>

<?php if (isset($t->opengraph)) { ?>
    <!-- OG Reel -->
    <?php if (isset($t->opengraph->title)) { ?>
        <meta property="og:title" content="<?= $t->opengraph->title ?>">
    <?php } else { ?>
        <meta property="og:title" content="<?= $t->meta->title ?>">
    <?php } ?>
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= $domain . $current_page ?>">
    <?php if ($t->opengraph->img) { ?>
        <meta property="og:image" content="<?= $domain ?>/img/<?= $t->opengraph->img ?>">
    <?php } else { ?>
        <meta property="og:image" content="<?= $domain ?>/img/og/xelha-inlet.jpg">
    <?php } ?>
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <?php if ($t->opengraph->description) { ?>
        <meta property="og:description" content="<?= $t->opengraph->description ?>">
    <?php } else { ?>
        <meta property="og:description" content="<?= $t->meta->description ?>">
    <?php } ?>
<?php } ?>


<?php if (isset($t->twitter)) { ?>
    <meta name="twitter:card" value="summary">
    <meta name="twitter:creator" value="<?= $t->twitter->creator ?>">
    <meta name="twitter:url" value="<?= $url ?>">
    <?php if ($t->twitter->title) { ?>
        <meta name="twitter:title" value="<?= $t->twitter->title ?>">
    <?php } else { ?>
        <meta name="twitter:title" value="<?= $t->meta->title ?>">
    <?php } ?>
    <?php if ($t->twitter->description) { ?>
        <meta name="twitter:description" value="<?= $t->twitter->description ?>">
    <?php } else { ?>
        <meta name="twitter:description" value="<?= $t->meta->description ?>">
    <?php } ?>
    <?php if ($twitter->img) { ?>
        <meta name="twitter:image" value="<?= $domain ?>/img/<?= $t->twitter->img ?>" />
    <?php } else { ?>
        <meta name="twitter:image" value="<?= $domain ?>/img/og/xelha-inlet.jpg" />
    <?php } ?>
<?php } ?>
<link rel="canonical" href="<?= $domain ?>" />


<style type="text/css"><?= $criticalcss ?></style>

<script async defer>
(function(w){"use strict";var loadCSS=function(href,before,media){var doc=w.document;var ss=doc.createElement("link");var ref;if(before){ref=before;}else{var refs=(doc.body||doc.getElementsByTagName("head")[0]).childNodes;ref=refs[refs.length-1];}var sheets=doc.styleSheets;ss.rel="stylesheet";ss.href=href;ss.media="only x";function ready(cb){if(doc.body){return cb();}setTimeout(function(){ready(cb);});}ready(function(){ref.parentNode.insertBefore(ss,(before?ref:ref.nextSibling));});var onloadcssdefined=function(cb){var resolvedHref=ss.href;var i=sheets.length;while(i--){if(sheets[i].href===resolvedHref){return cb();}}setTimeout(function(){onloadcssdefined(cb);});};function loadCB(){if(ss.addEventListener){ss.removeEventListener("load",loadCB);}ss.media=media||"all";}if(ss.addEventListener){ss.addEventListener("load",loadCB);}ss.onloadcssdefined=onloadcssdefined;onloadcssdefined(loadCB);return ss;};if(typeof exports!=="undefined"){exports.loadCSS=loadCSS;}else{w.loadCSS=loadCSS;}}(typeof global!=="undefined"?global:this));(function(w){if(!w.loadCSS){return;}var rp=loadCSS.relpreload={};rp.support=function(){try{return w.document.createElement("link").relList.supports("preload");}catch(e){return false;}};rp.poly=function(){var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"){w.loadCSS(link.href,link);link.rel=null;}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,300);if(w.addEventListener){w.addEventListener("load",function(){w.clearInterval(run);});}if(w.attachEvent){w.attachEvent("onload",function(){w.clearInterval(run);})}}}(this));
</script>
<script id="loadcss">loadCSS( "<?= $this->url->get('assets/output/css/main.min.css') ?>", document.getElementById("loadcss") );</script>
        
        
        <script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
        var b=document.getElementsByTagName("script")[0];
        a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0012/1796.js?"+Math.floor(new Date().getTime()/3600000);
        a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
    </head>
    <body>
    
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDHHR4J" height="0" width="0" style="display:none;visibility:hidden;"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    
        <?php if ($mobile || $tablet) { ?>
            <div class="backdrop"></div>
        <?php } ?>
            <?php if ($mobile || $tablet) { ?>
                <header id="toolbar">
                    
	

	<div class="row">
		<div class="header--item home">
			<a class="button button--square button-icon" href="<?= $this->url->get($lang) ?>"><i class="icon icon-home"></i></a>
		</div>
		<div class="header--item logo">
			<a href="<?= $this->url->get($lang) ?>"><img class="img--responsive" src="<?= $this->url->get('img/xox.png') ?>" alt="Xplor"></a>
		</div>
		<div class="header--item carrito" id="cart">
			
		</div>
		<div class="header--item divisa" id="currency">
			 
		</div>
		<div class="header--item lang">
            <?php foreach ($languages as $language) { ?>
			<button class="button button--square dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0">
				<a hreflang="<?= $language->hreflang ?>" rel="alternate" href="<?= $this->url->get($language->href) ?>" target="_self" class="link-lang" data-lang="<?= $language->texto ?>">
					<span><img class="<?= $language->flag ?> flag" src="<?= $this->url->get($language->img) ?>" height="32" width="32" alt="<?= $language->texto ?>"></span>
				</a>
			</button>
            <?php } ?>
			
		</div>
	</div>
	<nav>
		<ul class="nav nav-primary">
			<?php foreach ($g->nav->mobile->header as $n) { ?>
				<li class="text-align--center">
					<a href="<?= $this->url->get($lang . '/' . $n->href) ?>"><span><?= $n->menu ?></span></a>
				</li>
			<?php } ?>
			<li class="text-align--center" >
				<button class="button button--square button-icon" id="showNav"><i class="icon icon icon-plus-circled"></i></button>
			</li>
		</ul>
		<div id="nav-hide" class="nav-hide hidden">
			<a href="tel:9988833143"  class="num-phone-top button button--block button-ghost "><i class="icon icon-telefono"></i>Cancún: 998-883-3143</a>
			
			
			<ul class="nav nav--block" id="accordion">
				<?php foreach ($g->nav->mobile->lateral as $n) { ?>

					<?php if (!isset($n->submenus)) { ?>
						<li>
                            <a class="title" href="<?= $this->url->get($lang . '/' . $n->href) ?>">
							    <span><?= $n->menu ?></span>
                            </a>
						</li>
					<?php } else { ?>
						<li class="acc accordion--item">
							<h6 class="title"><?= $n->menu ?> <i class="icon icon-angle-down"></i></h6>
							<ul class="hidden accordion-content">
								<?php foreach ($n->submenus as $sm) { ?>
									<li>
										<?php if (!isset($sm->ext)) { ?>
											<a class="nav--item" href="<?= $this->url->get($lang . '/' . $sm->href) ?>">
												<span><?= $sm->menu ?></span>
											</a>
										<?php } else { ?>
											<a class="nav--item" href="<?= $sm->href ?>" target="_blank">
												<span><?= $sm->menu ?></span>
											</a>
										<?php } ?>
									</li>
								<?php } ?>
							</ul>
						</li>
					<?php } ?>

				<?php } ?>
			</ul>
			<div class="hidden-lateral login" data-form="login">
				<button class="button button--inline button-icon return"><i class="icon icon-angle-left"></i> Regresar</button>
				<div class="u-cf"></div>
				<h3>Acceder a su cuenta</h3>
				<form action="">
					<label for="">Usuario</label>
					<input type="text">
					<label for="">Contraseña</label>
					<input type="text">
					<input class="button button--block button-ghost" type="submit" value="Ingresar">
				</form>
			</div>
			<div class="hidden-lateral text--align-center contact" data-form="contact">
				<button class="button button--inline button-icon return"><i class="icon icon-angle-left"></i> Regresar</button>
				<div class="u-cf"></div>
				<h3>Lada gratis desde México</h3>
					<ul class="list">
						<?php foreach ($g->header->atencion->sub as $telefonos_atencion) { ?>
							<li><a class="button button--block button-ghost" href="<?= $telefonos_atencion->href ?>"><span><?= $telefonos_atencion->texto ?></span></a></li>
						<?php } ?>
					</ul>
			</div>
		</div>
	</nav>


                </header>
            <?php } else { ?>
                <header>
                    <div class="toolbar u-cf">
	<div class="container">
		<nav id="toolbar">
			<ul class="nav--inline u-pull-right">
	            <li class="dropdown">
	                <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0"><i class="icon icon-phone"></i> <?= $g->header->atencion->texto ?> <i class="caret"></i></span>
	                <ul class="nav dropdown-menu" data-type="large">
	                <?php foreach ($g->header->atencion->sub as $s) { ?>
	                    <li><a href="<?= $s->href ?>" class="num-phone-top"><span><?= $s->texto ?></span></a></li>
	                <?php } ?>
	                </ul>
	            </li>
				<li id="login" ></li>
				<li id="profile" class="dropdown"></li>
				<li id="cart" class="dropup"></li>
				<li id="currency"></li>
				
                <?php $v93001410865219830581iterator = $languages; $v93001410865219830581incr = 0; $v93001410865219830581loop = new stdClass(); $v93001410865219830581loop->self = &$v93001410865219830581loop; $v93001410865219830581loop->length = count($v93001410865219830581iterator); $v93001410865219830581loop->index = 1; $v93001410865219830581loop->index0 = 1; $v93001410865219830581loop->revindex = $v93001410865219830581loop->length; $v93001410865219830581loop->revindex0 = $v93001410865219830581loop->length - 1; ?><?php foreach ($v93001410865219830581iterator as $language) { ?><?php $v93001410865219830581loop->first = ($v93001410865219830581incr == 0); $v93001410865219830581loop->index = $v93001410865219830581incr + 1; $v93001410865219830581loop->index0 = $v93001410865219830581incr; $v93001410865219830581loop->revindex = $v93001410865219830581loop->length - $v93001410865219830581incr; $v93001410865219830581loop->revindex0 = $v93001410865219830581loop->length - ($v93001410865219830581incr + 1); $v93001410865219830581loop->last = ($v93001410865219830581incr == ($v93001410865219830581loop->length - 1)); ?>
				<?php if ($v93001410865219830581loop->length > 1) { ?>
				<li class="dropdown">
					<span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0"><img src="<?= $this->url->get($flag) ?>"/> <i class="caret"></i></span>
					<ul class="dropdown-menu lang" role="menu">


                            <li class="">
                                <a hreflang="<?= $language->hreflang ?>" rel="alternate" href="<?= $this->url->get($language->href) ?>" target="_self" class="link-lang" data-lang="<?= $language->texto ?>">
                                    <span><img class="<?= $language->flag ?>" src="<?= $this->url->get($language->img) ?>" height="32" width="32" alt="<?= $language->texto ?>"> <?= $language->texto ?></span>
                                </a>
                            </li>

					</ul>
				</li>
				<?php } else { ?>
                <li class="dropdown">
                    <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0">
                        <a hreflang="<?= $language->hreflang ?>" rel="alternate" href="<?= $this->url->get($language->href) ?>" target="_self" class="link-lang" data-lang="<?= $language->texto ?>">
                            <span><img class="<?= $language->flag ?>" src="<?= $this->url->get($language->img) ?>" height="32" width="32" alt="<?= $language->texto ?>"></span>
                        </a>
                    </span>
                </li>
                <?php } ?>
                <?php $v93001410865219830581incr++; } ?>
			</ul>	
		</nav>
	</div>
</div>
	<?php if ($lang == 'es') { ?>
	<div class="pleca-msi">
		<a class="toModal row" href="#modals" data-json='{"msi" : <?= json_encode($g->msi->modal) ?> }' data-modal="<?= $this->url->get('helpers/msi') ?>" data-toggle="modal">
		<img src="<?= $this->url->get('img/msi-small.png') ?>" alt="">
		</a>
	</div>
	<?php } ?>
	<div class="container">
		<div class="block header--top u-cf">
			<div class="header--item logo">
				<a href="<?= $domain . $this->url->get($lang) ?>" itemprop="logo" class="logo">
					<img itemprop="logo" class="img--responsive" src="<?= $domain . $this->url->get($g->logo->src) ?>" title="<?= $g->logo->title ?>" alt="<?= $g->logo->alt ?>">
				</a>
			</div>
			<nav class="u-pull-right">
				<div class="social u-pull-right">
					<ul class="nav--inline">
                        <?php foreach ($g->social as $social) { ?>
							<li><a class="link-social" href="<?= $social->href ?>" target="_blank" data-red="<?= $social->red ?>"><i class="icon <?= $social->class ?>"></i></a></li>
                        <?php } ?>
					</ul>
				</div>
				<div class="u-pull-right">
					<ul class="nav--inline">
						<?php foreach ($g->nav->desktop->secundario as $menu_secundario) { ?>
							<li><a href="<?= $this->url->get($lang . '/' . $menu_secundario->href) ?>"><i class="icon <?= $menu_secundario->icon ?>"></i> <span><?= $menu_secundario->menu ?></span></a></li>
						<?php } ?>
					</ul>
				</div>
			</nav>
		</div>
		<div class="block header--bottom u-cf">
		<nav>
	<ul class="nav-primary">
		<?php foreach ($g->nav->desktop->main as $n) { ?>

			<?php if (!isset($n->submenus)) { ?>
				<li <?php if ($section == $n->section) { ?> class="current" <?php } ?>>
					<a <?php if ($n->href != '') { ?> href="<?= $this->url->get($lang . '/' . $n->href . '/') ?> "<?php } ?>><span><?= $n->menu ?></span></a>
				</li>
			<?php } else { ?>
				<li class="dropdown <?php if ($section == $n->section) { ?>current<?php } ?>">
					<a><span><?= $n->menu ?></span></a>
					<ul class="nav dropdown-menu" data-type="large">
						<?php foreach ($n->submenus as $submenu) { ?>
							<li <?php if ($current_page == '/' . $lang . '/' . $submenu->href . '/') { ?> class="current" <?php } ?>>
								<?php if (!isset($submenu->ext)) { ?>
									<a href="<?= $this->url->get($lang . '/' . $submenu->href . '/') ?>">
										<span><?= $submenu->menu ?></span>
									</a>
								<?php } else { ?>
									<a href="<?= $submenu->href ?>" target="_blank">
										<span><?= $submenu->menu ?></span>
									</a>
								<?php } ?>
							</li>
						<?php } ?>
					</ul>
				</li>
			<?php } ?>

		<?php } ?>
		
	</ul>
</nav>
		</div>
	</div>
                </header>
            <?php } ?>

        
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


        <?php if ($mobile) { ?>
            <div class="block text--align-center">
                <button class="button button--inline go-top up-bottom" href="#"><i class="icon icon-angle-up"></i></button>
            </div>
        <?php } ?>
        <footer>
            
                <?php $this->_macros['attributes'] = function($__p = null) { if (isset($__p[0])) { $data = $__p[0]; } else { if (isset($__p["data"])) { $data = $__p["data"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'attributes' was called without parameter: data");  } }  ?><?php foreach ($data as $attribute => $value) { ?>
		<?= $attribute ?><?php if (($value != '')) { ?>
			="<?= $value ?>"<?php } ?>
		<?= ' ' ?><?php } ?><?php }; $this->_macros['attributes'] = \Closure::bind($this->_macros['attributes'], $this); ?><?php $this->_macros['schema'] = function($__p = null) { if (isset($__p[0])) { $data = $__p[0]; } else { if (isset($__p["data"])) { $data = $__p["data"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'schema' was called without parameter: data");  } }  ?>
	<<?= $data->tag ?>  <?php if (isset($data->attributes)) { ?> <?= $this->callMacro('attributes', [$data->attributes]) ?> <?php } ?> >
	<?php if (isset($data->text)) { ?>
		<?= $data->text ?>
	<?php } ?>
	<?php if (isset($data->items)) { ?><?php foreach ($data->items as $item) { ?>
			<?= $this->callMacro('schema', [$item]) . ' ' ?><?php } ?>
	<?php } ?>
	<?php if (isset($data->textafter)) { ?>
		<?= $data->textafter ?>
	<?php } ?>
	</<?= $data->tag ?>><?php }; $this->_macros['schema'] = \Closure::bind($this->_macros['schema'], $this); ?>


<div class="border pleca_1"></div>
<div class="upperfooter">
    <div class="container">
        <div class="parks">
            <?php foreach ($g->footer->logos as $logo) { ?>
                <div class="parks--logo"><a class="lazy" href="<?= $logo->href ?>"><img class="img--responsive" src="<?= $this->url->get('img/blank.gif') ?>" data-src="<?= $this->url->get($logo->src) ?>" alt="<?= $logo->alt ?>"></a></div>
            <?php } ?>
        </div>
        <?php if (!$desktop) { ?>
            <div class="social u-cf">
                <ul class="nav nav--inline nav-icon">
                    <?php foreach ($g->social as $social) { ?>
                        <li class="nav--item"><a class="link-social" href="<?= $social->href ?>" target="_blank" data-red="<?= $social->red ?>"><i class="icon <?= $social->class ?>"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
        <div class="accordion u-cf">
            <div class="accordion--item is_close">
                <div class="accordion-header"><i class="icon icon-plus-circled icon-mark"></i><h6><?= $g->footer->links ?><i class="icon icon-angle-down"></i></h6></div>
                <div class="accordion-content">
                    <div class="flex--wrap" data-items="<?php if ($mobile) { ?>2<?php } else { ?>3<?php } ?>">
                        <?php foreach ($g->footer->superior->principal as $seccion) { ?>
                        <div class="flex--item">
                            <h5><?= $seccion->title ?></h5>
                            <ul class="list <?= ($mobile ? 'list-mobile' : '') ?> u-cf">
                            <?php foreach ($seccion->links as $link) { ?>
                                <li>
                                    <a class="text--align-left" title="<?= $link->text ?>" <?= ((isset($link->ext) && $link->ext == true) ? 'href="' . $link->href . '" target="_blank"' : 'href="' . $this->url->get($lang . '/' . $link->href) . '"') ?>>
                                        <span><?= $link->text ?></span>
                                    </a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                    <ul class="list list-columns list-bars <?= ($mobile ? 'list-mobile' : '') ?>">
                        <?php foreach ($g->footer->superior->secundario as $link) { ?>
                            <li>
                                <a class="text--align-left" title="<?= $link->text ?>" <?= ((isset($link->ext) && $link->ext == true) ? 'href="' . $link->href . '" target="_blank"' : 'href="' . $this->url->get($lang . '/' . $link->href) . '"') ?> <?= (isset($link->rel) ? 'rel="nofollow"' : '') ?>>
                                    <span><?= $link->text ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border pleca_2"></div>
<div class="bottomfooter">
    <div class="container">
        <div class="accordion u-cf">
            <div class="accordion--item is_close">
                <div class="accordion-header"><i class="icon icon-phone icon-mark"></i><h6><?= $g->header->atencion->footer ?><i class="icon icon-angle-down"></i></h6></div>
                <div class="accordion-content">
                    <h5><?= $g->header->atencion->footer ?></h5>
                    <ul class="list list-columns phones" data-column="3">
                        <?php foreach ($g->header->atencion->sub as $s) { ?>
                            <li><a class="num-phone-footer" href="<?= $s->href ?>"><span><?= $s->texto ?></span></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <?= $this->callMacro('schema', [$g->schemas->footer->organization]) ?>
    </div>
</div>

            
        </footer>
        <div id="modals" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

            </div>
          </div>
        </div>
        <script>
        /*LAZY LOAD CAROUSEL ITEMS STARTS AT SECOND SLIDE*/
        if(document.contains(document.getElementById('carouselHtml'))){
            var carousel = document.getElementById('carouselHtml');
            carousel.addEventListener('slide.bs.carousel', function(e) {
                var lazyL;
                var lazyR;
                lazyL = $(this).find('.item.active').next().find('img[data-src]');
                lazyR = $(this).find('.item').last().find('img[data-src]');
                lazyL.attr("src", lazyL.data('src'));
                lazyR.attr("src", lazyR.data('src'));
                lazyL.removeAttr("data-src");
                lazyR.removeAttr("data-src");
            });
        };
</script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
        WebFont.load({
            <?php if ($tablet || $desktop) { ?>
            google: {
                families: ['Source Sans Pro:400,700']
            },
            <?php } ?>
            custom: {
                families: ['iconexx'],
                urls: ['<?= $this->url->get('/assets/output/css/styles.css') ?>']
            }
        });
</script>



<?php if (isset($buybox_script)) { ?>
    <script>
            /*ASIDE WIDTH*/
            var sideNav = document.getElementsByTagName('aside');
            function resetNav() {
                document.getElementById('buybox').style.width = '100%';
            }
            function adjustNav() {
                var ww = window.innerWidth || document.documentElement.clientWidth;
                if ( ww >= 768 ) {
                    document.getElementById('buybox').style.width = sideNav[0].offsetWidth + 'px';
                } else { resetNav() }
            }
            window.addEventListener('resize', adjustNav, false);/* adjust on resize*/
            window.addEventListener('load', adjustNav, false);/* adjust on load*/
    </script>


    <?php if (!isset($is_ficha)) { ?>
        <script src="<?= $this->url->get('assets/input/js/require.js') ?>"></script>
<script>
    require(["<?= $this->url->get('assets/output/js/mainHome.js') ?>"],function () {
        require(["impromptu","prices","moment"],function (impromptu,prices,moment) {
            (function ($s) {
    $s("#toolbar").analitycs({
        cnLogin: 1,
        cnBoxCart: 1,
        currency: "<?= $moneda[0] ?>",
        lang: "<?= $lang ?>"
    });
})(sa);
            (function ($p) {
    window.moment = moment;
    $p("#precio").price({
        baseProduct: "XOEC_0_10",
<?php if (isset($coupon)) { ?>
        coupon : "<?= $coupon ?>",
<?php } ?>
<?php if ($mobile && !isset($coupon)) { ?>
    coupon : "MOVI15",
<?php } ?>
        lang: "<?= $lang ?>",
        cnInfant: 0,
        cnDirect : 1,
        upgrades: [
            { "T": "XTXO_1_10" }
        ]
    });
})(sa);
        });
    });
</script>
    <?php } ?>

<?php } elseif ($path_last != 'index') { ?>
    <script src="<?= $this->url->get('assets/input/js/require.js') ?>"></script>
<script>
    require(["<?= $this->url->get('assets/output/js/mainHome.js') ?>"],function () {
        require(["impromptu","prices","moment"],function (impromptu,prices,moment) {
            (function ($s) {
    $s("#toolbar").analitycs({
        cnLogin: 1,
        cnBoxCart: 1,
        currency: "<?= $moneda[0] ?>",
        lang: "<?= $lang ?>"
    });
})(sa);
            (function ($p) {
    window.moment = moment;
    $p("#precio").price({
        baseProduct: "XOEC_0_10",
<?php if (isset($coupon)) { ?>
        coupon : "<?= $coupon ?>",
<?php } ?>
<?php if ($mobile && !isset($coupon)) { ?>
    coupon : "MOVI15",
<?php } ?>
        lang: "<?= $lang ?>",
        cnInfant: 0,
        cnDirect : 1,
        upgrades: [
            { "T": "XTXO_1_10" }
        ]
    });
})(sa);
        });
    });
</script>
<?php } ?>

        
        
        <div class="clearfix" id="pinbot"></div>
    </body>
</html>