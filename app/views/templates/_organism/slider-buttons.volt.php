    
    	<?php $classn = ''; ?>
    
<div class="block block--hero <?= $classn ?>">
    
    
  <?php $this->partial('templates/_organism/carousel', ['slider' => $t->slider, 'id' => 'carouselHtml', 'async' => true, 'classn' => $classn]); ?>
</div>

    <?php if (!$mobile) { ?>
    <div class="button--group button--group-slider gallery">
        
		<?php $v181527802522313630881iterator = $t->modal->slider; $v181527802522313630881incr = 0; $v181527802522313630881loop = new stdClass(); $v181527802522313630881loop->self = &$v181527802522313630881loop; $v181527802522313630881loop->length = count($v181527802522313630881iterator); $v181527802522313630881loop->index = 1; $v181527802522313630881loop->index0 = 1; $v181527802522313630881loop->revindex = $v181527802522313630881loop->length; $v181527802522313630881loop->revindex0 = $v181527802522313630881loop->length - 1; ?><?php foreach ($v181527802522313630881iterator as $slide) { ?><?php $v181527802522313630881loop->first = ($v181527802522313630881incr == 0); $v181527802522313630881loop->index = $v181527802522313630881incr + 1; $v181527802522313630881loop->index0 = $v181527802522313630881incr; $v181527802522313630881loop->revindex = $v181527802522313630881loop->length - $v181527802522313630881incr; $v181527802522313630881loop->revindex0 = $v181527802522313630881loop->length - ($v181527802522313630881incr + 1); $v181527802522313630881loop->last = ($v181527802522313630881incr == ($v181527802522313630881loop->length - 1)); ?>
			
			<a href="<?= $this->url->get($slide->url) ?>" class="button button--block button-info" 
            <?php if ($v181527802522313630881loop->first) { ?>
                onclick="dataLayer.push({
                    'action': 'ver imagenes', 
                    'label': '<?= $dataProduct->dsDescripciones ?>', 
                    'event': 'verDetalles'
                });" 
            <?php } ?>

            <?php if (!$v181527802522313630881loop->first) { ?>style="display:none;"<?php } ?>><?= $g->slider->buttons->images ?></a>
		<?php $v181527802522313630881incr++; } ?>
    </div>
    <?php } ?>
