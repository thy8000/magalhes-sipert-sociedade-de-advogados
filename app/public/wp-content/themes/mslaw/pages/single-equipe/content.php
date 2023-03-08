<?php
if (!defined('ABSPATH')) exit;

get_template_part('components/_page-header');
?>
<div class="single-equipe">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <?php
                get_template_part('pages/single-equipe/components/featured-image');
                ?>
            </div>
            <div class="col-lg-6 col-12">
            <?php
                get_template_part('pages/single-equipe/components/biography');
                ?>
            </div>
        </div>
    </div>
</div>