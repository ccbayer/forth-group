<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<?php
  $hero = get_field('hero_image');
  $heroImage = 'style="background-image: url('.$hero[0]['hero_image_desktop']['url'].')"; background-size: cover;';
  if(get_field('show_hero_video') && get_field('hero_video')):
    $heroImage = '';
  endif;
?>

<div class="wrapper" id="home-page-wrapper">
    <div class="home-banner pattern-overlay opacity-45" <?php echo $heroImage; ?>>
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
                    <a href="<?php the_field('call_to_action_link'); ?>" class="btn tk"><?php the_field('call_to_action_text'); ?></a>
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
            <?php
	        	$icon_group = get_field('icon_group');
	        	if($icon_group):
	        ?>
            <div class="row" id="icon-group">
	            <?php foreach($icon_group as $icon): ?>
                <figure class="col-md-3 col-sm-6 col-xs-sm">
                      <?php
                        if($icon['link']):
                          echo '<a href="'.$icon['link'].'">';
                        endif;
                      ?>
                    <img src="<?php echo $icon['icon']['url']; ?>" alt="" class="<?php echo $icon['css_classes'] ?>" data-rjs="2">
                    <?php
                      if($icon['link']):
                        echo '</a>';
                      endif;
                    ?>
                    <figcaption class="tk"><?php echo $icon['caption']; ?></figcaption>
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
                echo '<div class="testimonial-inner-wrapper">';
	        			for($i = 0; $i < sizeof($testimonials); $i++):
                  $active = '';
                  if($i === 0):
                    $active = 'active';
                  endif;
	        	?>
                    <blockquote id="testimonial-<?php echo $i ?>" class="<?php echo $active; ?>">
                        <p><?php echo $testimonials[$i]['testimonial_copy']; ?></p>
                        <footer><?php echo $testimonials[$i]['testimonial_author']; ?></footer>
                    </blockquote>
                <?php
                endfor;
	          	endif;
	            ?>
            </div>
              <?php
                  if(sizeof($testimonials) > 1):
                    echo '<div class="testimonial-nav"><ul>';
                    for($i = 0; $i < sizeof($testimonials); $i++):
                      $active = '';
                      if($i === 0):
                        $active = 'active';
                      endif;
                      echo '<li><a href="#testimonial-'.$i.'" class="'.$active.'"><span class="sr-only">View Testimonial '.$i.'</span></a></li>';
                    endfor;
                    echo '</ul></div>';
                  endif;
                  echo '</div>';
              ?>
                <?php if(get_field('video_url')): ?>
                <div class="col-md-5">
                  <div class="video-inner-wrapper">
                    <iframe src="<?php echo the_field('video_url'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  </div>
                </div>
              <?php endif; ?>
            </div>
        </div>
    </div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
