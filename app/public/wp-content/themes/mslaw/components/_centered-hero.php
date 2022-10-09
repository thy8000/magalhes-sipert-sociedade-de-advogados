<?php
$background_opacity = 0.5;
?>
<div class="hero centered__hero" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo get_template_directory_uri(); ?>/assets/images/background/centered-hero.jpg);">
    <div class="px-4 py-5 text-center text-white">
        <?php
        if (!empty($args['hero_title'])) 
        {
        ?>
            <h1 class="display-5 fw-bold text-one"><?php echo esc_html($args['hero_title']); ?></h1>
        <?php
        }
        ?>
        <div class="col-lg-6 mx-auto">
            <?php
            if (!empty($args['hero_text'])) 
            {
            ?>
                <p class="lead mb-4"><?php echo esc_html($args['hero_text']); ?></p>
            <?php
            }
            ?>
            <?php
            if (!empty($args['hero_button_text'])) 
            {
            ?>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button class="hero__button mt-5"><?php echo esc_html($args['hero_button_text']); ?></button>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>