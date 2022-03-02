<?php
/**
 * Functions which enhance theme with woocommerce
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ModernStoreTheme
 */

function mst_use_block_editor_for_post_type( $use_block_editor, $post_type ) {
    if ('product' === $post_type ) {
        $use_block_editor = true;
    }
    return $use_block_editor;
}

 add_filter('use_block_editor_for_post_type', 'mst_use_block_editor_for_post_type', 10, 2);