<?php
if(!defined('ABSPATH')) exit;

add_action('customize_register', 'it9_mslaw_customize_calltoaction_contact');
function it9_mslaw_customize_calltoaction_contact($wp_customize)
{
    $wp_customize->add_section('calltoaction_contact', array(
        'title'      => __('Call to Action (Contato)', 'it9_mslaw'),
        'priority'   => 40,
    ));

    $wp_customize->add_setting('calltoaction_contact_image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'calltoaction_contact_image',
            [
                'label'      => __('Imagem', 'it9_mslaw'),
                'section'    => 'calltoaction_contact',
                'settings'   => 'calltoaction_contact_image'
            ]
        )
    );

    $wp_customize->add_setting('calltoaction_contact_title');
    $wp_customize->add_control('calltoaction_contact_title', [
        'type'  => 'textarea',
        'label' => __('Título', 'it9_mslaw'),
        'section' => 'calltoaction_contact',
        'settings' => 'calltoaction_contact_title'
    ]);

    $wp_customize->add_setting('calltoaction_contact_description');
    $wp_customize->add_control('calltoaction_contact_description', [
        'type'  => 'textarea',
        'label' => __('Descrição', 'it9_mslaw'),
        'section' => 'calltoaction_contact',
        'settings' => 'calltoaction_contact_description'
    ]);

    $wp_customize->add_setting('calltoaction_contact_link');
    $wp_customize->add_control('calltoaction_contact_link', [
        'type'  => 'text',
        'label' => __('Link do Botão', 'it9_mslaw'),
        'section' => 'calltoaction_contact',
        'settings' => 'calltoaction_contact_link'
    ]);
}