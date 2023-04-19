<?php
if (!defined('ABSPATH')) exit;

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$posts_per_page = 10;

$posts_args = [
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
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
        'page_title' => __('Blog', 'it9_mslaws'),
        'page_description' => __('Fique por dentro das novidades da área jurídica.', 'it9_mslaws'),
    ]); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <?php get_template_part('components/_posts-list', null, [
                    'posts_args' => $posts_args,
                ]); ?>
            </div>
            <div class="col-lg-4 col-md-12 py-5">
                <?php get_template_part('components/_search-form'); ?>
                <?php get_template_part('components/_categories-sidebar'); ?>
                <?php get_template_part('components/_recent-posts', null, [
                    'posts_args' => $recent_posts_args,
                ]); ?>
            </div>
        </div>
    </div>
</div>