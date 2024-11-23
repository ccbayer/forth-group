<?php
/**
 * Template Name: Backpage
 *
 * @package understrap
 */

acf_form_head();
get_header(); ?>

<main id="content">
  <div class="wrapper" id="back-page-wrapper">
    <header>
      <?php get_template_part( 'components/backpage', 'banner' ); ?>
    </header>
    <?php
      $feedback = get_field('display_feedback_form');	
      if($feedback) {
      ?>
        <div class="feedback-form-wrapper bg-light-green">
          <div class="container">
            <div class="row">
              <?php do_shortcode('[acf_contact id="1" submit_value="Submit &raquo;"]]'); ?>
            </div>
          </div>
        </div>
    <?php
      }
    
    // flexible content
    get_template_part('components/modules', 'loop');
    
    
    get_template_part( 'components/backpage', 'cta'); ?>

  </div><!-- Wrapper end -->
</main>
<?php get_footer(); ?>
