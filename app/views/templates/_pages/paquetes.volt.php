<main class="container">
	<div class="row">
		<div class="block breadcrumb u-cf">
	<nav>
		<ul class="nav nav--inline">
			<?php $v2913504734490919761iterator = $t->breadcrumbs; $v2913504734490919761incr = 0; $v2913504734490919761loop = new stdClass(); $v2913504734490919761loop->self = &$v2913504734490919761loop; $v2913504734490919761loop->length = count($v2913504734490919761iterator); $v2913504734490919761loop->index = 1; $v2913504734490919761loop->index0 = 1; $v2913504734490919761loop->revindex = $v2913504734490919761loop->length; $v2913504734490919761loop->revindex0 = $v2913504734490919761loop->length - 1; ?><?php foreach ($v2913504734490919761iterator as $b) { ?><?php $v2913504734490919761loop->first = ($v2913504734490919761incr == 0); $v2913504734490919761loop->index = $v2913504734490919761incr + 1; $v2913504734490919761loop->index0 = $v2913504734490919761incr; $v2913504734490919761loop->revindex = $v2913504734490919761loop->length - $v2913504734490919761incr; $v2913504734490919761loop->revindex0 = $v2913504734490919761loop->length - ($v2913504734490919761incr + 1); $v2913504734490919761loop->last = ($v2913504734490919761incr == ($v2913504734490919761loop->length - 1)); ?>
				<li><a href="<?= $this->url->get($lang . '/' . $b->href) ?>"><?php if ($v2913504734490919761loop->first) { ?><i class="icon icon-home"></i><?php } ?> <?= $b->text ?></a></li>
			<?php $v2913504734490919761incr++; } ?>
		</ul>
	</nav>
</div>
			<h2 class="text--align-center">Create your own package with the best Tours in Cancun,<br> Riviera Maya and Yucatan.</h2>
			<p class="text--align-center"><strong>And save up to 40% on your purchase!</strong></p>
			<div class="banner banner-packages row">
				<div class="row ">

							<div class="six columns">
								<label for=""><input name="transportation" type="radio" checked> Con transportación</label>
								<label for=""><input name="transportation" type="radio"> Solo admisión</label>
							</div>
						</div>
<!-- 						<div class="button--group">
							<button id="cancelFilter" class="button button--block button-ghost">Cancelar</button>
							<button id="doFilter" class="button button--block button-first">Filtrar</button>
						</div> -->

					</div>
				</div>

			<!-- </div> -->
			
<?php foreach ($t->paquetes as $paquete) { ?>

		<article class="item item__package" data-park="xenses" data-rel="relax">
			<div class="flex--wrap">
				<div class="flex--item item__package-header">
					<h3><?= $paquete->name ?></h3>
					<?php foreach ($paquete->parrafos as $parrafo) { ?>
						<p><?= $parrafo ?></p>
					<?php } ?>
				</div>
				<div class="flex--item item__package-img">
					<img class="img--responsive" src="<?= $this->url->get($paquete->img->src) ?>" alt="">
					<button class="button button--block button-ghost button--large toModal" href="#modals" data-json='{"info" : <?= json_encode($paquete->info) ?> }' data-modal="<?= $this->url->get('helpers/paquete-info') ?>" data-toggle="modal"><?= $t->button->modal ?></button>
				</div>
				<div class="flex--item item__package-content">
					<h5 class="amount amount--regular">Precio Regular: <?= $paquete->precio->regular ?></h5>
					<h5 class="amount amount--online">Precio en línea: <?= $paquete->precio->online ?></h5>
					<h5 class="amount amount--regular">Ahorro: <?= $paquete->precio->ahorro ?></h5>
					<button class="button button--block button-first-pay button--large"><?= $t->button->pay ?></button>
					<p><small><?= $paquete->complemento ?></small></p>
				</div>
			</div>
		</article>

<?php } ?>
			<div class="block">
	<ul class="nav nav--tab nav--tab-horizontal" role="tablist">
		<li role="presentation" class="nav-tab--item active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" class="button button--square">Beneficios Exclusivos</a></li>
		<li role="presentation" class="nav-tab--item "><a href="#recomendaciones" id="recomendaciones-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" class="button button--square">Recomendaciones</a></li>
		<li role="presentation" class="nav-tab--item "><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" class="button button--square">Información importante</a></li>
	</ul>
	<div class="tab--content">
		<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
			<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="recomendaciones" aria-labelledby="recomendaciones-tab">
			<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
		</div>
	</div>
</div>
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