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

		$('.readMore').on('click', function(event) {
			event.preventDefault();
			var $targetToHide = $(this).attr('href')
			var $targetToShow = $(this).parent('span').next('span.more');
			if($targetToHide && $targetToShow) {
				$($targetToHide).hide();
				$targetToShow.show();
			}
		});

		$('.readLess').on('click', function(event) {
			event.preventDefault();
			var $targetToShow = $(this).attr('href')
			var $targetToHide = $(this).parent('span.more');
			if($targetToHide && $targetToShow) {
				$($targetToShow).show();
				$targetToHide.hide();
			}
		});

	});

})(jQuery);
