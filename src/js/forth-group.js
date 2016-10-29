// TO DO: ENCAPSULATE!
(function ($) {

		// CAROUSEL
		$(function() {
			$('.forth-slider').owlCarousel({

			      autoPlay: 3000, //Set AutoPlay to 3 seconds
			      items: 5,
			      itemsDesktop: [1199, 5],
			      itemsDesktopSmall: [768, 3],
			      nav: true,
			      navText: [
			      	'<span class="fa fa-chevron-left"></span>',
			      	'<span class="fa fa-chevron-right"></span>'
			      ],
			      pagination: true

			  });

		});

	// TABS
	$(function() {
		$('.side-tabbed-content-wrapper').on('click', '.side-nav ul li a', function(event){
			event.preventDefault();
			var
				$this = $(this),
				$target = $this.attr('href')
			;
			// turn off all navs
			$('.side-nav ul li').removeClass('active');
			// enable this nav
			$this.parent('li').addClass('active');
			// load content
			$this.closest('.side-tabbed-content-wrapper').find('.content-item.active').removeClass('active');
			$($target).addClass('active');
			// scroll to top of element
			$('html, body').animate({
	        	scrollTop: $('.side-tabbed-content-wrapper').offset().top
			}, 500);
		});
	});

	// nav bar
	$(function() {
			$('.navbar-toggle').on('click', function() {
				$(this).toggleClass('active');
				$('.site-header').add('.header-btn-mobile').toggleClass('active');
			})
	});

	// read more  read Less
	$(function() {

		$('.readMoreLess').on('click', function(event) {
			event.preventDefault();
			var target = $(this).attr('href');
			$('.read-more').hide();
			if(target) {
				$(target).toggle();
			}
		});

	});

	// testimonial nav
	$(function() {
		$('.testimonial-nav a').on('click', function(event) {
			event.preventDefault();
			var $target = $(this).attr('href');
			$('blockquote').add('.testimonial-nav a').removeClass('active');
			$(this).add($target).addClass('active');
		});

		$('.testimonial-nav li').on('click', function() {
			$(this).find('a').trigger('click');
		});

	});

	// end ENCAPSULATE

})(jQuery);
