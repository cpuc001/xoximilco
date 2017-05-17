<?php if (!$mobile) { ?>
<div class="news">
    <a class="toModal" href="#modals" data-modal="<?= $this->url->get('helpers/news') ?>" data-toggle="modal" data-json = '{"newsletter" : <?= json_encode($t->modal->newsletter) ?>, "mailchimpid" : <?= json_encode($mailchimpid) ?> }'>
		<div class="img">
			<img class="img--responsive" src="<?= $this->url->get($t->introduccion->newsletter->img) ?>" alt="Xoximilco">
		</div>
		<div class="u-cf"></div>
		<button class="button button--inline"><?= $t->introduccion->newsletter->button ?></button>
	</a>
</div>
<?php } else { ?>
	<button class="button button--block button-first toModal" href="#modals" data-modal="<?= $this->url->get('helpers/news') ?>" data-toggle="modal" data-json = '{"newsletter" : <?= json_encode($t->modal->newsletter) ?> }'>NEWSLETTER</button>
<?php } ?>