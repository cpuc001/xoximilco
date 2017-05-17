require.config({
	"baseUrl" : '/assets/output/js/',
	"paths" : {
        moment: "http://prueba.bexcaret.com/cart/js/moment",
        sa: "http://prueba.bexcaret.com/cart/plugins/builds/sa.min",
        configCart: "configCart", // local files
        configPrices: "configPricesXplorFuego", // local files
        prices: "http://prueba.bexcaret.com/cart/plugins/builds/prices.min",        
        datetimepicker: "http://prueba.bexcaret.com/cart/js/bootstrap-datetimepicker.min",
        impromptu: "http://prueba.bexcaret.com/cart/js/impromptu",
        velocity: "velocity.min",
        velocityui: "velocity.ui",
		'libraries' : 'libs.min'
	},
	"waitSeconds" : 200,
    // basket: {
    //     excludes : ['sa','prices','moment','configCart','configPrices','datetimepicker','impromptu'],
    //     unique : {
    //         util: 1 //change the number after edit util.js file (it will reload and recache it)
    //     }
    // },
	shim : {
        // 'Hammer': {
        //   exports: 'Hammer'
        // },
        velocityui : {
            deps : ["velocity"],
            exports : "Velocity"
        },
        'libraries': {
            //These script dependencies should be loaded before loading libraries
            //module value.
            deps : ["velocity","velocityui"],
            exports: 'Scripts'
        },
        prices: {
            deps: ["sa", "datetimepicker"],
            exports: "prices"
        },
        datetimepicker: {
            deps: ["sa", "moment"],
            exports: "datetimepicker"
        },
        impromptu : {
            deps : ['sa'],
            exports : "impromptu"
        },
        configCart: {
           deps: ["sa", "impromptu"],
           exports: "configCart"
       },
        configPrices: {
            deps: ["prices"],
            exports: "configPrices"
        }
	}
});

require(["configCart", "configPrices"]);