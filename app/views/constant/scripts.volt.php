<script>
        /*LAZY LOAD CAROUSEL ITEMS STARTS AT SECOND SLIDE*/
        if(document.contains(document.getElementById('carouselHtml'))){
            var carousel = document.getElementById('carouselHtml');
            carousel.addEventListener('slide.bs.carousel', function(e) {
                var lazyL;
                var lazyR;
                lazyL = $(this).find('.item.active').next().find('img[data-src]');
                lazyR = $(this).find('.item').last().find('img[data-src]');
                lazyL.attr("src", lazyL.data('src'));
                lazyR.attr("src", lazyR.data('src'));
                lazyL.removeAttr("data-src");
                lazyR.removeAttr("data-src");
            });
        };
</script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
        WebFont.load({
            <?php if ($tablet || $desktop) { ?>
            google: {
                families: ['Source Sans Pro:400,700']
            },
            <?php } ?>
            custom: {
                families: ['iconexx'],
                urls: ['<?= $this->url->get('/assets/output/css/styles.css') ?>']
            }
        });
</script>



<?php if (isset($buybox_script)) { ?>
    <script>
            /*ASIDE WIDTH*/
            var sideNav = document.getElementsByTagName('aside');
            function resetNav() {
                document.getElementById('buybox').style.width = '100%';
            }
            function adjustNav() {
                var ww = window.innerWidth || document.documentElement.clientWidth;
                if ( ww >= 768 ) {
                    document.getElementById('buybox').style.width = sideNav[0].offsetWidth + 'px';
                } else { resetNav() }
            }
            window.addEventListener('resize', adjustNav, false);/* adjust on resize*/
            window.addEventListener('load', adjustNav, false);/* adjust on load*/
    </script>


    <?php if (!isset($is_ficha)) { ?>
        <script src="<?= $this->url->get('assets/input/js/require.js') ?>"></script>
<script>
    require(["<?= $this->url->get('assets/output/js/mainHome.js') ?>"],function () {
        require(["impromptu","prices","moment"],function (impromptu,prices,moment) {
            (function ($s) {
    $s("#toolbar").analitycs({
        cnLogin: 1,
        cnBoxCart: 1,
        currency: "<?= $moneda[0] ?>",
        lang: "<?= $lang ?>"
    });
})(sa);
            (function ($p) {
    window.moment = moment;
    $p("#precio").price({
        baseProduct: "XOEC_0_10",
<?php if (isset($coupon)) { ?>
        coupon : "<?= $coupon ?>",
<?php } ?>
<?php if ($mobile && !isset($coupon)) { ?>
    coupon : "MOVI15",
<?php } ?>
        lang: "<?= $lang ?>",
        cnInfant: 0,
        cnDirect : 1,
        upgrades: [
            { "T": "XTXO_1_10" }
        ]
    });
})(sa);
        });
    });
</script>
    <?php } ?>

<?php } elseif ($path_last != 'index') { ?>
    <script src="<?= $this->url->get('assets/input/js/require.js') ?>"></script>
<script>
    require(["<?= $this->url->get('assets/output/js/mainHome.js') ?>"],function () {
        require(["impromptu","prices","moment"],function (impromptu,prices,moment) {
            (function ($s) {
    $s("#toolbar").analitycs({
        cnLogin: 1,
        cnBoxCart: 1,
        currency: "<?= $moneda[0] ?>",
        lang: "<?= $lang ?>"
    });
})(sa);
            (function ($p) {
    window.moment = moment;
    $p("#precio").price({
        baseProduct: "XOEC_0_10",
<?php if (isset($coupon)) { ?>
        coupon : "<?= $coupon ?>",
<?php } ?>
<?php if ($mobile && !isset($coupon)) { ?>
    coupon : "MOVI15",
<?php } ?>
        lang: "<?= $lang ?>",
        cnInfant: 0,
        cnDirect : 1,
        upgrades: [
            { "T": "XTXO_1_10" }
        ]
    });
})(sa);
        });
    });
</script>
<?php } ?>
