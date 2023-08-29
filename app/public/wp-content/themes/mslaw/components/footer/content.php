<?php

if (!defined('ABSPATH')) exit;

?>
</main>

<footer id="it-mslaw-footer" class="main__footer text-white text-center text-lg-start bg-one">
    <div class="container p-4">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <div class="footer_logo mb-5">
                    <a href="<?php echo get_home_url() ?>" class="custom-logo-link" rel="home" aria-current="page">
                        <?php the_custom_logo(); ?>
                    </a>
                </div>
                <div class="footer__social d-flex">
                    <div>
                        <a class="footer__social-link">
                            <?php echo it9_mslaws_get_svg_icon('facebook.svg', 'footer__social-icon') ?>
                        </a>
                    </div>
                    <div>
                        <a class="footer__social-link">
                            <?php echo it9_mslaws_get_svg_icon('twitter.svg', 'footer__social-icon') ?>
                        </a>
                    </div>
                    <div>
                        <a class="footer__social-link">
                            <?php echo it9_mslaws_get_svg_icon('instagram.svg', 'footer__social-icon') ?>
                        </a>
                    </div>
                    <div>
                        <a class="footer__social-link">
                            <?php echo it9_mslaws_get_svg_icon('whatsapp.svg', 'footer__social-icon') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <?php get_template_part('components/_search-form'); ?>
                <div class="footer__contact">
                    <div class="mb-3">
                        <a class="footer__contact__link fs-6 fw-light lh-base">
                            <?php echo it9_mslaws_get_svg_icon('map-pin.svg', 'footer__contact__icon') ?>
                            Rua Itabuna, nº. 158, Vl. Floresta, Santo André - SP - 09050-210
                        </a>
                    </div>
                    <div class="mb-3">
                        <a class="footer__contact__link fs-6 fw-light lh-base">
                            <?php echo it9_mslaws_get_svg_icon('mail.svg', 'footer__contact__icon') ?>
                            contato@mslaw.com.br
                        </a>
                    </div>
                    <div class="mb-3">
                        <a class="footer__contact__link fs-6 fw-light lh-base">
                            <?php echo it9_mslaws_get_svg_icon('phone.svg', 'footer__contact__icon') ?>
                            (11) 4425-0108
                        </a>
                    </div>
                    <div class="mb-3">
                        <a class="footer__contact__link fs-6 fw-light lh-base">
                            <?php echo it9_mslaws_get_svg_icon('phone.svg', 'footer__contact__icon') ?>
                            (11) 4901-3857
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 text-center fw-normal lh-base fs-5">Horário de Atendimento</h5>

                <table class="table text-center text-white">
                    <tbody class="font-weight-normal">
                        <tr>
                            <td class="fs-6 fw-light lh-base">Segunda à Sexta</td>
                            <td class="fs-6 fw-light lh-base">8am - 18pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center p-3 fw-normal lh-base fs-5" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Todos os direitos reservados -
        <a class="text-white" href="https://mdbootstrap.com/">MSLaw Advogados</a>
        <br>
        <br>
        Hospedado e monitorado por <a href="https://it9.com.br/">IT9</a> - <a href="https://www.abctudo.com.br/">ABCTudo</a>
    </div>
    </div>
</footer>
<?php

wp_footer();

?>
</body>

</html>