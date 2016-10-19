<?php
	$tabs_prefix = 'panel-' .  substr(md5(rand()), 0, 7).'-';	// allows multiple tabs on page
	$display_number = get_sub_field('display_number');
?>

<div class="bg-<?php the_sub_field('background_color') ?> tabs-wrapper">
    <div class="container">
        <div class="row">
            <h2><?php the_sub_field('headline') ?></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" data-tabs="tabs">
	                <?php
		                $tabs = get_sub_field('tab');
		            	for($i = 0; $i < sizeof($tabs); $i++):
			            	
			            	$class = $i === 0 ? 'class="active"' : '';
			            	$d = $i + 1;
							$num = $display_number ? $d .'.' : '';

							// prefix with 0 if less than 10
							if($i < 10 && $display_number):
								$num = '0' . $num;
							endif; 
						?>
		            	<li role="presentation" <?php echo $class; ?>>
							<a href="#tab-<?php echo $tabs_prefix.$d ?>" aria-controls="tab-<?php echo $d ?>" role="tab" data-toggle="tab"><?php echo $num . ' ' . $tabs[$i]['tab_label'] ?></a>
						</li>
		            <?php
		            	endfor;
		            ?>
                </ul>



                <!-- Tab panes -->
                <div class="tab-content">
	                <?php
						$tabs = get_sub_field('tab');
		            	for($i = 0; $i < sizeof($tabs); $i++):
		            	
		            		$class = $i === 0 ? 'active' : '';
			            	$d = $i + 1;
							$num = $display_number ? $d .'.' : '';
						
							// prefix with 0 if less than 10
							if($i < 10 && $display_number):
								$num = '<span>0'.$num.'</span>';
							else:
								$num = '<span>'.$num.'</span>';
							endif;
					?>
					   	<div role="tabpanel" class="tab-pane col-md-10 offset-md-1 <?php echo $class ?>" id="tab-<?php echo $tabs_prefix.$d ?>">
                        <h3>
                            <?php echo $num ?>
                            <?php echo $tabs[$i]['tab_headline'] ?>
                        </h3>
                        <div class="tab-content">
                            <p><?php echo $tabs[$i]['tab_content'] ?></p>
                        </div>
                    </div>
					<?php
		            	endfor;
		            ?>
                <!-- end tab panes -->
	            </div>
	        </div>
	    </div>
	</div>
</div>