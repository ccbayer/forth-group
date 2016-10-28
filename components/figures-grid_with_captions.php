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
                <h2><?php the_sub_field('headline'); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
						<?php
				          $figs = get_sub_field('figure');
				          foreach($figs as $figure):
                  $content = readMore($figure['content'], 220);
				    ?>
                        <figure class="col-md-6">
                            <img src="<?php echo $figure['icon']['url'] ?>" alt="">
                            <figcaption>
                                <h3><?php echo $figure['label']; ?></h3>
                                <p><?php echo $content; ?></p>
                            </figcaption>
                        </figure>
                        <?php
	                      endforeach;
	                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
