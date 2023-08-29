<?php

if (!defined('ABSPATH')) exit;

$slide_list = get_field('escritorio_slides_list');

if (empty($slide_list)) {
    return;
}

?>
<div class="carousel">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-one fs-1 fw-bold lh-base">Conheça o nosso escritório</h2>
                <h3 class="text-center text-secondary fs-5 fw-normal lh-base px-md-5 mx-md-5 px-0 mx-0">Confira imagens exclusivas do nosso escritório. Temos uma infraestrutura ideal para atender nossos clientes!</h3>
            </div>
        </div>
    </div>
    <div class="carousel-container pt-3">
        <?php

        foreach ($slide_list as $key => $slide) {

        ?>

            <div class="carousel-slide fade">
                <div class="numbertext">
                    <?php echo $key . ' / ' . count($slide_list); ?>
                </div>

                <div class="carousel-image" style="background-image: url(<?php echo $slide['image']; ?>);"></div>

                <?php

                if (!empty($slide['text'])) {

                ?>

                    <div class="text">Caption Text</div>

                <?php

                }

                ?>
            </div>
        <?php

        }

        ?>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div class="pt-3" style="text-align:center">
        <?php

        foreach ($slide_list as $key => $slide) {

        ?>

            <span class="dot" onclick="currentSlide(<?php echo $key ?>)"></span>

        <?php

        }

        ?>
    </div>
</div>