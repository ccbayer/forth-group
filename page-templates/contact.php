<?php

/**
 * Template Name: Contact
 *
 * @package understrap
 */

acf_form_head();
get_header();
?>


<main id="content">
  <div class="wrapper" id="back-page-wrapper" class="contact-page">
    <?php get_template_part('components/backpage', 'banner'); ?>
    <div class="map-wrapper bg-light-green">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <a
              target="_blank"
              title="Click to get directions to Forth Group"
              href="https://maps.google.com/maps?ll=41.855605,-87.626231&z=16&t=m&hl=en-US&gl=US&mapclient=embed&daddr=22%20E%20Cullerton%20St%20Chicago%2C%20IL%2060616@41.8556052,-87.6262307">
              <img
                id="mapimg"
                alt="An illustrated map of Forth Group" />
            </a>
          </div>
          <div class="col-md-5 contact-info">
            <address>
              <p class="h2 tk">Forth Group</p>
              <?= acf_esc_html(get_field('address')); ?>
            </address>
            <?php
            $phone = get_field('phone');
            $phone_label = !empty(get_field('phone_label')) ? get_field('phone_label') : $phone;
            if (!empty($phone)):
            ?>
              <p>
                <a href="tel:<?= acf_esc_html($phone); ?>" title="<?= esc_attr('Click or Tap to Call Us at ' . $phone); ?>">
                  <?= acf_esc_html($phone_label); ?>
                </a>
              </p>
            <?php endif; ?>
            <?php if (!empty(get_field('directions'))): ?>
              <?= acf_esc_html(get_field('directions')); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php if (get_field('show_form')): ?>
      <div class="contact-form-wrapper bg-white">
        <div class="container">
          <div class="row">
            <h2 class="tk">Contact Form</h2>
            <?php do_shortcode('[acf_contact id="2" submit_value="Submit &raquo;"]'); ?>
          </div>
        </div>
      </div>
    <?php else: ?>
      <div class="contact-form-wrapper bg-white">
        <div class="container">
          <div class="row">
            <h2 class="tk">Email or Call</h2>
            <p class="h4 centered"><a href="mailto:info@forthgrp.com" title="Email Forth Group">info@forthgrp.com</a></p>
            <p class="h4 centered"><a href="tel:312-379-0400" title="Call Forth Group">312-379-0400</a></p>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php get_template_part('components/backpage', 'cta'); ?>

  </div><!-- Wrapper end -->
</main>
<?php get_footer(); ?>