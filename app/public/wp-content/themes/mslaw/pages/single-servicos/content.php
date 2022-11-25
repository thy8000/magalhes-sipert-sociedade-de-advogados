<?php
if (!defined('ABSPATH')) exit;

$post_id = get_the_ID();

?>
<div class="single-services">
    <?php
    get_template_part('pages/single/components/post-thumbnail', null, [
        'post_id' => $post_id,
    ]);
    get_template_part('pages/single-servicos/components/services-double-column');
    get_template_part('pages/single-servicos/components/services-full-text');
    ?>
    <div class="bg-light mt-5">
        <?php get_template_part('components/_centered-hero', null, [
            'hero_title' => __('Fale Conosco', 'mslaw'),
            'hero_text'  => __('Nosso escritório conta com advogados especializados em diversas áreas do Direito para resolver seus problemas', 'mslaw'),
            'hero_button_text' => __('Entre em contato', 'mslaw')
        ]); ?>
    </div>
</div>
</div>