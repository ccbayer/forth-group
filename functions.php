<?php
/**
 * understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
* Load functions to secure your WP install.
*/
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Load custom WordPress nav walker.
*/
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
* Load custom WordPress gallery.
*/
require get_template_directory() . '/inc/bootstrap-wp-gallery.php';

register_nav_menus( array(
	'header-btn' => 'Header Navigation Buttons',
	'main' => 'Main Menu',
) );


add_image_size( 'tabbed-gallery-thumbnail-cropped', 220, 220, true );
add_image_size( 'tabbed-gallery-thumbnail', 220, 220 );

add_image_size( 'tablet-banner-cropped', 1024, 220, true ); // 1024 - 768
add_image_size( 'tablet-banner', 1024, 220 );

add_image_size( 'phablet-banner-cropped', 768, 220, true ); // 768 - 480
add_image_size( 'mobile-banner', 768, 220 );

add_image_size( 'mobile-banner-cropped', 480, 186, true ); // 480
add_image_size( 'mobile-banner', 480, 186 );


global $searchLabel;

/* ACF OPTIONS */
if( function_exists('acf_add_options_page') ) {

	if( function_exists('acf_add_options_page') ) {

		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Website Footer',
			'menu_title' 	=> 'Website Footer',
			'menu_slug' 	=> 'website-footer',
			'capability' 	=> 'edit_posts',
			'redirect' 	=> false
		));

		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Search and 404',
			'menu_title' 	=> 'Search and 404',
			'menu_slug' 	=> 'search-and-404',
			'capability' 	=> 'edit_posts',
			'redirect' 	=> false
		));

    $option_page = acf_add_options_page(array(
			'page_title' 	=> 'Configuration',
			'menu_title' 	=> 'Configuration',
			'menu_slug' 	=> 'configuration',
			'capability' 	=> 'edit_posts',
			'redirect' 	=> false
		));

	}
}
