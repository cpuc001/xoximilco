(function ($p) {
    window.moment = moment;
    $p("#precio").price({
        baseProduct: "XOEC_0_10",
{% if coupon is defined %}
        coupon : "{{ coupon }}",
{% endif %}
{% if mobile and coupon is not defined %}
    coupon : "MOVI15",
{% endif %}
        lang: "{{ lang }}",
        cnInfant: 0,
        cnDirect : 1,
        upgrades: [
            { "T": "XTXO_1_10" }
        ]
    });
})(sa);