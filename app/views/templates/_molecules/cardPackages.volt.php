
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