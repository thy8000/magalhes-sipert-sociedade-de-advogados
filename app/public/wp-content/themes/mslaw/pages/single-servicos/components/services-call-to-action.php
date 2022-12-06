<?php
if(!defined('ABSPATH')) exit;

$calltoaction_fields = !empty(get_field('single_services_calltoaction')) ? get_field('single_services_calltoaction') : false;

if (empty($calltoaction_fields)) return;
?>
<div class="services-call-to-action">
    <div class="bg-one p-5 mt-5 text-center">
        <?php
        if (!empty($calltoaction_fields['title'])) {
        ?>
        <h2 class="text-white font-normal fs-6 lh-base">
            <?php 
                esc_html_e($calltoaction_fields['title'], 'it9_mslaw'); 
            ?>
        </h2>
        <?php
        }
        if (!empty($calltoaction_fields['link'])) {
        ?>
        <a target="_blank" href="<?php echo esc_url($calltoaction_fields['link']); ?>" class="hero__button mt-3 fs-6 lh-base fw-light">
            <?php esc_html_e('Entrar em contato', 'it9_mslaw'); ?>
        </a>
        <?php
        }
        ?>
    </div>
</div>