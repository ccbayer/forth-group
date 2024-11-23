<?php
$testimonials = $args['testimonials'];
$video = $args['video'];
if (!empty($testimonials) || !empty($video)):
?>
  <div class="content-wrapper bg-light-green">
    <div class="container testimonial-wrapper">
      <div class="row">
        <?php if (!empty($testimonials)): ?>
          <div class="col-md-7">
            <div class="testimonial-inner-wrapper">
              <?php
              for ($i = 0; $i < sizeof($testimonials); $i++):
                $active = $i === 0 ? 'active' : '';
              ?>
                <blockquote id="testimonial-<?= $i ?>" class="<?= $active; ?>">
                  <p><?= $testimonials[$i]['testimonial_copy']; ?></p>
                  <p class="bq-footer"><?= $testimonials[$i]['testimonial_author']; ?></p>
                </blockquote>
              <?php
              endfor;
              ?>
            </div>
            <?php if (sizeof($testimonials) > 1): ?>
              <div class="testimonial-nav">
                <ul>
                  <?php
                  for ($i = 0; $i < sizeof($testimonials); $i++):
                    $active = $i === 0 ? 'active' : '';
                  ?>
                    <li>
                      <a href="#testimonial-<?= $i ?>" class="<?= $active ?>">
                        <span class="sr-only">View Testimonial <?= $i + 1 ?></span>
                      </a>
                    </li>
                  <?php endfor; ?>
                </ul>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($video)): ?>
          <div class="col-md-5">
            <div class="video-inner-wrapper">
              <iframe title="Forth Group Video" src="<?php $video ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php
endif;
