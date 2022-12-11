<?php
$background_opacity = 0.6;
$title = empty($args['title']) ? false : $args['title'];
$description = empty($args['description']) ? false : $args['description'];

$services_posts = get_posts([
    'post_type' => 'servicos',
    'posts_per_page' => 9,
    'orderby' => 'date',
    'order' => 'DESC',
]);

if (empty($services_posts)) return;
?>
<div class="gallery flexible__gallery py-5">
    <div class="container px-4 py-5" id="custom-cards">
        <?php
        if (!empty($title)) {
        ?>
            <h2 class="text-center text-one fs-1 fw-bold lh-base"><?php echo esc_html($title); ?></h2>
        <?php
        }
        if (!empty($description)) {
        ?>
            <h3 class="text-center text-secondary fs-5 fw-normal lh-base px-md-5 mx-md-5 px-0 mx-0"><?php echo esc_html($description); ?></h2>
            <?php
        }
            ?>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <?php
                $post_count = 0;
                foreach ($services_posts as $post) {
                    $post_count++;

                    if ($post_count == 1 || $post_count == 6) {
                        $post_count = $post_count == 6 ? $post_count = 0 : $post_count;
                ?>
                        <div class="col-lg-6 gallery__card">
                            <a href="<?php echo esc_url(get_the_permalink($post->ID)); ?>">
                                <div class="gallery__image card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo esc_url(get_the_post_thumbnail_url($post->ID)); ?>)">
                                    <div class="d-flex flex-column text-white text-shadow-1 align-items-center justify-content-center text-center h-100 p-3">
                                        <h2 class="gallery__title fw-bold">
                                            <?php esc_html_e($post->post_title, 'it9_mslaw'); ?>
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                        continue;
                    }
                    ?>
                    <div class="col-lg-3 gallery__card">
                        <a href="<?php echo esc_url(get_the_permalink($post->ID)); ?>">
                            <div class="gallery__image card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo esc_url(get_the_post_thumbnail_url($post->ID)); ?>)">
                                <div class="d-flex flex-column text-white text-shadow-1 align-items-center justify-content-center text-center h-100 p-3">
                                    <h2 class="gallery__title fw-bold">
                                        <?php esc_html_e($post->post_title, 'it9_mslaw'); ?>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
    </div>
</div>