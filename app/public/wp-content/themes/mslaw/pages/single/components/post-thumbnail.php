<?php
if (!defined('ABSPATH')) exit;

$post_id = $args['post_id'];
$post_thumbnail = get_the_post_thumbnail_url($post_id);
debug($post_thumbnail);
?>
<div class="post-thumbnail d-flex justify-content-center">
    <div class="post-thumbnail-background" style="background: url(<?php echo esc_attr($post_thumbnail); ?>);">
        <div class="thumbnail-background-black"></div>
    </div>
</div>