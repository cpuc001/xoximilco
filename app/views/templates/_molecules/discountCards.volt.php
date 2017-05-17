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