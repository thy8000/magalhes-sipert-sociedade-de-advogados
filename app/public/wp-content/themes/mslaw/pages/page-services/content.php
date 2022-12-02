<?php
if (!defined('ABSPATH')) exit;
?>

<div class="services">
    <?php get_template_part('components/_page-header', null, [
        'page_description' => __('Atuamos em diversas áreas de serviço', 'it9_mslaws'),
    ]); ?>

    <div class="bg-light">
        <?php
        get_template_part('components/_double-column-section', null, [
            'second_column_have_icons' => false,
            'first_column_title' => __('Como nós podemos te ajudar?', 'it9_mslaws'),
            'second_column_title' => __('Conheça nossas especialidades e como nós podemos te ajudar', 'it9_mslaws'),
            'second_column_description' => __('Nós atuamos em diversas áreas do direito. Podemos te ajudar a resolver o seu problema em diversos setores e situações. Veja o que nós podemos fazer por você!', 'it9_mslaws'),
        ]);
        ?>
    </div>
    <div class="bg-quaternary">
        <?php
        get_template_part('components/_gallery', null, [
            'title' => __('Áreas de Atuação', 'it9_mslaws'),
            'description' => __('Prestamos os melhores serviços da nossa área. Estamos sempre dispostos a atender você. Saiba as nossas especialidades', 'it9_mslaws'),
        ]);
        ?>
        <div class="bg-light mt-5">
            <?php get_template_part('components/_centered-hero'); ?>
        </div>
    </div>
</div>