<?php
if (!defined('ABSPATH')) exit;

$post_id = $args['post_id'];
$post_thumbnail = get_the_post_thumbnail_url($post_id, 'full');

$post_categories = empty(get_the_category($post_id)) ? false : get_the_category($post_id);

$has_post_info = empty($args['has_post_info']) ? false : $args['has_post_info'];
$has_post_categories = empty($args['has_post_categories']) ? false : $args['has_post_categories'];

$post_thumbnail_height = empty($has_post_info) ? 'thumbnail-h-500' : '';
?>
<div class="post-thumbnail">
    <div class="post-thumbnail-background d-flex flex-column justify-content-center align-items-center <?php echo esc_attr($post_thumbnail_height); ?> " style="background-image: url(<?php echo esc_attr($post_thumbnail); ?>);">
        <div class="thumbnail-background-black"></div>
        <div class="post-title text-light fs-1 position-relative text-center">
            <h1><?php echo get_the_title($post_id); ?></h1>
        </div>
        <?php
        if (!empty($has_post_info)) {
            get_template_part('components/_post-info', null, [
                'ul_classes'   => 'p-0 mt-1 d-flex gap-5 pt-5',
                'list_classes' => 'd-flex align-items-center justify-content-start gap-1 flex-column text-center',
                'icon_classes' => 'icon stroke-white',
                'text_classes' => 'text fw-normal lh-base text-white',
            ]);
        }
        if (!empty($has_post_categories)) {
            get_template_part('pages/single/components/post-categories', null, [
                'post_categories' => $post_categories,
            ]);
        }
        ?>
    </div>
</div>