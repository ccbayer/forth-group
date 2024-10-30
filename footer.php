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

<div class="wrapper pattern-overlay opacity-80" id="wrapper-footer">

    <div class="container">

        <div class="row rel">
          <?php if($maintenance_request['enabled']): ?>
            <div class="maintenance-callout">
              <?php if(!empty($maintenance_request['headline'])): ?>
                <h2><?= $maintenance_request['headline'] ?></h2>
              <?php endif; ?>
              <?php if(!empty($maintenance_request['body'])): ?>
                <p><?= $maintenance_request['body']; ?></p>
              <?php endif; ?>
              <?php if(!empty($maintenance_request['url']) && !empty($maintenance_request['title'])): ?>
                <a href="<?= $maintenance_request['url']; ?>" target="<?= $maintenance_request['target']; ?>">
                  <?= $maintenance_request['title']; ?>
                </a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
            <div class="col-md-8">
                <footer id="colophon" class="site-footer" aria-label="Site Footer">
                    <ul class="site-info">
                        <li>
                          <a href="tel:+1-<?= str_replace('.','-', get_field('phone_number', 'option')); ?>"
                            data-gtm-conversion="<?= $footer_gtm_ga_config['conversion_ids']['phone_number'] ?>"
                            data-gtm-event-label="<?= the_field('phone_number', 'option') ?>"
                            data-gtm-event-category="footer-phone"
                            class="has-gtm">
                            <?php the_field('phone_number', 'option') ?>
                          </a>
                          </li>
                        <li>
                          <a 
                            href="mailto:<?php the_field('email_address', 'option') ?>"
                            data-gtm-conversion="<?= $footer_gtm_ga_config['conversion_ids']['email_address'] ?>"
                            data-gtm-event-label="<?= the_field('email_address', 'option') ?>"
                            data-gtm-event-category="footer-email"
                            class="has-gtm"
                          >
                              <?php the_field('email_address', 'option') ?>
                            </a>
                        </li>
                        <li><?php the_field('address', 'option') ?></li>
                        <?php
                          if(get_field('facebook', 'option')):
                        ?>
                        <li class="social">
                            <a href="<?php the_field('facebook', 'option') ?>" target="_blank" title="Follow Forth Group on Facebook">
                              <span class="sr-only">Follow Forth Group on Facebook</span>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-fb.png" alt="Facebook"/>
                            </a>
                        </li>
                        <?php
                          endif;
                          if(get_field('twitter', 'option')):
                        ?>
                        <li class="social">
                            <a href="<?php the_field('twitter', 'option') ?>" target="_blank" title="Follow Forth Group on Twitter / X">
                              <span class="sr-only">Follow Forth Group on Twitter / X</span>
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter.png" alt="Twitter"/>
                            </a>
                        </li>
                        <?php
                          endif;
                        ?>
                    </ul>
                    &copy; <?php echo date('Y'); ?> forth group.
                </footer><!-- #colophon -->

            </div><!--col end -->
        </div><!-- row end -->

    </div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<?php 
  $scripts = get_field('site_scripts', 'option');
  if(!empty($scripts) && $scripts['footer_scripts']):
?>
<script>
  <?= $scripts['footer_scripts'] ?>
</script>
<?php endif; ?>

</body>

</html>
