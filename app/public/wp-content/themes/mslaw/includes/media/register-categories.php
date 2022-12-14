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
      'hierarchical'       => true,
      'labels'             => $labels,
      'public'             => true,
      'show_in_quick_edit' => true,
      'meta_box_cb'        => true,
      'show_ui'            => true,
      'show_in_rest'       => true,
      'show_admin_column'  => true,
      'query_var'          => true,
      'supports'           => ['editor'],
      'rewrite'            => ['slug' => 'midia/categoria', 'with_front' => false],
   ];

   register_taxonomy('midia_categories', ['midia'], $args);
}