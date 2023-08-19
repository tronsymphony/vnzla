<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="videos" style="
      --paddings-top: <?= (isset($attributes['paddings']['desktop']['top'])) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= (isset($attributes['paddings']['mobile']['top'])) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= (isset($attributes['paddings']['desktop']['bottom'])) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= (isset($attributes['paddings']['mobile']['bottom'])) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= (isset($attributes['margins']['desktop']['top'])) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= (isset($attributes['margins']['mobile']['top'])) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= (isset($attributes['margins']['desktop']['bottom'])) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= (isset($attributes['margins']['mobile']['bottom'])) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= (isset($attributes['gradient'])) ? $attributes['gradient'] : '#fff' ?>;
    " data-mobile-font-size-increase="<?= ($attributes['title']['mIncrease']) ? "true" : 'false' ?>">
    <div class="container">
      <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
        <h2 class="videos__title">
          <?php if ($attributes['title']['desktop']) : ?>
            <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
          <?php endif; ?>
          <?php if ($attributes['title']['mobile']) : ?>
            <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
          <?php endif; ?>
        </h2>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="videos__inner">
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="videos__item" style="
              --max-lines: <?= ($item['maxLines']) ? $item['maxLines'] : '1' ?>;
            ">
              <?php if ($item['image']['url']) : ?>
                <a class="videos__item-image" href="<?= $item['link'] ?>">
                  <?php if ($item['image']['url'] == 'video-1.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-1.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-2.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-2.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-3.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-3.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-4.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-4.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-5.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-5.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-6.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-6.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-7.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-7.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-8.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-8.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-9.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-9.jpg" alt="video" />
                  <?php elseif ($item['image']['url'] == 'video-10.jpg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/video-10.jpg" alt="video" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="video" />
                  <?php endif; ?>
                </a>
              <?php endif; ?>
              <?php if ($item['title']) : ?>
                <h3 class="videos__item-title">
                  <?= $item['title'] ?>
                </h3>
              <?php endif; ?>
              <?php if ($item['text']) : ?>
                <div class="videos__item-text">
                  <?= $item['text'] ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if ($attributes['link']['enable']) : ?>
        <a class="videos__link" href="<?= $attributes['link']['target'] ?>">
          <?php if ($attributes['link']['image']['url']) : ?>
            <div class="videos__link-image">
              <?php if ($attributes['link']['image']['url'] == 'youtube.svg') : ?>
                <img src="<?php the_block_url(__DIR__); ?>/assets/youtube.svg" alt="link" />
              <?php elseif ($attributes['link']['image']['url']) : ?>
                <img src="<?= $attributes['link']['image']['url'] ?>" alt="link" />
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['link']['title']['desktop'] || $attributes['link']['title']['mobile']) : ?>
            <h4 class="videos__link-title link-button">
              <?php if ($attributes['link']['title']['desktop']) : ?>
                <span class="<?= ($attributes['link']['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['link']['title']['desktop'] ?></span>
              <?php endif; ?>
              <?php if ($attributes['link']['title']['mobile']) : ?>
                <span class="only-mobile"><?= $attributes['link']['title']['mobile'] ?></span>
              <?php endif; ?>
            </h4>
          <?php endif; ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>