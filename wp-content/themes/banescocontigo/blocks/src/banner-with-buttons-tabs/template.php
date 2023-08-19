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
  <div class="banner-with-buttons-tabs" style="
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
        <h2 class="banner-with-buttons-tabs__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <div class="banner-with-buttons-tabs__inner" data-tabs>
        <div class="banner-with-buttons-tabs__header" data-triggers>
          <?php if ($attributes['title1']) : ?>
            <a class="banner-with-buttons-tabs__tab" href="#<?= str_replace(" ", "-", strtolower($attributes['title1'])) ?>"><?= $attributes['title1'] ?></a>
          <?php endif; ?>
          <?php if ($attributes['title2']) : ?>
            <a class="banner-with-buttons-tabs__tab" href="#<?= str_replace(" ", "-", strtolower($attributes['title2'])) ?>"><?= $attributes['title2'] ?></a>
          <?php endif; ?>
          <?php if ($attributes['title3']) : ?>
            <a class="banner-with-buttons-tabs__tab" href="#<?= str_replace(" ", "-", strtolower($attributes['title3'])) ?>"><?= $attributes['title3'] ?></a>
          <?php endif; ?>
        </div>
        <div class="banner-with-buttons-tabs__body" data-body>
          <?php if ($attributes['title1']) : ?>
            <div class="banner-with-buttons-tabs__content" data-id="#<?= str_replace(" ", "-", strtolower($attributes['title1'])) ?>">
              <?php if ($attributes['items1']) : ?>
                <div class="banner-with-buttons-tabs__items">
                  <?php foreach ($attributes['items1'] as $item) : ?>
                    <div class="banner-with-buttons-tabs__item" style="
                  --widths-title: <?= ($item['widths']['title']) ? $item['widths']['title'] : '300px' ?>;
                  --widths-title--mobile: <?= ($item['widths']['mTitle']) ? $item['widths']['mTitle'] : '100%' ?>;
                  --widths-text: <?= ($item['widths']['text']) ? $item['widths']['text'] : '300px' ?>;
                  --widths-text--mobile: <?= ($item['widths']['mText']) ? $item['widths']['mText'] : '100%' ?>;
                  ">
                      <?php if ($item['image']['url']) : ?>
                        <div class="banner-with-buttons-tabs__item-image">
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
                        <div class="banner-with-buttons-tabs__item-content">
                          <?php if ($item['title']) : ?>
                            <h3 class="banner-with-buttons-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                          <?php if ($item['description']) : ?>
                            <div class="banner-with-buttons-tabs__item-description text"><?= $item['description'] ?></div>
                          <?php endif; ?>
                          <?php if ($item['button']) : ?>
                            <div class="banner-with-buttons-tabs__item-button link-button"><?= $item['button'] ?></div>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['extra1']['button'] || $attributes['extra1']['content']) : ?>
                <div class="banner-with-buttons-tabs__extra">
                  <div class="banner-with-buttons-tabs__grey-buttons">
                    <button class="button banner-with-buttons-tabs__grey-button button1<?= (!$attributes['initialNoOpened1']) ? ' active' : '' ?>">
                      <?= $attributes['extra1']['button'] ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/arrow.svg">
                    </button>
                  </div>
                  <div class="banner-with-buttons-tabs__hidden banner-with-buttons-tabs__hidden1 text<?= (!$attributes['initialNoOpened1']) ? ' active' : '' ?>">
                    <?= $attributes['extra1']['content'] ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['title2']) : ?>
            <div class="banner-with-buttons-tabs__content" data-id="#<?= str_replace(" ", "-", strtolower($attributes['title2'])) ?>">
              <?php if ($attributes['items2']) : ?>
                <div class="banner-with-buttons-tabs__items">
                  <?php foreach ($attributes['items2'] as $item) : ?>
                    <div class="banner-with-buttons-tabs__item" style="
                  --widths-title: <?= ($item['widths']['title']) ? $item['widths']['title'] : '300px' ?>;
                  --widths-title--mobile: <?= ($item['widths']['mTitle']) ? $item['widths']['mTitle'] : '100%' ?>;
                  --widths-text: <?= ($item['widths']['text']) ? $item['widths']['text'] : '300px' ?>;
                  --widths-text--mobile: <?= ($item['widths']['mText']) ? $item['widths']['mText'] : '100%' ?>;
                  ">
                      <?php if ($item['image']['url']) : ?>
                        <div class="banner-with-buttons-tabs__item-image">
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
                        <div class="banner-with-buttons-tabs__item-content">
                          <?php if ($item['title']) : ?>
                            <h3 class="banner-with-buttons-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                          <?php if ($item['description']) : ?>
                            <div class="banner-with-buttons-tabs__item-description text"><?= $item['description'] ?></div>
                          <?php endif; ?>
                          <?php if ($item['button']) : ?>
                            <?php var_dump($item['button']); ?>
                            <div class="banner-with-buttons-tabs__item-button link-button"><?= $item['button'] ?></div>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['extra2']['button'] || $attributes['extra2']['content']) : ?>
                <div class="banner-with-buttons-tabs__extra">
                  <div class="banner-with-buttons-tabs__grey-buttons">
                    <button class="button banner-with-buttons-tabs__grey-button button2<?= (!$attributes['initialNoOpened2']) ? ' active' : '' ?>">
                      <?= $attributes['extra2']['button'] ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/arrow.svg">
                    </button>
                  </div>
                  <div class="banner-with-buttons-tabs__hidden banner-with-buttons-tabs__hidden2 text<?= (!$attributes['initialNoOpened2']) ? ' active' : '' ?>">
                    <?= $attributes['extra2']['content'] ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['title3']) : ?>
            <div class="banner-with-buttons-tabs__content" data-id="#<?= str_replace(" ", "-", strtolower($attributes['title3'])) ?>">
              <?php if ($attributes['items3']) : ?>
                <div class="banner-with-buttons-tabs__items">
                  <?php foreach ($attributes['items3'] as $item) : ?>
                    <div class="banner-with-buttons-tabs__item" style="
                      --widths-title: <?= ($item['widths']['title']) ? $item['widths']['title'] : '300px' ?>;
                      --widths-title--mobile: <?= ($item['widths']['mTitle']) ? $item['widths']['mTitle'] : '100%' ?>;
                      --widths-text: <?= ($item['widths']['text']) ? $item['widths']['text'] : '300px' ?>;
                      --widths-text--mobile: <?= ($item['widths']['mText']) ? $item['widths']['mText'] : '100%' ?>;
                    ">
                      <?php if ($item['image']['url']) : ?>
                        <div class="banner-with-buttons-tabs__item-image">
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
                        <div class="banner-with-buttons-tabs__item-content">
                          <?php if ($item['title']) : ?>
                            <h3 class="banner-with-buttons-tabs__item-title"><?= $item['title'] ?></h3>
                          <?php endif; ?>
                          <?php if ($item['description']) : ?>
                            <div class="banner-with-buttons-tabs__item-description text"><?= $item['description'] ?></div>
                          <?php endif; ?>
                          <?php if ($item['button']) : ?>
                            <div class="banner-with-buttons-tabs__item-button link-button"><?= $item['button'] ?></div>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['extra3']['button'] || $attributes['extra3']['content']) : ?>
                <div class="banner-with-buttons-tabs__extra">
                  <div class="banner-with-buttons-tabs__grey-buttons">
                    <button class="button banner-with-buttons-tabs__grey-button button3<?= (!$attributes['initialNoOpened3']) ? ' active' : '' ?>">
                      <?= $attributes['extra3']['button'] ?>
                      <img src="<?php the_block_url(__DIR__); ?>/assets/arrow.svg">
                    </button>
                  </div>
                  <div class="banner-with-buttons-tabs__hidden banner-with-buttons-tabs__hidden3 text<?= (!$attributes['initialNoOpened3']) ? ' active' : '' ?>">
                    <?= $attributes['extra3']['content'] ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($attributes['extraText'] || $attributes['extraLink']) : ?>
        <div class="banner-with-buttons-tabs__extra-text">
          <?php if ($attributes['extraText']) : ?>
            <div class="banner-with-buttons-tabs__extra-text-content text">
              <?= $attributes['extraText'] ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['extraLink'] && $attributes['extraLinkTarget']) : ?>
            <a class="banner-with-buttons-tabs__extra-text-link link-button" href="<?= $attributes['extraLinkTarget'] ?>">
              <?= $attributes['extraLink'] ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php if ($attributes['outlinedButton'] || $attributes['primaryButton']) : ?>
        <div class="banner-with-buttons-tabs__buttons">
          <?php if ($attributes['outlinedButton']) : ?>
            <a class="banner-with-buttons-tabs__button outlined-button" href="<?= $attributes['outlinedButtonTarget'] ?>">
              <?= $attributes['outlinedButton'] ?>
            </a>
          <?php endif; ?>
          <?php if ($attributes['primaryButton']) : ?>
            <a class="banner-with-buttons-tabs__button primary-button" href="<?= $attributes['primaryButtonTarget'] ?>">
              <?= $attributes['primaryButton'] ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('.banner-with-buttons-tabs').forEach(function(wrapper) {
    const currencyBtn1 = wrapper.querySelector('.button1')
    const currencyBtn2 = wrapper.querySelector('.button2')
    const currencyBtn3 = wrapper.querySelector('.button3')

    currencyBtn1 && currencyBtn1.addEventListener('click', function(e) {
      wrapper.querySelector('.banner-with-buttons-tabs__hidden1').classList.toggle('active')
      currencyBtn1.classList.toggle('active')
    })
    currencyBtn2 && currencyBtn2.addEventListener('click', function(e) {
      wrapper.querySelector('.banner-with-buttons-tabs__hidden2').classList.toggle('active')
      currencyBtn2.classList.toggle('active')
    })
    currencyBtn3 && currencyBtn2.addEventListener('click', function(e) {
      wrapper.querySelector('.banner-with-buttons-tabs__hidden3').classList.toggle('active')
      currencyBtn2.classList.toggle('active')
    })
  })
