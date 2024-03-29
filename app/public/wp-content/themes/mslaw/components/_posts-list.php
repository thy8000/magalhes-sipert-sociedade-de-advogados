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
                        <?php get_template_part('components/_post-info', null, [
                            'ul_classes'   => 'p-0 mt-1 d-flex gap-5',
                            'list_classes' => 'd-flex align-items-center justify-content-start gap-1',
                            'icon_classes' => 'icon',
                            'text_classes' => 'text fw-normal lh-base text-secondary',
                        ]); ?>
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
    } else { ?>
        <h2 class="text-secondary fs-5 fw-normal lh-base text-lg-start text-center pt-5">
            <?php
            esc_html_e('Não existe nenhuma postagem disponível no momento.', 'it9_mslaws');
            ?>
        </h2>
        <button href="<?php echo esc_url(get_home_url()); ?>" class="hero__button mt-3 fs-6 lh-base fw-light">
            <?php
            esc_html_e('Voltar para a página inicial', 'it9_mslaws');
            ?>
        </button>
    <?php
    }
    ?>
</div>