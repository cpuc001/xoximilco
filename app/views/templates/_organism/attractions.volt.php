<div class="block block--attractions text--align-center">
    <h3><?= $t->secciones->titulo ?></h3>
    <div class="flex--wrap" data-items="<?= $this->length($t->secciones->secciones) ?>">
        <?php $v118480846900716251941iterator = $t->secciones->secciones; $v118480846900716251941incr = 0; $v118480846900716251941loop = new stdClass(); $v118480846900716251941loop->self = &$v118480846900716251941loop; $v118480846900716251941loop->length = count($v118480846900716251941iterator); $v118480846900716251941loop->index = 1; $v118480846900716251941loop->index0 = 1; $v118480846900716251941loop->revindex = $v118480846900716251941loop->length; $v118480846900716251941loop->revindex0 = $v118480846900716251941loop->length - 1; ?><?php foreach ($v118480846900716251941iterator as $seccion) { ?><?php $v118480846900716251941loop->first = ($v118480846900716251941incr == 0); $v118480846900716251941loop->index = $v118480846900716251941incr + 1; $v118480846900716251941loop->index0 = $v118480846900716251941incr; $v118480846900716251941loop->revindex = $v118480846900716251941loop->length - $v118480846900716251941incr; $v118480846900716251941loop->revindex0 = $v118480846900716251941loop->length - ($v118480846900716251941incr + 1); $v118480846900716251941loop->last = ($v118480846900716251941incr == ($v118480846900716251941loop->length - 1)); ?>
            <div class="flex--item <?= Phalcon\Text::lower($seccion->nombre) ?>"
            <?php if (isset($seccion->promotion)) { ?>
                data-promoId = "<?= $seccion->promotion->id ?>"
                data-promoName = "<?= $seccion->promotion->name ?>"
                data-promoDescription = "<?= $seccion->promotion->description ?>"
                data-promoPosition ="Promo home bottom - <?= $v118480846900716251941loop->index ?>"
            <?php } ?>
            >
                <a href="<?= $this->url->get($lang . '/' . $seccion->a->href) ?>" class="<?php if (isset($seccion->promotion)) { ?> home-atraction-promotion <?php } ?>">
                <div class="block--attractions-thumb">
                    <img class="img--responsive" src="<?= $this->url->get($seccion->img->src) ?>" alt="<?= $seccion->img->alt ?>">
                </div>
                <div class="block--attractions-footer">
                    <h5><?= $seccion->nombre ?></h5>
                </div>
                </a>
            </div>
        <?php $v118480846900716251941incr++; } ?>
    </div>
</div>