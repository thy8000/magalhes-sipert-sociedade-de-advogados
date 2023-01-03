<?php
if (!defined('ABSPATH')) exit;

$post_tags = empty($args['post_tags']) ? false : $args['post_tags'];
debug($post_tags);

if (empty($post_tags))
    return;
?>
<div class="post-tags pt-5 d-flex flex-wrap gap-3">
    <span class="post-tags-span"><?php echo esc_html__('Tags: ', 'it9_mslaws'); ?></span>
    <?php
    foreach ($post_tags as $tag) {
        $tag_link = get_category_link($tag->term_id);
        $tag_name = $tag->name;
    ?>
        <a class="post-tags-item bg-one p-3 text-white rounded" href="<?php echo esc_url($tag_link) ?>">
            <?php echo esc_html__($tag_name, 'it9_mslaws'); ?>
        </a>
    <?php
    }
    ?>
</div>