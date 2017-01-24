<?php
/**
 * Template Name: Home Page Static
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<?php
  $hero = get_field('hero_image');
  $heroImage = 'style="background-image: url('.$hero[0]['hero_image_desktop']['url'].')"';
  if(get_field('show_hero_video') && get_field('hero_video')):
    $heroImage = '';
  endif;
?>

<div class="wrapper" id="home-page-wrapper">
    <div class="home-banner pattern-overlay opacity-45" <?php echo $hero;?>>
        <div class="container">
          <?php if(get_field('show_hero_video') && get_field('hero_video')): ?>
            <div class="video-container">
              <div class="video-pattern"></div>
              <?php $video = get_field('hero_video'); ?>
              <video poster="<?php echo $hero[0]['hero_image_desktop']['url']; ?>" playsinline autoplay muted loop>
                <source src="<?php echo $video['url']; ?>">
              </video>
            </div>
          <?php endif; ?>
            <div class="row">
                <div class="col-md-6 offset-md-3" id="home-content">
                    <h1 class="tk"><?php the_field('main_headline') ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper bg-white">
        <div class="container introduction-wrapper">
            <div class="row">
                <div class="col-md-8 offset-md-2 introduction">
                    <h2 class="tk"><?php the_field('subheadline'); ?></h2>
					               <?php the_field('introduction'); ?>
	                </div>
            </div>
        </div>
    </div>
	<?php 	get_template_part( 'components/backpage', 'cta'); ?>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
