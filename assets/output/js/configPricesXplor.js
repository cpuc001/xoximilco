define(["moment"], function (moment) {
(function ($p) {
    window.moment = moment;
    $p("#precio").price({ 
        baseProduct: "XPETI_0_2",
        coin: "MXN",
        lang: "es",
        cnInfant: 0,
        cnDirect : 0, // COMPRA DIRECTA
        upgrades: [
            { "T": "XTXPTI_1_2" }, 
            { "P": "PAQF1P_0_5" }
        ]
    });
})(sa);
})
