<div class="hero horizontal-hero">
    <div class="hero__image d-flex align-items-center justify-content-center text-center">
        <div class="hero__text text-white px-3">
            <?php
            if (!empty($args['hero_title'])) {
            ?>
                <h1 class="hero__title h1 text-two"><?php echo esc_html($args['hero_title']); ?></h1>
            <?php
            }
            if (!empty($args['hero_subtitle'])) {
            ?>
                <h2 class="hero__subtitle h2 text-light"><?php echo esc_html($args['hero_subtitle']); ?></h2>
            <?php
            }
            if (!empty($args['hero_button_text'])) {
            ?>
                <button class="hero__button mt-5"><?php echo esc_html($args['hero_button_text']); ?></button>
            <?php
            }
            ?>
        </div>
    </div>
</div>