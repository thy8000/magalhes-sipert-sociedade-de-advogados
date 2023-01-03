<?php

add_action('init', 'it9_mslaw_create_media_taxonomies', 0);

function it9_mslaw_create_media_taxonomies()
{

   $labels = [
      'name'              => __('Categorias de Mídias', 'bx-unicamp-multisite'),
      'singular_name'     => __('Categoria de Mídia', 'bx-unicamp-multisite'),
      'menu_name'         => __('Categorias de Mídias', 'bx-unicamp-multisite')
   ];

   $args = [
      'label' => $labels,
		'hierarchical' => true,
		'rewrite' => ['slug' => 'midia-category'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => $labels,
   ];

   register_taxonomy('midia-category', ['midia'], $args);
}