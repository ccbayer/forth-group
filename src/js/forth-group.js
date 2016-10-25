// tabs
/*

jQuery('a[role="tab"]').click(function (e) {
  e.preventDefault();
  var tab = jQuery(this).attr('href');
  jQuery(tab).tab('show');
});

*/

// jQuery(".nav-tabs").tab();

jQuery(function() {
	jQuery('.forth-slider').owlCarousel({

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



jQuery(function() {
	jQuery('.side-tabbed-content-wrapper').on('click', '.side-nav ul li a', function(event){
		event.preventDefault();
		var
			$this = jQuery(this),
			$target = $this.attr('href')
		;
		// turn off all navs
		jQuery('.side-nav ul li').removeClass('active');
		// enable this nav
		$this.parent('li').addClass('active');
		// load content
		$this.closest('.side-tabbed-content-wrapper').find('.content-item.active').removeClass('active');
		jQuery($target).addClass('active');
		// scroll to top of element
		jQuery('html, body').animate({
        	scrollTop: jQuery('.side-tabbed-content-wrapper').offset().top
		}, 500);
	});
});

// nav bar

jQuery(function() {
		jQuery('.navbar-toggle').on('click', function() {
			jQuery(this).toggleClass('active');
			jQuery('.site-header').add('.header-btn-mobile').toggleClass('active');
		})
});
