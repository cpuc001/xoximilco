<div class="block u-cf">
	<div class="row">
        <?php if (isset($item->img) && $item->img != '') { ?>
		<div class="seven columns">
			<img class="thumb u-pull-left" src="<?= $this->url->get($item->img) ?>" alt="activity Image">
		</div>
		<div class="five columns">
		<?php } else { ?>
		<div>
		<?php } ?>
			<h5><?= $item->name ?></h5>
			<?php if (isset($item->parrafos)) { ?>
                <?php $v15166436731575554391iterator = $item->parrafos; $v15166436731575554391incr = 0; $v15166436731575554391loop = new stdClass(); $v15166436731575554391loop->self = &$v15166436731575554391loop; $v15166436731575554391loop->length = count($v15166436731575554391iterator); $v15166436731575554391loop->index = 1; $v15166436731575554391loop->index0 = 1; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - 1; ?><?php foreach ($v15166436731575554391iterator as $parrafo) { ?><?php $v15166436731575554391loop->first = ($v15166436731575554391incr == 0); $v15166436731575554391loop->index = $v15166436731575554391incr + 1; $v15166436731575554391loop->index0 = $v15166436731575554391incr; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length - $v15166436731575554391incr; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - ($v15166436731575554391incr + 1); $v15166436731575554391loop->last = ($v15166436731575554391incr == ($v15166436731575554391loop->length - 1)); ?>
				    <p><?= $parrafo ?></p>
                <?php $v15166436731575554391incr++; } ?>
			<?php } ?>
			<?php if (isset($item->lista)) { ?>
				<ul>
					<?php $v15166436731575554391iterator = $item->lista; $v15166436731575554391incr = 0; $v15166436731575554391loop = new stdClass(); $v15166436731575554391loop->self = &$v15166436731575554391loop; $v15166436731575554391loop->length = count($v15166436731575554391iterator); $v15166436731575554391loop->index = 1; $v15166436731575554391loop->index0 = 1; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - 1; ?><?php foreach ($v15166436731575554391iterator as $element) { ?><?php $v15166436731575554391loop->first = ($v15166436731575554391incr == 0); $v15166436731575554391loop->index = $v15166436731575554391incr + 1; $v15166436731575554391loop->index0 = $v15166436731575554391incr; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length - $v15166436731575554391incr; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - ($v15166436731575554391incr + 1); $v15166436731575554391loop->last = ($v15166436731575554391incr == ($v15166436731575554391loop->length - 1)); ?>
						<li><?= $element ?></li>
					<?php $v15166436731575554391incr++; } ?>
				</ul>
			<?php } ?>
			<?php if (isset($item->button)) { ?>
				<a class="button button--block button-first u-pull-right" href="<?= $this->url->get($lang . '/' . $item->button->href) ?>"><?= $item->button->text ?></a>
			<?php } ?>
		</div>
	</div>
</div>