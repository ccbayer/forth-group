<!-- Side-Navigation Page Panel -->
<?php
$tabpanel_id = uniqid('tabpanel-');
?>
<div class="side-tabbed-content-wrapper bg-light-green">
  <div class="container">
    <div class="row">
      <div class="col-md-4 side-nav">
        <ul role="tablist" aria-label="Sales and Refinancing Information">
          <?php
          $tabs = get_sub_field('side_panel_tabs');
          $count = sizeof($tabs);
          for ($i = 0; $i < $count; $i++) {
            $n = $i + 1;
            $class = $i === 0 ? 'active' : '';
            $button_id = uniqid('button-' . $i . '-');
          ?>
            <li class="<?= $class ?>">
              <button data-target="#content-<?= esc_attr($n) ?>" class="tab-switch sidebar tk" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
                <?= esc_html($tabs[$i]['tab_label']) ?>
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
              </button>
            </li>
          <?php } ?>
          <li>
            <button type="button" data-target="#content-all" data-all="false" class="tab-switch tk" aria-controls="<?= esc_attr($tabpanel_id) ?>">
              Show All Sections At Once
              <span class="fa fa-chevron-right" aria-hidden="true"></span>
            </button>
          </li>
        </ul>
      </div>
      <div class="col-md-8 col-sm-12 main-tab-content-wrapper" role="tabpanel" id="<?= esc_attr($tabpanel_id); ?>">
        <?php
        for ($i = 0; $i < $count; $i++) {
          $n = $i + 1;
          $class = $i === 0 ? 'active' : '';
        ?>
          <button
            data-target="#content-<?= esc_attr($n); ?>"
            class="tk tab-switch <?= esc_attr($class) ?>"
            aria-controls="#content-<?= esc_attr($n); ?>"
            aria-expanded="<?= $i === 0 ? 'true' : ''; ?>">
            <?= esc_html($tabs[$i]['tab_label']); ?>
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
          </button>
          <div class="content-wrapper" aria-role="region" aria-label="<?= esc_attr($tabs[$i]['tab_label']); ?>">
            <div class="content-item <?= esc_attr($class); ?>" id="content-<?= esc_attr($n); ?>">
              <?= $tabs[$i]['tab_content']; ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>