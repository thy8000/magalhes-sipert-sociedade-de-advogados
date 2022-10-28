<?php
if (!defined('ABSPATH')) exit;

$posts_args = empty($args['posts_args']) ? false : $args['posts_args'];

if (empty($posts_args))
    return;
?>
<div class="posts-list">
    <?php
    $posts_list = get_posts($posts_args);
    //debug($posts_list);

    if (empty($posts_list))
        return;
    ?>
    <div class="row">
        <?php
        foreach ($posts_list as $post) {
            $post_thumbnail = '';

            if (has_post_thumbnail($post->ID))
                $post_thumbnail = get_the_post_thumbnail_url($post->ID);

            if (!empty($post_thumbnail))
                $post_style_tag = "style=\"background-image: url('{$post_thumbnail}') !important;\"";

            $post_date = '';
            if (!empty(get_the_date('YMD', $post->ID)))
                $post_date = date_i18n('d') . ' de ' . date_i18n('F') . ' de ' . date_i18n('Y');
        ?>
            <div class="col-lg-6 col-md-12 py-3">
                <div class="post__item">
                    <div class="post__thumbnail" <?php echo $post_style_tag; ?>></div>
                    <div class="post__info">
                        <ul class="p-0">
                            <li><?php echo $post_date; ?></li>
                            <li><?php echo get_the_author($post->ID); ?></li>
                        </ul>
                    </div>
                    <div class="post__title text-one fs-5 fw-bold lh-base pt-3">
                        <?php echo get_the_title($post->ID); ?>
                    </div>
                    <div class="post__description text-secondary fs-6 fw-normal lh-base py-3">
                        <?php echo get_the_excerpt($post->ID); ?>
                    </div>
                    <div class="post_button"></div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>