<?php
  $testimonials = $args['testimonials']; 
  if (!empty($testimonials)):
  $testominal_size = sizeof($testimonials);
?>
  <div class="col-md-7">
    <div class="testimonial-inner-wrapper">
      <?php 
        for($i = 0; $i < $testominal_size; $i++):
          $active = $i === 0 ? 'active' : '';
        ?>
          <blockquote id="testimonial-<?=$i ?>" class="<?= $active; ?>">
            <p><?= $testimonials[$i]['testimonial_copy']; ?></p>
            <p class="bq-footer"><?= $testimonials[$i]['testimonial_author']; ?></p>
              </blockquote>
          <?php
          endfor;
        ?>
      </div>
    <?php if($testominal_size > 1): ?>
      <div class="testimonial-nav">
        <ul>
        <?php
          for($i = 0; $i < $testominal_size; $i++):
          $active = $i === 0 ? 'active' : '';
        ?>
          <li>
            <button data-target="#testimonial-<?= $i ?>" class="<?= $active ?>" aria-label="View Testimonial <?= $i ?>" title="View Testimonial <?= $i ?>">
              <span class="sr-only">View Testimonial <?= $i ?></span>
            </button>
          </li>
        <?php endfor; ?>
        </ul>
      </div>
    <?php endif; ?>
    </div>
  <?php endif; ?>