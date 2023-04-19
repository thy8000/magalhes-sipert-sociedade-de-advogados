<?php
if (!defined('ABSPATH')) exit;

$taxonomy_name = empty($args['taxonomy_name']) ? 'category' : $args['taxonomy_name'];
$post_categories = get_terms([
    'taxonomy' => $taxonomy_name,
    'hide_empty' => false,
]);
$title = empty($args['title']) ? __('Categorias', 'it9_mslaws') : $args['title'];

if (empty($post_categories))
    return;

?>
<div class="categories-sidebar my-5">
    <h3 class="py-3 text-one fw-bold"><?php echo $title; ?></h3>
    <div class="category-list d-flex flex-column">
        <?php
        foreach ($post_categories as $category) {
            $category_link = get_category_link($category->term_id);
        ?>
            <a class="category-link py-2" href="<?php echo esc_url($category_link);  ?>">
                <?php echo $category->name; ?>
            </a>
        <?php
        }
        ?>
    </div>
</div>