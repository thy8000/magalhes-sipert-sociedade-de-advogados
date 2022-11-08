<?php
if (!defined('ABSPATH')) exit;

$post_id = get_the_ID();

$recent_posts_args = [
    'post_type' => 'post',
    'oderby' => 'date',
    'order' => 'DESC',
    'numberposts' => 5,
];
?>
<div class="post-single">
    <?php
    get_template_part('pages/single/components/post-thumbnail', null, [
        'post_id' => $post_id,
    ]);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <?php get_template_part('pages/single/components/post-content'); ?>
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