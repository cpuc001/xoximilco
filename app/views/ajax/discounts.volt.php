<button type="button" class="button button--block button-ghost absolute" data-dismiss="modal"><i class="icon icon-times"></i></button>
<div class="modal-header">
    <button type="button" class="close u-pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon icon-times"></i></button>
    <h4 class="meses-intereses"><?= $discounts->title ?></h4>
</div>
<div class="modal-body">
    
    <?php foreach ($discounts->items as $discount) { ?>
        <div class="formas-pago row">
            <div class="twelve columns text--align-center">
                <?= $discount->text ?>
            </div>
        </div>
        <hr>
    <?php } ?>

</div>