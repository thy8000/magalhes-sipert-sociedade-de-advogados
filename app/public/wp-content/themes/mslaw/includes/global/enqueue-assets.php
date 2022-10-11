<?php

if(!defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', 'it9_mslaw_enqueue_js_css');
function it9_mslaw_enqueue_js_css()
{
   wp_enqueue_script('all', get_theme_file_uri('assets/js/all.js'), array('jquery'), false, true);
   wp_enqueue_style('all', get_theme_file_uri('assets/css/all.css'));

   wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css' );

   wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.bundle.min.js', array( 'jquery' ) , false, true);
}