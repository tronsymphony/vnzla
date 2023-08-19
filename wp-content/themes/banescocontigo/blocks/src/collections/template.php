<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */


if ( function_exists( "_get_library_taxonomies" ) === false ) {
    /**
     * Gets all the taxonomies with the given slug.
     * @param string $taxonomy_slug 
     * @return array
     */
    
    function _get_library_taxonomies( string $taxonomy_slug = "categoria-de-libros" ) : array {
        $_taxonomies = get_terms([
            "taxonomy" => $taxonomy_slug,
            "hide_empty" => false,
            "orderby" => "term_id",
            "order" => "ASC",
            "parent" => 0
        ]);
        
        $taxonomies = [];
        foreach ( $_taxonomies as $taxonomy ) {
            $taxonomies[] = [
                "slug" => $taxonomy->slug,
                "name" => $taxonomy->name,
                "description" => $taxonomy->description
            ];
        }
        
        return $taxonomies;
    }
}

if ( function_exists( "_get_library" ) === false ) {
    /**
     * Gets all the library items.
     * @return array
     */
    
    function _get_library( string $post_type = "library" ) : array {
        $_books = get_posts([
            "post_type" => $post_type,
            "posts_per_page" => -1,
            "orderby" => "title",
            "order" => "ASC"
        ]);
        
        $books = [];
        foreach ( $_books as $book ) {
            $books[] = [
                "title" => get_the_title( $book->ID ),
                "permalink" => get_permalink( $book->ID ),
                "thumbnail" => get_the_post_thumbnail_url( $book->ID, "full" ),
                "taxonomies" => array_map(
                    function( $taxonomy ) {
                        return [
                            "slug" => $taxonomy->slug,
                            "name" => $taxonomy->name
                        ];
                    },
                    get_the_terms( $book->ID, "categoria-de-libros" ) ?: []
                )
            ];
        }
        
        return $books;
    }
}

define( "PER_PAGE", 6 );

?>

<section id="categoria-de-libros" <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
    <div class="collections" style="
      --paddings-top: <?= (isset($attributes['paddings']['desktop']['top'])) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= (isset($attributes['paddings']['mobile']['top'])) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= (isset($attributes['paddings']['desktop']['bottom'])) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= (isset($attributes['paddings']['mobile']['bottom'])) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= (isset($attributes['margins']['desktop']['top'])) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= (isset($attributes['margins']['mobile']['top'])) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= (isset($attributes['margins']['desktop']['bottom'])) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= (isset($attributes['margins']['mobile']['bottom'])) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= (isset($attributes['gradient'])) ? $attributes['gradient'] : '#fff' ?>;
    ">
        <div class="container">
            <div class="collections__tabs" data-tabs>
                <?php if ($attributes['title']['desktop'] || $attributes['title']['mobile']) : ?>
                    <h2 class="collections__title">
                        <?php if ($attributes['title']['desktop']) : ?>
                            <span class="<?= ($attributes['title']['mobile']) ? 'only-desktop' : '' ?>"><?= $attributes['title']['desktop'] ?></span>
                        <?php endif; ?>
                        <?php if ($attributes['title']['mobile']) : ?>
                            <span class="only-mobile"><?= $attributes['title']['mobile'] ?></span>
                        <?php endif; ?>
                    </h2>
                <?php endif; ?>
                
                <div class="collections__triggers" data-triggers>
                    <?php foreach ( $taxonomies = _get_library_taxonomies() as $taxonomy ) : ?>
                        <a class="collections__tab" href="#<?php echo $taxonomy[ "slug" ]; ?>">
                            <?php echo $taxonomy[ "name" ]; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                                
                <div class="collections__body" data-body>
                    <?php $t_counts = []; ?>
                    <?php foreach ( $taxonomies as $taxonomy ) : ?>
                        <div class="collections__inner" data-id="#<?php echo $taxonomy[ "slug" ]; ?>">
                            <?php if ( trim( $taxonomy[ "description" ] ) !== "" ) : ?>
                                <div class="text">
                                    <?php echo $taxonomy[ "description" ]; ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="books">
                                <?php foreach ( _get_library() as $book ) :
                                    if ( in_array( $taxonomy[ "slug" ], array_map( static fn ( $t ) => $t[ "slug" ], $book[ "taxonomies" ] ) ) === true ) :
                                        $t_counts[ $taxonomy[ "slug" ] ] = ( $t_counts[ $taxonomy[ "slug" ] ] ?? 0 ) + 1; ?>
                                        
                                        <a target="_blank" class="collections__item <?php echo ( $t_counts[ $taxonomy[ "slug" ] ] > PER_PAGE ) ? "is-hidden" : ""; ?>" href="<?php echo $book[ "permalink" ]; ?>">
                                            <div class="collections__item-image">
                                                <img src="<?php echo $book[ "thumbnail" ]; ?>" alt="<?php echo esc_attr( $book[ "title" ] ); ?>">
                                            </div>
                                            
                                            <div class="collections__item-content">
                                                <h3 class="collections__item-title">
                                                    <?php echo $book[ "title" ]; ?>
                                                </h3>
                                            </div>
                                        </a>
                                    <?php endif;
                                endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <nav data-pagination class="is-hidden">
                    <a href="#" data-mover="previous">
                        <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="-4.5 0 20 20">
                            <path fill="#000" fill-rule="evenodd" d="M10.634.292a1.063 1.063 0 0 0-1.464 0L.607 8.556a1.95 1.95 0 0 0 0 2.827l8.625 8.325c.4.385 1.048.39 1.454.01a.975.975 0 0 0 .01-1.425l-7.893-7.617a.975.975 0 0 1 0-1.414l7.83-7.557a.974.974 0 0 0 0-1.413"></path>
                        </svg>
                    </a>
                    <div data-pages>
                        <!-- Loaded dynamically -->
                    </div>
                    <a href="#" data-mover="next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="-4.5 0 20 20">
                            <path fill="#000" fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413"></path>
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
</section>

