<div class="home">
  <?php
  get_template_part('components/_hero', null, [
    'hero_title' => __('Magalhães & Sipert Sociedade de Advogados', 'mslaw'),
    'hero_subtitle' => __('Escritório de Advocacia em Santo André - SP', 'mslaw'),
    'hero_button_text' => __('Entrar em contato', 'mslaw'),
  ]);
  ?>
  <div class="bg-white">
    <?php
    get_template_part('components/_vertical-hero', null, [
      'hero_title' => __('Quem Somos', 'mslaw'),
      'hero_text' => __('Magalhães & Sipert Sociedade de Advogados nasceu da vontade de seus sócios em atender seus clientes com uma prestação de serviços que agregue valor de forma a melhorarem o resultado final, tornando-se um bom parceiro.', 'mslaw'),
      'hero_button_text' => __('Saiba mais', 'mslaw'),
    ]);
    ?>
  </div>
  <div class="bg-light">
    <?php
    get_template_part('components/_gallery');
    ?>
  </div>
  <div class="bg-white">
    <?php
      get_template_part('components/_posts-cards');
    ?>
  </div>
</div>