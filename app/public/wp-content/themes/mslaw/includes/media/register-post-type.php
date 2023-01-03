<?php
if(!defined('ABSPATH')) exit;

add_action( 'init', 'it9_mslaw_register_post_type_media' );
function it9_mslaw_register_post_type_media() {
	$media_labels = array(
		'name'                  => __( 'Mídias', 'it9_mslaw' ),
		'singular_name'         => __( 'Mídia', 'it9_mslaw' ),
		'menu_name'             => __( 'Mídias', 'it9_mslaw' ),
		'name_admin_bar'        => __( 'Mídia', 'Add New on Toolbar', 'it9_mslaw' ),
		'add_new'               => __( 'Adicionar Mídia', 'it9_mslaw' ),
		'add_new_item'          => __( 'Adicionar Novo Mídia', 'it9_mslaw' ),
		'new_item'              => __( 'Novo Mídia', 'it9_mslaw' ),
		'edit_item'             => __( 'Editar Mídia', 'it9_mslaw' ),
		'view_item'             => __( 'Ver Mídia', 'it9_mslaw' ),
		'all_items'             => __( 'Todas as Mídias', 'it9_mslaw' ),
		'search_items'          => __( 'Pesquisar Mídias', 'it9_mslaw' ),
		'parent_item_colon'     => __( 'Mídias Ascendentes', 'it9_mslaw' ),
		'not_found'             => __( 'Nenhum Mídia encontrado', 'it9_mslaw' ),
		'not_found_in_trash'    => __( 'Nenhum Mídia encontrado na lixeira.', 'it9_mslaw' ),
		'featured_image'        => __( 'Imagem destacada do Mídia', 'it9_mslaw' ),
		'set_featured_image'    => __( 'Adicionar imagem destacada do Mídia', 'it9_mslaw' ),
		'remove_featured_image' => __( 'Remover imagem destacada do Mídia', 'it9_mslaw' ),
		'use_featured_image'    => __( 'Use como imagem destacada do Mídia', 'it9_mslaw' ),
		'archives'              => __( 'Arquivo de Mídia', 'it9_mslaw' ),
		'insert_into_item'      => __( 'Inserir em Mídia', 'it9_mslaw' ),
		'uploaded_to_this_item' => __( 'Adicionado neste Mídia', 'it9_mslaw' ),
		'filter_items_list'     => __( 'Filtrar lista de Mídias', 'it9_mslaw' ),
		'items_list_navigation' => __( 'Lista de navegação de Mídia', 'it9_mslaw' ),
		'items_list'            => __( 'Lista de Mídias', 'it9_mslaw' ),
	);

	$media_args = array(
		'label' => $media_labels,
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-format-video',
		'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'midia'],
		'taxonomies' => ['midia-categories'],
		'labels' => $media_labels,		
		'has_archive' => true, 
	);

	register_post_type( 'midia', $media_args );
}