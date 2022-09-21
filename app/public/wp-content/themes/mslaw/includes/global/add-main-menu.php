<?php
add_theme_support('menus');

add_action('init', 'it9_mslaws_add_main_menu');
function it9_mslaws_add_main_menu()
{
   register_nav_menus([
      'main-menu'     => esc_html__('Menu Principal', 'it9_mslaws')
   ]);
}