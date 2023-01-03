<?php
if (!defined('ABSPATH')) exit;

global $post;

$post_categories = empty($args['post_categories']) ? false : $args['post_categories'];

//debug($post_categories);

if (empty($post_categories))
    return;
?>
<div class="post-categories d-flex flex-wrap gap-3 pt-5 position-relative justify-content-center">
    <?php
    $categories_count = 0;
    foreach ($post_categories as $category) {
        if($categories_count == 3)
            return;

        $categories_count++;
        $category_link = get_category_link($category->category_id);
        $category_name = $category->name;

    ?>
        <a class="post-categories-item bg-one p-3 text-white rounded" href="<?php echo esc_url($category_link) ?>">
            <?php echo esc_html__($category_name, 'it9_mslaws'); ?>
        </a>
    <?php
    }
    ?>
</div>