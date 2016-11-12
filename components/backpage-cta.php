<?php
	$show = get_field('show_bottom_cta');
	if($show):
		$link = get_field('button_link_type') === 'Internal' ? get_permalink(get_field('button_link_internal')) : get_field('button_link_external');
		$target = get_field('button_link_type') === 'Internal' ? '_self' : '_blank';
?>
<div class="bg-light-green bp-cta-wrapper">
    <div class="container">
        <div class="row">
        	<div class="col-md-12 lbl-wrapper">
        		<h3><?php the_field('bottom_cta_text'); ?></h2>
        	</div>
        	<div class="col-md-12 btn-wrapper">
            	<a class="btn" href="<?php echo $link; ?>" target=<?php echo $target ?>><?php the_field('bottom_cta_button_label'); ?> &raquo;</a>
							<?php
								// is there a secondary CTA?
								if(get_field('secondary_bottom_cta')):
									$secondarylink = get_field('secondary_bottom_cta_link_type') === 'Internal' ? get_permalink(get_field('secondary_bottom_cta_internal_link')) : get_field('secondary_bottom_cta_external_link');
									$secondarytarget = get_field('secondary_bottom_cta_link_type') === 'Internal' ? '_self' : '_blank';
							?>
							<a class="btn" href="<?php echo $secondarylink; ?>" target=<?php echo $secondarytarget ?>><?php the_field('secondary_bottom_cta_button_label'); ?> &raquo;</a>
							<?php
								endif;
							?>
        	</div>
        </div>
    </div>
</div>
<?php endif; ?>
