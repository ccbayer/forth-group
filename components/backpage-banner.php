<?php 
	$images = get_field('hero_image');
	$desktop = $images[0]['desktop_image'];
	$tablet = $images[0]['tablet_image'];
	$mobile = $images[0]['mobile_image'];
	function getInternalLink($post) {
		return get_permalink($post[0]->ID);
	}
?>
<div class="backpage-banner pattern-overlay opacity-45" style="background-image: url(<?php echo $desktop['url'] ?>);"></div>
<div class="container introduction-wrapper">
    <div class="row">
        <div class="col-md-8 offset-md-2 introduction">
            <h1><?php the_field('headline'); ?></h1>
            <p><?php the_field('introduction'); ?></p>
            <?php if(get_field('show_icon_buttons')): ?>
				</div>
	    </div>
	    <div class="row">	    
				<div class="icon-buttons">
            <?php 
	            $buttons = get_field('icon_buttons'); 
				foreach($buttons as $button):
					$link = $button['link_type'] === 'Internal' ? getInternalLink($button['internal_link']) : $button['external_link'];
					$target = $button['link_type'] === 'Internal' ? '_self' : '_blank';
										
	        ?>
	        	<div class="col-md-4">
		            <a href="<?php echo $link; ?>" class="icon-button" target="<?php $target ?>">
			            <img src="<?php echo $button['icon']['url'] ?>" alt=""/>
			            <p><?php echo $button['label'] ?> &raquo;</p>
		            </a>
	        	</div>
            	<?php endforeach; ?>
            	</div>            
            <?php endif; ?>
        </div>
    </div>
</div>