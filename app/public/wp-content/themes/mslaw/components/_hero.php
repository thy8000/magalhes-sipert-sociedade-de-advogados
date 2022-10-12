<div class="hero horizontal-hero">
    <div class="hero__image d-flex align-items-center justify-content-center text-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(http://magalhes-sipert-sociedade-de-advogados.local/wp-content/uploads/2022/10/magalhaes-hero.jpg);">
        <div class="hero__text text-white px-3">
            <?php
            if (!empty($args['hero_title'])) {
            ?>
                <h1 class="hero__title text-two fs-1 lh-base fw-bold"><?php echo esc_html($args['hero_title']); ?></h1>
            <?php
            }
            if (!empty($args['hero_subtitle'])) {
            ?>
                <h2 class="hero__subtitle text-light fs-2 lh-base fw-normal"><?php echo esc_html($args['hero_subtitle']); ?></h2>
            <?php
            }
            if (!empty($args['hero_button_text'])) {
            ?>
                <button class="hero__button mt-5 fs-6 lh-base fw-light"><?php echo esc_html($args['hero_button_text']); ?></button>
            <?php
            }
            ?>
        </div>
    </div>
</div>