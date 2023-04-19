<?php
if (!defined('ABSPATH')) exit;

$category_object = get_queried_object();

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$posts_per_page = 10;

$posts_args = [
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => [
        'relation' => 'AND',
        [
            'taxonomy' => $category_object->taxonomy,
            'field' => 'term_id',
            'terms' => $category_object->term_id,
            'include_children' => true,
        ]
    ]
];
$recent_posts_args = [
    'post_type' => 'post',
    'oderby' => 'date',
    'order' => 'DESC',
    'numberposts' => 5,
];
?>

<div class="posts__page">
    <?php get_template_part('components/_page-header', null, [
        'page_title' => __($category_object->name, 'it9_mslaws'),
        'page_description' => __('Todos as postagens da categoria ', 'it9_mslaws') . $category_object->name,
    ]); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <?php get_template_part('components/_posts-list', null, [
                    'posts_args' => $posts_args,
                ]); ?>
            </div>
            <div class="col-lg-4 col-md-12 py-5">
                <?php 
                get_template_part('components/_search-form'); 
                get_template_part('components/_categories-sidebar', null, [
                    'taxonomy_name' => 'category',
                    'title' => __('Mídias'),
                ]); 
                get_template_part('components/_recent-posts', null, [
                    'posts_args' => $recent_posts_args,
                ]); ?>
            </div>
        </div>
    </div>
</div>