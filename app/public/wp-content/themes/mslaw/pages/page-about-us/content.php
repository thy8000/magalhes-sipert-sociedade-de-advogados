<?php
if (!defined('ABSPATH')) exit;

$vertical_hero_list = get_field('vertical_hero_list');
?>
<div class="about-us">
    <?php
    get_template_part('components/_page-header', null, [
        'page_description' => __('Conheça o nosso trabalho', 'it9_mslaws'),
    ]);

    if (!empty($vertical_hero_list)) {
    ?>
        <div class="bg-light">
            <?php
            foreach ($vertical_hero_list as $vertical_hero) {
                get_template_part('components/_vertical-hero', null, [
                    'hero_image' => $vertical_hero['image']['url'] ?? '',
                    'hero_title' => $vertical_hero['title'] ?? '',
                    'hero_text' => $vertical_hero['description'] ?? '',
                    'hero_button_text' => __('Entre em Contato', 'mslaw'),
                    'is_inverted' => $vertical_hero['is_inverted'] ?? false,
                ]);
            }
            ?>
        </div>
    <?php
    }
    ?>
    <div class="bg-quaternary">
        <?php
        get_template_part('components/_double-column-section', null, [
            'second_column_have_icons' => true,
            'first_column_title' => __('Porquê escolher Magalhães & Sipert Sociedade de Advogados ?', 'it9_mslaws'),
            'first_column_description' => __('Nascemos da vontade em atender os nossos clientes com as melhores soluções jurídicas. Conheça os nossos diferenciais para as outras empresas.', 'it9_mslaws'),
        ]);
        ?>
    </div>
    <div class="bg-light">
        <?php get_template_part('components/_cards-with-image-and-title'); ?>
    </div>
    <div class="bg-white mt-5">
        <?php get_template_part('components/_centered-hero'); ?>
    </div>
</div>