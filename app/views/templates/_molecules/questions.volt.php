
<div class="block block--questions" id="preguntaprinted">
<?php $parent = 1; ?>
<?php foreach ($preguntas->items as $tema => $pregs) { ?>
	<h2 id="topictitle"><?= $tema ?></h2>
	<?php $v96373651275442687092iterator = $pregs; $v96373651275442687092incr = 0; $v96373651275442687092loop = new stdClass(); $v96373651275442687092loop->self = &$v96373651275442687092loop; $v96373651275442687092loop->length = count($v96373651275442687092iterator); $v96373651275442687092loop->index = 1; $v96373651275442687092loop->index0 = 1; $v96373651275442687092loop->revindex = $v96373651275442687092loop->length; $v96373651275442687092loop->revindex0 = $v96373651275442687092loop->length - 1; ?><?php foreach ($v96373651275442687092iterator as $pregunta) { ?><?php $v96373651275442687092loop->first = ($v96373651275442687092incr == 0); $v96373651275442687092loop->index = $v96373651275442687092incr + 1; $v96373651275442687092loop->index0 = $v96373651275442687092incr; $v96373651275442687092loop->revindex = $v96373651275442687092loop->length - $v96373651275442687092incr; $v96373651275442687092loop->revindex0 = $v96373651275442687092loop->length - ($v96373651275442687092incr + 1); $v96373651275442687092loop->last = ($v96373651275442687092incr == ($v96373651275442687092loop->length - 1)); ?>
		<div class="item item_border u-cf">
			<h4 id="pregunta<?= $parent ?>-<?= $v96373651275442687092loop->index ?>"><?= $pregunta->question ?></h4>
			<p><?= $pregunta->ask ?></p>
			<button class="go-top button button--block button-ghost u-pull-right"> <?= $preguntas->button ?> <i class="icon icon-angle-up"></i></button>
		</div>
	<?php $v96373651275442687092incr++; } ?>
	<?php $parent = $parent + 1; ?>
<?php } ?>
</div>