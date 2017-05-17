require.config({
	"baseUrl" : '/assets/output/js/',
	"paths" : {
        /***** 
        PRUEBAS
          moment: "http://prueba.bexcaret.com/cart/js/moment",
         sa: "http://prueba.bexcaret.com/cart/plugins/builds/sa.min",
         configCart: "configCart", // local files
         configPrices: "configPrices", // local files
         prices: "http://prueba.bexcaret.com/cart/plugins/builds/prices.min",        
         datetimepicker: "http://prueba.bexcaret.com/cart/js/bootstrap-datetimepicker.min",
         impromptu: "http://prueba.bexcaret.com/cart/js/impromptu",
        /******/
        /*** PRODUCCION ****/
         moment: "https://www.bexcaret.com/cart/js/moment",
        sa: "https://www.bexcaret.com/cart/plugins/builds/sa.min",
        configCart: "configCart", // local files
        configPrices: "configPrices", // local files
        prices: "https://www.bexcaret.com/cart/plugins/builds/prices.min",        
        datetimepicker: "https://www.bexcaret.com/cart/js/bootstrap-datetimepicker.min",
        impromptu: "https://www.bexcaret.com/cart/js/impromptu",
        

        //Hammer: "hammer.min",
        inview: "in-view",
        //velocity: "velocity.min",
        //velocityui: "velocity.ui",
        //baguettebox : "baguetteBox.min",
        modulesConvert : "modulesConvert.min",
		'libraries' : 'libs.min'
	},
	"waitSeconds" : 200,
	shim : {
        // 'Hammer' :{
        //     exports : 'Hammer'
        // },
        'inview' :{
            exports : 'Inview'
        },
        'libraries': {
            //These script dependencies should be loaded before loading libraries
            //module value.
            deps : ["modulesConvert"],
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

//require(["configCart", "configPrices"]);