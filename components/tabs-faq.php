<!-- SIDE-TABBED FAQ CONTENT AREA -->
<?php 
  $tablist_title_id = uniqid('tablist-title-');
  $tabpanel_id = uniqid('tabpanel-');
?>
<div class="side-tabbed-content-wrapper bg-light-green">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 intro">
        <h2 class="tk" id="<?= $tablist_title_id ?>"><?php the_sub_field('headline'); ?></h2>
          <?php the_sub_field('description'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 side-nav">
        <ul role="tablist" aria-labelledby="<?= $tablist_title_id ?>">
          <?php
            $tabs = get_sub_field('faq_group');
            $count = sizeof($tabs);
            for($i = 0; $i< $count; $i++) {
              $n = $i + 1;
              $class = $i === 0 ? 'active' : '';
          ?>
            <li class="<?= $class ?>">
              <button type="button" data-target="#content-<?= $n ?>" class="tab-switch tk" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>" aria-controls="<?= $tabpanel_id ?>">
                <?= $tabs[$i]['faq_group_label'] ?>
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
      <div class="col-md-8 col-sm-12 main-tab-content-wrapper" role="tabpanel" id="<?= $tabpanel_id ?>">
        <?php
          for($i = 0; $i< $count; $i++) {
            $n = $i + 1;
            $class = $i === 0 ? 'active' : '';
          ?>
          <button type="button" data-target="#content-<?= $n; ?>" class="tk tab-switch <?= $class ?>">
            <?= $tabs[$i]['faq_group_label']; ?><span class="fa fa-chevron-right" aria-hidden="true"></span>
          </button>
          <div class="content-wrapper">
            <div class="content-item <?= $class; ?>" id="content-<?= $n; ?>">
              <h2><?= $tabs[$i]['faq_group_label'] ?></h2>
              <?php
                $faqs = $tabs[$i]['faq'];
                foreach($faqs as $faq):
              ?>
              <div class="faq-item">
                <h3><?= $faq['question']; ?></h3>
                <div class="answer">
                  <?= $faq['answer']; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>