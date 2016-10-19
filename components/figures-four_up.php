<div class="bg-<?php the_sub_field('background_color'); ?> figures-four-up-wrapper">
    <div class="container">
        <div class="row">
            <?php
	          $figs = get_sub_field('figure');
	          foreach($figs as $figure):
	        ?> 
            <div class="col-md-3">
                <div class="headline">
                    <h3><?php echo $figure['headline']; ?></h3>
                </div>
                <figure>
                    <img src="<?php echo $figure['icon']['url']; ?>" alt="">
                    <figcaption>
                        <?php echo $figure['body']; ?>
                    </figcaption>                                            
                </figure>
            </div>
            <?php
            	endforeach;    
            ?>
        </div>
    </div>
</div>  
