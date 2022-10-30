<?php
if (!defined('ABSPATH')) exit;

$posts_args = empty($args['posts_args']) ? false : $args['posts_args'];

if (empty($posts_args))
    return;
?>
<div class="posts-list">
    <?php
    $posts_list = get_posts($posts_args);

    if (empty($posts_list))
        return;
    ?>
    <div class="row">
        <?php
        foreach ($posts_list as $post) {
            $post_thumbnail = '';
            $post_category = get_the_category();

            if (!empty($post_category))
                $post_category = $post_category[0]->name;

            if (has_post_thumbnail($post->ID))
                $post_thumbnail = get_the_post_thumbnail_url($post->ID);

            if (!empty($post_thumbnail))
                $post_style_tag = "style=\"background-image: url('{$post_thumbnail}') !important;\"";

            $post_date = '';
            if (!empty(get_the_date('YMD', $post->ID)))
                $post_date = date_i18n('d') . ' de ' . date_i18n('F') . ' de ' . date_i18n('Y');
        ?>
            <div class="col-lg-6 col-md-12">
                <div class="post__item py-5">
                    <a href="<?php echo get_the_permalink($post->ID); ?>">
                        <div class="post__thumbnail position-relative" <?php echo $post_style_tag; ?>>
                            <?php if (!empty($post_category)) { ?>
                                <div class="post__category bg-one text-light p-3 position-absolute left-0 fw-normal lh-base">
                                    <?php echo $post_category; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </a>
                    <div class="post__info">
                        <ul class="p-0 mt-1 d-flex">
                            <li class="d-flex align-items-center justify-content-start">
                                <?php echo it9_mslaws_get_svg_icon('clock.svg', 'icon'); ?>
                                <span class="text fw-normal lh-base text-secondary">
                                    <?php echo $post_date; ?>
                                </span>
                            </li>
                            <li class="d-flex align-items-center justify-content-start ps-3">
                                <?php echo it9_mslaws_get_svg_icon('user.svg', 'icon'); ?>
                                <span class="text fw-normal lh-base text-secondary">
                                    <?php echo get_the_author_meta('display_name', $post->post_author); ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="post__title text-one fs-5 fw-bold lh-base pt-1">
                        <?php echo get_the_title($post->ID); ?>
                    </div>
                    <div class="post__read-more d-flex align-items-center">
                        <a class="text d-flex align-items-center fw-bold lh-base text-secondary text-uppercase" href="<?php echo get_the_permalink($post->ID); ?>">
                            Leia mais
                        </a>
                        <?php echo it9_mslaws_get_svg_icon('arrow-right.svg', 'icon d-flex align-items-center'); ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>