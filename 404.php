<?php

/**
 * The template for displaying 404 pages (not found).
 * @package understrap
 */

get_header(); ?>
<main id="content">
  <div class="wrapper" id="back-page-wrapper">
    <div class="backpage-banner pattern-overlay"></div>
    <div class="container introduction-wrapper">
      <div class="row">
        <div class="col-md-10 offset-md-1 introduction">
          <h1 class="tk">
            <<?= acf_esc_html(get_field('404_title', 'option')); ?>< /h1>
              <?php if (get_field('404_introduction', 'option')): ?>
                <div class="intro-copy">
                  <p><?= acf_esc_html(get_field('404_introduction', 'option')); ?></p>
                </div>
              <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="container">
      <?php if (get_field('404_body_content', 'option')): ?>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <p><?= acf_esc_html(get_field('404_body_content', 'option')); ?></p>
          </div>
        </div>
      <?php endif; ?>
      <?php if (get_field('show_search_field', 'option')): ?>
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <?php get_search_form(); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <?php if (get_field('404_cta', 'option')): ?>
      <?php
      $cta = get_field('404_cta', 'option');
      ?>
      <div class="bg-light-green bp-cta-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 lbl-wrapper">
              <h2 class="h3"><?= acf_esc_html($cta[0]['cta_heading']); ?></h2>
            </div>
            <div class="col-md-12 btn-wrapper">
              <a
                class="btn tk"
                href="<?= esc_attr($cta[0]['cta_link_destination']); ?>"><?= esc_html($cta[0]['cta_label']); ?> &raquo;</a>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>