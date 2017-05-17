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
	<?php if ($lang == 'es') { ?>
	<div class="pleca-msi">
		<a class="toModal row" href="#modals" data-json='{"msi" : <?= json_encode($g->msi->modal) ?> }' data-modal="<?= $this->url->get('helpers/msi') ?>" data-toggle="modal">
		<img src="<?= $this->url->get('img/msi-small.png') ?>" alt="">
		</a>
	</div>
	<?php } ?>
	<div class="container">
		<div class="block header--top u-cf">
			<div class="header--item logo">
				<a href="<?= $domain . $this->url->get($lang) ?>" itemprop="logo" class="logo">
					<img itemprop="logo" class="img--responsive" src="<?= $domain . $this->url->get($g->logo->src) ?>" title="<?= $g->logo->title ?>" alt="<?= $g->logo->alt ?>">
				</a>
			</div>
			<nav class="u-pull-right">
				<div class="social u-pull-right">
					<ul class="nav--inline">
                        <?php foreach ($g->social as $social) { ?>
							<li><a class="link-social" href="<?= $social->href ?>" target="_blank" data-red="<?= $social->red ?>"><i class="icon <?= $social->class ?>"></i></a></li>
                        <?php } ?>
					</ul>
				</div>
				<div class="u-pull-right">
					<ul class="nav--inline">
						<?php foreach ($g->nav->desktop->secundario as $menu_secundario) { ?>
							<li><a href="<?= $this->url->get($lang . '/' . $menu_secundario->href) ?>"><i class="icon <?= $menu_secundario->icon ?>"></i> <span><?= $menu_secundario->menu ?></span></a></li>
						<?php } ?>
					</ul>
				</div>
			</nav>
		</div>
		<div class="block header--bottom u-cf">
		<nav>
	<ul class="nav-primary">
		<?php foreach ($g->nav->desktop->main as $n) { ?>

			<?php if (!isset($n->submenus)) { ?>
				<li <?php if ($section == $n->section) { ?> class="current" <?php } ?>>
					<a <?php if ($n->href != '') { ?> href="<?= $this->url->get($lang . '/' . $n->href . '/') ?> "<?php } ?>><span><?= $n->menu ?></span></a>
				</li>
			<?php } else { ?>
				<li class="dropdown <?php if ($section == $n->section) { ?>current<?php } ?>">
					<a><span><?= $n->menu ?></span></a>
					<ul class="nav dropdown-menu" data-type="large">
						<?php foreach ($n->submenus as $submenu) { ?>
							<li <?php if ($current_page == '/' . $lang . '/' . $submenu->href . '/') { ?> class="current" <?php } ?>>
								<?php if (!isset($submenu->ext)) { ?>
									<a href="<?= $this->url->get($lang . '/' . $submenu->href . '/') ?>">
										<span><?= $submenu->menu ?></span>
									</a>
								<?php } else { ?>
									<a href="<?= $submenu->href ?>" target="_blank">
										<span><?= $submenu->menu ?></span>
									</a>
								<?php } ?>
							</li>
						<?php } ?>
					</ul>
				</li>
			<?php } ?>

		<?php } ?>
		
	</ul>
</nav>
		</div>
	</div>