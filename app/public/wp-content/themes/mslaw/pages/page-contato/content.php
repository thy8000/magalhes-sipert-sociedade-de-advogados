<?php
if (!defined('ABSPATH')) exit;
?>
<div class="page-contato">
    <?php get_template_part('components/_page-header', null, [
        'page_description' => __('Saiba onde nos encontrar', 'it9_mslaws'),
    ]); ?>
    <div class="py-5 bg-quaternary">
        <?php get_template_part('components/_contact-list'); ?>
    </div>
</div>