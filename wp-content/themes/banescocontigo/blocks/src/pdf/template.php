<?php
    /**
     * @param array    $attributes     The array of attributes for this block.
     * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
     * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
     *
     * @package banescocontigo
     */

    if ( isset( $attributes[ "url" ] ) === true && filter_var( $attributes[ "url" ], FILTER_VALIDATE_URL ) !== false ) : ?>
        <script>
            setTimeout( function() {
                window.location.href = "<?php echo esc_url( $attributes[ "url" ] ); ?>";
            }, 0 );
        </script>
        
        <style>
            html,
            body {
                display: none !important;
            }
        </style>
    <?php endif;
