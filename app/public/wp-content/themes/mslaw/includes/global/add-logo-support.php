<?php

if(!defined('ABSPATH')) exit;

add_action('after_setup_theme', 'it9_mslaws_add_custom_logo', 11);
function it9_mslaws_add_custom_logo()
{
   add_theme_support('custom-logo', [
      'width'       => 256,
      'height'      => 60,
      'flex-height' => true,
      'flex-width'  => true,
   ]);
}