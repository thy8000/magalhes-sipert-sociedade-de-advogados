<?php
if(!defined('ABSPATH')) exit;

$background_opacity = 0.5;
$background_image = !empty(get_theme_mod('calltoaction_contact_image')) ? get_theme_mod('calltoaction_contact_image') : get_template_directory_uri() . '/assets/images/background/centered-hero.jpg';
$title = get_theme_mod( 'calltoaction_contact_title' );
$description = get_theme_mod( 'calltoaction_contact_description' );
$button_link = get_theme_mod( 'calltoaction_contact_link' );

if(!empty($title) || !empty($description) || !empty($button_link)){
?>
<div class="hero centered__hero" style="background-image: linear-gradient(rgba(0, 0, 0, <?php echo $background_opacity; ?>), rgba(0, 0, 0, <?php echo $background_opacity; ?>)), url(<?php echo esc_url($background_image) ?>);">
    <div class="px-4 py-5 text-center text-white">
        <?php
        if (!empty($title)) 
        {
        ?>
            <h2 class="text-center text-one fs-1 fw-bold lh-base">
                <?php esc_html_e($title, 'it9_mslaw'); ?>
            </h1>
        <?php
        }
        ?>
        <div class="col-lg-6 mx-auto">
            <?php
            if (!empty($description))
            {
            ?>
                <h3 class="text-center text-light fs-5 fw-normal lh-base px-md-3 mx-md-3 px-0 mx-0">
                    <?php esc_html_e($description, 'it9_mslaw') ?>
                </p>
            <?php
            }
            ?>
            <?php
            if (!empty($button_link)) 
            {
            ?>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="<?php echo esc_url($button_link); ?>" class="hero__button mt-5 fw-light lh-base">
                        <?php esc_html_e('Entre em contato', 'it9_mslaw'); ?>
                     </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
}