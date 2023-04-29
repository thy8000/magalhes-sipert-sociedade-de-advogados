<?php
$first_column_title = empty($args['first_column_title']) ? false : $args['first_column_title'];
$first_column_description = empty($args['first_column_description']) ? false : $args['first_column_description'];
$second_column_title = empty($args['second_column_title']) ?  false : $args['second_column_title'];
$second_column_description = empty($args['second_column_description']) ? false : $args['second_column_description'];
$second_column_have_icons = $args['second_column_have_icons'] === true ? true : false;
?>
<div class="double-column-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 first-column-section">
                <?php
                if (!empty($first_column_title)) {
                ?>
                    <h2 class="text-one fs-2 fw-bold lh-base text-lg-justify-sm-center"><?php echo esc_html($first_column_title); ?></h2>
                <?php
                }
                if (!empty($first_column_description)) {
                ?>
                    <p class="text-secondary fs-5 fw-normal lh-base text-lg-justify-sm-center"><?php echo esc_html($first_column_description); ?></p>
                <?php
                }
                ?>
            </div>
            <?php
            if ($second_column_have_icons === true) {
            ?>
                <div class="col-lg-6 col-md-12 second-column-section column-with-icons">
                    <div class="container">
                        <div class="double-column__item row pt-lg-0 pt-md-5">
                            <div class="icon col-lg-2 col-md-12 text-lg-end text-center pb-lg-0 pb-md-2">
                                <?php echo it9_mslaws_get_svg_icon('eye.svg', 'rounded-circle bg-two p-1'); ?>
                            </div>
                            <div class="title col-lg-10 col-md-12 align-items-center text-one fs-5 fw-bold lh-base text-lg-start text-center">Transparência</div>
                            <div class="grid col-lg-2 d-lg-block d-none"></div>
                            <div class="description col-lg-10 col-md-12">
                                <p class="text-secondary fs-6 fw-normal lh-base text-lg-justify-sm-center">Desde o começo, até o fim, o cliente sempre estará a par do caso, quais as chances de vitória, e quais são os riscos envolvidos. O cliente sempre estará 100% envolvido no caso.</p>
                            </div>
                        </div>
                        <div class="double-column__item row pt-lg-0 pt-md-5">
                            <div class="icon col-lg-2 col-md-12 text-lg-end text-center pb-lg-0 pb-md-2">
                                <?php echo it9_mslaws_get_svg_icon('bolt.svg', 'rounded-circle bg-two p-1'); ?>
                            </div>
                            <div class="title col-lg-10 col-md-12 align-items-center text-one fs-5 fw-bold lh-base text-lg-start text-center">Eficiência</div>
                            <div class="grid col-lg-2 d-lg-block d-none"></div>
                            <div class="description col-lg-10 col-md-12">
                                <p class="text-secondary fs-6 fw-normal lh-base text-lg-justify-sm-center">Nosso atendimento é personalizado para cada caso. Sempre oferecemos a melhor solução para os nossos clientes.</p>
                            </div>
                        </div>
                        <div class="double-column__item row pt-lg-0 pt-md-5">
                            <div class="icon col-lg-2 col-md-12 text-lg-end text-center pb-lg-0 pb-md-2">
                                <?php echo it9_mslaws_get_svg_icon('heart.svg', 'rounded-circle bg-two p-1'); ?>
                            </div>
                            <div class="title col-lg-10 col-md-12 align-items-center text-one fs-5 fw-bold lh-base text-lg-start text-center">Empatia</div>
                            <div class="grid col-lg-2 d-lg-block d-none"></div>
                            <div class="description col-lg-10 col-md-12">
                                <p class="text-secondary fs-6 fw-normal lh-base text-lg-justify-sm-center">Sempre tentamos entender as reais preocupações do cliente e desenvolver uma relação de confiança. Oferecemos explicações claras e objetivas para minimizar o impacto do problema na sua empresa ou vida pessoal.</p>
                            </div>
                        </div>
                        <div class="double-column__item row pt-lg-0 pt-md-5">
                            <div class="icon col-lg-2 col-md-12 text-lg-end text-center pb-lg-0 pb-md-2">
                                <?php echo it9_mslaws_get_svg_icon('flame.svg', 'rounded-circle bg-two p-1'); ?>
                            </div>
                            <div class="title col-lg-10 col-md-12 align-items-center text-one fs-5 fw-bold lh-base text-lg-start text-center">Proatividade</div>
                            <div class="grid col-lg-2 d-lg-block d-none"></div>
                            <div class="description col-lg-10 col-md-12">
                                <p class="text-secondary fs-6 fw-normal lh-base text-lg-justify-sm-center">Sempre mantemos uma postura proativa junto com o cliente. Sempre manteremos o cliente informado em relação aos processos, e tentaremos sempre achar a melhor solução possível para todos os casos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="col-lg-6 col-md-12 second-column-section column-with-icons">
                    <?php
                    if (!empty($second_column_title)) {
                    ?>
                        <h2 class="text-one fs-4 fw-bold lh-base text-lg-start text-center"><?php echo esc_html($second_column_title); ?></h2>
                    <?php
                    }
                    if (!empty($second_column_description)) {
                    ?>
                        <p class="text-secondary fs-6 fw-normal lh-base text-lg-justify-sm-center"><?php echo esc_html($second_column_description); ?></p>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>