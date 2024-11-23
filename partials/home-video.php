<?php
$video = $args['video'];
if (!empty($video)):
?>
  <div class="col-md-5">
    <div class="video-inner-wrapper">
      <iframe title="Forth Group Video" src="<?php $video ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
<?php endif; ?>