<?php
	$images = get_field('hero_image');
	$desktop = $images[0]['desktop_image'] ? $images[0]['desktop_image']['url'] : '';
	$tablet = $images[0]['tablet_image'] ? $images[0]['tablet_image']['url'] : $images[0]['desktop_image']['sizes']['tablet-banner-cropped'];
	$phablet = $images[0]['phablet_image'] ? $images[0]['phablet_image']['url'] : $images[0]['desktop_image']['sizes']['phablet-banner-cropped'];
	$mobile = $images[0]['mobile_image'] ? $images[0]['mobile_image']['url'] : $images[0]['desktop_image']['sizes']['mobile-banner-cropped'];

	$bgset = $mobile.' [(max-width: 480px)] | '.$phablet.' [(max-width: 768px)] | '.$tablet. ' [(max-width:1024px)] | '. $desktop;

?>
<div class="backpage-banner pattern-overlay opacity-45 lazyload" data-bgset="<?php echo $bgset; ?>"></div>

<div class="container introduction-wrapper">
    <div class="row">
        <div class="col-md-10 offset-md-1 introduction">
            <h1 class="tk"><?php the_field('headline'); ?></h1>
            <div class="intro-copy">
							<?php the_field('introduction'); ?>
						</div>
            <?php if(get_field('show_icon_buttons')): ?>
				</div>
	    </div>
	    <div class="row">
				<div class="icon-buttons">
            <?php
	            $buttons = get_field('icon_buttons');
				foreach($buttons as $button):
					$link = $button['link_type'] === 'Internal' ? $button['internal_link'] : $button['external_link'];
					$target = $button['link_type'] === 'Internal' ? '_self' : '_blank';

	        ?>
	        	<div class="col-md-4">
		            <a href="<?php echo $link; ?>" class="icon-button" target="<?php $target ?>">
			            <img src="<?php echo $button['icon']['url'] ?>" alt="" class="retina" data-rjs="2"/>
			            <span><?php echo $button['label'] ?> &raquo;</span>
		            </a>
	        	</div>
            	<?php endforeach; ?>
            	</div>
            <?php endif; ?>
        </div>
    </div>
</div>
