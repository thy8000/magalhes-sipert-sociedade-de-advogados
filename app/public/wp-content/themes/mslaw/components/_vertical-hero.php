<?php
$hero_image = empty($args['hero_image']) ? get_home_url() . '/wp-content/uploads/2022/10/sobre-nos-600x600-1.jpg' : $args['hero_image'];
$is_inverted = empty($args['is_inverted']) ? false : true;
$hero_order_is_inverse = $is_inverted === true ? 'order-lg-last order-first' : '';
$hero_image_is_inverse = $is_inverted === true ? 'last__hero' : 'first__hero';
$hero_text_is_inverse = $is_inverted === true ? 'pe-lg-5' : 'ps-lg-5';
?>
<div class="hero vertical-hero py-5 position-relative">
    <div class="container px-4 py-5 mb-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 <?php echo esc_attr($hero_order_is_inverse); ?>">
                <img class="hero__image <?php echo esc_attr($hero_image_is_inverse) ?> img-fluid rounded-3" src="<?php echo $hero_image; ?>" class="d-block mx-lg-auto img-fluid" alt="Magalhães & Sipert" width="600" height="600" loading="lazy">
            </div>
            <div class="col-lg-6 col-md-12 mt-lg-0 mt-5 <?php echo esc_attr($hero_text_is_inverse); ?>">
                <?php
                if (!empty($args['hero_title'])) {
                ?>
                    <h1 class="text-one fs-1 fw-bold lh-base text-lg-start text-center"><?php echo esc_html($args['hero_title']); ?></h1>
                <?php
                }
                ?>
                <?php
                if (!empty($args['hero_text'])) {
                ?>
                    <p class="text-secondary fs-5 fw-normal lh-base text-lg-start text-center"><?php echo esc_html($args['hero_text']); ?></p>
                <?php
                }
                ?>
                <?php
                if (!empty($args['hero_button_text'])) {
                ?>
                    <div class="d-grid gap-2 d-md-flex justify-content-lg-start justify-content-md-center mt-5">
                        <button type="button" class="hero__button fw-light lh-base"><?php echo esc_html($args['hero_button_text']); ?></button>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>