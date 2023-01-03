<?php
if (!defined('ABSPATH')) exit;

$media_taxonomies_list = get_terms([
    'taxonomy' => 'midia-category',
    'hide_empty' => false,
]);

if (empty($media_taxonomies_list)) return;
?>
<div class="circle-hero py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h2 class="text-one fs-1 fw-bold lh-base text-center">Mídia</h2>
                <h2 class="text-secondary fs-5 fw-normal lh-base text-center">Acompanhe o nosso trabalho e entrevistas realizados em outros sites, ​reportagens, blogs, entre outros.</h2>
            </div>
            <?php
            foreach ($media_taxonomies_list as $media_taxonomy) {
                $featured_image_url = !empty(get_field('featured_image', $media_taxonomy)) ? get_field('featured_image', $media_taxonomy) : get_template_directory_uri() . '/assets/images/background/taxonomy-midia-featured-image.jpg'
            ?>
                <a class="circle-hero__wrapper col-lg-3 col-md-6 text-center py-5" href="<?php echo esc_url(get_term_link($media_taxonomy)); ?>">
                    <div>
                        <img class="circle-hero__image rounded-circle" src="<?php echo esc_url($featured_image_url) ?>">
                        <h3 class="text-one fs-3 fw-normal lh-base py-3">
                            <?php esc_html_e($media_taxonomy->name, 'it9_mslaw'); ?>
                        </h3>
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
    </div>
</div>