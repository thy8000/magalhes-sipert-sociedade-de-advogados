<div class="home">
  <?php
  get_template_part('components/_hero', null, [
    'hero_title' => __('Magalhães & Sipert Sociedade de Advogados', 'mslaw'),
    'hero_subtitle' => __('Escritório de Advocacia em Santo André - SP', 'mslaw'),
    'hero_button_text' => __('Entrar em contato', 'mslaw'),
  ]);
  ?>
  <div class="bg-light">
    <?php
    get_template_part('components/_vertical-hero', null, [
      'hero_title' => __('Quem Somos', 'mslaw'),
      'hero_text' => __('A Magalhães &amp; Sipert Sociedade de Advogados nasceu da vontade de seus sócios em atender
      seus clientes com as melhores soluções jurídicas para cada caso concreto.', 'mslaw'),
      'hero_button_text' => __('Saiba mais', 'mslaw'),
    ]);
    ?>
  </div>
  <div class="bg-quaternary">
    <?php
    get_template_part('components/_gallery');
    ?>
  </div>
  <div class="bg-light">
    <?php
    get_template_part('components/_circle-hero');
    ?>
  </div>
  <div class="bg-quaternary">
    <?php
    get_template_part('components/_cards');
    ?>
  </div>
  <div class="bg-light position-relative">
    <?php
      get_template_part('components/_posts-cards');
    ?>
  </div>
  <div class="bg-light mt-5">
    <?php get_template_part('components/_centered-hero', null, [
      'hero_title' => __('Fale Conosco', 'mslaw'),
      'hero_text'  => __('Nosso escritório conta com advogados especializados em diversas áreas do Direito para resolver seus problemas', 'mslaw'),
      'hero_button_text' => __('Entre em contato', 'mslaw')
    ]); ?>
  </div>
</div>