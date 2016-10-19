<?php
	if( have_rows('content_modules') ):
	
	     // loop through the modules
	    while ( have_rows('content_modules') ) : the_row();
	
	        if( get_row_layout() == 'four_up_figures' ):
	
				get_template_part( 'components/figures', 'four_up');
	
	        elseif( get_row_layout() == 'tabs' ): 
	
				get_template_part( 'components/tabs', 'panel');
				
			elseif( get_row_layout() == 'figure_grid'):
			    
			    get_template_part( 'components/figures', 'grid_with_captions'); 
			    
			elseif( get_row_layout() == 'side_nav_faq'):
				
				get_template_part( 'components/tabs', 'faq');
				
			elseif( get_row_layout() == 'tabbed_gallery'):
				get_template_part( 'components/tabs', 'carousel');

			elseif( get_row_layout() == 'side-navigation_page_panel'):
				get_template_part( 'components/sidenav', 'panel');
	        endif;
	
	    endwhile;
	
	else :
	
	    // no layouts found
	
	endif;
?>