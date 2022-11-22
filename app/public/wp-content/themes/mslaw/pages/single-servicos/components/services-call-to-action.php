<?php
if(!defined('ABSPATH')) exit;
?>
<div class="services-call-to-action">
    <div class="bg-one p-5 mt-5 text-center text-white font-normal fs-6">
        <p>
            <?php 
            echo esc_html__('Precisa de ajuda jurídica em', 'it9_mslaw') . ' ' . get_the_title() . '? ' . get_bloginfo('name') . esc_html__(' pode ajudar você!', 'it9_mslaw');
            ?>
        </p>
        <button class="hero__button mt-3 fs-6 lh-base fw-light">
            <?php esc_html_e('Entrar em contato', 'it9_mslaw'); ?>
        </button>
    </div>
</div>