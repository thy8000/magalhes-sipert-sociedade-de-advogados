<?php
if (!defined('ABSPATH')) exit;

$fulldescription_fields = !empty(get_field('single_services_fulldescription')) ? get_field('single_services_fulldescription') : false;

if (empty($fulldescription_fields)) return;
?>
<div class="services-full-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-justify">
                <?php
                if (!empty($fulldescription_fields['title'])) {
                ?>
                    <h2 class="text-one fs-3 fw-bold lh-base pt-5">
                        <?php esc_html_e($fulldescription_fields['title'], 'it9_mslaw') ?>
                    </h2>
                <?php
                }
                if (!empty($fulldescription_fields['description'])) {
                ?>
                    <?php echo $fulldescription_fields['description'] ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>