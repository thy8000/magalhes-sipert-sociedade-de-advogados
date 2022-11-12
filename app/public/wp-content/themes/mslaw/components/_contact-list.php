<?php
if (!defined('ABSPATH')) exit;
?>
<div class="contact-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="pt-5">
                    <h2 class="text-one fs-1 fw-bold lh-base text-lg-start text-center">
                        <?php echo esc_html__('Entre em contato', 'it9_mslaws'); ?>
                    </h2>
                </div>
                <div class="pt-3">
                    <h3 class="text-secondary fs-5 fw-normal lh-base text-lg-start text-center">
                        <?php echo esc_html__('Nós possuímos diversos canais de atendimento. Sinta-se à vontade para escolher um dos nossos canais de comunicação e entre em contato conosco!', 'it9_mslaws'); ?>
                    </h3>
                </div>
                <div class="pt-5 d-flex flex-column gap-2">
                    <h4 class="text-one fs-4 fw-bold lh-base text-lg-start text-center">
                        <?php echo esc_html__('Telefones:'); ?>
                    </h4>
                    <a class="text-secondary fs-6 fw-normal lh-base text-lg-start text-center" href="tel:+1144250108">
                        (11) 4425-0108
                    </a>
                    <a class="text-secondary fs-6 fw-normal lh-base text-lg-start text-center" href="tel:+1149013857">
                        (11) 4901-3857
                    </a>
                </div>
                <div class="pt-5 d-flex flex-column gap-2">
                    <h4 class="text-one fs-4 fw-bold lh-base text-lg-start text-center">
                        <?php echo esc_html__('E-mail:'); ?>
                    </h4>
                    <a class="text-secondary fs-6 fw-normal lh-base text-lg-start text-center" href="tel:+1144250108">
                        contato@mslaw.com.br
                    </a>
                </div>
                <div class="pt-5 d-flex flex-column gap-2">
                    <h4 class="text-one fs-4 fw-bold lh-base text-lg-start text-center">
                        <?php echo esc_html__('Endereço:'); ?>
                    </h4>
                    <a class="text-secondary fs-6 fw-normal lh-base text-lg-start text-center" href="tel:+1144250108">
                        Rua Itabuna, nº. 158, Vl. Floresta, Santo André - SP - 09050-210
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <?php 
                    if(empty(in_array('contact-form-7/wp-contact-form-7.php', get_option('active_plugins'))))
                        return;
                        
                    echo do_shortcode('[contact-form-7 id="99" title="Formulário de Contato"]');
                ?>
            </div>
        </div>
    </div>
</div>