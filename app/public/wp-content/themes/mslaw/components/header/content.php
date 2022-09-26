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
                <div class="header-info__address col-lg-6 col-md-12 text-center text-white d-flex align-items-center">
                    <span class="d-flex align-items-center">
                        <img class="icon pe-2" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/map-pin.svg">
                        <a href="https://goo.gl/maps/wEUWgRZtNKrd7cvD9">
                            Rua Itabuna, nº. 158, Vl. Floresta, Sto André/SP – CEP 09050-210
                        </a>
                    </span>
                </div>
                <div class="header-info__social col-lg-6 col-md-12 text-center text-white">
                    <span>
                        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/whatsapp.svg">
                    </span>
                    <span>
                        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/youtube.svg">
                    </span>
                    <span>
                        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/instagram.svg">
                    </span>
                    <span>
                        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/facebook.svg">
                    </span>
                    <span>
                        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/messenger.svg">
                    </span>
                    <span>
                        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/linkedin.svg">
                    </span>
                    <span>
                        <img class="icon" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/twitter.svg">
                    </span>
                </div>
            </div>
        </div>
        <!--
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-content bg-primary" style="height: 50px;">
                        
                    </div>
                </div>
            </div>
        </div>
        -->
    </header>
    <main>