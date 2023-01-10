<?php
if (!defined('ABSPATH')) exit;
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
        <div class="carousel-slide fade">
            <div class="numbertext">1 / 3</div>
            <div class="carousel-image" style="background-image: url(<?php get_home_url() ?>/wp-content/uploads/2022/10/mslaws-vertical-hero-image.jpg);"></div>
            <div class="text">Caption Text</div>
        </div>

        <div class="carousel-slide fade">
            <div class="numbertext">2 / 3</div>
            <div class="carousel-image" style="background-image: url(<?php get_home_url() ?>/wp-content/uploads/2022/10/hero-background-main-page.jpg);"></div>
            <div class="text">Caption Two</div>
        </div>

        <div class="carousel-slide fade">
            <div class="numbertext">3 / 3</div>
            <div class="carousel-image" style="background-image: url(<?php get_home_url() ?>/wp-content/uploads/2022/10/magalhaes-hero.jpg);"></div>
            <div class="text">Caption Three</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div class="pt-3" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>