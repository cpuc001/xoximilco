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