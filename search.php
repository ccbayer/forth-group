<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper" id="search-page-wrapper">
  <div class="backpage-banner pattern-overlay"></div>
  <div class="container introduction-wrapper">
      <div class="row">
          <div class="col-md-10 offset-md-1 introduction">
              <h1 class="tk"><?php the_field('search_title', 'option') ?></h1>
              <?php if(get_field('search_introduction', 'option')): ?>
              <div class="intro-copy">
  							<p><?php the_field('search_introduction', 'option') ?></p>
  						</div>
              <?php endif; ?>
  				</div>
  	    </div>
      </div>
<div class="wrapper search-wrapper">

    <div class="container">

        <div class="row">

            <section id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">

                <main id="main" class="site-main" role="main">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">

                        <h2><?php printf( __( 'Search Results for: %s', 'understrap' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'loop-templates/content', 'search' );
                        ?>

                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>
                </main><!-- #main -->

            </section><!-- #primary -->

            <?php get_sidebar(); ?>

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
