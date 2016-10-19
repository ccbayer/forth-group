<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="home-page-wrapper">
    <div class="home-banner pattern-overlay opacity-45">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <h1><?php the_field('main_headline') ?></h1>
                    <a href="<?php the_field('call_to_action_link'); ?>" class="btn"><?php the_field('call_to_action_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper bg-white">
        <div class="container introduction-wrapper">
            <div class="row">
                <div class="col-md-8 offset-md-2 introduction">
                    <h2><?php the_field('subheadline'); ?></h2>
					<?php the_field('introduction'); ?>
	                </div>
            </div>
            <?php
	        	$icon_group = get_field('icon_group');
	        	if($icon_group):
	        ?>
            <div class="row">
	            <?php foreach($icon_group as $icon): ?>
                <figure class="col-md-3">
                    <img src="<?php echo $icon['icon']['url']; ?>" alt="">
                    <figcaption><?php echo $icon['caption']; ?></figcaption>
                </figure>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="content-wrapper bg-light-green">
        <div class="container testimonial-wrapper">
            <div class="row">
                <div class="col-md-7">
				<?php
	        		$testimonials = get_field('testimonials');
	        		if($testimonials):
	        			foreach($testimonials as $test):
	        	?>
                    <blockquote>
                        <p><?php echo $test['testimonial_copy']; ?></p>
                        <footer><?php echo $test['testimonial_author']; ?></footer>
                    </blockquote>
                <?php 
	            		endforeach;
	            	endif;
	            ?> 
                </div>
                <div class="col-md-5">
                    <?php // video goes here ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
