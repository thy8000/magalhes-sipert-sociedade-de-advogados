<?php
if (!defined('ABSPATH')) exit;
rewind_posts();

$posts_args = [
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
];
//debug(get_posts($posts_args));
?>

<div class="posts__page">
    <?php get_template_part('components/_page-header', null, [
        'page_title' => __('Blog', 'it9_mslaws'),
        'page_description' => __('Fique por dentro das novidades da área jurídica.', 'it9_mslaws'),
    ]); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php get_template_part('components/_posts-list', null, [
                    'posts_args' => $posts_args,
                ]); ?>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>