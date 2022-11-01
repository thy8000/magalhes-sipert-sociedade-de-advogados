<?php
if (!defined('ABSPATH')) exit;

$post_categories = get_the_category();

if (empty($post_categories))
    return;

?>
<div class="categories-sidebar my-5">
    <h3 class="py-3 text-one fw-bold"><?php echo esc_html__('Categorias', 'it9_mslaws'); ?></h3>
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