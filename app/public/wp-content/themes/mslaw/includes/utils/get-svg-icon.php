<?php

if (!defined('ABSPATH')) exit;

function it9_mslaws_get_svg_icon($icon_file_name, $classes = '')
{
   $icon = get_template_directory() . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR . $icon_file_name;
   $icon_content = '';

   if (!file_exists($icon))
      return;

   $icon_content = file_get_contents($icon);

   if(empty($classes))
      return $icon_content;
   
   $classes = trim($classes);

   if(stripos($icon_content, 'class="'))
      $icon_content = str_replace('class="', 'class="' . $classes . ' ', $icon_content);
   else
      $icon_content = str_replace('<svg ', '<svg class="' . $classes .'" ', $icon_content);
   
   return $icon_content;
}