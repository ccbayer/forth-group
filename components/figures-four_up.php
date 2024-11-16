<?php
$color = get_sub_field('background_color');
?>
<div class="bg-<?= esc_attr($color); ?> figures-four-up-wrapper">
  <h2 class="sr-only">Services</h2>
  <div class="container">
    <div class="row">
      <?php
      $figs = get_sub_field('figure');
      foreach ($figs as $figure):
      ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 figure-wrapper">
          <?php if (!empty($figure['headline'])): ?>
            <div class="headline">
              <h3 class="tk">
                <?= esc_html($figure['headline']); ?>
              </h3>
            </div>
          <?php endif; ?>
          <?php if (!empty($figure['icon'])): ?>
            <figure>
              <img
                src="<?= esc_url($figure['icon']['url']); ?>"
                alt=""
                class="retina"
                data-rjs="2">
              <figcaption>
                <?= acf_esc_html($figure['body']); ?>
              </figcaption>
            </figure>
          <?php endif; ?>
        </div>
      <?php
      endforeach;
      ?>
    </div>
  </div>
</div>