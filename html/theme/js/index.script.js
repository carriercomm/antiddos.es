		jQuery(function(){
			
			jQuery('#newslider').camera({
				height: '400px',
				loader: 'bar',
				pagination: true,
				fx: 'scrollLeft',
				loaderColor: '#f57815',
				thumbnails: false,
				loaderOpacity: 1,
				loaderPadding: 2,
				loaderStroke: 6,
				playPause: false
			});
			
			
			jQuery(document).ready(function() {
				
			if ( jQuery('#products-carousel').length  ) {
			jQuery('#products-carousel').carouFredSel({
				auto: false,
				prev: '#prev',
				next: '#next',
				items: 3,
				visibleItems: 3,
				height: 340,
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
					}
				});
			}
			
		jQuery('.r-tabs-nav .r-tabs-tab').on('click', function() {
		if ( $('#products-carousel1').length  ) {
			$('#products-carousel1').carouFredSel({
				auto: false,
				prev: '#prev1',
				next: '#next1',
				items: 3,
				visibleItems: 3,
				height: 340,
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
		}
		if ( $('#products-carousel2').length  ) {
			$('#products-carousel2').carouFredSel({
				auto: false,
				prev: '#prev2',
				next: '#next2',
				items: 3,
				visibleItems: 3,
				height: 340,
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
		}
		if ( $('#products-carousel3').length  ) {
			$('#products-carousel3').carouFredSel({
				auto: false,
				prev: '#prev3',
				next: '#next3',
				height: 340,
				items: 3,
				visibleItems: 3,
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
		}
		if ( $('#products-carousel4').length  ) {
			$('#products-carousel4').carouFredSel({
				auto: false,
				prev: '#prev4',
				next: '#next4',
				height: 340,
				items: 3,
				visibleItems: 3,
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
		}
		if ( $('#products-carousel5').length  ) {
			$('#products-carousel5').carouFredSel({
				auto: false,
				prev: '#prev5',
				next: '#next5',
				height: 340,
				items: 3,
				visibleItems: 3,
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
		}
		if ( $('#products-carousel6').length  ) {
			$('#products-carousel6').carouFredSel({
				auto: false,
				prev: '#prev6',
				next: '#next6',
				height: 340,
				items: 3,
				visibleItems: 3,
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
		}
		});
		});
		});