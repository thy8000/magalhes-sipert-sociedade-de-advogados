<?php
if (!defined('ABSPATH')) exit;
$post_id = get_the_ID();
?>

    <?php get_template_part('pages/single/components/post-thumbnail', null, [
        'post_id' => $post_id,
    ]); ?>
