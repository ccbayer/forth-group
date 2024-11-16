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
	<?php get_template_part( 'components/backpage', 'banner' ); ?>
	<div class="map-wrapper bg-light-green">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
          <a
            target="_blank"
            title="Click to get directions to Forth Group"
            href="https://maps.google.com/maps?ll=41.855605,-87.626231&z=16&t=m&hl=en-US&gl=US&mapclient=embed&daddr=22%20E%20Cullerton%20St%20Chicago%2C%20IL%2060616@41.8556052,-87.6262307"
          >
            <img
              id="mapimg"
              alt="An illustrated map of Forth Group"
            />
          </a>
				</div>
				<div class="col-md-5 contact-info">
          <address>
					  <p class="h2 tk">Forth Group</p>
					  <?php the_field('address');?>
          </address>
					<p><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></p>
					<?php the_field('directions'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php if(get_field('show_form')): ?>
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
				<p class="h4 centered"><a href="mailto:info@forthgrp.com">info@forthgrp.com</a></p>
				<p class="h4 centered">312-379-0400</p>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php	get_template_part( 'components/backpage', 'cta'); ?>

</div><!-- Wrapper end -->
</main>
<?php get_footer(); ?>
