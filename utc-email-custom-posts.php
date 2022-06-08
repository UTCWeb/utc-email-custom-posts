<?php
/**
 * Plugin Name:     UTC Email Newsletters
 * Plugin URI:      https://blog.utc.edu/
 * Description:     Custom Post Templates for UTC HTML Emails
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
    $args = [
        'label'  => esc_html__( 'Newsletters', 'text-domain' ),
        'labels' => [
            'menu_name'          => esc_html__( 'Newsletters', 'utcblogs_newsletter' ),
            'name_admin_bar'     => esc_html__( 'Newsletter', 'utcblogs_newsletter' ),
            'add_new'            => esc_html__( 'Add Newsletter', 'utcblogs_newsletter' ),
            'add_new_item'       => esc_html__( 'Add new Newsletter', 'utcblogs_newsletter' ),
            'new_item'           => esc_html__( 'New Newsletter', 'utcblogs_newsletter' ),
            'edit_item'          => esc_html__( 'Edit Newsletter', 'utcblogs_newsletter' ),
            'view_item'          => esc_html__( 'View Newsletter', 'utcblogs_newsletter' ),
            'update_item'        => esc_html__( 'View Newsletter', 'utcblogs_newsletter' ),
            'all_items'          => esc_html__( 'All Newsletters', 'utcblogs_newsletter' ),
            'search_items'       => esc_html__( 'Search Newsletters', 'utcblogs_newsletter' ),
            'parent_item_colon'  => esc_html__( 'Parent Newsletter', 'utcblogs_newsletter' ),
            'not_found'          => esc_html__( 'No Newsletters found', 'utcblogs_newsletter' ),
            'not_found_in_trash' => esc_html__( 'No Newsletters found in Trash', 'utcblogs_newsletter' ),
            'name'               => esc_html__( 'Newsletters', 'utcblogs_newsletter' ),
            'singular_name'      => esc_html__( 'Newsletter', 'utcblogs_newsletter' ),
        ],
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,//support for Gutenberg block editor
        'rest_base'           => 'newsletters',//support for Gutenberg block editor
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite_no_front'    => false,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-email-alt',
        'supports' => [
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'revisions',
            'page-attributes',
        ],

        'rewrite' => [ 'slug' => 'newsletters', ]
    ];

    register_post_type( 'utcblogs_newsletter', $args );
}

add_filter( 'single_template', 'utcblogs_newsletter_custom_post_type_template', 99 );
function utcblogs_newsletter_custom_post_type_template($single_template) {
    global $post;

    if ($post->post_type == 'utcblogs_newsletter' ) {
        $single_template = dirname( __FILE__ ) . '/single-utcblogs_newsletter.php';
    }
    return $single_template;

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

// Responsive images: remove height/width attributes... reset as inline style;
// important for email Newsletter images
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', 'style="max-width: 100%;"', $html );
    return $html;
}
