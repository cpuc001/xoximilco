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