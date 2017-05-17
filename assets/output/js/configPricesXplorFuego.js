define(["moment"], function (moment) {
(function ($p) {
    window.moment = moment;
    $p("#precio").price({
        baseProduct: "XPEFTI_0_12",
        coin: "MXN",
        lang: "es",
        cnInfant: 0,
        cnDirect : 0, // COMPRA DIRECTA
        upgrades: [
            { "T": "XTXPFTI_1_12" },
            { "P": "PAQF1P_0_5" }
        ]
    });
})(sa);
})
