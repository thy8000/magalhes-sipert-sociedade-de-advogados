<?php
if (!defined('ABSPATH')) exit;

add_action('customize_register', 'it9_mslaw_customize_frontpage');
function it9_mslaw_customize_frontpage($wp_customize)
{
    $wp_customize->add_section('frontpage', array(
        'title'      => __('Página Inicial', 'it9_mslaw'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('frontpage_image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'frontpage_image',
            [
                'label'      => __('Hero - Imagem', 'theme_name'),
                'section'    => 'frontpage',
                'settings'   => 'frontpage_image'
            ]
        )
    );

    $wp_customize->add_setting('frontpage_title');
    $wp_customize->add_control('frontpage_title', [
        'type'  => 'textarea',
        'label' => __('Hero - Título', 'it9_mslaw'),
        'section' => 'frontpage',
        'settings' => 'frontpage_title'
    ]);

    $wp_customize->add_setting('frontpage_description');
    $wp_customize->add_control('frontpage_description', [
        'type'  => 'textarea',
        'label' => __('Hero - Descrição', 'it9_mslaw'),
        'section' => 'frontpage',
        'settings' => 'frontpage_description'
    ]);

    $wp_customize->add_setting('frontpage_link');
    $wp_customize->add_control('frontpage_link', [
        'type'  => 'text',
        'label' => __('Hero - Link do Botão', 'it9_mslaw'),
        'section' => 'frontpage',
        'settings' => 'frontpage_link'
    ]);
}
