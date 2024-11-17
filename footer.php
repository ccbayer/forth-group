<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
$footer_gtm_ga_config = get_field('gtm_ga', 'option');
$maintenance_callout = get_field('show_maintenance_request_bar', 'option');

$maintenance_request = [
  'headline' => get_field('maintenance_request_headline', 'option'),
  'body' => get_field('maintenance_request_copy', 'option'),
  'enabled' => get_field('show_maintenance_request_bar', 'option') ?? false,
  'title' => get_field('maintenance_request_link_label', 'option'),
  'url' => get_field('maintenance_request_link_url', 'option') ?? null,
  'target' => get_field('new_tab', 'option') ? '_blank' : '_self',
];
?>
<footer class="wrapper pattern-overlay opacity-80" id="wrapper-footer" aria-label="Site Footer">

  <div class="container">

    <div class="row rel">
      <?php if ($maintenance_request['enabled']): ?>
        <div class="maintenance-callout">
          <?php if (!empty($maintenance_request['headline'])): ?>
            <h2><?= $maintenance_request['headline'] ?></h2>
          <?php endif; ?>
          <?php if (!empty($maintenance_request['body'])): ?>
            <p><?= $maintenance_request['body']; ?></p>
          <?php endif; ?>
          <?php if (!empty($maintenance_request['url']) && !empty($maintenance_request['title'])): ?>
            <a href="<?= $maintenance_request['url']; ?>" target="<?= $maintenance_request['target']; ?>">
              <?= $maintenance_request['title']; ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <div class="col-md-8">
        <div id="colophon" class="site-footer" aria-label="Site Legal Footer">
          <ul class="site-info">
            <li>
              <a href="tel:+1-<?= str_replace('.', '-', get_field('phone_number', 'option')); ?>"
                data-gtm-conversion="<?= $footer_gtm_ga_config['conversion_ids']['phone_number'] ?>"
                data-gtm-event-label="<?= esc_attr(get_field('phone_number', 'option')) ?>"
                data-gtm-event-category="footer-phone"
                class="has-gtm">
                <?= esc_html(get_field('phone_number', 'option')); ?>
              </a>
            </li>
            <li>
              <a
                href="mailto:<?= esc_attr(get_field('email_address', 'option')); ?>"
                data-gtm-conversion="<?= $footer_gtm_ga_config['conversion_ids']['email_address'] ?>"
                data-gtm-event-label="<?= esc_attr(get_field('email_address', 'option')); ?>"
                data-gtm-event-category="footer-email"
                class="has-gtm">
                <?= esc_html(get_field('email_address', 'option')); ?>
              </a>
            </li>
            <li><?= esc_html(get_field('address', 'option')); ?></li>
          </ul>
        </div><!-- #colophon -->

      </div><!--col end -->
    </div><!-- row end -->
  </div><!-- container end -->
  <div class="cai">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <figure>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cai-logo-white.png" alt="Community Association Institute" />
            <figcaption>Forth Group is a proud member of the <a href="https://www.caionline.org/" target="_blank" title="Visit Community Association Institute">Community Association Institute</a>.</figcaption>
          </figure>
        </div>
        <div class="col-md-4 offset-md-4">
          &copy; <?php echo date('Y'); ?> Forth Group. All Rights Reserved.
          <nav aria-label="Legal Nav">
            <?php
            wp_nav_menu([
              'theme_location' => 'footer-legal',
              'container_class' => 'footer-legal',
              'menu_class' => '',
              'fallback_cb' => '',
              'menu_id' => 'footer-legal',
              'walker' => new wp_bootstrap_navwalker()
            ]); ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</footer><!-- wrapper end -->
</div><!-- #page -->


<?php wp_footer(); ?>

<?php
$scripts = get_field('site_scripts', 'option');
if (!empty($scripts) && $scripts['footer_scripts']):
?>
  <script>
    <?= $scripts['footer_scripts'] ?>
  </script>
<?php endif; ?>

</body>

</html>