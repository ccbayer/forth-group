    <!-- SIDE-TABBED FAQ CONTENT AREA -->
    <div class="side-tabbed-content-wrapper bg-light-green">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 intro">
                    <h2 class="tk"><?php the_sub_field('headline'); ?></h2>
                    	<?php the_sub_field('description'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 side-nav">
	                <ul>
	                <?php
		                $tabs = get_sub_field('faq_group');
		                $count = sizeof($tabs);
		                for($i = 0; $i< $count; $i++) {
			                $n = $i + 1;
			                $class = $i === 0 ? 'active' : '';
							echo '<li class="'.$class.'"><a href="#content-'.$n.'" class="tk">'.$tabs[$i]['faq_group_label'].'</a> <span class="fa fa-chevron-right" aria-hidden="true"></span></li>';
		                }
		                ?>
	                </ul>
                </div>
                <div class="col-md-8 col-sm-12">
                        <!-- content item 1-->
                        <?php
							for($i = 0; $i< $count; $i++) {
								$n = $i + 1;
								$class = $i === 0 ? 'active' : '';
							?>
                <a href="#content-<?php echo $n; ?>" class="tk responsive-tab-trigger <?php echo $class ?>"><?php echo $tabs[$i]['faq_group_label']; ?><span class="fa fa-chevron-right" aria-hidden="true"></span></a>
                <div class="content-wrapper">
                <div class="content-item <?php echo $class; ?>" id="content-<?php echo $n; ?>">
              <?php
								$faqs = $tabs[$i]['faq'];
								foreach($faqs as $faq):
								?>
								<div class="faq-item">
                                <h3><?php echo $faq['question']; ?></h3>
                                <div class="answer">
	                                <?php echo $faq['answer']; ?>
                                </div>
                            </div>
								<?php
								endforeach;
							?>
							</div>

                </div>
							<?php
							}
	                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
