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
  <div class="banner-with-buttons" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-big-spacing="<?= ($attributes['bigSpacing']) ? "true" : "false" ?>">
    <div class="container">
      <?php if ($attributes['title']) : ?>
        <h2 class="banner-with-buttons__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <div class="banner-with-buttons__inner">
        <?php if ($attributes['items']) : ?>
          <div class="banner-with-buttons__items">
            <?php foreach ($attributes['items'] as $item) : ?>
              <div class="banner-with-buttons__item" style="
                --widths-title: <?= ($item['widths']['title']) ? $item['widths']['title'] : '300px' ?>;
                --widths-title--mobile: <?= ($item['widths']['mTitle']) ? $item['widths']['mTitle'] : '100%' ?>;
                --widths-text: <?= ($item['widths']['text']) ? $item['widths']['text'] : '300px' ?>;
                --widths-text--mobile: <?= ($item['widths']['mText']) ? $item['widths']['mText'] : '100%' ?>;
								">
                <?php if ($item['image']['url']) : ?>
                  <div class="banner-with-buttons__item-image">
                    <?php if ($item['image']['url'] == 'card.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/card.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == 'pdf.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/pdf.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == 'page.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/page.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == '21.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/21.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == 'bag.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/bag.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == 'tablet.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/tablet.svg" alt="icon" />
                    <?php elseif ($item['image']['url'] == 'image.svg') : ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/image.svg" alt="icon" />
                    <?php elseif ($item['image']['url']) : ?>
                      <img src="<?= $item['image']['url'] ?>" alt="icon" />
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($item['title'] || $item['description']) : ?>
                  <div class="banner-with-buttons__item-content">
                    <?php if ($item['title']) : ?>
                      <h3 class="banner-with-buttons__item-title"><?= $item['title'] ?></h3>
                    <?php endif; ?>
                    <?php if ($item['description']) : ?>
                      <div class="banner-with-buttons__item-description text"><?= $item['description'] ?></div>
                    <?php endif; ?>
                    <?php if ($item['button']) : ?>
                      <div class="banner-with-buttons__item-button link-button"><?= $item['button'] ?></div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <?php if ($attributes['extra']['button'] || $attributes['extra']['content']) : ?>
          <div class="banner-with-buttons__extra">
            <div class="banner-with-buttons__grey-buttons">
              <button class="button banner-with-buttons__grey-button button1 active">
                <?= $attributes['extra']['button'] ?>
                <img src="<?php the_block_url(__DIR__); ?>/assets/arrow.svg">
              </button>
            </div>
            <div class="banner-with-buttons__hidden text active">
              <?= $attributes['extra']['content'] ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($attributes['outlinedButton'] || $attributes['primaryButton']) : ?>
        <div class="banner-with-buttons__buttons">
          <?php if ($attributes['outlinedButton']) : ?>
            <a class="banner-with-buttons__button outlined-button" href="<?= $attributes['outlinedButtonTarget'] ?>">
              <?= $attributes['outlinedButton'] ?>
            </a>
          <?php endif; ?>
          <?php if ($attributes['primaryButton']) : ?>
            <a class="banner-with-buttons__button primary-button" href="<?= $attributes['primaryButtonTarget'] ?>">
              <?= $attributes['primaryButton'] ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php if ($attributes['extraText'] || $attributes['extraLink']) : ?>
        <div class="banner-with-buttons__extra-text">
          <?php if ($attributes['extraText']) : ?>
            <div class="banner-with-buttons__extra-text-content text">
              <?= $attributes['extraText'] ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['extraLink'] && $attributes['extraLinkTarget']) : ?>
            <a class="banner-with-buttons__extra-text-link link-button" href="<?= $attributes['extraLinkTarget'] ?>">
              <?= $attributes['extraLink'] ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.banner-with-buttons').forEach(function(calculator) {
    const currencyBtn = calculator.querySelector('.button1')

    currencyBtn.addEventListener('click', function(e) {
      document.querySelector('.banner-with-buttons__hidden').classList.toggle('active')
      currencyBtn.classList.toggle('active')
    })
  })
</script>