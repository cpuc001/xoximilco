    
    	<?php $classn = 'home'; ?>
    
<div class="block block--hero <?= $classn ?>">
    
    
    <?php if (!$mobile) { ?>
    	<?php $banner = false; ?>
        <div class="booking block u-cf">
	<?php if ($banner == true) { ?>
		<div class="banner text--align-center">
	<a href="#precio">
	    <h4><?= $g->buybox->banner->title ?></h4>
	    <p><?= $g->buybox->banner->text ?></p>
	</a>
</div>
	<?php } ?>
	
	<div class="tab--content">
		<div role="tabpanel" class="tab-pane fade in active" aria-labelledby="xplor-tab" id="precio">
			<div class="left" id="whatever">
				<div class="flexie">
					<div class="flex--item text--align-center">
						<span class="trans-label <?php if ($mobile) { ?>u-pull-left<?php } ?>"><?= $g->booking->transportacion ?></span>
						<div class="input-container">
							<input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle variants" value="T">
							<label for="checkbox1" class="checkbox-label" data-off="\e027" data-on="\e027"></label>
						</div>
					</div>
					<div class="flex--item optionsCart" id="optionsCart">
						<i class="loading_dots"><i></i><i></i><i></i></i>
					</div>
					<div class="flex--item"><input id="addProduct" class="button button--block button-first-pay" type="button" value="<?= $g->booking->button ?>"></div>
				</div>
			</div>
			<div class="right text--align-center">
				<span class="amount amount--online"><small>Total :</small></span> <var class="amount amount--online digit" id="online"><i class="loading_dots"><i></i><i></i><i></i></i></var>
				<div class="u-cf"></div>
				<small><?= $g->booking->legales ?></small>
			</div>
		</div><!-- end -->
		
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
	<?php } elseif ($current_page == '/' . $lang . '/' || $current_page == '/' . $lang) { ?>
		    <div class="savings saving--inline u-cf">
        
        <div class="flex--wrap">
            <?php foreach ($g->discounts->inline as $discount) { ?>
                <div class="flex--item savings--item">
                    <span class="title u-pull-left"><strong><?= $discount->title ?></strong> </span>
                    <p><strong><?= $discount->intro ?></strong> </p>
                    <small><?= $discount->text ?></small>
                </div>
            <?php } ?>
        </div>
    </div>
	<?php } ?>

</div>
    <?php } ?>

  <?php $this->partial('templates/_organism/carousel', ['slider' => $t->slider, 'id' => 'carouselHtml', 'async' => true, 'classn' => $classn]); ?>
</div>

