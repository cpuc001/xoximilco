<button type="button" class="button button--block button-ghost absolute" data-dismiss="modal"><i class="icon icon-times"></i></button>
<div class="modal-header">
    <button type="button" class="close u-pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon icon-times"></i></button>
    <h4 class="meses-intereses"><?= $msi->title ?></h4>
</div>
<div class="modal-body">
    <?php foreach ($msi->parrafos as $parrafo) { ?>
        <p><?= $parrafo ?></p>
    <?php } ?>
    <?php $v154736147185257406411iterator = $msi->bancos; $v154736147185257406411incr = 0; $v154736147185257406411loop = new stdClass(); $v154736147185257406411loop->self = &$v154736147185257406411loop; $v154736147185257406411loop->length = count($v154736147185257406411iterator); $v154736147185257406411loop->index = 1; $v154736147185257406411loop->index0 = 1; $v154736147185257406411loop->revindex = $v154736147185257406411loop->length; $v154736147185257406411loop->revindex0 = $v154736147185257406411loop->length - 1; ?><?php foreach ($v154736147185257406411iterator as $banco) { ?><?php $v154736147185257406411loop->first = ($v154736147185257406411incr == 0); $v154736147185257406411loop->index = $v154736147185257406411incr + 1; $v154736147185257406411loop->index0 = $v154736147185257406411incr; $v154736147185257406411loop->revindex = $v154736147185257406411loop->length - $v154736147185257406411incr; $v154736147185257406411loop->revindex0 = $v154736147185257406411loop->length - ($v154736147185257406411incr + 1); $v154736147185257406411loop->last = ($v154736147185257406411incr == ($v154736147185257406411loop->length - 1)); ?>
        <div class="formas-pago row">
            <div class="five columns">
                <?php if ($v154736147185257406411loop->index == 4) { ?>
                    <img width="70" src="<?= $this->url->get($banco->img->src) ?>" alt="<?= $banco->img->alt ?>">
                <?php } else { ?>
                    <img width="160" src="<?= $this->url->get($banco->img->src) ?>" alt="<?= $banco->img->alt ?>">
                <?php } ?>
            </div>
            <div class="seven columns text--align-center">
                <p class="descripcion-tarjeta"><?= $banco->descripcion ?></p>
            </div>

        </div>
        <hr>
    <?php $v154736147185257406411incr++; } ?>
</div>
<div class="modal-footer">
</div>