<?php
 $galleryIDPrefix = 'gallery-' .  substr(md5(rand()), 0, 7).'-';
 $gallery = get_sub_field('gallery');
 $count = sizeof($gallery) > 3 ? 4 : $sizeof($gallery);
?>
<div class="tabbed-carousel-wrapper bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2><?php the_sub_field('headline') ?></h2>
                <div class="intro-content">
	                <?php
	                $desc = get_sub_field('description');
	                if($desc):
	                    echo '<p>' . $desc . '</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs count-<?php echo $count; ?>" role="tablist" data-tabs="tabs">
                <?php
                // TAB gallery
                for($i = 0; $i < sizeof($gallery); $i++):
  			        	$class = $i === 0 ? 'active' : '';
  			        	$num = $i + 1;
  			        ?>
                    <li role="presentation" class="<?php echo $class; ?>">
                        <a href="#tab-<?php echo $galleryIDPrefix.$num ?>" aria-controls="tab-<?php echo $num ?>" role="tab" data-toggle="tab"><?php echo $gallery[$i]['gallery_label'] ?></a>
                    </li>
		          <?php
                endfor;
	            ?>
                </ul>
                <span class="glyphicon glyphicon-chevron-left"></span>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
	            <?php
					        for($i = 0; $i < sizeof($gallery); $i++):
						      $class = $i === 0 ? 'active' : '';
			        	  $num = $i + 1;
		        ?>
                <div role="tabpanel" class="tab-pane <?php echo $class; ?>" id="tab-<?php echo $galleryIDPrefix.$num; ?>">
                    <div class="forth-slider owl-carousel owl-theme">
                      <?php
                      $imgNum = 1;
	                    foreach($gallery[$i]['gallery_images'] as $img):
					            ?>
          						<div class="item">
                        <a data-toggle="modal" data-target="#modal-<?php echo $galleryIDPrefix.$num.'-'.$imgNum; ?>">
                          <img src="<?php echo $img['gallery_image']['sizes']['tabbed-gallery-thumbnail-cropped'] ?>" alt="">
                        </a>
                      </div>
					         <?php
                      $imgNum++;
                      endforeach;
	                ?>
                    </div>
                </div>
				<?php
          endfor;
				?>
            </div>
            <!-- end tab panes -->
        </div>
    </div>
<?php
// MODALS FOR GALLERY
for($i = 0; $i < sizeof($gallery); $i++):
  $imgNum = 1;
  $n = $i + 1;
  foreach($gallery[$i]['gallery_images'] as $img):
?>
<div class="modal fade" id="modal-<?php echo $galleryIDPrefix.$n.'-'.$imgNum; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $imgNum ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modal-label-<?php echo $imgNum ?>"><?php echo $gallery[$i]['gallery_label']; ?></h4>
      </div>
      <div class="modal-body">
        <img src="<?php echo $img['gallery_image']['sizes']['large'] ?>" alt=""/>
      </div>
    </div>
  </div>
</div>
<?
  $imgNum++;
  endforeach;
endfor;

?>

</div>