</script>

<script>
  new class Tabs {

    constructor() {
      this.$wrapper;
      this.$triggers;
      this.$body;
      this.init();
    }

    init() {
      document.querySelectorAll('.banner-with-buttons-tabs__inner[data-tabs]').forEach((wrapper) => {
        this.$wrapper = wrapper;
        this.$triggers = [...wrapper.querySelector('[data-triggers]').children];
        this.$body = [...wrapper.querySelector('[data-body]').children];
        this.$triggers[0].classList.add('active');
        this.$body[0].classList.add('active');
        this.update();
        this.addListenerClick();
        this.addListenerHash();
      });
    }

    update(event) {
      const trigger = this.$wrapper.querySelector(`a[href="${window.location.hash}"]`);
      const content = this.$wrapper.querySelector(`[data-id="${window.location.hash}"]`);

      if (window.location.hash && trigger && content) {

        this.$triggers.forEach((trigger) => {
          trigger.classList.remove('active');
        });

        this.$body.forEach((content) => {
          content.classList.remove('active');
        });

        trigger.classList.add('active');
        content.classList.add('active');
      }

      sessionStorage.setItem("last-url", event?.oldURL);
    }

    addListenerClick() {
      this.$triggers.forEach(trigger => {
        trigger.addEventListener('click', this.changeTab.bind(this));
      });
    }

    addListenerHash() {
      window.addEventListener('hashchange', this.update.bind(this));
    }

    changeTab(event) {
      event.preventDefault();

      const trigger = event.target.closest('a[href^="#"]');
      const content = this.$wrapper.querySelector(`[data-id="${trigger.hash}"]`);

      this.$triggers.forEach(trigger => {
        trigger.classList.remove('active');
      });

      this.$body.forEach(content => {
        content.classList.remove('active');
      });

      trigger.classList.add('active');
      content.classList.add('active');

      history.replaceState(undefined, undefined, trigger.hash)
    }
  };
</script>