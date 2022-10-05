<?php

if (!defined('ABSPATH')) exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php

    wp_head();

    ?>
</head>

<body <?php body_class(); ?>>
    <?php

    wp_body_open();

    ?>
    <header id="it9-mslaw-header">
        <div class="header-info container-fluid bg-primary py-2">
            <div class="row">
                <div class="header-info__address col-lg-6 col-md-12 text-center text-white d-flex align-items-center justify-content-center">
                    <span class="d-flex align-items-center flex-md-row-reverse flex-column-reverse">
                        <a class="link" href="https://goo.gl/maps/wEUWgRZtNKrd7cvD9">
                            Rua Itabuna, nº. 158, Vl. Floresta, Sto André/SP – CEP 09050-210
                        </a>
                        <?php echo it9_mslaws_get_svg_icon('map-pin.svg', 'icon pe-md-2 my-sm-0 my-3') ?>
                    </span>
                </div>
                <div class="header-info__social col-lg-6 col-md-12 text-center text-white my-sm-0 my-3">
                    <a href="#">
                        <?php echo it9_mslaws_get_svg_icon('whatsapp.svg', 'icon') ?>
                    </a>
                    <a href="#">
                        <?php echo it9_mslaws_get_svg_icon('youtube.svg', 'icon') ?>
                    </a>
                    <a href="#">
                        <?php echo it9_mslaws_get_svg_icon('instagram.svg', 'icon') ?>
                    </a>
                    <a href="#">
                        <?php echo it9_mslaws_get_svg_icon('facebook.svg', 'icon') ?>
                    </a>
                    <a href="#">
                        <?php echo it9_mslaws_get_svg_icon('messenger.svg', 'icon') ?>
                    </a>
                    <a href="#">
                        <?php echo it9_mslaws_get_svg_icon('linkedin.svg', 'icon') ?>
                    </a>
                    <a href="#">
                        <?php echo it9_mslaws_get_svg_icon('twitter.svg', 'icon') ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="top-menu container bg-secondary py-3">
            <div class="row">
                <div class="col-3">
                    <div class="top-menu__logo">
                        <?php echo the_custom_logo(); ?>
                    </div>
                </div>
                <div class="col-9">
                    <?php
                        wp_nav_menu([
                            'container_id' => 'top-menu__nav',
                            'container_class' => 'top-menu__nav d-flex align-items-center',
                            'theme_location' => 'top-menu',
                            'menu_class'    => 'top-menu__menu d-flex'
                        ]);
                    ?>
                </div>
            </div>
        </div>
    </header>
    <main>