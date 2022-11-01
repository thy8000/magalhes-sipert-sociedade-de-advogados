<?php
if (!defined('ABSPATH')) exit;

$posts_args = empty($args['posts_args']) ? false : $args['posts_args'];
$recent_posts = get_posts($posts_args);

if (empty($recent_posts))
    return;
?>
<div class="recent-posts">
    <h3 class="py-3 text-one fw-bold">
        <?php echo esc_html('Notícias Recentes: ', 'it9_mslaws'); ?>
    </h3>

    <div class="recent-posts-list d-flex flex-column">
        <?php
        foreach ($recent_posts as $post) {
        ?>
            <a href="<?php echo esc_url(get_the_permalink($post->ID)); ?>" class="recent-posts-link py-3 fw-normal fs-5">
                <?php echo esc_html(get_the_title($post->ID)); ?>
            </a>
        <?php
        }
        ?>
    </div>
</div>