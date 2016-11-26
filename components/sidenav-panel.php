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
							echo '<li class="'.$class.'"><a href="#content-'.$n.'" class="tab-switch tk">'.$tabs[$i]['tab_label'].'</a> <span class="fa fa-chevron-right" aria-hidden="true"></span></li>';
		                }
		                ?>
	                </ul>
                </div>
                <div class="col-md-8 col-sm-12 main-tab-content-wrapper">
                        <!-- content item 1-->
                        <?php
							for($i = 0; $i< $count; $i++) {
								$n = $i + 1;
								$class = $i === 0 ? 'active' : '';
							?>
              <a href="#content-<?php echo $n; ?>" class="tk tab-switch <?php echo $class ?>"><?php echo $tabs[$i]['tab_label']; ?><span class="fa fa-chevron-right" aria-hidden="true"></span></a>
              <div class="content-wrapper">
							<div class="content-item <?php echo $class; ?>" id="content-<?php echo $n; ?>">
								<?php echo $tabs[$i]['tab_content']; ?>
							</div>
              </diV>
							<?php
							}
	                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
