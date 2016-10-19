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
                        <li>312.379.0400</li>
                        <li><a href="mailto:info@forthgrp.com">info@forthgrp.com</a></li>
                        <li>22 E. Cullerton St., Chicago, IL 60616</li>
                        <li class="social">
                            <a href="http://www.facebook.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-fb.png" alt="Facebook"/></a>
                        </li>
                        <li class="social">
                            <a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-twitter.png" alt="Twitter"/></a>
                        </li>
                    </ul>                    
                    &copy; <?php echo date('Y'); ?> forth group. Site by <a href="http://www.ico-ya.com" target="_blank">icoya</a>.
                </footer><!-- #colophon -->

            </div><!--col end -->
            <div class="maintenance-callout">
                <h4>Do you need in-unit service?</h4>
                <p>Forth Group now offers in-unit maintenance service for your convenience.</p>
                <a href="#">Request Service</a>
            </div>
        </div><!-- row end -->
        
    </div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
