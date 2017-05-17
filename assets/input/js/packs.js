	function getChecked(){
		var filterWrap = document.getElementById('filter'); //$('#filter');
		var childs = filterWrap.querySelectorAll('input:checked');
		//var selectedChilds = childs

		var values = [].map.call(childs, function(obj){
			return obj.value;
		});

		return values;
	};


	function findEl (getChecked){
		var arrayValues = getChecked;
		var el = document.getElementsByClassName('item__package');

		var price = arrayValues[0];
		var rel = arrayValues[1];
		var park = arrayValues[2];

		Array.prototype.equal = function(){
			for ( var i = 1; i < this.length; i++ ){
				if ( this[i] !== this[0] )
					return false;
			}

			return true;
		}

		if ( arrayValues.equal() ){
			clearAll(el);
		}else{
			$(el).each(function(index, el) {
				//var arrayElPrice = this.getAttribute('data-price');
				var arrayElRel = this.getAttribute('data-rel') == null ? 'N/A' : this.getAttribute('data-rel');
				var arrayElPark = this.getAttribute('data-park') == null ? 'N/A' : this.getAttribute('data-park');
				
				//var _price = arrayElPrice.split(' ');
				var _rel = arrayElRel.split(' ');
				var _park = arrayElPark.split(' ');

				function isInArray(arr, value) {
	    			return arr.indexOf(value.toLowerCase()) > -1;
				};

				//if ( arrayValues === 'all' )
				if( !isInArray(_park, arrayElPark) || !isInArray(_rel, arrayElRel) ){

					// if ( this.style.display === 'none' ){
					// 	Velocity( $(this), "transition.slideDownIn", 500);
					// }else{
					Velocity($(this), "transition.slideUpOut", 600);

				}

				if( !isInArray(_park, arrayElPark) || !isInArray(_rel, arrayElRel) ){
					if ( this.style.display === 'none' ){
						Velocity($(this), "transition.slideDownIn", 300);	
					}
				}

			});
		}
	};

	function clearAll(el){
		$(el).each(function(index, el) {
			this.removeAttribute('style');
		});
	}

	$('#doFilter').on('click', function(){
		var get = getChecked();
		findEl(get);
		//$(this).parent('.dropdown').removeClass('open');
		console.log($(this).parent().hasClass('dropdown'));
	});

	$('#cancelFilter').on('click', function(){
		var el = document.getElementsByClassName('item__package');
		clearAll(el);
	});

