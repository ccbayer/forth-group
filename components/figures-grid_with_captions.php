    <div class="bg-<?php the_sub_field('background_color'); ?> figures-grid-with-captions">
        <div class="container">
            <div class="row">
                <h2><?php the_sub_field('headline'); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
						<?php
				          $figs = get_sub_field('figure');
				          foreach($figs as $figure):
				        ?> 
                        <figure class="col-md-6">
                            <img src="<?php echo $figure['icon']['url'] ?>" alt="">
                            <figcaption>
                                <h3><?php echo $figure['label']; ?></h3>
                                <p><?php echo $figure['content']; ?></p>
                            </figcaption>
                        </figure>
                        <?php
	                      endforeach;  
	                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>