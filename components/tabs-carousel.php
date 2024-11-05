<?php
 $galleryIDPrefix = 'gallery-' .  substr(md5(rand()), 0, 7).'-';
 $gallery = get_sub_field('gallery');
 $count = sizeof($gallery) > 3 ? 4 : $sizeof($gallery);
 $titleid = uniqid('tabs-panel-wrapper-');
?>
<div class="tabbed-carousel-wrapper bg-white" data-tab-container>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2 class="section-heading tk" id="<?= $titleid ?>"><?php the_sub_field('headline') ?></h2>
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
                <ul class="nav nav-tabs count-<?php echo $count; ?>" role="tablist" data-tabs="tabs" aria-labelledby="<?= $titleid ?>">
                <?php
                // TAB gallery
                for($i = 0; $i < sizeof($gallery); $i++):
                  $class = $i === 0 ? 'active' : '';
                  $num = $i + 1;
                ?>
                    <li role="presentation" class="<?php echo $class; ?> tk">
                      <button
                        type="button"
                        aria-controls="tab-<?= $galleryIDPrefix.$num ?>"
                        aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"
                        role="tab"
                      >
                        <?php echo $gallery[$i]['gallery_label'] ?>
                      </button>
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
                        <button data-toggle="modal" data-target="#modal" data-img="<?= $img['gallery_image']['sizes']['large'] ?>" data-label="<?= $gallery[$i]['gallery_label'] ?>">
                          <img src="<?php echo $img['gallery_image']['sizes']['medium'] ?>" alt="">
                        </button>
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
    <?php if(!empty( $gallery)): ?>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title h4" id="modal-title"><?= $gallery[0]['gallery_label'] ?></h2>
          </div>
          <div class="modal-body">
            <img src="<?= $gallery[0]['gallery_images'][0]['gallery_image']['sizes']['large'] ?>" alt=""/>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
</div>
