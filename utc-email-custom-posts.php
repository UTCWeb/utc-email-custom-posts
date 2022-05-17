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
 * https://github.com/wpexplorer/page-templater
 */
class PageTemplater {

    /**
     * A reference to an instance of this class.
     */
    private static $instance;

    /**
     * The array of templates that this plugin tracks.
     */
    protected $templates;

    /**
     * Returns an instance of this class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {
            self::$instance = new PageTemplater();
        }

        return self::$instance;

    }

    /**
     * Initializes the plugin by setting filters and administration functions.
     */
    private function __construct() {

        $this->templates = array();


        // Add a filter to the attributes metabox to inject template into the cache.
        if ( version_compare( floatval( get_bloginfo( 'version' ) ), '4.7', '<' ) ) {

            // 4.6 and older
            add_filter(
                'page_attributes_dropdown_pages_args',
                array( $this, 'register_project_templates' )
            );

        } else {

            // Add a filter to the wp 4.7 version attributes metabox
            add_filter(
                'theme_page_templates', array( $this, 'add_new_template' )
            );

        }

        // Add a filter to the save post to inject out template into the page cache
        add_filter(
            'wp_insert_post_data',
            array( $this, 'register_project_templates' )
        );


        // Add a filter to the template include to determine if the page has our
        // template assigned and return it's path
        add_filter(
            'template_include',
            array( $this, 'view_project_template')
        );


        // Add your templates to this array.
        $this->templates = array(
            'templates/single-utcblogs_newsletter.php' => 'Campus Weekly Newsletter',
            'templates/utcblogs_newsletter-digest.php' => 'Weekly Digest Newsletter',
            'templates/utcblogs_newsletter-letterhead.php' => 'Letterhead Newsletter',
        );

    }

    /**
     * Adds our template to the page dropdown for v4.7+
     *
     */
    public function add_new_template( $posts_templates ) {
        $posts_templates = array_merge( $posts_templates, $this->templates );
        return $posts_templates;
    }

    /**
     * Adds our template to the pages cache in order to trick WordPress
     * into thinking the template file exists where it doens't really exist.
     */
    public function register_project_templates( $atts ) {

        // Create the key used for the themes cache
        $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

        // Retrieve the cache list.
        // If it doesn't exist, or it's empty prepare an array
        $templates = wp_get_theme()->get_page_templates();
        if ( empty( $templates ) ) {
            $templates = array();
        }

        // New cache, therefore remove the old one
        wp_cache_delete( $cache_key , 'themes');

        // Now add our template to the list of templates by merging our templates
        // with the existing templates array from the cache.
        $templates = array_merge( $templates, $this->templates );

        // Add the modified cache to allow WordPress to pick it up for listing
        // available templates
        wp_cache_add( $cache_key, $templates, 'themes', 1800 );

        return $atts;

    }

    /**
     * Checks if the template is assigned to the page
     */
    public function view_project_template( $template ) {
        // Return the search template if we're searching (instead of the template for the first result)
        if ( is_search() ) {
            return $template;
        }

        // Get global post
        global $post;

        // Return template if post is empty
        if ( ! $post ) {
            return $template;
        }

        // Return default template if we don't have a custom one defined
        if ( ! isset( $this->templates[get_post_meta(
                $post->ID, '_wp_page_template', true
            )] ) ) {
            return $template;
        }

        // Allows filtering of file path
        $filepath = apply_filters( 'page_templater_plugin_dir_path', plugin_dir_path( __FILE__ ) );

        $file =  $filepath . get_post_meta(
                $post->ID, '_wp_page_template', true
            );

        // Just to be safe, we check if the file exist first
        if ( file_exists( $file ) ) {
            return $file;
        } else {
            echo $file;
        }

        // Return template
        return $template;

    }

}
add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );

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
