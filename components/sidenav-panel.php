    <!-- Side-Navigation Page Panel -->
    <div class="side-tabbed-content-wrapper bg-light-green">
        <div class="container">
            <div class="row">
                <div class="col-md-4 side-nav">
	                <ul>
	                <?php
		                $tabs = get_sub_field('side_panel_tabs');
		                $count = sizeof($tabs);
		                for($i = 0; $i< $count; $i++) {
			                $n = $i + 1;
			                $class = $i === 0 ? 'active' : '';
							echo '<li class="'.$class.'"><a href="#content-'.$n.'" class="tk">'.$tabs[$i]['tab_label'].'</a> <span class="fa fa-chevron-right" aria-hidden="true"></span></li>';
		                }
		                ?>
	                </ul>
                </div>
                <div class="col-md-8">
                    <div class="content-wrapper">
                        <!-- content item 1-->
                        <?php
							for($i = 0; $i< $count; $i++) {
								$n = $i + 1;
								$class = $i === 0 ? 'active' : '';
							?>
							<div class="content-item <?php echo $class; ?>" id="content-<?php echo $n; ?>">
								<?php echo $tabs[$i]['tab_content']; ?>
							</div>
							<?php
							}
	                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
