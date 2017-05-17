<div class="toolbar u-cf">
	<div class="container">
		<nav id="toolbar">
			<ul class="nav--inline u-pull-right">
	            <li class="dropdown">
	                <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0"><i class="icon icon-phone"></i> <?= $g->header->atencion->texto ?> <i class="caret"></i></span>
	                <ul class="nav dropdown-menu" data-type="large">
	                <?php foreach ($g->header->atencion->sub as $s) { ?>
	                    <li><a href="<?= $s->href ?>" class="num-phone-top"><span><?= $s->texto ?></span></a></li>
	                <?php } ?>
	                </ul>
	            </li>
				<li id="login" ></li>
				<li id="profile" class="dropdown"></li>
				<li id="cart" class="dropup"></li>
				<li id="currency"></li>
				
                <?php $v93001410865219830581iterator = $languages; $v93001410865219830581incr = 0; $v93001410865219830581loop = new stdClass(); $v93001410865219830581loop->self = &$v93001410865219830581loop; $v93001410865219830581loop->length = count($v93001410865219830581iterator); $v93001410865219830581loop->index = 1; $v93001410865219830581loop->index0 = 1; $v93001410865219830581loop->revindex = $v93001410865219830581loop->length; $v93001410865219830581loop->revindex0 = $v93001410865219830581loop->length - 1; ?><?php foreach ($v93001410865219830581iterator as $language) { ?><?php $v93001410865219830581loop->first = ($v93001410865219830581incr == 0); $v93001410865219830581loop->index = $v93001410865219830581incr + 1; $v93001410865219830581loop->index0 = $v93001410865219830581incr; $v93001410865219830581loop->revindex = $v93001410865219830581loop->length - $v93001410865219830581incr; $v93001410865219830581loop->revindex0 = $v93001410865219830581loop->length - ($v93001410865219830581incr + 1); $v93001410865219830581loop->last = ($v93001410865219830581incr == ($v93001410865219830581loop->length - 1)); ?>
				<?php if ($v93001410865219830581loop->length > 1) { ?>
				<li class="dropdown">
					<span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0"><img src="<?= $this->url->get($flag) ?>"/> <i class="caret"></i></span>
					<ul class="dropdown-menu lang" role="menu">


                            <li class="">
                                <a hreflang="<?= $language->hreflang ?>" rel="alternate" href="<?= $this->url->get($language->href) ?>" target="_self" class="link-lang" data-lang="<?= $language->texto ?>">
                                    <span><img class="<?= $language->flag ?>" src="<?= $this->url->get($language->img) ?>" height="32" width="32" alt="<?= $language->texto ?>"> <?= $language->texto ?></span>
                                </a>
                            </li>

					</ul>
				</li>
				<?php } else { ?>
                <li class="dropdown">
                    <span class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0">
                        <a hreflang="<?= $language->hreflang ?>" rel="alternate" href="<?= $this->url->get($language->href) ?>" target="_self" class="link-lang" data-lang="<?= $language->texto ?>">
                            <span><img class="<?= $language->flag ?>" src="<?= $this->url->get($language->img) ?>" height="32" width="32" alt="<?= $language->texto ?>"></span>
                        </a>
                    </span>
                </li>
                <?php } ?>
                <?php $v93001410865219830581incr++; } ?>
			</ul>	
		</nav>
	</div>
</div>