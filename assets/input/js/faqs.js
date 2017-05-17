		function goTop(){
	        var target = $('#topic');
	        Velocity(target, 'scroll', {
	            duration: 500,
	            offset: -40,
	            easing: 'ease-in-out'
	        });
		};



	var topics = $('#topic');
	var questions = $('#questions');
	var questionsBlock = $('#questions-block');

		$.ajax({
		    url: './questions.json',
		    type: 'json'
			}).then(function (resp) {
				var arrayEl = resp;
				var it = $('.topic');

  				$(it).on('click', function(event) {

  					event.preventDefault();
  					questions.html('');
					var l = $(this).attr('data-rel');
					var s = l.replace('topic', '');
					var elArray = arrayEl[s];

					if ( s > (arrayEl.length - 1) ){
						Velocity( questions.append('<li class="questions" data-rel="questions'+ index +'">Por el momento no tenemos preguntas relacionadas a este tema, por favor comunicate a nuestros números de Atencion al cliente</li>'), 'opacity', 100);
					}else{
						$(elArray).each(function(el,index,c){
							//console.log(el);
							questions.append('<li class="questions" data-rel="questions'+ index +'"><span class="theme">' + this.title +'</span></li>');
						});
					}


					//questions.html('<li class="questions" data-rel="questions'+ index +'">' + this.title +'</li>');
  				});

				$(resp).each(function(el,index,c){
					$(el).each( function(el,index,c){
						var a = el,
							b = index,
							c = c;

						questionsBlock.append('<div class="item item_border u-cf questions theme" data-rel="question'+ index +'"><h4>' + this.title +'</h4><p>'+ this.content +'</p><button onclick="goTop()" class="button button--block button-ghost u-pull-right"> Regresar <i class="icon icon-angle-up"></i></button></div>');
					});
				});

	  		}).always(function (resp) {
	    		//console.log(resp);
	  		});