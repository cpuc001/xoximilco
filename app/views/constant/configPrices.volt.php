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