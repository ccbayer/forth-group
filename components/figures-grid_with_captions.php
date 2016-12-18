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

    <div class="bg-<?php the_sub_field('background_color'); ?> figures-grid-with-captions">
        <div class="container">
            <div class="row">
                <h2 class="tk"><?php the_sub_field('headline'); ?></h2>
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
                            <img src="<?php echo $figs[$i]['icon']['url'] ?>" alt="" data-rjs="2" class="retina <?php echo $figs[$i]['css_classes']; ?>">
                            <figcaption>
                                <h3 class="tk"><?php echo $figs[$i]['label']; ?></h3>
                                <div class="content">
                                  <?php echo $figs[$i]['content'] ?>
                                  <?php
                                   $moreContentHolder .= '<div class="read-more" id="' . $moreIdLg .'"><h4>'.$figs[$i]['label'].' <a href="#'.$moreIdLg.'" class="forthHideAndSwap" data-target-to-swap="#'.$targetToSwap.'" data-attr-to-swap="data-toggle-on">Read Less -</a></h4>' . $figs[$i]['expanded_content'] . '</div>';
                                  ?>
                                  <div class="more-mobile" id="<?php echo $moreId ?>"><?php echo $figs[$i]['expanded_content']; ?></div>
                                  <a href="#<?php echo $moreId ?>" class="readMoreLess hide-above-tablet" data-toggle-on="Read More +" data-toggle-off="Read Less -">Read More +</a>
                                  <a href="#<?php echo $moreIdLg ?>" id="<?php echo $targetToSwap ?>" class="forthToggleSwapTrigger hide-below-tablet" data-toggle-on="Read More +" data-toggle-off="Read Less -">Read More +</a>
                                </div>
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
    </div>
