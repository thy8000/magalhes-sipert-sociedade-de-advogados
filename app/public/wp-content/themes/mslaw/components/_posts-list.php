<?php
if (!defined('ABSPATH')) exit;
$posts_args = empty($args['posts_args']) ? false : $args['posts_args'];

if (empty($posts_args))
    return;
?>
<div class="posts-list">
    <?php
    $wp_query = new WP_Query($posts_args);

    if ($wp_query->have_posts()) {
    ?>
        <div class="row">
            <?php
            while ($wp_query->have_posts()) {
                $wp_query->the_post();

                $post_thumbnail = '';
                $post_style_tag = '';
                $post_category = get_the_category();

                if (!empty($post_category))
                    $post_category = $post_category[0]->name;

                if (has_post_thumbnail())
                    $post_thumbnail = get_the_post_thumbnail_url();

                if (!empty($post_thumbnail))
                    $post_style_tag = "style=\"background-image: url('{$post_thumbnail}') !important;\"";

                $post_date = '';
                if (!empty(get_the_date('YMD')))
                    $post_date = date_i18n('d') . ' de ' . date_i18n('F') . ' de ' . date_i18n('Y');
            ?>
                <div class="col-lg-6 col-md-12">
                    <div class="post__item py-5">
                        <a href="<?php echo get_the_permalink(); ?>">
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
                                        <?php echo get_the_author_meta('display_name'); ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="post__title text-one fs-5 fw-bold lh-base pt-1">
                            <?php echo get_the_title(); ?>
                        </div>
                        <div class="post__read-more d-flex align-items-center">
                            <a class="text d-flex align-items-center fw-bold lh-base text-secondary text-uppercase" href="<?php echo get_the_permalink(); ?>">
                                Leia mais
                            </a>
                            <?php echo it9_mslaws_get_svg_icon('arrow-right.svg', 'icon d-flex align-items-center'); ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
            <div class="posts-lists__pagination d-flex pb-5">
                <?php
                $posts_paginate_links_args = [
                    'prev_text' => '<<',
                    'next_text' => '>>',
                    'total' => $wp_query->max_num_pages,
                ];
                echo paginate_links($posts_paginate_links_args);
                ?>
            </div>
        </div>
    <?php
    } ?>
</div>