require(['libraries','modulesConvert','inview'], function(Scripts, Modules, Inview) {
	$.domReady(function () {

		Modules.run('.gallery', {
    		animation: 'fadeIn',
    		noScrollbars: true
		});

		var winDow = $(window);
		var header = $('.header--bottom');
		var headerHeight = $('header').height();
		var foot = $('footer').height();
		var body = $('body').height();
		$(winDow).on('scroll', function(e){
			var st = window.pageYOffset || document.documentElement.scrollTop
			if( st > ( headerHeight / 2) ){
				$(header).addClass('is_fixed');
			};

			if( st < ( headerHeight / 2) || st > (body - foot - 837) ){
				$(header).removeClass('is_fixed');
			};
		});

		Inview( '.lazy' ).on( 'enter', function( figure ) {
		 
		     var img = figure.querySelector( 'img' ); // 1
		 
		     if (  'undefined' !== typeof img.dataset.src ) { // 2
		 
		         figure.classList.add( 'is-loading' ); // 3
		 
		         // 4
		         newImg = new Image();
		         newImg.src = img.dataset.src;
		         newImg.classList.add( 'img--responsive' );
		 
		         newImg.addEventListener( 'load', function() {
		 
		            figure.innerHTML = ''; // 5
		            figure.appendChild( this );
		 
		            // 6
		            setTimeout( function() {
		               figure.classList.remove( 'is-loading' );
		               figure.classList.add( 'is-loaded' );
		            }, 300 );
		         } );
		     }
		} );
		

		var carousel = document.getElementById('carouselHtml');

		if (carousel != null) {
			
			function addEvent(el, type, handler) {
			    if (el.attachEvent) el.attachEvent('on'+type, handler); else el.addEventListener(type, handler);
			};
			function removeEvent(el, type, handler) {
			    if (el.detachEvent) el.detachEvent('on'+type, handler); else el.removeEventListener(type, handler);
			};

			var slide = $('.carousel-inner .toModalS');
			var video = $(slide).attr('data-modal');
			
			$(slide).on('click', function(event) {
				event.preventDefault();
				event.stopPropagation();
				 if ( $(this).hasClass('play') ) {
				 	//$(this).addClass()
				}else{
					$(this).attr('data-interval', 'false');
					$(this).addClass('play').append('<div class="vid"><div class="embed-responsive"><iframe width="990" height="557" src="https://www.youtube.com/embed/' + video + '?rel=0&amp;controls=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>');
				}

			});

			carousel.addEventListener('slid.bs.carousel', function(){
				$(this).attr('data-interval', 'true');
				$(slide).removeClass('play').find('.vid').remove();
			});		
	
		};

		var target = $('body');
		$('.go-top').on('click', function(e){
			Velocity(target, 'scroll', {
				duration: 500,
				offset: -40,
				easing: 'ease-in-out'
			});	        
		});

		var toModal = document.getElementsByClassName('toModal');
		var m = document.getElementById('modals');

		$(toModal).on('click', function(e) {
			e.preventDefault();
			/* Act on the event */
			var route = $(this).attr('data-modal');
			var modalTemplate = $(this).attr('data-target') || $(this).attr('href');
			json_data = $(this).attr('data-json');
			$.ajax({
				url : route,
				method : 'post',
				dataType : 'json',
				data : JSON.parse(json_data),
				success : function(resp){

					var modal2 = new Scripts.Modal(modalTemplate, {
							content :  resp
					});

                    //Válida si es el modal del formulario para el newsletter
                    if(document.querySelectorAll('[id="mc-embedded-subscribe-form"]').length){
                        //Agrega funcionalidad al evento submit del form
                        document.getElementById('mc-embedded-subscribe-form').addEventListener("submit", function(e){ 
                            e.preventDefault() ;
                            var form = e.target ;
                            var data = new FormData(form);
                            $.ajax({
                                url: "/helpers/mailchimp",
                                method: 'post', 
                                //dataType: 'json', 
                                data: data,
                                processData: false,  // tell jQuery not to process the data
                                contentType: false,   // tell jQuery not to set contentType
                                success: function (resp) {  

                                	//VARIABLES PARA MEDICION EN ANALYTICS
                                	var pais = document.getElementById("mce-MMERGE5").value;
                                	dataLayer.push({ 'action': 'newsletter',
                                		'label': pais, 
                                		'event': 'registros'
                                	});
                                	                                    var resp = JSON.parse(resp);
                                    var error_item = document.getElementsByClassName("m-item");
                                    for (var item in error_item){
                                        error_item[item].innerHTML = "";
                                    }
                                    for (var r in resp){
                                        document.getElementById('m-'+r).innerHTML = resp[r];
                                    }
                                } 
                            });
                        });
                    }
					var Carousels = document.querySelectorAll('[id="carouselAjax"]'), i = 0, crl = Carousels.length;
					for (i;i<crl;i++) {
						var c = Carousels[i], options = {};
						options.interval = c.getAttribute('data-interval') && c.getAttribute('data-interval');
						options.pause = c.getAttribute('data-pause') && c.getAttribute('data-pause') || 'hover';
						options.keyboard = c.getAttribute('data-keyboard') && c.getAttribute('data-keyboard') || false;
						options.duration = c.getAttribute('data-duration') && c.getAttribute('data-duration') || false;
						new Scripts.Carousel(c, options)
					}

				},
				error : function(err){
					console.log(err);
				}

			});
			
		});


	//function lateralNavigations(){
	if (Response.band(0, 1024) === true ){

		/*var navLateralOption = $('.coverNav');
		var back = $('.return');

		navLateralOption.each(function(){
			this.onclick = function(){
				//Catch elements
				var levelClass = $(this).attr('value');
				Velocity( $('.hidden-lateral.' + levelClass), "transition.slideRightIn", 500);
			}
		});

		back.each(function(){
			this.onclick = function(){
				Velocity( $(this).parent(), "transition.slideRightOut", 500);
			}
		});*/


        var acc = $('.accordion--item');
        acc.on('click', function(event) {
            //event.preventDefault();
            var is_open = $(this).hasClass('is_open');
            var contenedor = $(this).parent();

            if(acc.hasClass('is_open')){
                contenedor.find('.accordion--item i.icon-angle-up').attr('class','icon icon-angle-down');
                Velocity(contenedor.find(".accordion-content"), "slideUp", 400);
                contenedor.find('.accordion--item').removeClass('is_open');
            }

            if( ! is_open ){
                $(this).toggleClass('is_open');
                $(this).find("i.icon-angle-down").attr('class','icon icon-angle-up');
                Velocity($(this).find(".accordion-content"), "slideDown", 400);
            }
            //event.stopPropagation();
        });

		// Menu
		var btnNav = $('#showNav');
		var hiddenNav = $('#nav-hide');

		btnNav.on('click', function(event) {

			if( $(this).hasClass('open') ){
				$(this).removeClass('open');
				$(this).find('i').attr('class', 'icon icon-plus-circled');
				Velocity(hiddenNav, "transition.slideUpOut", 400);

			}else{
				$(this).addClass('open');
				$(this).find('i').attr('class', 'icon icon-remove-circled-two');
				Velocity(hiddenNav, "transition.slideDownIn", 400);
			};

		});

		var winDow = $(window);
		var header = $('header');
		var headerHeight = header.height();

		winDow.on('scroll', function(e){
			var st = window.pageYOffset || document.documentElement.scrollTop
			if( st > ( headerHeight / 2) ){
				header.addClass('is_fixed');
			}

			if( st < ( headerHeight / 2) ){
				header.removeClass('is_fixed');
			}

            if( st > 500 && btnNav.hasClass('open') ){
                btnNav.removeClass('open');
                btnNav.find('i').attr('class', 'icon icon-plus-circled');
                Velocity(hiddenNav, "transition.slideUpOut", 400);
            }
		});
	};

	/**** VARIABLES PARA GTM ****/

	/**** POR QUE COMPRAR CON NOSOTROS****/
	var linkPqComprar = document.getElementById("trigger-por-que-reservar");
	if (linkPqComprar) {
		linkPqComprar.addEventListener("click",function(){
			dataLayer.push({
				'event': 'reservarconnosotros'
			});
		});	
	}
	/**** COMO AHORRAR ****/
	var botonesDescuento = document.querySelectorAll(".savings--item button");
	for (var i = botonesDescuento.length - 1; i >= 0; i--) {
		botonesDescuento[i].addEventListener("click",function(){
			var action = this.innerText;
			dataLayer.push({
				'action' : action,
				'event': 'ahorrar'
			});
		});
	}
	/**** TELEFONOS HEADER MOBILE/DESKTOP ****/
	var linksTelefonosHeader = document.getElementsByClassName("num-phone-top");
	for (var i = linksTelefonosHeader.length - 1; i >= 0; i--) {
		linksTelefonosHeader[i].addEventListener("click",function(){
			var locacion = this.innerText.split(":")[0];
			dataLayer.push({
				'action': 'atencion a clientes',
				'label': locacion,
				'event': 'llamadas'
			});
		});
	}
	/**** TELEFONOS FOOTER ****/
	var linksTelefonosFooter = document.getElementsByClassName("num-phone-footer");
	for (var i = linksTelefonosFooter.length - 1; i >= 0; i--) {
		linksTelefonosFooter[i].addEventListener("click",function(){
			var locacion = this.innerText.split(":")[0];
			dataLayer.push({
				'action': 'bottom',
				'label': locacion,
				'event': 'llamadas'
			});
		});
	}

	/**** REDES SOCIALES MOBILE/DESKTOP ****/
	var linksRedesSociales = document.getElementsByClassName("link-social");
	for (var i = linksRedesSociales.length - 1; i >= 0; i--) {
		linksRedesSociales[i].addEventListener("click",function(e){
			var red = this.getAttribute("data-red");
			dataLayer.push({
				'event': 'redessociales',
				'actionredes': red + ' Xoximilco'
			});
		});
	}
	/**** ENLACE DE IDIOMA ****/
	var linksIdiomas = document.getElementsByClassName("link-lang");
	for (var i = linksIdiomas.length - 1; i >= 0; i--) {
		linksIdiomas[i].addEventListener("click",function(event){
			var idioma = this.getAttribute("data-lang");
			dataLayer.push({
			'event': 'cambiodeidioma', 
			'actionidioma': idioma
			});
		});
	}
	/**** CLICK EN UNA PROMOCION ****/
	function gtmSliderClick(clickevent) {
		var promoWrap = this.parentNode;
		var promoId = promoWrap.getAttribute("data-promoId");
		var promoName = promoWrap.getAttribute("data-promoName");
		var promoCreative = promoWrap.getAttribute("data-promoDescription");
		var promoPosition = promoWrap.getAttribute("data-promoPosition");
		dataLayer.push({
			'event': 'promotionClick', 
			'ecommerce': {
				'promoClick': { 
					'promotions': [
						{
						'id': promoId,
						'name': promoName,
						'creative': promoCreative, 
						'position': promoPosition
						}
					]
				} 
			}
		});
	}

	/****SLIDE HOME DE PROMOCIONES ****/
	var slidePromos = document.getElementsByClassName("slide-promotion");
	if (slidePromos.length) {
		var promotions = [];
		for (var i = 0 ; i < slidePromos.length; i++) {
			var promoId = slidePromos[i].getAttribute("data-promoId");
			var promoName = slidePromos[i].getAttribute("data-promoName");
			var promoCreative = slidePromos[i].getAttribute("data-promoDescription");
			var promoPosition = slidePromos[i].getAttribute("data-promoPosition");
			promotions.push({
				'id' : promoId,
				'name' : promoName,
				'creative' : promoCreative,
				'position' : promoPosition
			});
			var anchorPromo = slidePromos[i].getElementsByTagName("a");
			if (anchorPromo.length) {

				/**** CLICK EN UNA PROMO DEL SLIDE ****/
				anchorPromo[0].addEventListener("click",gtmSliderClick);

			}
		}
		/****SLIDE HOME DE PROMOCIONES ****/
		dataLayer.push({ 
			'event': 'promocionesInternas',
			'ecommerce': {
				'promoView': {
					'promotions': promotions
				}
			}
		});

	}
	/**** PROMOCIONES ABAJO HOME ****/
	var bottomHomePromotions = document.getElementsByClassName("home-atraction-promotion");
	if (bottomHomePromotions.length) {
		for (var i = bottomHomePromotions.length - 1; i >= 0; i--) {
			bottomHomePromotions[i].addEventListener("click",gtmSliderClick);
		}
	}
	/**** SECCION DE PROMOCIONES ****/
	var promosEspeciales = document.getElementsByClassName("promo-register");
	if (promosEspeciales.length) {
		for (var i = promosEspeciales.length - 1; i >= 0; i--) {
			promosEspeciales[i].addEventListener("click",gtmSliderClick);
		}
	}
	/**** ****/
	/**** ****/

}); // T H E  E N D  O N  R E A D Y





}) // T H E E N D  O F  R E Q U I R E