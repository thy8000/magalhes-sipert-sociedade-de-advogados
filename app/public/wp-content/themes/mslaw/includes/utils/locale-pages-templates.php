<?php

if (!defined('ABSPATH')) exit;

/**
 * WHAT IT DOES
 * Search for templates files in `pages` folder, based in hierarchy.
 *
 * EXAMPLES
 * pages/home/_index.php
 * pages/taxonomy-personal.php
 */

$templates = [
   '404',
   'archive',
   'attachment',
   'author',
   'category',
   'date',
   'embed',
   'frontpage',
   'home',
   'index',
   'page',
   'paged',
   'privacypolicy',
   'search',
   'single',
   'singular',
   'tag',
   'taxonomy'
];

foreach ($templates as $template)
{
   add_filter("{$template}_template_hierarchy", 'it9_mslaws_template_hierarchy_candidates');
}

function it9_mslaws_template_hierarchy_candidates($templates)
{
   if (false !== strpos($templates[0], 'pages/'))
      return $templates;

   foreach ($templates as $template)
   {
      $index = str_replace('.php', '/_index.php', $template);
      $new_templates[] = "pages/{$index}";
      $new_templates[] = "pages/{$template}";
   }

   return array_merge($new_templates, $templates);
}