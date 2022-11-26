<?php
if (!defined('ABSPATH')) exit;

add_action('customize_register', 'it9_mslaw_customize_frontpage');
function it9_mslaw_customize_frontpage($wp_customize)
{
    $wp_customize->add_section('it9_mslaw_frontpage', array(
        'title'      => __('Página Inicial', 'it9_mslaw'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('frontpage_hero');

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hero_image',
            [
                'label'      => __('Hero - Imagem', 'theme_name'),
                'section'    => 'it9_mslaw_frontpage',
                'settings'   => 'frontpage_hero'
            ]
        )
    );

    $wp_customize->add_control('hero_title', [
        'type'  => 'textarea',
        'label' => __('Hero - Título', 'it9_mslaw'),
        'section' => 'it9_mslaw_frontpage',
        'settings' => 'frontpage_hero'
    ]);

    $wp_customize->add_control('hero_description', [
        'type'  => 'textarea',
        'label' => __('Hero - Descrição', 'it9_mslaw'),
        'section' => 'it9_mslaw_frontpage',
        'settings' => 'frontpage_hero'
    ]);
}
