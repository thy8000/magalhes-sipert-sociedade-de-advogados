<?php
if (!defined('ABSPATH')) exit;

$posts_args = empty($args['posts_args']) ? false : $args['posts_args'];

if (empty($posts_args))
    return;
?>
<div class="posts-list">
    <?php
    $posts_list = get_posts($posts_args);
    debug($posts_list);

    if (empty($posts_list))
        return;
    ?>
    <div class="row">
        <?php
        foreach ($posts_list as $post) {
        ?>
            <div class="col-lg-6 col-md-12">
                <div class="post__item">
                    <?php
                    if (has_post_thumbnail($post->ID)) {
                    ?>
                        <div class="post__thumbnail"></div>
                    <?php
                    }
                    ?>
                    <div class="post__info"></div>
                    <div class="post__title"></div>
                    <div class="post__description"></div>
                    <div class="post_button"></div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>