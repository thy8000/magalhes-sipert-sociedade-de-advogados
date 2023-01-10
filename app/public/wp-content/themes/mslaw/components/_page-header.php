<?php
$page_title = empty($args['page_title']) ? get_the_title() : $args['page_title'];
$page_description = empty($args['page_description']) ? false : $args['page_description'];
?>
<div class="page-header d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(<?php get_home_url() ?>/wp-content/uploads/2022/10/page-header-background.jpg);">
    <div class="page-header__box rounded">
        <div class="page-header__title">
            <h1 class="hero__title text-light display-2 lh-2 fw-bold text-center"><?php echo esc_html($page_title); ?></h1>
        </div>
        <?php
        if (!empty($page_description)) {
        ?>
            <div class="page-header__subtitle">
                <h2 class="hero__subtitle text-two fs-6 lh-base fw-normal text-center text-uppercase"><?php echo esc_html($page_description); ?></h2>
            </div>
        <?php
        }
        ?>
    </div>
</div>