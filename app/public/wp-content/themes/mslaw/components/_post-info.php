<?php
if (!defined('ABSPATH')) exit;

global $post;

$post_date = '';
if (!empty(get_the_date('YMD', $post->ID)))
    $post_date = date_i18n('d') . ' de ' . date_i18n('F') . ' de ' . date_i18n('Y');

$author_id = $post->post_author;
$author_display_name = get_the_author_meta('display_name', $author_id);

$ul_classes = empty($args['ul_classes']) ? '' : $args['ul_classes'];
$list_classes = empty($args['list_classes']) ? '' : $args['list_classes'];
$icon_classes = empty($args['icon_classes']) ? '' : $args['icon_classes'];
$text_classes = empty($args['text_classes']) ? '' : $args['text_classes'];
?>
<div class="post__info position-relative">
    <ul class="<?php echo esc_attr($ul_classes); ?>">
        <li class="<?php echo esc_attr($list_classes); ?>">
            <?php echo it9_mslaws_get_svg_icon('clock.svg', "$icon_classes"); ?>
            <span class="<?php echo esc_attr($text_classes); ?>">
                <?php echo $post_date; ?>
            </span>
        </li>
        <li class="<?php echo esc_attr($list_classes); ?>">
            <?php echo it9_mslaws_get_svg_icon('user.svg', "$icon_classes"); ?>
            <span class="<?php echo esc_attr($text_classes); ?>">
                <?php echo esc_html($author_display_name);; ?>
            </span>
        </li>
    </ul>
</div>