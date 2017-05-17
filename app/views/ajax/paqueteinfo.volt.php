<div class="modal-header">
    <button type="button" class="close u-pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon icon-cerrar"></i></button>
    <h4 class="modal-title" id="myModalLabel"><?= $info->title ?></h4>
</div>
<div class="modal-body">
    <p><?= $info->horario ?></p>
    <p><?= $info->descripcion ?></p>
    <ul>
        <?php foreach ($info->listing as $item) { ?>
            <li><?= $item ?></li>
        <?php } ?>
    </ul>
</div>
<div class="modal-footer">
    <button type="button" class="button button--block button-ghost" data-dismiss="modal">Cerrar</button>
</div>