<?php
if (!defined('ABSPATH')) exit;

$title = !empty($args['title']) ? $args['title'] : false;
$description = !empty($args['description']) ? $args['description'] : false;
$iframe_embed_link = !empty($args['iframe_embed_link']) ? $args['iframe_embed_link'] : false;
?>
<div class="google-maps-section">
    <div class="container">
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
    </div>
    <?php
    if (!empty($iframe_embed_link)) {
    ?>
    <div class="pt-3">
        <iframe src="<?php echo esc_attr($iframe_embed_link); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php
    }
    ?>
    <div class="container pt-3">
        <div class="row">
            <div class="col-lg-4 col-md-12 text-center">
                <h3 class="text-one fs-4 fw-bold lh-base text-center">
                    Telefones
                </h3>
                <h4 class="text-secondary fs-6 fw-normal lh-base text-center">
                    <a href="tel:+1144250108" alt="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" title="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" target="_blank">
                        (11) 4425-0108
                    </a>
                </h4>
                <h4 class="text-secondary fs-6 fw-normal lh-base text-center">
                    <a href="tel:+1149013857" alt="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" title="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" target="_blank">
                        (11) 4901-3857
                    </a>
                </h4>
            </div>
            <div class="col-lg-4 col-md-12 text-center">
                <h3 class="text-one fs-4 fw-bold lh-base text-center">E-mail</h3>
                <h4 class="text-secondary fs-6 fw-normal lh-base text-center">
                    <a href="mailto:contato@mslaw.com.br" alt="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" title="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" target="_blank">
                        contato@mslaw.com.br
                    </a>
                </h4>
            </div>
            <div class="col-lg-4 col-md-12 text-center">
                <h3 class="text-one fs-4 fw-bold lh-base text-center">
                    <a href="#" alt="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" title="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" target="_blank">
                        Endereço
                    </a>
                </h3>
                <h4 class="text-secondary fs-6 fw-normal lh-base text-center">
                    <a href="https://goo.gl/maps/kVRsFPEB3to2rvmMA" alt="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" title="<?php echo esc_attr(get_bloginfo('name')); ?> - Contato" target="_blank">
                        R. Itabuna, 158 - Vila Floresta, Santo André - SP, 09050-230
                    </a>
                </h4>
            </div>
        </div>
    </div>
</div>