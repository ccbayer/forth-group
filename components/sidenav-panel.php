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
          for($i = 0; $i< $count; $i++) {
            $n = $i + 1;
            $class = $i === 0 ? 'active' : '';
            $button_id = uniqid('button-'.$i.'-');
        ?>
            <li class="<?= $class ?>">
              <button data-target="#content-<?= $n ?>" class="tab-switch sidebar tk" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
                <?= $tabs[$i]['tab_label'] ?>
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
              </button>
            </li>
        <?php } ?>
        <li>
            <button type="button" data-target="#content-all" data-all="false" class="tab-switch tk" aria-controls="<?= $tabpanel_id ?>">
              Show All Sections At Once
              <span class="fa fa-chevron-right" aria-hidden="true"></span>
            </button>
          </li>
        </ul>
      </div>
      <div class="col-md-8 col-sm-12 main-tab-content-wrapper" role="tabpanel" id="<?= $tabpanel_id ?>" >
        <?php
          for($i = 0; $i< $count; $i++) {
          $n = $i + 1;
          $class = $i === 0 ? 'active' : '';
        ?>
          <button data-target="#content-<?= $n; ?>" class="tk tab-switch <?= $class ?>" aria-controls="#content-<?= $n; ?>" aria-expanded="<?= $i === 0 ? 'true' : ''; ?>">
            <?= $tabs[$i]['tab_label']; ?><span class="fa fa-chevron-right" aria-hidden="true"></span>
          </button>
          <div class="content-wrapper" aria-role="region" aria-label="<?= $tabs[$i]['tab_label']; ?>">
            <div class="content-item <?= $class; ?>" id="content-<?= $n; ?>">
              <?= $tabs[$i]['tab_content']; ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
