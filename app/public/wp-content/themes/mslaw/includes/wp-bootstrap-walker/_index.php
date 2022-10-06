<?php

if(!defined('ABSPATH')) exit;

/**
 * Register Custom Navigation Walker
*/
add_action( 'after_setup_theme', 'it9_mslaw_register_navwalker' );
function it9_mslaw_register_navwalker(){
    require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'wp-bootstrap-walker', 'class-wp-bootstrap-navwalker.php']);
}

require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'includes', 'wp-bootstrap-walker', 'dropdown_data_attribute.php']);

