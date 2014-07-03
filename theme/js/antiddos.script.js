(function($) {

	$(document).ready(function() {
		if ( $('#map').length ) {
			var map;
			var arrMarkers = [];
			var arrInfoWindows = [];
			
			function mapInit(){
				var centerCoord = new google.maps.LatLng(55.136384, 72.019968);
				var mapOptions = {
					zoom: 3,
					center: centerCoord,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("map"), mapOptions);
				
				//Определяем область отображения меток на карте
				var latlngbounds = new google.maps.LatLngBounds();
				
				var data = $.parseJSON($("#marker-json").html());
				$.each(data.data, function(data, value, i) {
					$.ajax({
						url: 'http://maps.googleapis.com/maps/api/geocode/json?address='+ value.title +'&sensor=false&language=en',             // указываем URL и
						dataType : "json",  
						success: function (data, textStatus) {
							$.each(data, function() {
								var mastoch= data.results[0].geometry.location;
								
								var marker = new google.maps.Marker({
									position: new google.maps.LatLng(mastoch.lat, mastoch.lng),
									map: map
								});
								latlngbounds.extend(new google.maps.LatLng(mastoch.lat, mastoch.lng));
								arrMarkers[i] = marker;
							})
						} 
					});
				});
			};
			mapInit();
		}
	
		
		
		
		//console.log( $.each(data.data, function(index, value) {'http://maps.googleapis.com/maps/api/geocode/json?address='+ value.title +'&sensor=false&language=en'}) );
		if ( $('.page-reviews-text').length ) {
			$(".page-reviews-text").shorten({
		     		"showChars" :  521,              
		      		"moreText"  : "show all",      
		      		"ellipsesText" : "...",         
		      		"lessText"  : "hide"   
		  	});
		}
		//if ( $('#products-carousel').length  ) {
		//	$('#products-carousel').carouFredSel({
		//		auto: false,
		//		prev: '#prev',
		//		next: '#next',
		//		items: 3,
		//		visibleItems: 3,
		//		height: 340,
		//		mousewheel: true,
		//		swipe: {
		//			onMouse: true,
		//			onTouch: true
		//		}
		//	});
		//}
		//if ( $('#products-carousel1').length  ) {
		//	$('#products-carousel1').carouFredSel({
		//		auto: false,
		//		prev: '#prev1',
		//		next: '#next1',
		//		items: 3,
		//		visibleItems: 3,
		//		height: 340,
		//		mousewheel: true,
		//		swipe: {
		//			onMouse: true,
		//			onTouch: true
		//		}
		//	});
		//}
		//if ( $('#products-carousel2').length  ) {
		//	$('#products-carousel2').carouFredSel({
		//		auto: false,
		//		prev: '#prev2',
		//		next: '#next2',
		//		items: 3,
		//		visibleItems: 3,
		//		height: 340,
		//		mousewheel: true,
		//		swipe: {
		//			onMouse: true,
		//			onTouch: true
		//		}
		//	});
		//}
		//if ( $('#products-carousel3').length  ) {
		//	$('#products-carousel3').carouFredSel({
		//		auto: false,
		//		prev: '#prev3',
		//		next: '#next3',
		//		height: 340,
		//		items: 3,
		//		visibleItems: 3,
		//		mousewheel: true,
		//		swipe: {
		//			onMouse: true,
		//			onTouch: true
		//		}
		//	});
		//}
		//if ( $('#products-carousel4').length  ) {
		//	$('#products-carousel4').carouFredSel({
		//		auto: false,
		//		prev: '#prev4',
		//		next: '#next4',
		//		height: 340,
		//		items: 3,
		//		visibleItems: 3,
		//		mousewheel: true,
		//		swipe: {
		//			onMouse: true,
		//			onTouch: true
		//		}
		//	});
		//}
		//if ( $('#products-carousel5').length  ) {
		//	$('#products-carousel5').carouFredSel({
		//		auto: false,
		//		prev: '#prev5',
		//		next: '#next5',
		//		height: 340,
		//		items: 3,
		//		visibleItems: 3,
		//		mousewheel: true,
		//		swipe: {
		//			onMouse: true,
		//			onTouch: true
		//		}
		//	});
		//}
		//if ( $('#products-carousel6').length  ) {
		//	$('#products-carousel6').carouFredSel({
		//		auto: false,
		//		prev: '#prev6',
		//		next: '#next6',
		//		height: 340,
		//		items: 3,
		//		visibleItems: 3,
		//		mousewheel: true,
		//		swipe: {
		//			onMouse: true,
		//			onTouch: true
		//		}
		//	});
		//}
		
		$('.chooseview.gridshow').on('click', function() {
			$(this).slideUp(800);
			$(this).parents('.r-tabs-state-active').find('.list_carousel').slideUp(800);
			$(this).parents('.r-tabs-state-active').find('.grid-view').slideDown(800);
		});
		$('.chooseview.slideshow').on('click', function() {
			$(this).parents('.r-tabs-state-active').find('.chooseview.gridshow').slideDown(800);
			$(this).parents('.r-tabs-state-active').find('.grid-view').slideUp(800);
			$(this).parents('.r-tabs-state-active').find('.list_carousel').slideDown(800);
			$('html, body').animate({scrollTop:$('#block-antiddos-products').position().top}, 800);
		});
		
		// Анимация списка выбора языка.
		$('#block-antiddos-languages ul.list-languages').on('click', function() {
			$(this).hasClass('collapsed') ? $(this).removeClass('collapsed') : $(this).addClass('collapsed');
		});

		$('#content-tabs div').hide();
		$('#links-tabs ul li:first-child').attr('id');
		$('#content-tabs div:first-child').fadeIn();

		$('#links-tabs ul li a').click(function(e) {
			e.preventDefault();
			$('#content-tabs div').hide();
			$('#links-tabs ul li').attr('id');
			$(this).parent().attr('id');
			$('#' + $(this).attr('id')).fadeIn();
		});
		
		if ( $('.tab-container').length  ) {
			$('.tab-container').responsiveTabs({
				animation: "slide",
				duration: 500
			});
		}

		// Animation chsrta on page about us
		if ( $('.page-about-us .charts-box').length ) {
			$( window ).load(function() {
				var chartHieght = [240, 180, 137, 129, 93];
				setTimeout(function() {
					$.each( $('.page-about-us .charts-box li p'), function( key, value ) {
						$(this).height( chartHieght[key] );
					});
				}, 250);
			});
		}

		if ( $('.page-all-products .charts-box').length ) {
			$( window ).load(function() {
				var chartHieght = [240, 180, 137, 129, 93];
				setTimeout(function() {
					$.each( $('.page-all-products .charts-box li p'), function( key, value ) {
						$(this).height( chartHieght[key] );
					});
				}, 250);
			});
		}
		
		if ( $('ul.custom-select').length ) {
			$("ul.custom-select:not(.os-modification)").mCustomScrollbar();
		}

		$('.without-protection').addClass('active');

		$('input:radio').click(function() {
			$('label:has(input:radio:checked)').addClass('active');
			$('label:has(input:radio:not(:checked))').removeClass('active');
    		});

		$('.windows-select').click(function (e) {

			// Высчитываем высоту сех елементов спска.
			var heightLi = 46; // Высота одного елемента елемента.
			var heightBox = 200; // Высота видимой области списка.
			var element = $(this);

			if ( $('.page-cloud-hosting').length )
				heightLi = 28;

			if ( $(element).next('.custom-select-list').find('ul li').length * heightLi < heightBox )
				heightBox = $(element).next('.custom-select-list').find('ul li').length * heightLi + 16;

			$('.custom-select-list').animate({height: 0}).css({'border-bottom': 'none'});
			if ( $(element).next('.custom-select-list').height() == 0 ) {
				$(element).next('.custom-select-list').animate({height: heightBox});
				setTimeout(function() {
					$(element).next('.custom-select-list').css({'border-bottom': '3px solid #ffffff'});
				}, 500);
			}
			else {
				$(element).next('.custom-select-list').animate({height: 0});
			}

			
	    	});

		$('.operating-system-select').live('click', function(e) {
			e.stopPropagation();
		});


		$(document).click(function (e) {
			$('.custom-select-list').css({'border-bottom': 'none'}).animate({height: '0px'});
		});


	    	$('ul.custom-select li').live('click', function() {

	    		var element = $(this);

	    		$(element).parents('.custom-select-list').css({'border-bottom': 'none'});
	    		$(element).parents('.custom-select-list').prev().find('div').html($(element).find('.custom-select-text').html());
	    		$(element).parents('.custom-select-list').animate({height: 0});

	    		if ( $('.page-cloud-hosting').length && $(element).parents('ul.select-os').length ) {
	    			$('.modification-select').find('p').text('-');
	    			var neededSelect = $('.os-modification').find('div[os="' + $(element).find('p').text() + '"]');
	    			$('.modification-select').removeClass('disable');
	    			$('.modification-select').parents('div.cloud-select').find('.custom-select-list').remove();
	    			$('.modification-select').parents('div.cloud-select').append( $(neededSelect).clone() );
	    			$('.modification-select').parents('div.cloud-select').find('ul.custom-select:not(.mCustomScrollbar _mCS_4)').mCustomScrollbar();
	    			if ( neededSelect.length == 0 ) {
	    				$('.modification-select').addClass('disable');
	    			}
	    		}

	    	});
		
		$('.page-ddos-protection .biling-plan').mouseenter(function(){
			$('.page-ddos-protection .biling-plan').removeClass('open');
			$(this).addClass('open');
		});

		$('.page-hardware-protection .biling-plan').mouseenter(function(){
			$('.page-hardware-protection .biling-plan').removeClass('open');
			$(this).addClass('open');
		});
		
});

	


})(jQuery);
