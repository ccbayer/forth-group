<?php
$images = get_field('hero_image');
$desktop = $images[0]['desktop_image'] ? $images[0]['desktop_image']['url'] : '';
$tablet = $images[0]['tablet_image'] ? $images[0]['tablet_image']['url'] : $images[0]['desktop_image']['sizes']['tablet-banner-cropped'];
$phablet = $images[0]['phablet_image'] ? $images[0]['phablet_image']['url'] : $images[0]['desktop_image']['sizes']['phablet-banner-cropped'];
$mobile = $images[0]['mobile_image'] ? $images[0]['mobile_image']['url'] : $images[0]['desktop_image']['sizes']['mobile-banner-cropped'];
$bgset = $mobile . ' [(max-width: 480px)] | ' . $phablet . ' [(max-width: 768px)] | ' . $tablet . ' [(max-width:1024px)] | ' . $desktop;
$show_icon_buttons = get_field('show_icon_buttons');
?>
<div class="backpage-banner pattern-overlay opacity-45 lazyload" data-bgset="<?php echo $bgset; ?>"></div>
<div class="container introduction-wrapper">
  <div class="row">
    <div class="col-md-10 offset-md-1 introduction">
      <h1 class="tk"><?= acf_esc_html(get_field('headline')); ?></h1>
      <div class="intro-copy">
        <?= acf_esc_html(get_field('introduction')); ?>
      </div>
      <?php if ($show_icon_buttons): ?>
    </div>
  </div>
  <div class="row">
    <div class="icon-buttons">
      <?php
        $buttons = get_field('icon_buttons');
        foreach ($buttons as $button):
          $link = $button['link_type'] === 'Internal' ? $button['internal_link'] : $button['external_link'];
          $target = $button['link_type'] === 'Internal' ? '_self' : '_blank';
          $icon = '&raquo;';
          if ($target === '_blank') {
            $icon = '<svg xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-external-link"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg>';
            $icon_class = ' download';
          }
      ?>
        <div class="col-md-4">
          <a href="<?= esc_url($link); ?>" class="icon-button <?= esc_attr($icon_class) ?>" target="<?= esc_attr($target) ?>">
            <img src="<?= esc_html($button['icon']['url']) ?>" alt="" class="retina" data-rjs="2" />
            <span class="label-icon">
              <?= esc_html($button['label']) ?>
              <span class="icon">
                <?= $icon; ?>
              </span>
            </span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  </div>
</div>