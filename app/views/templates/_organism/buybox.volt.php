<div  class="buybox block u-pull-right">
    <?php if (!$mobile) { ?>
	<div class="banner text--align-center">
	<a href="#precio">
	    <h4><?= $g->buybox->banner->title ?></h4>
	    <p><?= $g->buybox->banner->text ?></p>
	</a>
</div>
    <?php } ?>
	<div id="precio" class="buybox--block row">
		<div>
			<span class="amount amount--regular"><small><s><?= $g->buybox->regular ?></s></small></span><var class="amount amount--regular amount-linetrought u-pull-right" id="regular"><s><i class="loading_dots"><i></i><i></i><i></i></i></s></var>
		</div>
		<hr>
		<div>
			<span class="amount amount--online"><small><?= $g->buybox->online ?></small></span><var class="amount amount--online u-pull-right" id="onlineBase"><i class="loading_dots"><i></i><i></i><i></i></i></var>
		</div>
		<hr>
		
		<?php if (!isset($notransportation)) { ?>
		<div>
			<label>
				
				<span class="amount amount--regular"><?= $g->buybox->transportacion ?></span>
				<div class="input-container">
					<input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle variants" value="T">
					<label for="checkbox1" class="checkbox-label" data-off="\e027" data-on="\e027"></label>
				</div>
			</label>
			<var class="amount amount--regular u-pull-right" id="T"><i class="loading_dots"><i></i><i></i><i></i></i></var>
		</div>
		<hr>
        <?php } ?>
		
		
		<div id="optionsCart">
				<div class="">
					<select id="location" class="geo" style="display: none;"></select>
				</div>
				<i class="loading_dots"><i></i><i></i><i></i></i>
		</div>
		<div class="text--align-center">
			<span class="amount amount--online">Total :</span>
			<var class="amount amount--online digit" id="online"><i class="loading_dots"><i></i><i></i><i></i></i></var>
		</div>
		<div class="variants"></div>
		<button class="button button--block button-first-pay" id="addProduct"><?= $g->buybox->button ?></button>
	</div>
	<?php if ($mobile) { ?>
		<div class="savings savings--tab u-cf">
	<div class="savings--header text--align-center">
		<h5><?= $g->discounts->tabs->title ?></h5>
	</div>
	<div class="flex--wrap" data-items="3">
		<?php foreach ($g->discounts->tabs->items as $discount) { ?>
		<div class="flex--item savings--item text--align-center">
			<button class="toModal button button--square" href="#modals" data-modal="<?= $this->url->get('helpers/discounts') ?>" data-toggle="modal" data-json = '{"discounts" : <?= json_encode($g->discounts->tabs) ?> }'><?= $discount->title ?></button>
			
		</div>
        <?php } ?>
	</div>
</div>
	<?php } ?>
	<!-- <p><small>*Precios sujetos a cambios sin previo aviso. Niños de 5-11 años pagan -50% e infantes menores de 5 años entran gratis. Aplican restricciones</small></p> -->
</div>