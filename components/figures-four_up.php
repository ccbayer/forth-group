<div class="bg-<?php the_sub_field('background_color'); ?> figures-four-up-wrapper">
    <div class="container">
        <div class="row">
            <?php
	          $figs = get_sub_field('figure');
	          foreach($figs as $figure):
	        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 figure-wrapper">
                <div class="headline">
                    <h3 class="tk"><?php echo $figure['headline']; ?></h3>
                </div>
                <figure>
                    <img src="<?php echo $figure['icon']['url']; ?>" alt="" class="retina" data-rjs="2">
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
