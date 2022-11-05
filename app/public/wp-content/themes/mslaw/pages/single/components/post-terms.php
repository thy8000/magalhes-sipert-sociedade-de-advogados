<?php
if (!defined('ABSPATH')) exit;

global $post;

$post_terms = empty($args['post_terms']) ? false : $args['post_terms'];

//debug($post_terms);

if (empty($post_terms))
    return;
?>
<div class="post-terms d-flex flex-wrap gap-3 pt-5 position-relative justify-content-center">
    <?php
    $terms_count = 0;
    foreach ($post_terms as $term) {
        if($terms_count == 3)
            return;

        $terms_count++;
        $term_link = get_category_link($term->term_id);
        $term_name = $term->name;

    ?>
        <a class="post-terms-item bg-one p-3 text-white rounded" href="<?php echo esc_url($term_link) ?>">
            <?php echo esc_html__($term_name, 'it9_mslaws'); ?>
        </a>
    <?php
    }
    ?>
</div>