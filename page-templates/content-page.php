<?php
/**
 * Template Name: Content
 *
 * @package understrap
 */
get_header(); ?>
<main id="content" class="site-main" role="main">
  <div class="wrapper" id="single-wrapper">
    <div class="container">
      <div class="row">
        <div class="col">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          </article>
        </div>
      </div>
    </div>
</div>

</main><!-- #main -->


<?php get_footer(); ?>
