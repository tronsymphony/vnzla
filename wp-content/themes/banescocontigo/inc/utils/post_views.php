<?php
    
    /**
     * Gets the post views count from post meta.
     * @param integer|null $post_id 
     * @return integer
     */
    
    function gt_get_post_view( ?int $post_id = null ) : int {
        $post_id = is_null( $post_id ) ? get_the_ID() : $post_id;
        $count = get_post_meta( $post_id, "post_views_count", true );
        
        return ( $count !== "" ) ? ( int ) $count : 0;
    }
    
    /**
     * Stores the post views count as post meta.
     * @param integer|null $post_id 
     */
    
    function gt_set_post_view( ?int $post_id = null ) : void {
        $post_id = is_null( $post_id ) ? get_the_ID() : $post_id;
        $count = ( int ) get_post_meta( $post_id, "post_views_count", true );
        update_post_meta( $post_id, "post_views_count", $count + 1 );
    }

    /**
     * Sets the post views count column name for the post list table.
     * @param array $columns 
     * @return array
     */
    
    function gt_posts_column_views( array $columns ) : array {
        $columns[ "post_views_count" ] = "Views";
        
        return $columns;
    }

    /**
     * Gets the post views count for the post list table.
     * @param string $column 
     */
    
    function gt_posts_custom_column_views( string $column ) : void {
        if ( $column === "post_views_count" ) {
            echo gt_get_post_view();
        }
    }
    
    add_filter( "manage_posts_columns", "gt_posts_column_views" );
    add_action( "manage_posts_custom_column", "gt_posts_custom_column_views" );
    
    /**
     * Increments the post views count when the post is viewed.
     * @param string $content 
     * @return string
     */
    
    function gt_increment_post_views( string $content ) : string {
        if ( is_single() === true && is_preview() === false ) {
            gt_set_post_view( get_the_ID() );
            remove_filter( "the_content", "gt_increment_post_views" );
        }

        return $content;
    }

    add_filter( "the_content", "gt_increment_post_views" );
