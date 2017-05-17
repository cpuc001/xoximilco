<?php $this->_macros['attributes'] = function($__p = null) { if (isset($__p[0])) { $data = $__p[0]; } else { if (isset($__p["data"])) { $data = $__p["data"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'attributes' was called without parameter: data");  } }  ?><?php foreach ($data as $attribute => $value) { ?>
		<?= $attribute ?><?php if (($value != '')) { ?>
			="<?= $value ?>"<?php } ?>
		<?= ' ' ?><?php } ?><?php }; $this->_macros['attributes'] = \Closure::bind($this->_macros['attributes'], $this); ?><?php $this->_macros['schema'] = function($__p = null) { if (isset($__p[0])) { $data = $__p[0]; } else { if (isset($__p["data"])) { $data = $__p["data"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'schema' was called without parameter: data");  } }  ?>
	<<?= $data->tag ?>  <?php if (isset($data->attributes)) { ?> <?= $this->callMacro('attributes', [$data->attributes]) ?> <?php } ?> >
	<?php if (isset($data->text)) { ?>
		<?= $data->text ?>
	<?php } ?>
	<?php if (isset($data->items)) { ?><?php foreach ($data->items as $item) { ?>
			<?= $this->callMacro('schema', [$item]) . ' ' ?><?php } ?>
	<?php } ?>
	<?php if (isset($data->textafter)) { ?>
		<?= $data->textafter ?>
	<?php } ?>
	</<?= $data->tag ?>><?php }; $this->_macros['schema'] = \Closure::bind($this->_macros['schema'], $this); ?>


<div class="border pleca_1"></div>
<div class="upperfooter">
    <div class="container">
        <div class="parks">
            <?php foreach ($g->footer->logos as $logo) { ?>
                <div class="parks--logo"><a class="lazy" href="<?= $logo->href ?>"><img class="img--responsive" src="<?= $this->url->get('img/blank.gif') ?>" data-src="<?= $this->url->get($logo->src) ?>" alt="<?= $logo->alt ?>"></a></div>
            <?php } ?>
        </div>
        <?php if (!$desktop) { ?>
            <div class="social u-cf">
                <ul class="nav nav--inline nav-icon">
                    <?php foreach ($g->social as $social) { ?>
                        <li class="nav--item"><a class="link-social" href="<?= $social->href ?>" target="_blank" data-red="<?= $social->red ?>"><i class="icon <?= $social->class ?>"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
        <div class="accordion u-cf">
            <div class="accordion--item is_close">
                <div class="accordion-header"><i class="icon icon-plus-circled icon-mark"></i><h6><?= $g->footer->links ?><i class="icon icon-angle-down"></i></h6></div>
                <div class="accordion-content">
                    <div class="flex--wrap" data-items="<?php if ($mobile) { ?>2<?php } else { ?>3<?php } ?>">
                        <?php foreach ($g->footer->superior->principal as $seccion) { ?>
                        <div class="flex--item">
                            <h5><?= $seccion->title ?></h5>
                            <ul class="list <?= ($mobile ? 'list-mobile' : '') ?> u-cf">
                            <?php foreach ($seccion->links as $link) { ?>
                                <li>
                                    <a class="text--align-left" title="<?= $link->text ?>" <?= ((isset($link->ext) && $link->ext == true) ? 'href="' . $link->href . '" target="_blank"' : 'href="' . $this->url->get($lang . '/' . $link->href) . '"') ?>>
                                        <span><?= $link->text ?></span>
                                    </a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                    <ul class="list list-columns list-bars <?= ($mobile ? 'list-mobile' : '') ?>">
                        <?php foreach ($g->footer->superior->secundario as $link) { ?>
                            <li>
                                <a class="text--align-left" title="<?= $link->text ?>" <?= ((isset($link->ext) && $link->ext == true) ? 'href="' . $link->href . '" target="_blank"' : 'href="' . $this->url->get($lang . '/' . $link->href) . '"') ?> <?= (isset($link->rel) ? 'rel="nofollow"' : '') ?>>
                                    <span><?= $link->text ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border pleca_2"></div>
<div class="bottomfooter">
    <div class="container">
        <div class="accordion u-cf">
            <div class="accordion--item is_close">
                <div class="accordion-header"><i class="icon icon-phone icon-mark"></i><h6><?= $g->header->atencion->footer ?><i class="icon icon-angle-down"></i></h6></div>
                <div class="accordion-content">
                    <h5><?= $g->header->atencion->footer ?></h5>
                    <ul class="list list-columns phones" data-column="3">
                        <?php foreach ($g->header->atencion->sub as $s) { ?>
                            <li><a class="num-phone-footer" href="<?= $s->href ?>"><span><?= $s->texto ?></span></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <?= $this->callMacro('schema', [$g->schemas->footer->organization]) ?>
    </div>
</div>
