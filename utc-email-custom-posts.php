<?php
/**
 * Plugin Name:     UTC Email Newsletters
 * Plugin URI:      https://blog.utc.edu/
 * Description:     Custom Post Templates for UTC HTML Emails
 * Author:          Chris Gilligan
 * Author URI:      https://chrisgilligan.com/
 * Text Domain:     utc-email-custom-posts
 * Domain Path:     /languages
 * Version:         0.2.2
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
        //'show_in_rest'        => true,//support for Gutenberg block editor
        //'rest_base'           => 'newsletters',//support for Gutenberg block editor
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'has_archive'         => 'newsletters',
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

/**
 * load WP Templater library file
 * https://github.com/mohamdio/wp-templater
 * via file or composer autoload,
 * composer require jozoor/wp-templater
 */

require_once __DIR__ . '/vendor/autoload.php';// via Composer
//require_once __DIR__ . '/wp-templater-1.0.1/src/Templater.php';// via local plugin; for local dev only

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
                'utcblogs_newsletter-campusweekly.php' => 'Campus Weekly Newsletter',
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
