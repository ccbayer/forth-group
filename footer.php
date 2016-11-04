<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<div class="wrapper pattern-overlay opacity-80" id="wrapper-footer">

    <div class="container">

        <div class="row rel">

            <div class="col-md-8">
                <footer id="colophon" class="site-footer" role="contentinfo">
                    <ul class="site-info">
                        <li><?php the_field('phone_number', 'option') ?></li>
                        <li><a href="mailto:<?php the_field('email_address', 'option') ?>"><?php the_field('email_address', 'option') ?></a></li>
                        <li><?php the_field('address', 'option') ?></li>
                        <?php
                          if(get_field('facebook', 'option')):
                        ?>
                        <li class="social">
                            <a href="<?php the_field('facebook', 'option') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-fb.png" alt="Facebook"/></a>
                        </li>
                        <?php
                          endif;
                          if(get_field('twitter', 'option')):
                        ?>
                        <li class="social">
                            <a href="<?php the_field('twitter', 'option') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter.png" alt="Twitter"/></a>
                        </li>
                        <?php
                          endif;
                        ?>
                    </ul>
                    &copy; <?php echo date('Y'); ?> forth group. Site by <a href="http://www.ico-ya.com" target="_blank">icoya</a>.
                </footer><!-- #colophon -->

            </div><!--col end -->
            <?php if(get_field('show_maintenance_request_bar', 'option')):
              $target = get_field('new_tab', 'option') ? '_blank' : '_self';
             ?>
            <div class="maintenance-callout">
                <h4><?php the_field('maintenance_request_headline', 'option'); ?></h4>
                <p><?php the_field('maintenance_request_copy', 'option'); ?></p>
                <a href="<?php the_field('maintenance_request_link_url', 'option') ?>" target="<?php echo $target; ?>"><?php the_field('maintenance_request_link_label', 'option'); ?></a>
            </div>
          <?php endif; ?>
        </div><!-- row end -->

    </div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
