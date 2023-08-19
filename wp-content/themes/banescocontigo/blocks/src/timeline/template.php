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
  <div class="timeline" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    ">
    <div class="container">
      <div class="timeline__inner">

        <?php if ($attributes['items']) : ?>
          <div class="timeline__items">

            <div class="timeline__list">

              <?php foreach ($attributes['items'] as $key => $item) : ?>

                <div class="timeline_item_container">
                  <div class="timeline_item_dot">
                  <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none" class="active">
                      <path d="M85 42.5C85 65.9721 65.9721 85 42.5 85C19.0279 85 0 65.9721 0 42.5C0 19.0279 19.0279 0 42.5 0C65.9721 0 85 19.0279 85 42.5ZM6.38309 42.5C6.38309 62.4468 22.5532 78.6169 42.5 78.6169C62.4468 78.6169 78.6169 62.4468 78.6169 42.5C78.6169 22.5532 62.4468 6.38309 42.5 6.38309C22.5532 6.38309 6.38309 22.5532 6.38309 42.5Z" fill="#219963"/>
                      <path d="M71 42.5C71 58.2401 58.2401 71 42.5 71C26.7599 71 14 58.2401 14 42.5C14 26.7599 26.7599 14 42.5 14C58.2401 14 71 26.7599 71 42.5ZM15.0375 42.5C15.0375 57.6671 27.3329 69.9625 42.5 69.9625C57.6671 69.9625 69.9625 57.6671 69.9625 42.5C69.9625 27.3329 57.6671 15.0375 42.5 15.0375C27.3329 15.0375 15.0375 27.3329 15.0375 42.5Z" fill="#219963"/>
                      <circle opacity="0.3" cx="42" cy="43" r="14" fill="#007953"/>
                      <circle cx="42" cy="43" r="8" fill="#219963"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none" class="default">
                      <path d="M58 29C58 45.0163 45.0163 58 29 58C12.9837 58 0 45.0163 0 29C0 12.9837 12.9837 0 29 0C45.0163 0 58 12.9837 58 29ZM1.0557 29C1.0557 44.4332 13.5668 56.9443 29 56.9443C44.4332 56.9443 56.9443 44.4332 56.9443 29C56.9443 13.5668 44.4332 1.0557 29 1.0557C13.5668 1.0557 1.0557 13.5668 1.0557 29Z" fill="#219963"/>
                      <circle cx="29" cy="29" r="14" fill="#219963"/>
                    </svg>
                  </div>

                  <?php if($key % 2 == 0): else: ?>
                    <div class="timeline_item_container_spacer"></div>
                  <?php endif; ?>

                  <div class="timeline__item">
                    <?php if ($item['title']) : ?>
                      <div class="timeline__item-title"><?= $item['title'] ?></div>
                    <?php endif; ?>

                    <?php if (!empty($item['image']['url'])) : ?>
                      <img src="<?= $item['image']['url']; ?>" alt="">
                    <?php endif; ?>

                    <?php if ($item['text']) : ?>
                      <div class="timeline__item-text"><?= $item['text'] ?></div>
                    <?php endif; ?>

                    
                  </div>

                  <?php if($key % 2 == 0): ?>
                    <div class="timeline_item_container_spacer"></div>
                  <?php endif; ?>

                </div>

              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
        
      </div>
    </div>
  </div>
</section>


<script>
const sections = [...document.querySelectorAll(".timeline_item_container")];

let options = {
  rootMargin: "0px",
  threshold: 0.65
};

const callback = (entries, observer) => {
  entries.forEach(entry => {
		const { target } = entry;
		
		if (entry.intersectionRatio >= 0.65) {
			target.classList.add("is-visible");
		} else {
			target.classList.remove("is-visible");
		}
  });
};

const observer = new IntersectionObserver(callback, options);

sections.forEach((section, index) => {
  // const sectionChildren = [...section.querySelector("[data-content]").children];

  // sectionChildren.forEach((el, index) => {
  //   el.style.setProperty("--delay", `${index * 250}ms`);
  // });

  observer.observe(section);
});

</script>