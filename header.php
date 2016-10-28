<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- typekit -->
<script src="https://use.typekit.net/awh1ivy.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    <header class="site-header">
        <!-- ******************* The Navbar Area ******************* -->
        <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

            <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>
            <nav class="navbar site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">


                    <div class="container">
                        <div class="row">
                          <div class="col-md-8 offset-md-4">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'header-btn',
                                    'container_class' => 'header-btn-wrapper clearfix',
                                    'menu_class' => '',
                                    'fallback_cb' => '',
                                    'menu_id' => 'header-btn-menu',
                                    'walker' => new wp_bootstrap_navwalker()
                                    ));
                            ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 col-xs-6 col-sm-6">
                              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/forth-group-logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                          </div>
                          <div class="col-md-8 col-xs-6 col-sm-6">
                              <div class="navbar-header clearfix">
                                  <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                                  <button class="navbar-toggle hide-above-phablet" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                                      <span class="sr-only">Toggle navigation</span>
                                      &times;
                                  </button>


                              </div>
                          </div>
                          <div class="col-sm-12 pull-right navwrap">
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'main',
                                        'container_class' => 'collapse navbar-toggleable-lttablet exCollapsingNavbar',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>
                          </div>
                        </div>
                    </div> <!-- .container -->

            </nav><!-- .site-navigation -->

        </div><!-- .wrapper-navbar end -->
        <div class="hide-above-tablet-portrait">
          <?php wp_nav_menu(
              array(
                  'theme_location' => 'header-btn',
                  'container_class' => 'header-btn-mobile active',
                  'menu_class' => '',
                  'fallback_cb' => '',
                  'menu_id' => 'header-btn-menu-mobile',
                  'walker' => new wp_bootstrap_navwalker()
                  ));
          ?>
        </div>
    </header>
