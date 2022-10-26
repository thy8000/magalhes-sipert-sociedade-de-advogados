<?php
$background_opacity = 0.6;
$title = empty($args['title']) ? false : $args['title'];
$description = empty($args['description']) ? false : $args['description'];
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
                <div class="col-lg-6 gallery__card">
                    <div class="gallery__image card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo get_template_directory_uri(); ?>/assets/images/background/contencioso-civil.jpg);">
                        <div class="d-flex flex-column text-white text-shadow-1 align-items-center justify-content-center text-center h-100 p-3">
                            <h2 class="gallery__title fw-bold">Contencioso Civil</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 gallery__card">
                    <div class="gallery__image card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo get_template_directory_uri(); ?>/assets/images/background/previdencia-trabalhista.jpg);">
                        <div class="d-flex flex-column text-white text-shadow-1 align-items-center justify-content-center text-center h-100 p-3">
                            <h2 class="gallery__title fw-bold">Previdência e Trabalhista</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 gallery__card">
                    <div class="gallery__image card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo get_template_directory_uri(); ?>/assets/images/background/tributario.jpg);">
                        <div class="d-flex flex-column text-shadow-1 align-items-center justify-content-center text-center h-100 p-3">
                            <h2 class="gallery__title fw-bold">Tributário</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 gallery__card">
                    <div class="gallery__image card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo get_template_directory_uri(); ?>/assets/images/background/imobiliario.jpg);">
                        <div class="d-flex flex-column text-white text-shadow-1 align-items-center justify-content-center text-center h-100 p-3">
                            <h2 class="gallery__title fw-bold">Imobiliário </h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 gallery__card">
                    <div class="gallery__image card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo get_template_directory_uri(); ?>/assets/images/background/societario.jpg);">
                        <div class="d-flex flex-column text-white text-shadow-1 align-items-center justify-content-center text-center h-100 p-3">
                            <h2 class="gallery__title fw-bold">Societário </h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 gallery__card">
                    <div class="gallery__image card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo get_template_directory_uri(); ?>/assets/images/background/consumidor.jpg);">
                        <div class="d-flex flex-column text-shadow-1 align-items-center justify-content-center text-center h-100 p-3">
                            <h2 class="gallery__title fw-bold">Consumidor</h2>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>