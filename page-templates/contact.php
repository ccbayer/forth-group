<?php
/**
 * Template Name: Contact
 *
 * @package understrap
 */

acf_form_head();
get_header(); ?>

<div class="wrapper" id="back-page-wrapper" class="contact-page">
	
	<?php get_template_part( 'components/backpage', 'banner' ); ?>
	<div class="map-wrapper bg-light-green">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.731339540006!2d-87.62841938421373!3d41.855609174799525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c87813faa7d%3A0x2d1f0b07df9e2b91!2s22+E+Cullerton+St%2C+Chicago%2C+IL+60616!5e0!3m2!1sen!2sus!4v1476843847847" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-5 contact-info">
					<h2>Forth Group</h2>
					<?php the_field('address');?>
					<p><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></p>
					<?php the_field('directions'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="feedback-form-wrapper bg-white">
		<div class="container">
			<div class="row">
				<h2>Contact Form</h2>
				<?php do_shortcode('[acf_contact id="2"]'); ?>
			</div>
		</div>
	</div>
	<?php	get_template_part( 'components/backpage', 'cta'); ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
