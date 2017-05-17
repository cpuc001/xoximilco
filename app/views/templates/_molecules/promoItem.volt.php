 <div class="listing--item">
    <div class="row">
        <div class="one-half column listing--img">
            <img class="img--responsive" src="<?= $this->url->get($item->img) ?>" alt="">
        </div>
        <div class="one-half column listing--content"
            <?php if (isset($item->promotion)) { ?>
                data-promoId = "<?= $item->promotion->id ?>"
                data-promoName = "<?= $item->promotion->name ?>"
                data-promoDescription = "<?= $item->promotion->description ?>"
                data-promoPosition ="<?= $position ?>"
            <?php } ?>
        >
            <h3><?= $item->name ?></h3>
            <?php $v139739999540154969601iterator = $item->upper; $v139739999540154969601incr = 0; $v139739999540154969601loop = new stdClass(); $v139739999540154969601loop->self = &$v139739999540154969601loop; $v139739999540154969601loop->length = count($v139739999540154969601iterator); $v139739999540154969601loop->index = 1; $v139739999540154969601loop->index0 = 1; $v139739999540154969601loop->revindex = $v139739999540154969601loop->length; $v139739999540154969601loop->revindex0 = $v139739999540154969601loop->length - 1; ?><?php foreach ($v139739999540154969601iterator as $p) { ?><?php $v139739999540154969601loop->first = ($v139739999540154969601incr == 0); $v139739999540154969601loop->index = $v139739999540154969601incr + 1; $v139739999540154969601loop->index0 = $v139739999540154969601incr; $v139739999540154969601loop->revindex = $v139739999540154969601loop->length - $v139739999540154969601incr; $v139739999540154969601loop->revindex0 = $v139739999540154969601loop->length - ($v139739999540154969601incr + 1); $v139739999540154969601loop->last = ($v139739999540154969601incr == ($v139739999540154969601loop->length - 1)); ?>
            <p><?= $p ?></p>
            <?php $v139739999540154969601incr++; } ?>
            <hr>
            <?php if (isset($item->bottom)) { ?>
                <?php $v139739999540154969601iterator = $item->bottom; $v139739999540154969601incr = 0; $v139739999540154969601loop = new stdClass(); $v139739999540154969601loop->self = &$v139739999540154969601loop; $v139739999540154969601loop->length = count($v139739999540154969601iterator); $v139739999540154969601loop->index = 1; $v139739999540154969601loop->index0 = 1; $v139739999540154969601loop->revindex = $v139739999540154969601loop->length; $v139739999540154969601loop->revindex0 = $v139739999540154969601loop->length - 1; ?><?php foreach ($v139739999540154969601iterator as $p) { ?><?php $v139739999540154969601loop->first = ($v139739999540154969601incr == 0); $v139739999540154969601loop->index = $v139739999540154969601incr + 1; $v139739999540154969601loop->index0 = $v139739999540154969601incr; $v139739999540154969601loop->revindex = $v139739999540154969601loop->length - $v139739999540154969601incr; $v139739999540154969601loop->revindex0 = $v139739999540154969601loop->length - ($v139739999540154969601incr + 1); $v139739999540154969601loop->last = ($v139739999540154969601incr == ($v139739999540154969601loop->length - 1)); ?>
                    <p><small><?= $p ?></small></p>
                <?php $v139739999540154969601incr++; } ?>
            <?php } ?>
            <?php if (isset($item->href)) { ?>
            <a <?= (isset($item->ext) ? 'href="' . $item->href . '" target="_blank"' : 'href="' . $this->url->get($lang . '/' . $item->href) . '"') ?>  class="button button--block button-first u-pull-right <?php if (isset($item->promotion)) { ?> promo-register <?php } ?>"><?= $button ?></a>
            <?php } ?>

        </div>
    </div>
 </div>
