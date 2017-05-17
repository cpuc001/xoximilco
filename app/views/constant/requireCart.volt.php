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