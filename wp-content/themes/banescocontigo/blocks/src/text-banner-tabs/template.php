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
  <div class="text-banner-tabs" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --widths-text: <?= ($attributes['widths']['text']) ? $attributes['widths']['text'] : '150px' ?>;
      --widths-text--mobile: <?= ($attributes['widths']['mText']) ? $attributes['widths']['mText'] : '150px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    ">
    <div class="container">
      <div class="text-banner-tabs__inner" data-tabs data-reverse="<?= ($attributes['reverseDirection']) ? 'true' : 'false' ?>" data-mobile-fit="<?= ($attributes['mobileFit']) ? 'true' : 'false' ?>" data-extra-size="<?= ($attributes['extraSize']) ? 'true' : 'false' ?>">
        <div class="text-banner-tabs__header" data-triggers>
          <?php if ($attributes['title1']) : ?>
            <a class="text-banner-tabs__tab" href="#<?= str_replace(" ", "-", strtolower($attributes['title1'])) ?>"><?= $attributes['title1'] ?></a>
          <?php endif; ?>
          <?php if ($attributes['title2']) : ?>
            <a class="text-banner-tabs__tab" href="#<?= str_replace(" ", "-", strtolower($attributes['title2'])) ?>"><?= $attributes['title2'] ?></a>
          <?php endif; ?>
          <?php if ($attributes['title3']) : ?>
            <a class="text-banner-tabs__tab" href="#<?= str_replace(" ", "-", strtolower($attributes['title3'])) ?>"><?= $attributes['title3'] ?></a>
          <?php endif; ?>
        </div>
        <div class="text-banner-tabs__body" data-body>
          <?php if ($attributes['title1']) : ?>
            <div class="text-banner-tabs__content" data-id="#<?= str_replace(" ", "-", strtolower($attributes['title1'])) ?>">
              <?php if ($attributes['text1']) : ?>
                <div class="text-banner-tabs__text text-banner-tabs__text1 text<?= ($attributes['initialOpened1']) ? ' active' : '' ?>" data-crop="<?= ($attributes['crop1']) ? 'true' : 'false' ?>"><?= $attributes['text1'] ?></div>
              <?php endif; ?>
              <?php if ($attributes['crop1']) : ?>
                <div class="text-banner-tabs__open1 text-banner-tabs__open<?= ($attributes['initialOpened1']) ? ' active' : '' ?>">
                  <button class="text-banner-tabs__button link-button">Ver todos los detalles</button>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['title2']) : ?>
            <div class="text-banner-tabs__content" data-id="#<?= str_replace(" ", "-", strtolower($attributes['title2'])) ?>">
              <?php if ($attributes['text2']) : ?>
                <div class="text-banner-tabs__text text-banner-tabs__text2 text<?= ($attributes['initialOpened2']) ? ' active' : '' ?>" data-crop="<?= ($attributes['crop2']) ? 'true' : 'false' ?>"><?= $attributes['text2'] ?></div>
              <?php endif; ?>
              <?php if ($attributes['crop2']) : ?>
                <div class="text-banner-tabs__open2 text-banner-tabs__open<?= ($attributes['initialOpened2']) ? ' active' : '' ?>">
                  <button class="text-banner-tabs__button link-button">Ver todos los detalles</button>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($attributes['title3']) : ?>
            <div class="text-banner-tabs__content" data-id="#<?= str_replace(" ", "-", strtolower($attributes['title3'])) ?>">
              <?php if ($attributes['text3']) : ?>
                <div class="text-banner-tabs__text text-banner-tabs__text3 text<?= ($attributes['initialOpened3']) ? ' active' : '' ?>" data-crop="<?= ($attributes['crop3']) ? 'true' : 'false' ?>"><?= $attributes['text3'] ?></div>
              <?php endif; ?>
              <?php if ($attributes['crop3']) : ?>
                <div class="text-banner-tabs__open3 text-banner-tabs__open<?= ($attributes['initialOpened3']) ? ' active' : '' ?>">
                  <button class="text-banner-tabs__button link-button">Ver todos los detalles</button>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
        <?php if ($attributes['background']['url']) : ?>
          <div class="text-banner-tabs__background">
            <?php if ($attributes['background']['url']) : ?>
              <?php if ($attributes['background']['url'] == 'background-1.jpg') : ?>
                <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-1.jpg" alt="image" />
              <?php elseif ($attributes['background']['url'] == 'background-2.jpg') : ?>
                <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/background-2.jpg" alt="image" />
              <?php elseif ($attributes['background']['url']) : ?>
                <img class="<?= ($attributes['mBackground']['url']) ? 'only-desktop' : '' ?>" src="<?= $attributes['background']['url'] ?>" alt="image" />
              <?php endif; ?>
            <?php endif; ?>
            <?php if ($attributes['mBackground']['url']) : ?>
              <?php if ($attributes['mBackground']['url'] == 'background-1-mobile.jpg') : ?>
                <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-1-mobile.jpg" alt="image" />
              <?php elseif ($attributes['mBackground']['url'] == 'background-2-mobile.jpg') : ?>
                <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/background-2-mobile.jpg" alt="image" />
              <?php elseif ($attributes['mBackground']['url']) : ?>
                <img class="only-mobile" src="<?= $attributes['mBackground']['url'] ?>" alt="image" />
              <?php endif; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($attributes['extra'] || $attributes['button']) : ?>
        <div class="text-banner-tabs__extra">
          <?php if ($attributes['extra']) : ?>
            <div class="text-banner-tabs__extra-text"><?= $attributes['extra'] ?></div>
          <?php endif; ?>
          <?php if ($attributes['button']) : ?>
            <a class="text-banner-tabs__extra-link link-button" href="<?= $attributes['target'] ?>">
              <?= $attributes['button'] ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php if ($attributes['crop1']) : ?>
  <script>
    document.querySelectorAll('.text-banner-tabs').forEach(function(wrapper) {
      const triger = wrapper.querySelector('.text-banner-tabs__open1')
      const content = wrapper.querySelector('.text-banner-tabs__text1')

      triger.addEventListener('click', function() {
        content.classList.toggle('active')
        triger.classList.toggle('active')
      })
    })
  </script>
<?php endif; ?>
<?php if ($attributes['crop2']) : ?>
  <script>
    document.querySelectorAll('.text-banner-tabs').forEach(function(wrapper) {
      const triger = wrapper.querySelector('.text-banner-tabs__open2')
      const content = wrapper.querySelector('.text-banner-tabs__text2')

      triger.addEventListener('click', function() {
        content.classList.toggle('active')
        triger.classList.toggle('active')
      })
    })
  </script>
<?php endif; ?>
<?php if ($attributes['crop3']) : ?>
  <script>
    document.querySelectorAll('.text-banner-tabs').forEach(function(wrapper) {
      const triger = wrapper.querySelector('.text-banner-tabs__open3')
      const content = wrapper.querySelector('.text-banner-tabs__text3')

      triger.addEventListener('click', function() {
        content.classList.toggle('active')
        triger.classList.toggle('active')
      })
    })
  </script>
<?php endif; ?>



<script>
  new class Tabs {

    constructor() {
      this.$wrapper;
      this.$triggers;
      this.$body;
      this.init();
    }

    init() {
      document.querySelectorAll('.text-banner-tabs__inner[data-tabs]').forEach((wrapper) => {
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