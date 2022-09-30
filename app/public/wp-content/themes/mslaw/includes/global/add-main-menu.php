<?php
add_theme_support('menus');

add_action('init', 'it9_mslaws_add_main_menu');
function it9_mslaws_add_main_menu()
{
   register_nav_menus([
      'top-menu'     => esc_html__('Menu Superior', 'it9_mslaws')
   ]);
}