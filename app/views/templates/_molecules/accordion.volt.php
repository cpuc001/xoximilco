
<div class="accordion">
	<?php $v15166436731575554391iterator = $accordion; $v15166436731575554391incr = 0; $v15166436731575554391loop = new stdClass(); $v15166436731575554391loop->self = &$v15166436731575554391loop; $v15166436731575554391loop->length = count($v15166436731575554391iterator); $v15166436731575554391loop->index = 1; $v15166436731575554391loop->index0 = 1; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - 1; ?><?php foreach ($v15166436731575554391iterator as $item) { ?><?php $v15166436731575554391loop->first = ($v15166436731575554391incr == 0); $v15166436731575554391loop->index = $v15166436731575554391incr + 1; $v15166436731575554391loop->index0 = $v15166436731575554391incr; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length - $v15166436731575554391incr; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - ($v15166436731575554391incr + 1); $v15166436731575554391loop->last = ($v15166436731575554391incr == ($v15166436731575554391loop->length - 1)); ?>
		<div class="accordion--item is_close">
			<div class="accordion-header"><h6><?= $item->title ?> <i class="icon icon-angle-down"></i></h6></div>
			<div class="accordion-content">
				<p>
					<?= $item->content ?>
				</p>
			</div>
		</div>
	<?php $v15166436731575554391incr++; } ?>
</div>