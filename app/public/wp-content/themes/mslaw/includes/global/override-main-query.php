<?php
if(!defined('ABSPATH')) exit;

function it9_mslaws_override_main_query( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 10);
    }
}
add_action( 'pre_get_posts', 'it9_mslaws_override_main_query' );
