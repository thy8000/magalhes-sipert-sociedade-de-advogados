<?php

if (!defined('ABSPATH')) exit;

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

add_action('customize_register', 'dark_logo_customize_register');
function dark_logo_customize_register($wp_customize){
   $wp_customize->add_setting('dark_logo');
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dark_logo', array(
      'label'    => __('Logo (Escuro)', 'it9_mslaws'),
      'section'  => 'title_tagline',
      'settings' => 'dark_logo',
      'priority'       => 8,
   )));
}
