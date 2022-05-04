<?php
/**
 * Plugin Name:     UTC Email Custom Posts
 * Plugin URI:      https://blog.utc.edu/
 * Description:     Custom Post Types for UTC HTML Emails
 * Author:          Chris Gilligan
 * Author URI:      https://chrisgilligan.com/
 * Text Domain:     utc-email-custom-posts
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Utc_Email_Custom_Posts
 */

/* Newsletter Custom Post Type and taxonomies */

add_action( 'init', 'register_cpt_utcblogs_newsletter' );

function register_cpt_utcblogs_newsletter() {

    $labels = array(
        'name' => _x( 'Newsletters', 'utcblogs_newsletter' ),
        'singular_name' => _x( 'Newsletter', 'utcblogs_newsletter' ),
        'add_new' => _x( 'Add New', 'utcblogs_newsletter' ),
        'add_new_item' => _x( 'Add New Newsletter', 'utcblogs_newsletter' ),
        'edit_item' => _x( 'Edit Newsletter', 'utcblogs_newsletter' ),
        'new_item' => _x( 'New Newsletter', 'utcblogs_newsletter' ),
        'view_item' => _x( 'View Newsletter', 'utcblogs_newsletter' ),
        'search_items' => _x( 'Search Newsletters', 'utcblogs_newsletter' ),
        'not_found' => _x( 'No newsletters found', 'utcblogs_newsletter' ),
        'not_found_in_trash' => _x( 'No newsletters found in Trash', 'utcblogs_newsletter' ),
        'parent_item_colon' => _x( 'Parent Newsletter:', 'utcblogs_newsletter' ),
        'menu_name' => _x( 'Newsletters', 'utcblogs_newsletter' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'UTCBlogs Newsletters',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'newsletters'),
        'capability_type' => 'page'
    );

    register_post_type( 'utcblogs_newsletter', $args );
}

/**
 * register special image sizes and allow image size chooser to use 580
 **/
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'newsletter-large', 580, 9999 ); //580 pixels wide (and unlimited height) for newsletter header image
    add_image_size( 'medium-large', 610, 9999 ); //610 pixels wide (and unlimited height) for newsletter header image
    add_image_size( 'large-thumbnail', 600, 600, true ); //600 pixels wide & tall for newsletter retina/thumb images
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'newsletter-large' => __('Large 580px wide'),
    ) );
}
