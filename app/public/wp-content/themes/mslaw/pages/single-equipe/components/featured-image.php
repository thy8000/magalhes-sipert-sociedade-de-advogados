<?php
if (!defined('ABSPATH')) exit;

$whatsapp = get_field('single_equipe_whatsapp') ?? '';

if (!empty($whatsapp)) {
    $chars_to_remove_from_whatsapp = ['(', ')', '-', ' '];
    $whatsapp_without_chars = str_replace($chars_to_remove_from_whatsapp, "", $whatsapp);
    $whatsapp_url = "https://api.whatsapp.com/send/?phone=55$whatsapp_without_chars";
}

$email = get_field('single_equipe_email') ?? '';

if (!empty($email))
    $email_url = "mailto:$email";
?>
<div class="single-equipe-featured-image pb-3">
    <div class="pt-5">
        <h2 class="text-one fs-2 fw-bold lh-base">
            <?php echo esc_html(get_the_title()) ?>
        </h2>
        <hr class="single-equipe-hr">
    </div>
    <?php
    if (!empty(get_the_post_thumbnail_url())) {
    ?>
        <div class="pt-4">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>">
        </div>
    <?php
    } else {
    ?>
        <div class="pt-4">
            <img src="<?php echo esc_url(get_home_url() . '/wp-content/uploads/2023/03/empty-photo.png') ?>">
        </div>
    <?php
    }
    if (!empty($whatsapp)) {
    ?>
        <div class="d-flex align-items-center flex-row-reverse justify-content-end pt-4">
            <a href="<?php echo esc_url($whatsapp_url) ?>" class="single-equipe-featured-image-link text-secondary fs-5 fw-normal lh-base text-lg-start text-center" target="_blank">
                <?php echo esc_html($whatsapp) ?>
            </a>
            <?php echo it9_mslaws_get_svg_icon('whatsapp.svg', 'single-equipe-featured-image-svg'); ?>
        </div>
    <?php
    }
    if (!empty($email)) {
    ?>
        <div class="d-flex align-items-center flex-row-reverse justify-content-end">
            <a href="<?php echo esc_url($email_url) ?>" class="single-equipe-featured-image-link text-secondary fs-5 fw-normal lh-base text-lg-start text-center" target="_blank">
                <?php echo esc_html($email) ?>
            </a>
            <?php echo it9_mslaws_get_svg_icon('mail.svg', 'single-equipe-featured-image-svg'); ?>
        </div>
    <?php
    }
    ?>
</div>