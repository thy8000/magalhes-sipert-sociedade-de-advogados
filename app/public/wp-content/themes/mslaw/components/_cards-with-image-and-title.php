<?php
if (!defined('ABSPATH')) exit;

$equipe_args = array(
    'post_type'   => 'equipe',
    'orderby'     => 'date',
    'order'       => 'ASC',
);

$equipe_posts_list = get_posts($equipe_args);

$equipe_thumbnail = '';

if (empty($equipe_posts_list))
    return;
?>
<div class="cards-with-image-and-title py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-one fs-1 fw-bold lh-base text-center">
                    <?php esc_html_e('Equipe', 'it9_mslaw'); ?>
                </h2>
            </div>
            <div class="cards__description col-12 d-flex justify-content-center">
                <h3 class="cards__description__text text-secondary fs-5 fw-normal lh-base text-center">
                    <?php esc_html_e('Contamos com uma equipe competente e experiente para resolver os seus problemas judiciais, com um atendimento especializado para cada cliente.', 'it9_mslaw'); ?>
                </h3>
            </div>
        </div>
        <div class="row py-5 my-5">
            <?php
            foreach ($equipe_posts_list as $equipe_post) {
                if (!empty(get_the_post_thumbnail_url($equipe_post->ID)))
                    $equipe_thumbnail = get_the_post_thumbnail_url($equipe_post->ID);
                else
                    $equipe_thumbnail = get_home_url() . '/wp-content/uploads/2023/03/empty-photo.png';
            ?>
                <div class="equipe-item col-lg-6 d-flex justify-content-center py-lg-0">
                    <div class="cards__item">
                        <a href="<?php echo esc_url(get_the_permalink($equipe_post->ID)) ?>" target="_blank">
                            <img class="image" src="<?php echo esc_url($equipe_thumbnail) ?>">
                        </a>
                        <h4 class="text-one fs-4 fw-bold lh-base text-lg-start text-center pt-3">
                            <a href="<?php echo esc_url(get_the_permalink($equipe_post->ID)) ?>" target="_blank">
                                <?php echo esc_html($equipe_post->post_title) ?>
                            </a>
                        </h4>
                        <?php
                        if (!empty(get_field('single_equipe_occupation', $equipe_post->ID))) {
                        ?>
                            <h5 class="text-secondary fs-5 fw-normal lh-base text-lg-start text-center">
                                <?php esc_html_e(get_field('single_equipe_occupation', $equipe_post->ID), 'it9_mslaws') ?>
                            </h5>
                        <?php
                        }
                        ?>
                        <div class="d-grid gap-2 d-md-flex justify-content-center mt-5">
                            <a href="<?php echo esc_url(get_the_permalink($equipe_post->ID)) ?>" class="hero__button fw-light lh-base" target="_blank">
                                <?php esc_html_e('Ver Perfil', 'it9_mslaw') ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>