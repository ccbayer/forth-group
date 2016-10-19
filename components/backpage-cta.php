<?php
	$show = get_field('show_bottom_cta');
	if($show):
		$link = get_field('button_link_type') === 'Internal' ? get_permalink(get_field('button_link_internal')) : get_field('button_link_external');
		$target = get_field('button_link_type') === 'Internal' ? '_self' : '_blank';
?>
<div class="bg-light-green bp-cta-wrapper">
    <div class="container">
        <div class="row">
        	<div class="col-md-6 offset-md-1">
        		<h3><?php the_field('bottom_cta_text'); ?></h2>	
        	</div>
        	<div class="col-md-3">
            	<a class="btn" href="<?php echo $link; ?>" target=<?php echo $target ?>><?php the_field('bottom_cta_button_label'); ?> &raquo;</a>        		
        	</div>
        </div>
    </div>
</div>
<?php endif; ?>