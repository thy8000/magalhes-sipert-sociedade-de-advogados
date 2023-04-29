<?php
if (!defined('ABSPATH')) exit;

$summary_fields = !empty(get_field('single_services_summary')) ? get_field('single_services_summary') : false;
?>
<div class="services-double-column">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php
                if (!empty($summary_fields)) {
                ?>
                    <div>
                        <?php
                        if (!empty($summary_fields['title'])) {
                        ?>
                            <h2 class="text-one fs-3 fw-bold lh-base pt-5">
                                <?php esc_html_e($summary_fields['title'], 'it9_mslaw') ?>
                            </h2>
                        <?php
                        }
                        if (!empty($summary_fields['description'])) {
                        ?>
                            <h2 class="text-secondary fs-6 font-normal lh-base py-1 text-justify">
                                <?php echo $summary_fields['description'] ?>
                            </h2>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6">
                <?php get_template_part('pages/single-servicos/components/services-call-to-action'); ?>
            </div>
        </div>
    </div>
</div>
