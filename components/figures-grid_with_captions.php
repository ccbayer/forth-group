<?php

function readMore($input, $limit) {
  if (strlen($input) > $limit) {

      $firstId = 'firstPart-'.substr(md5(rand()), 0, 7);
      $lastId =  'lastPart-'.substr(md5(rand()), 0, 7);
      $firstPart = substr($input, 0, $limit);

      return '<span class="firstPart" id="'.$firstId.'">'.substr($firstPart, 0, strrpos($firstPart, ' ')).'<a href="#'.$firstId.'" class="readMore">Read More + </a></span><span class="more">'.$input.' <a href="#'.$firstId.'" class="readLess">Read Less -</a></span>';
  } else {
    return $input;
  }
}

 ?>

<section class="bg-<?php the_sub_field('background_color'); ?> figures-grid-with-captions">
  <div class="container">
    <div class="row">
      <?php
        $headline = get_sub_field('headline');
        $headlineClass = $headline ? 'tk' : 'tk sr-only';
        $headline = $headline ? $headline : 'Our Experience';
      ?>
      <h2 class="<?= $headlineClass ?>"><?= $headline; ?></h2>
    </div>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="row">
        <?php
          $figs = get_sub_field('figure');
          $moreContentHolder = '';
          for($i = 0; $i < sizeof($figs); $i++):
          $content = readMore($figs[$i]['content'], 220);
            $moreId = 'readMore-'.substr(md5(rand()), 0, 7);
            $moreIdLg = 'readMoreDesktop-'.substr(md5(rand()), 0, 7);
            $targetToSwap = 'targetTrigger-'.substr(md5(rand()), 0, 10);
        ?>
          <figure class="col-md-6">
            <img src="<?php echo $figs[$i]['icon']['url'] ?>" alt="Icon for <?= $figs[$i]['label']; ?>" data-rjs="2" class="retina <?php echo $figs[$i]['css_classes']; ?>">
              <figcaption>
                <h3 class="tk"><?php echo $figs[$i]['label']; ?></h3>
                  <div class="content">
                    <?php echo $figs[$i]['content'] ?>
                    <div class="d-none" id="<?php echo $moreId ?>"><?php echo $figs[$i]['expanded_content']; ?></div>
                  </div>
                  <button type="button" aria-expanded="false" class="readMoreLess" data-toggle-on="Read More +" aria-controls="<?php echo $moreId ?>" data-toggle-off="Read Less -" aria-label="Read More About <?= $figs[$i]['label'] ?>">Read More +</button>
              </figcaption>
          </figure>
            <?php
              if($i % 2) {
            ?>
              <div class="col-md-12">
                <?php echo $moreContentHolder; ?>
              </div>
            <?
              $moreContentHolder = '';
            }
            ?>
            <?php
          endfor;
          ?>
        </div>
    </div>
</div>
  </div>
</section>
