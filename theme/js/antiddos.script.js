	(function($) {
	$(document).ready(function() {
				
		// Show/hide on Reviews page
		if ( $('.page-reviews-text').length ) {
			$(".page-reviews-text").shorten({
		     		"showChars" :  521,              
		      		"moreText"  : "show all",      
		      		"ellipsesText" : "...",         
		      		"lessText"  : "collapse"   
		  	});
		}

		//Show and hide mode on index for product jCarousel
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
		
		// Lang list animation
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

		// Chart animation on the page About us
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
		
		// Chart animation on the page All products
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
		
		// OS modification drop-down
		if ( $('ul.custom-select').length ) {
			$("ul.custom-select:not(.os-modification)").mCustomScrollbar();
		}
		
		// With/without protection radio
		$('.without-protection').addClass('active');

		$('input:radio').click(function() {
			$('label:has(input:radio:checked)').addClass('active');
			$('label:has(input:radio:not(:checked))').removeClass('active');
    		});

		$('.windows-select').click(function (e) {

			// Calculating height of the list elements
			var heightLi = 46; // One element height
			var heightBox = 200; // Visible area height
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
	    			$('.modification-select').find('p').text('OS version not selected');
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
