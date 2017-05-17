<button type="button" class="button button--block button-ghost absolute" data-dismiss="modal"><i class="icon icon-times"></i></button>
<div class="modal-header">
   <button type="button" class="close u-pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon icon-times"></i></button>
    <h4 class="modal-title" id="myModalLabel"><?= $why->title ?></h4>
</div>
<div class="modal-body">
        <?php foreach ($why->benefits as $benefit) { ?>
        <div class="row">
            <?php if (isset($benefit->title)) { ?>
                <div class="two columns">
                    <object  data="<?= $this->url->get($benefit->img) ?>" class="iconos"type="image/svg+xml"></object>
                </div>
                <div class="ten columns">
                    <p>
                        <strong><?= $benefit->title ?></strong>
                        <br>
                        <?= $benefit->description ?>
                    </p>
                </div>
                <div class="u-cf"></div>
            <?php } ?>
        </div>
        <?php } ?>
</div>
<div class="modal-footer">
   <!--  <button type="button" class="button button--block button-ghost" data-dismiss="modal">Cerrar</button> -->
</div>
<div class="block">