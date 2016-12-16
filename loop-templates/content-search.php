<?php
/**
 * @package understrap
 */
 global $searchLabel;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">

				<?php understrap_posted_on(); ?>

			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->
	<hr/>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<?php $searchLabel = 'Search Again'; ?>
			<?php get_search_form(); ?>
		</div>
	</div>


	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
