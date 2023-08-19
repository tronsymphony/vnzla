<?php $p = get_page_by_path( $args[ "root_slug" ] ); ?>

<?php if ( $p !== null ) : ?>
    <main id="primary" class="site-main main">
        <?php foreach ( [ "banescocontigo/blog", "banescocontigo/videos-and-images" ] as $b ) {
            echo do_blocks( "<!-- wp:{$b} " . json_encode( get_block_attributes( $b, $p->ID ) ) . " /-->" );
        } ?>
    </main>
<?php endif; ?>
