<?php
if(!defined('ABSPATH')) exit;

$background_image = !empty(get_theme_mod('frontpage_image')) ? get_theme_mod('frontpage_image') : get_home_url() . '/wp-content/uploads/2022/10/magalhaes-hero.jpg';
$title = !empty(get_theme_mod('frontpage_title')) ? get_theme_mod('frontpage_title') : '';
$description = !empty(get_theme_mod('frontpage_description')) ? get_theme_mod('frontpage_description') : '';
$button_link = !empty(get_theme_mod('frontpage_link')) ? get_theme_mod('frontpage_link') : '';

if(!empty($title) || !empty($description) || !empty($button_link)){
?>
<div class="hero horizontal-hero">
    <div class="hero__image d-flex align-items-center text-md-start text-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(<?php echo esc_url($background_image); ?>);">
        <div class="hero__text text-white px-3 ps-md-5 ms-md-5 ps-0 ms-0">
            <?php
            if (!empty($title)) {
            ?>
                <h1 class="hero__title text-two display-1 lh-2 fw-bold col-md-8 pt-md-5"><?php esc_html_e($title, 'it9_mslaw') ?></h1>
            <?php
            }
            if (!empty($description)) {
            ?>
                <h2 class="hero__subtitle text-light fs-2 lh-base fw-normal"><?php esc_html_e($description, 'it9_mslaw') ?></h2>
            <?php
            }
            if (!empty($button_link)) {
            ?>
                <button href="<?php echo esc_url($button_link) ?>" class="hero__button mt-3 fs-6 lh-base fw-light"><?php esc_html_e('Entrar em contato', 'it9_mslaw') ?></button>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
}