<?php
if (!defined('ABSPATH')) exit;

$graduation_list = get_field('single_equipe_graduation') ?? '';
?>
<div class="single-equipe-biography">
    <div class="pt-5">
        <h2 class="text-one fs-2 fw-bold lh-base">
            <?php esc_html_e('Biografia', 'it9_mslaws') ?>
        </h2>
        <hr class="single-equipe-hr">
    </div>
    <?php
    if (!empty($graduation_list)) {
    ?>
        <div class="pt-4">
            <h3 class="text-one fs-5 fw-bold lh-base">
                <?php esc_html_e('Graduação', 'it9_mslaws') ?>
            </h3>
        </div>
        <div class="pt-1">
            <ul>
                <?php
                foreach ($graduation_list as $graduation) {
                ?>
                    <li class="single-equipe-biography-li text-secondary fs-6 fw-normal lh-lg">
                        <?php esc_html_e($graduation['description'], 'it9_mslaws') ?>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    <?php
    }
    ?>
</div>