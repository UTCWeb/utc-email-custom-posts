<?php
/**
 * Template for newsletter CPT archive page.
 * Template Name: Newsletter Archives
 * Template Post Type: utcblogs_newsletter
 */

/**
 * Remove standard post content output
 */
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

add_action( 'genesis_post_content', 'newsletter_archive_content' );
add_action( 'genesis_entry_content', 'newsletter_archive_content' );

function newsletter_archive_content() { ?>

    <ul>
        <?php
            $args = array(
                'type'            => 'postbypost',
                'limit'           => '',
                'format'          => 'custom',
                'before'          => '<li>',
                'after'           => '</li>',
                'show_post_count' => true,
                'echo'            => 1,
                'order'           => 'DESC',
                'post_type'       => 'utcblogs_newsletter',
            );
            wp_get_archives( $args );
        ?>
    </ul>
    <?php
}

genesis();
