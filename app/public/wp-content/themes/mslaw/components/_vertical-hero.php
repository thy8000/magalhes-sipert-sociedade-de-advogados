<div class="hero vertical-hero my-5 py-5 position-relative">
    <div class="container px-4 py-5 mb-5">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img class="hero__image img-fluid" src="http://magalhes-sipert-sociedade-de-advogados.local/wp-content/uploads/2022/10/mslaws-vertical-hero-image.jpg" class="d-block mx-lg-auto img-fluid" alt="Magalhães & Sipert" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6 col-md-12 ps-lg-5 mt-lg-0 mt-5">
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