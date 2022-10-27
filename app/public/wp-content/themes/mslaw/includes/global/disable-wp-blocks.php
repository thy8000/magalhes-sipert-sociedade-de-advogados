<?php
if (!defined('ABSPATH')) exit;

add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_widgets_blog_editor', '__return_false');
add_action('wp_enqueue_scripts', 'it9_mslaws_disable_wp_blocks', 20);

function it9_mslaws_disable_wp_blocks()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
