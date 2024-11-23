<?php

/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<?php
$hero = get_field('hero_image');
$heroImage = 'style="background-image: url(' . $hero[0]['hero_image_desktop']['url'] . ')"; background-size: cover;';
if (get_field('show_hero_video') && get_field('hero_video')):
  $heroImage = '';
endif;
?>
<main id="content">
  <div class="wrapper" id="home-page-wrapper">
    <header class="home-banner pattern-overlay opacity-45" <?php echo $heroImage; ?> aria-label="Home Page Heading">
      <div class="container">
        <?php if (get_field('show_hero_video') && get_field('hero_video')): ?>
          <div class="video-container">
            <div class="play-pause-container">
              <button title="Pause Video" aria-label="Pause Video" class="play-pause" data-target="video">
                <span class="sr-only" aria-live="polite">Pause Video</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 icon-play d-none">
                  <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 icon-pause">
                  <path fill-rule="evenodd" d="M6.75 5.25a.75.75 0 0 1 .75-.75H9a.75.75 0 0 1 .75.75v13.5a.75.75 0 0 1-.75.75H7.5a.75.75 0 0 1-.75-.75V5.25Zm7.5 0A.75.75 0 0 1 15 4.5h1.5a.75.75 0 0 1 .75.75v13.5a.75.75 0 0 1-.75.75H15a.75.75 0 0 1-.75-.75V5.25Z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div class="video-pattern"></div>
            <?php $video = get_field('hero_video'); ?>
            <video poster="<?= esc_url($hero[0]['hero_image_desktop']['url']); ?>" playsinline autoplay muted loop id="video">
              <source src="<?= esc_url($video['url']); ?>">
            </video>
          </div>
        <?php endif; ?>
        <div class="row">
          <div class="col-md-6 offset-md-3" id="home-content">
            <h1 class="tk"><?= acf_esc_html(get_field('main_headline')) ?></h1>
            <a href="<?= esc_url(get_field('call_to_action_link')); ?>" class="btn tk"><?= esc_html(get_field('call_to_action_text')); ?></a>
          </div>
        </div>
      </div>
    </header>
    <section class="content-wrapper bg-white" aria-label="Introduction">
      <div class="container introduction-wrapper">
        <div class="row">
          <div class="col-md-8 offset-md-2 introduction">
            <h2 class="tk"><?= acf_esc_html(get_field('subheadline')); ?></h2>
            <?= acf_esc_html(get_field('introduction')); ?>
          </div>
        </div>
        <?php
        $icon_group = get_field('icon_group');
        if ($icon_group):
        ?>
          <div class="row" id="icon-group">
            <?php foreach ($icon_group as $icon): ?>
              <figure class="col-md-3 col-sm-6 col-xs-sm">
                <?php if ($icon['link']): ?>
                  <a href="<?= esc_url($icon['link']); ?>">
                  <?php endif; ?>
                  <img
                    src="<?= esc_url($icon['icon']['url']); ?>"
                    alt=""
                    class="<?= esc_attr($icon['css_classes']) ?>"
                    data-rjs="2">
                  <figcaption class="tk">
                    <?= acf_esc_html($icon['caption']); ?>
                  </figcaption>
                  <?php if ($icon['link']): ?>
                  </a>
                <?php endif; ?>
              </figure>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <?php
    $testimonials = get_field('testimonials');
    $video = get_field('video_url');
    if (!empty($testimonials) || !empty($video)):
    ?>
      <section
        class="content-wrapper bg-light-green" aria-label="Testimonials">
        <div class="container testimonial-wrapper">
          <div class="row">
            <?php
            if (!empty($testimonials)):
              get_template_part('partials/home-testimonials', null, [
                'testimonials' => $testimonials,
              ]);
            endif;
            ?>
            <?php
            if (!empty($video)):
              get_template_part('partials/home-video', null, [
                'video' => $video,
              ]);
            endif;
            ?>
          </div>
        </div>
      </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>