<?php
/**
 * Plugin Name:     UTC Email Newsletters
 * Plugin URI:      https://blog.utc.edu/
 * Description:     Custom Post Templates for UTC HTML Emails
 * Author:          Chris Gilligan
 * Author URI:      https://chrisgilligan.com/
 * Text Domain:     utc-email-custom-posts
 * Domain Path:     /languages
 * Version:         0.3.14
 *
 * @package         Utc_Email_Custom_Posts
 */

/* Newsletter Custom Post Type and taxonomies */

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
            'genesis-seo',
            'genesis-layouts',
            'genesis-cpt-archives-settings',
        ],

        'rewrite' => [ 'slug' => 'newsletters', ]
    ];

    register_post_type( 'utcblogs_newsletter', $args );
}
add_action( 'init', 'register_cpt_utcblogs_newsletter' );

/**
 * Flush Permalinks on (de)activation or theme change
 */
function utcblogs_newsletter_activate() {
    // register taxonomies/post types here
    flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'utcblogs_newsletter_activate' );

function utcblogs_newsletter_deactivate() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'utcblogs_newsletter_deactivate' );

add_action( 'after_switch_theme', 'flush_rewrite_rules' );

/**
 * load WP Templater library file
 * https://github.com/mohamdio/wp-templater
 * via file or composer autoload,
 * composer require jozoor/wp-templater
 */

/* via Composer
if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
    require __DIR__ . '/vendor/autoload.php';
}
*/
require_once __DIR__ . '/wp-templater-1.0.1/src/Templater.php';// via local plugin; for local dev only

use JO\Module\Templater\Templater;

/**
 * How to use Templater
 */

// we should add our new Templater inside action hook
add_action('plugins_loaded', 'load_templater');

function load_templater()
{

    // setup our templater
    $my_templater = new Templater(
        array(
            // YOUR_PLUGIN_DIR or plugin_dir_path(__FILE__)
            'plugin_directory'          => plugin_dir_path(__FILE__),
            // should end with _ > prefix_
            'plugin_prefix'             => 'utcblogs_newsletter_',
            // templates directory inside your plugin
            'plugin_template_directory' => 'templates',
        )
    );


    // add our new custom templates
    $my_templater->add(

    // array of available templates
        array(

            /**
             * default usage:
             * 'post_type_name' => array(
             *      'template_file.php' => 'template_name',
             *      or
             *      'path/to/template_file.php' => 'template_name',
             * ),
             *
             * Note: all this files should be inside your
             * 'plugin_template_directory' => 'templates',
             * so this is parent directory > 'templates/path/template_file.php'
             */

            /**
            // add 'post' type custom templates
            'post' => array(
                // just file without any sub folders
                'post-template.php' => 'Post Custom Template',
                // with sub folders
                'path/to/post-template.php' => 'Post Custom Template',
            ),

            // add 'page' type custom templates
            'page' => array(
                // just file without any sub folders
                'page-template.php' => 'Page Custom Template',
                // with sub folders
                'path/to/page-template.php' => 'Page Custom Template',
            ),
            */

            // add 'custom_post_type' type custom templates, for ex: product
            'utcblogs_newsletter' => array(
                // just file without any sub folders
                //'page-template.php' => 'Page Custom Template',
                // with sub folders
                //'path/to/product-template.php' => 'Product Custom Template',
                'single-utcblogs_newsletter.php' => 'Default/Magazine Newsletter',
                'utcblogs_newsletter-image-header.php' => 'Image Header Newsletter',
                'utcblogs_newsletter-campusweekly.php' => 'Campus Weekly Newsletter',
                'utcblogs_newsletter-enews.php' => 'E-Newsletter Compilation',
                'archive-utcblogs_newsletter.php' => 'Newsletter Archives',
                //'utcblogs_newsletter-digest.php' => 'Weekly Digest Newsletter',
                //'utcblogs_newsletter-letterhead.php' => 'Letterhead Newsletter',
            ),

            // ..etc

            /**
             * Note: you can name your template file anything you like
             * i mean you shouldn't add post type name in template name, like
             * 'post-template.php' < this just for show you examples
             */

            /**
             * Note: why we separated templates in the top by 'post types' ?
             * because we need this when working on any WP version 4.7 and later
             * which custom templates supported post types, but for WP version
             * 4.6 and older, all this templates will be merged, because we
             * working on 'page' enough, not like WP version 4.7 and later,
             * which we add templates only for exact post type.
             */

        )

    // here we actually will add all this new templates.
    )->register();

}

/*
 * Force archive template for archive calls
 */

function get_utcblogs_newsletter_archive_template( $archive_template ) {
    global $post;

    if ( is_post_type_archive ( 'utcblogs_newsletter' ) ) {
        $archive_template = WP_PLUGIN_DIR .'/'. plugin_basename( dirname(__FILE__) ) . '/templates/archive-utcblogs_newsletter.php';
    }
    return $archive_template;
}

add_filter( 'archive_template', 'get_utcblogs_newsletter_archive_template' ) ;

/**
 * register special image sizes and allow image size chooser to use 580
 **/
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'newsletter-featured-header', 800, 9999 ); //580 pixels wide (and unlimited height) for newsletter header image
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
// Responsive image captions: remove height/width attributes
add_shortcode( 'wp_caption', 'fixed_img_caption_shortcode' );
add_shortcode( 'caption', 'fixed_img_caption_shortcode' );

function fixed_img_caption_shortcode($attr, $content = null) {
    if ( ! isset( $attr['caption'] ) ) {
        if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
            $content = $matches[1];
            $attr['caption'] = trim( $matches[2] );
        }
    }
    $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
    if ( $output != '' )
        return $output;
    extract( shortcode_atts(array(
        'id'      => '',
        'align'   => 'alignnone',
        'width'   => '',
        'caption' => ''
    ), $attr));
    if ( 1 > (int) $width || empty($caption) )
        return $content;
    if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
    return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
        . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}
