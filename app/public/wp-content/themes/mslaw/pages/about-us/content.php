<?php
if (!defined('ABSPATH')) exit;
?>
<div class="about-us">
    <?php get_template_part('components/_page-header'); ?>
    <div class="bg-light">
        <?php
        get_template_part('components/_vertical-hero', null, [
            'hero_image' => 'http://magalhes-sipert-sociedade-de-advogados.local/wp-content/uploads/2022/10/sobre-nos-600x600-1.jpg',
            'hero_title' => __('Quem Somos', 'mslaw'),
            'hero_text' => __('A Magalhães & Sipert Sociedade de Advogados nasceu da vontade de seus sócios em atender
      seus clientes com as melhores soluções jurídicas para cada caso concreto.', 'mslaw'),
            'hero_button_text' => __('Entre em Contato', 'mslaw'),
            'is_inverted' => false
        ]);
        get_template_part('components/_vertical-hero', null, [
            'hero_image' => 'http://magalhes-sipert-sociedade-de-advogados.local/wp-content/uploads/2022/10/missao-valores-600x600-1.jpg',
            'hero_title' => __('Nossos Valores', 'mslaw'),
            'hero_text' => __('Além de apostar na parceria que se constrói diariamente junto ao cliente, na empatia e no
            comprometimento, um dos pilares do escritório é a excelência proveniente da transparência
            na condução dos trabalhos, da dedicação e esforço de trabalho.', 'mslaw'),
            'hero_button_text' => __('Entre em Contato', 'mslaw'),
            'is_inverted' => true
        ]);
        ?>
    </div>
    <div class="bg-quaternary">
        <?php get_template_part('components/_double-column-section'); ?>
    </div>
</div>