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
    <header id="it9-mslaw-header" class="top-menu">
        <nav class="top-menu__nav navbar navbar-expand-lg navbar-light bg-lg-transparent bg-md-white">
            <div class="container-fluid">
                <?php echo the_custom_logo(); ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'top-menu',
                    'depth'             =>  2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse d-lg-flex justify-content-end me-5 pe-5',
                    'container_id'      => 'navbarNavDropdown',
                    'menu_class'        => 'navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </nav>
    </header>
    <main>