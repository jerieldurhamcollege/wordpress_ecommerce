<?php
/**
 * Custom post tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ModernStoreTheme
 */
function register_auction_post_type() {
    $labels = array(
        'name'                  => _x( 'Auctions', 'Post type general name', 'auction' ),
        'singular_name'         => _x( 'Auction', 'Post type singular name', 'auction' ),
        'menu_name'             => _x( 'Auctions', 'Admin Menu text', 'auction' ),
        'name_admin_bar'        => _x( 'Auction', 'Add New on Toolbar', 'auction' ),
        'add_new'               => __( 'Add New', 'auction' ),
        'add_new_item'          => __( 'Add New auction', 'auction' ),
        'new_item'              => __( 'New auction', 'auction' ),
        'edit_item'             => __( 'Edit auction', 'auction' ),
        'view_item'             => __( 'View auction', 'auction' ),
        'all_items'             => __( 'All auctions', 'auction' ),
        'search_items'          => __( 'Search auctions', 'auction' ),
        'parent_item_colon'     => __( 'Parent auctions:', 'auction' ),
        'not_found'             => __( 'No auctions found.', 'auction' ),
        'not_found_in_trash'    => __( 'No auctions found in Trash.', 'auction' ),
        'featured_image'        => _x( 'Auction Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'auction' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'auction' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'auction' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'auction' ),
        'archives'              => _x( 'Auction archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'auction' ),
        'insert_into_item'      => _x( 'Insert into auction', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'auction' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this auction', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'auction' ),
        'filter_items_list'     => _x( 'Filter auctions list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'auction' ),
        'items_list_navigation' => _x( 'Auctions list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'auction' ),
        'items_list'            => _x( 'Auctions list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'auction' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Auction custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'auction' ),
        'capability_type'    => 'post',
        'has_archive'        => 'auction',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-money-alt',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    
    register_post_type( 'Auction', $args );
}
add_action( 'init', 'register_auction_post_type' );