<div id="<?= $id ?>" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <?php $count = 0; ?>
    <ol class="carousel-indicators">
        <?php $v15166436731575554391iterator = $slider; $v15166436731575554391incr = 0; $v15166436731575554391loop = new stdClass(); $v15166436731575554391loop->self = &$v15166436731575554391loop; $v15166436731575554391loop->length = count($v15166436731575554391iterator); $v15166436731575554391loop->index = 1; $v15166436731575554391loop->index0 = 1; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - 1; ?><?php foreach ($v15166436731575554391iterator as $item) { ?><?php $v15166436731575554391loop->first = ($v15166436731575554391incr == 0); $v15166436731575554391loop->index = $v15166436731575554391incr + 1; $v15166436731575554391loop->index0 = $v15166436731575554391incr; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length - $v15166436731575554391incr; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - ($v15166436731575554391incr + 1); $v15166436731575554391loop->last = ($v15166436731575554391incr == ($v15166436731575554391loop->length - 1)); ?>
            <?php if ((($item->device == 'mobile' && $mobile) || ($item->device == 'desktop' && !$mobile) || ($item->device == 'both'))) { ?>
                <li data-target="#<?= $id ?>" data-slide-to="<?= $count ?>" <?php if ($v15166436731575554391loop->first) { ?>class="active"<?php } ?>></li>
                <?php $count = $count + 1; ?>
            <?php } ?>
        <?php $v15166436731575554391incr++; } ?>
    </ol>

    <!-- Wrapper for slides -->
    <?php $count = 1; ?>
    <div class="carousel-inner" role="listbox">
        <?php $v15166436731575554391iterator = $slider; $v15166436731575554391incr = 0; $v15166436731575554391loop = new stdClass(); $v15166436731575554391loop->self = &$v15166436731575554391loop; $v15166436731575554391loop->length = count($v15166436731575554391iterator); $v15166436731575554391loop->index = 1; $v15166436731575554391loop->index0 = 1; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - 1; ?><?php foreach ($v15166436731575554391iterator as $item) { ?><?php $v15166436731575554391loop->first = ($v15166436731575554391incr == 0); $v15166436731575554391loop->index = $v15166436731575554391incr + 1; $v15166436731575554391loop->index0 = $v15166436731575554391incr; $v15166436731575554391loop->revindex = $v15166436731575554391loop->length - $v15166436731575554391incr; $v15166436731575554391loop->revindex0 = $v15166436731575554391loop->length - ($v15166436731575554391incr + 1); $v15166436731575554391loop->last = ($v15166436731575554391incr == ($v15166436731575554391loop->length - 1)); ?>
            <?php if ((($item->device == 'mobile' && $mobile) || ($item->device == 'desktop' && !$mobile) || ($item->device == 'both'))) { ?>
                <?php if ($item->type == 'img') { ?>
                    <div class="
                            item 
                            <?php if ($count == 1) { ?> active <?php } ?>
                            <?php if (isset($item->promotion)) { ?> slide-promotion <?php } ?>
                        "
                        
                         <?php if (isset($item->promotion)) { ?>
                            data-promoId = "<?= $item->promotion->id ?>"
                            data-promoName = "<?= $item->promotion->name ?>"
                            data-promoDescription = "<?= $item->promotion->description ?>"
                            data-promoPosition ="Carrusel - <?= $count ?>"
                         <?php } ?>
                        >
                        <?php if (isset($item->link)) { ?>
                            <a href="<?= $item->link ?>">
                        <?php } ?>
                        <?php if (isset($async)) { ?>
                            <img <?php if ($v15166436731575554391loop->first || $v15166436731575554391loop->index == 2) { ?> src="<?= $this->url->get($item->url) ?>" <?php } else { ?> src="<?= $this->url->get('img/blank.gif') ?>" data-src="<?= $this->url->get($item->url) ?>" <?php } ?>/>
                        <?php } else { ?>
                            <img src="<?= $this->url->get($item->url) ?>" />
                        <?php } ?>
                        <?php if (isset($item->link)) { ?>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if ($item->type == 'video') { ?>
                    <div class="
                    item
                    <?php if ($v15166436731575554391loop->first) { ?>active<?php } ?>
                    <?php if (isset($item->promotion)) { ?> slide-promotion <?php } ?>
                    "
                    
                    <?php if (isset($item->promotion)) { ?>
                        data-promoId = "<?= $item->promotion->id ?>"
                        data-promoName = "<?= $item->promotion->name ?>"
                        data-promoDescription = "<?= $item->promotion->description ?>"
                        data-promoPosition ="Carrusel - <?= $count ?>"
                    <?php } ?>
                    >
                        <a  data-modal="<?= $item->codigo ?>" class="toModalS" 
                        
                        <?php if (isset($dataProduct)) { ?>
                            onclick="dataLayer.push({
                                'action': 'ver videos', 
                                'label': '<?= $dataProduct->dsDescripciones ?>', 
                                'event': 'verDetalles'
                            });"
                        <?php } ?>

                        >
                            <img src="<?= $this->url->get($item->url) ?>" />
                        </a>
                    </div>
                <?php } ?>
                <?php $count = $count + 1; ?>
            <?php } ?>
        <?php $v15166436731575554391incr++; } ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#<?= $id ?>" role="button" data-slide="prev">
        <span class="icon icon-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#<?= $id ?>" role="button" data-slide="next">
        <span class="icon icon-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <?php if (isset($classn) && $classn == 'home') { ?>
        <div class="cenefa"></div>
    <?php } ?>
</div>