<script>
    new class Tabs {

        constructor() {
            this.$wrapper;
            this.$triggers;
            this.$body;
            this.init();
        }

        init() {
            document.querySelectorAll('[data-tabs]').forEach((wrapper) => {
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
                
                this.setPagination( content );
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
            
            this.setPagination( content );
            
            history.replaceState(undefined, undefined, trigger.hash)
        }
        
        setPagination( c ) {
            let length = c.querySelectorAll( ".collections__item" ).length,
                page_size = <?php echo PER_PAGE; ?>;
            
            window[ "block-collections-pagination" ] = setInterval( function() {
                if ( typeof $pagination === "function" ) {
                    if ( length > page_size ) {
                        $pagination().show();
                        $pagination().run( 1, ( length % page_size === 0 ) ? length / page_size : Math.floor( length / page_size ) + 1, 1 );
                    }
                    else {
                        $pagination().hide();
                    }
                    
                    clearInterval( window[ "block-collections-pagination" ] );
                }
            }, 50 );
        }
    };
</script>

<script>
    ( function( element, seed, interval ) {
        var e = new Array( element, seed ).join( "-" );
        window[ e ] = setInterval( function() {
            if ( typeof window[ "jQuery" ] === "function" ) {
                jQuery( document ).ready( function() {
                    
                    jQuery( document ).on( "pagination:set", function( e, data ) {
                        let collection = jQuery( ".collections__inner.active" ),
                            item = collection.find( ".collections__item" );
                        
                        item.addClass( "is-hidden" );
                        item.each( function( i ) {
                            if ( i >= ( data.current_page - 1 ) * <?php echo PER_PAGE; ?> && i < data.current_page * <?php echo PER_PAGE; ?> ) {
                                jQuery( this ).removeClass( "is-hidden" );
                            }
                        });
                    });
                });
                
                clearInterval( window[ e ] );
                window[ e ] = null;
            }
        }, interval );
    })( "block-collections-accordion", Date.now(), 25 );
</script>
