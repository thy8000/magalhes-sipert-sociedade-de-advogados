<?php
if (!defined('ABSPATH')) exit;

global $post;

$post_tags = get_terms(array(
    'taxonomy' => 'post_tag',
    'hide_empty' => false,
));

$post_date = get_the_date('d', $post->ID) . ' de ' . get_the_date('F', $post->ID) . ' de ' . get_the_date('Y', $post->ID);

?>
<div class="post-content">
    <?php
    get_template_part('pages/single/components/post-share');

    if (get_post_type() === 'midia') {
        get_template_part('pages/single-midia/components/single-video');
    }
    ?>

    <div class="post-content-text pt-5">
        <?php the_content(); ?>
    </div>

    <?php
    if (get_post_type() !== 'midia') {
        get_template_part('pages/single/components/post-share');

        get_template_part('pages/single/components/post-tags', null, [
            'post_tags' => $post_tags,
        ]);
    }
    ?>

    <div class="post-published-info py-5 text-secondary font-normal lh-base">
        <span>
            <?php echo esc_html('Artigo publicado em: ', 'it9_mslaws') . $post_date; ?>
        </span>
    </div>
</div>