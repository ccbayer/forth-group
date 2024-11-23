<?php
$show = get_field('show_bottom_cta');
if ($show):
  $link = get_field('button_link_type') === 'Internal' ? get_permalink(get_field('button_link_internal')) : get_field('button_link_external');
  $target = get_field('button_link_type') === 'Internal' ? '_self' : '_blank';
  $icon = '&raquo;';
  if ($target === '_blank') {
    $icon = null;
  }
?>
  <div class="bg-light-green bp-cta-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12 lbl-wrapper">
          <h2 class="h3"><?= acf_esc_html(get_field('bottom_cta_text')); ?></h2>
        </div>
        <div class="col-md-12 btn-wrapper">
          <a class="btn tk <?= esc_attr($icon_class) ?>" href="<?= $link; ?>" target=<?= $target ?>>
            <?= acf_esc_html(get_field('bottom_cta_button_label')); ?> <?= $icon ?></a>
          <?php
          // is there a secondary CTA?
          if (get_field('secondary_bottom_cta')):
            $secondarylink = get_field('secondary_bottom_cta_link_type') === 'Internal' ? get_permalink(get_field('secondary_bottom_cta_internal_link')) : get_field('secondary_bottom_cta_external_link');
            $secondarytarget = get_field('secondary_bottom_cta_link_type') === 'Internal' ? '_self' : '_blank';
            $secondaryicon = '&raquo;';
            if ($target === '_blank') {
              $secondaryicon = null;
            }
          ?>
            <a
              class="btn tk"
              href="<?= esc_url($secondarylink); ?>"
              target=<?= esc_attr($secondarytarget); ?>>
              <?= acf_esc_html(get_field('secondary_bottom_cta_button_label')); ?> <?= $secondaryicon ?>
            </a>
          <?php
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>