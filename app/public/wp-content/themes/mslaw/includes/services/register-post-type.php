<?php
if(!defined('ABSPATH')) exit;

add_action( 'init', 'it9_mslaw_register_post_type_services' );
function it9_mslaw_register_post_type_services() {
	$services_labels = array(
		'name'                  => __( 'Serviços', 'it9_mslaw' ),
		'singular_name'         => __( 'Serviço', 'it9_mslaw' ),
		'menu_name'             => __( 'Serviços', 'it9_mslaw' ),
		'name_admin_bar'        => __( 'Serviço', 'Add New on Toolbar', 'it9_mslaw' ),
		'add_new'               => __( 'Adicionar Serviço', 'it9_mslaw' ),
		'add_new_item'          => __( 'Adicionar Novo Serviço', 'it9_mslaw' ),
		'new_item'              => __( 'Novo Serviço', 'it9_mslaw' ),
		'edit_item'             => __( 'Editar Serviço', 'it9_mslaw' ),
		'view_item'             => __( 'Ver Serviço', 'it9_mslaw' ),
		'all_items'             => __( 'Todos os Serviços', 'it9_mslaw' ),
		'search_items'          => __( 'Pesquisar Serviços', 'it9_mslaw' ),
		'parent_item_colon'     => __( 'Serviços Ascendentes', 'it9_mslaw' ),
		'not_found'             => __( 'Nenhum serviço encontrado', 'it9_mslaw' ),
		'not_found_in_trash'    => __( 'Nenhum serviço encontrado na lixeira.', 'it9_mslaw' ),
		'featured_image'        => __( 'Imagem destacada do serviço', 'it9_mslaw' ),
		'set_featured_image'    => __( 'Adicionar imagem destacada do serviço', 'it9_mslaw' ),
		'remove_featured_image' => __( 'Remover imagem destacada do serviço', 'it9_mslaw' ),
		'use_featured_image'    => __( 'Use como imagem destacada do serviço', 'it9_mslaw' ),
		'archives'              => __( 'Arquivo de serviço', 'it9_mslaw' ),
		'insert_into_item'      => __( 'Inserir em serviço', 'it9_mslaw' ),
		'uploaded_to_this_item' => __( 'Adicionado neste serviço', 'it9_mslaw' ),
		'filter_items_list'     => __( 'Filtrar lista de serviços', 'it9_mslaw' ),
		'items_list_navigation' => __( 'Lista de navegação de serviço', 'it9_mslaw' ),
		'items_list'            => __( 'Lista de serviços', 'it9_mslaw' ),
	);

	$services_args = array(
		'labels'             => $services_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicos' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'author', 'thumbnail', 'content'),
	);

	register_post_type( 'servicos', $services_args );
}