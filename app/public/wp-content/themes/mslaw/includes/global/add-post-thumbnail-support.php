<?php
if (!defined('ABSPATH')) exit;

add_action('init', 'it9_mslaws_add_post_thumbnail_support');
function it9_mslaws_add_post_thumbnail_support()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(250, 250);
}
