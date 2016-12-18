// TO DO: ENCAPSULATE!
(function ($) {

		// CAROUSEL
		$(function() {
			$('.forth-slider').owlCarousel({

			      autoPlay: 3000, //Set AutoPlay to 3 seconds
			      items: 5,
			      nav: true,
			      navText: [
			      	'<span class="fa fa-chevron-left"></span>',
			      	'<span class="fa fa-chevron-right"></span>'
			      ],
						responsiveClass: true,
						responsive: {
				        0: {
				            items: 1,
				            nav: true
				        },
				        640: {
				            items: 3,
				            nav: true
				        },
				        769:  {
				            items: 5,
				            nav: true
				        }
				    },
			      pagination: true
			  });

		});

	// TABS
	$(function() {
		$('.side-tabbed-content-wrapper').on('click', '.tab-switch', function(event){
			event.preventDefault();
			var
				$this = $(this),
				$target = $this.attr('href'),
				isSmall = $this.parent().is('li') ? false : true
			;
			// turn off all navs
			$('.side-nav ul li').add('.tab-switch').removeClass('active');
			// enable this nav
			$this.addClass('active');
			$('.tab-switch[href="' + $target + '"]').parent('li').addClass('active');

			// load content
			$this.closest('.side-tabbed-content-wrapper').find('.content-item.active').removeClass('active');
			$($target).addClass('active');
			// scroll to top of element
			if(isSmall) {
				var top = $($target).offset().top - 300;
				console.log(top);
				$('html, body').animate({
		        	scrollTop: top
				}, 500);
			} else {
				$('html, body').animate({
		        	scrollTop: $('.side-tabbed-content-wrapper').offset().top
				}, 500);
			}
		});
	});

	// nav bar
	$(function() {

			var checkNavBarPosition = function() {
				var $hdr = $('.site-header');
				if($(document).scrollTop() > $hdr.outerHeight()) {
					$hdr.addClass('faded');
				} else {
					$hdr.removeClass('faded');
				}
			};

			$('.navbar-toggle').on('click', function() {
				$(this).toggleClass('active');
				$('.site-header').add('.header-btn-mobile').toggleClass('active');
			});

			$(document).on('scroll', function() {
				checkNavBarPosition();
			});
			checkNavBarPosition();
	});

	// read more  read Less
	$(function() {


		toggleText = function($el) {
			var thisToggleText = $el.html() === $el.data('toggleOn') ? $el.data('toggleOff') : $el.data('toggleOn');
			$el.html(thisToggleText);
		}

		$('.forthToggleSwapTrigger').on('click', function(event) {
			event.preventDefault();
			var $this = $(this);
			var target = $this.attr('href');
			var thatToggleText = $this.data('toggleOn');
			var mode = $this.data('mode');
			// turn others off
			$('.forthToggleSwapTrigger').not($this).html(thatToggleText);
			$('.read-more').not($(target)).hide();
			$(target).toggle();
			toggleText($this);
		});

		// hides an element and replaces its text with a data attribute value
		$('.forthHideAndSwap').on('click', function(event) {
			event.preventDefault();
			var $this = $(this);
			var $targetToHide = $($this.attr('href'));
			var $targetToSwap = $($this.data('targetToSwap'));
			$targetToHide.hide();
			toggleText($targetToSwap);
 		});

		$('.readMoreLess').on('click', function(event) {
			event.preventDefault();
			var $this = $(this);
			var target = $this.attr('href');
			var toggleAll = $this.data('toggleAll');
			var hideOthers = $this.data('hideOthers');
			toggleText($this);
			if(target) {
					$(target).toggle();
				}
		});

	});

	// testimonial nav
	$(function() {
		$('.testimonial-nav a').on('click', function(event) {
			event.preventDefault();
			event.stopPropagation();
			var $target = $(this).attr('href');
			$('blockquote').add('.testimonial-nav a').removeClass('active');
			$(this).add($target).addClass('active');
		});

		$('.testimonial-nav li').on('click', function() {
			$(this).find('a').trigger('click');
		});

	});
	// BG Sizes

	// Retina
	$(function() {
		if(typeof(retinajs) === 'function') {
			retinajs( $('img.retina') );
		}
	});
	// typekit fade in loading
	try {
	  Typekit.load({
	    loading: function() {
	      // Javascript to execute when fonts start loading
	    },
	    active: function() {
	      // Javascript to execute when fonts become active
				$('.tk').removeClass('visibility-none').addClass('on');
	    },
	    inactive: function() {
	      // Javascript to execute when fonts become inactive
				$('.tk').removeClass('visibility-none').addClass('on');
	    }
	  })
	} catch(e) {}

		// end ENCAPSULATE
})(jQuery);
