<?php
if(!defined('ABSPATH')) exit;

add_action( 'init', 'it9_mslaw_register_post_type_equipe' );
function it9_mslaw_register_post_type_equipe() {
	$post_type_labels = array(
		'name'                  => __( 'Equipe', 'it9_mslaw' ),
		'singular_name'         => __( 'Equipe', 'it9_mslaw' ),
		'menu_name'             => __( 'Equipe', 'it9_mslaw' ),
		'name_admin_bar'        => __( 'Equipe', 'Add Nova Equipe em Toolbar', 'it9_mslaw' ),
		'add_new'               => __( 'Adicionar Advogado', 'it9_mslaw' ),
		'add_new_item'          => __( 'Adicionar Novo Advogado', 'it9_mslaw' ),
		'new_item'              => __( 'Novo Advogado', 'it9_mslaw' ),
		'edit_item'             => __( 'Editar Advogado', 'it9_mslaw' ),
		'view_item'             => __( 'Ver Advogado', 'it9_mslaw' ),
		'all_items'             => __( 'Todos os Advogados', 'it9_mslaw' ),
		'search_items'          => __( 'Pesquisar Advogados', 'it9_mslaw' ),
		'parent_item_colon'     => __( 'Advogados Ascendentes', 'it9_mslaw' ),
		'not_found'             => __( 'Nenhum advogado encontrado', 'it9_mslaw' ),
		'not_found_in_trash'    => __( 'Nenhum advogado encontrado na lixeira.', 'it9_mslaw' ),
		'featured_image'        => __( 'Imagem destacada do advogado', 'it9_mslaw' ),
		'set_featured_image'    => __( 'Adicionar imagem destacada do advogado', 'it9_mslaw' ),
		'remove_featured_image' => __( 'Remover imagem destacada do advogado', 'it9_mslaw' ),
		'use_featured_image'    => __( 'Use como imagem destacada do advogado', 'it9_mslaw' ),
		'archives'              => __( 'Arquivo de advogado', 'it9_mslaw' ),
		'insert_into_item'      => __( 'Inserir em advogado', 'it9_mslaw' ),
		'uploaded_to_this_item' => __( 'Adicionado neste advogado', 'it9_mslaw' ),
		'filter_items_list'     => __( 'Filtrar lista de advogados', 'it9_mslaw' ),
		'items_list_navigation' => __( 'Lista de navegação de equipe', 'it9_mslaw' ),
		'items_list'            => __( 'Lista de advogados', 'it9_mslaw' ),
	);

	$post_type_args = array(
		'labels'             => $post_type_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'equipe' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'          => 'dashicons-admin-users',
		'supports'           => array( 'title', 'author', 'thumbnail', 'content'),
	);

	register_post_type( 'equipe', $post_type_args );
}