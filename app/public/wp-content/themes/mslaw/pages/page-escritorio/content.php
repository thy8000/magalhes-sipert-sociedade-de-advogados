<?php
if (!defined('ABSPATH')) exit;
?>
<div class="office">
    <?php
    get_template_part('components/_page-header', null, [
        'page_description' => __('Saiba mais sobre o nosso escritório.', 'it9_mslaws'),
    ]);
    ?>
    <div class="bg-light">
        <?php
        get_template_part('components/_double-column-section', null, [
            'second_column_have_icons' => false,
            'first_column_title' => __('Conheça o nosso escritório', 'it9_mslaws'),
            'second_column_title' => __('Escritório de Advocacia em Santo André', 'it9_mslaws'),
            'second_column_description' => __('Nosso escritório possui uma equipe disposta a te ajudar com os seus problemas jurídicos. Estamos localizados atualmente em Santo André/SP. Venha visitar a gente!', 'it9_mslaws'),
        ]);
        ?>
    </div>
    <div class="bg-white pt-5">
        <?php
            get_template_part('components/_google-maps-section', null, [
                'title' => esc_html__('Localização', 'it9_mslaws'),
                'description' => esc_html__('Saiba onde o nosso escritório está localizado.', 'it9_mslaws'),
                'iframe_embed_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.143830442472!2d-46.54456932479151!3d-23.670813878724754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4258e2eeffa5%3A0x5b872d466d17dfc9!2sR.%20Itabuna%2C%20158%20-%20Vila%20Floresta%2C%20Santo%20Andr%C3%A9%20-%20SP%2C%2009050-230!5e0!3m2!1spt-BR!2sbr!4v1672968333344!5m2!1spt-BR!2sbr',
            ]);
        ?>
    </div>
</div>