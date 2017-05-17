
	

	<div class="row">
		<div class="header--item home">
			<a class="button button--square button-icon" href="<?= $this->url->get($lang) ?>"><i class="icon icon-home"></i></a>
		</div>
		<div class="header--item logo">
			<a href="<?= $this->url->get($lang) ?>"><img class="img--responsive" src="<?= $this->url->get('img/xox.png') ?>" alt="Xplor"></a>
		</div>
		<div class="header--item carrito" id="cart">
			
		</div>
		<div class="header--item divisa" id="currency">
			 
		</div>
		<div class="header--item lang">
            <?php foreach ($languages as $language) { ?>
			<button class="button button--square dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" tabindex="0">
				<a hreflang="<?= $language->hreflang ?>" rel="alternate" href="<?= $this->url->get($language->href) ?>" target="_self" class="link-lang" data-lang="<?= $language->texto ?>">
					<span><img class="<?= $language->flag ?> flag" src="<?= $this->url->get($language->img) ?>" height="32" width="32" alt="<?= $language->texto ?>"></span>
				</a>
			</button>
            <?php } ?>
			
		</div>
	</div>
	<nav>
		<ul class="nav nav-primary">
			<?php foreach ($g->nav->mobile->header as $n) { ?>
				<li class="text-align--center">
					<a href="<?= $this->url->get($lang . '/' . $n->href) ?>"><span><?= $n->menu ?></span></a>
				</li>
			<?php } ?>
			<li class="text-align--center" >
				<button class="button button--square button-icon" id="showNav"><i class="icon icon icon-plus-circled"></i></button>
			</li>
		</ul>
		<div id="nav-hide" class="nav-hide hidden">
			<a href="tel:9988833143"  class="num-phone-top button button--block button-ghost "><i class="icon icon-telefono"></i>Cancún: 998-883-3143</a>
			
			
			<ul class="nav nav--block" id="accordion">
				<?php foreach ($g->nav->mobile->lateral as $n) { ?>

					<?php if (!isset($n->submenus)) { ?>
						<li>
                            <a class="title" href="<?= $this->url->get($lang . '/' . $n->href) ?>">
							    <span><?= $n->menu ?></span>
                            </a>
						</li>
					<?php } else { ?>
						<li class="acc accordion--item">
							<h6 class="title"><?= $n->menu ?> <i class="icon icon-angle-down"></i></h6>
							<ul class="hidden accordion-content">
								<?php foreach ($n->submenus as $sm) { ?>
									<li>
										<?php if (!isset($sm->ext)) { ?>
											<a class="nav--item" href="<?= $this->url->get($lang . '/' . $sm->href) ?>">
												<span><?= $sm->menu ?></span>
											</a>
										<?php } else { ?>
											<a class="nav--item" href="<?= $sm->href ?>" target="_blank">
												<span><?= $sm->menu ?></span>
											</a>
										<?php } ?>
									</li>
								<?php } ?>
							</ul>
						</li>
					<?php } ?>

				<?php } ?>
			</ul>
			<div class="hidden-lateral login" data-form="login">
				<button class="button button--inline button-icon return"><i class="icon icon-angle-left"></i> Regresar</button>
				<div class="u-cf"></div>
				<h3>Acceder a su cuenta</h3>
				<form action="">
					<label for="">Usuario</label>
					<input type="text">
					<label for="">Contraseña</label>
					<input type="text">
					<input class="button button--block button-ghost" type="submit" value="Ingresar">
				</form>
			</div>
			<div class="hidden-lateral text--align-center contact" data-form="contact">
				<button class="button button--inline button-icon return"><i class="icon icon-angle-left"></i> Regresar</button>
				<div class="u-cf"></div>
				<h3>Lada gratis desde México</h3>
					<ul class="list">
						<?php foreach ($g->header->atencion->sub as $telefonos_atencion) { ?>
							<li><a class="button button--block button-ghost" href="<?= $telefonos_atencion->href ?>"><span><?= $telefonos_atencion->texto ?></span></a></li>
						<?php } ?>
					</ul>
			</div>
		</div>
	</nav>

