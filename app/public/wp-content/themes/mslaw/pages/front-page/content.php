<?php
$posts_args = [
  'posts_per_page' => 3,
  'post_type' => 'post',
  'orderby' => 'date',
  'order' => 'DESC',
];
?>
<div class="front-page">
  <?php
  get_template_part('components/_hero');
  ?>
  <div class="bg-light">
    <?php
    get_template_part('components/_vertical-hero', null, [
      'hero_image' => get_home_url() . '/wp-content/uploads/2022/10/sobre-nos-600x600-1.jpg',
      'hero_title' => __('Quem Somos', 'mslaw'),
      'hero_text' => __('A Magalhães & Sipert Sociedade de Advogados nasceu da vontade de seus sócios em atender
    seus clientes com as melhores soluções jurídicas para cada caso concreto.', 'mslaw'),
      'hero_button_text' => __('Entre em Contato', 'mslaw'),
      'is_inverted' => false
    ]);
    get_template_part('components/_vertical-hero', null, [
      'hero_image' => get_home_url() . '/wp-content/uploads/2022/10/missao-valores-600x600-1.jpg',
      'hero_title' => __('Nossos Valores', 'mslaw'),
      'hero_text' => __('Além de apostar na parceria que se constrói diariamente junto ao cliente, na empatia e no
          comprometimento, um dos pilares do escritório é a excelência proveniente da transparência
          na condução dos trabalhos, da dedicação e esforço de trabalho.', 'mslaw'),
      'hero_button_text' => __('Entre em Contato', 'mslaw'),
      'is_inverted' => true
    ]);
    ?>
  </div>
  <div class="bg-quaternary">
    <?php
    get_template_part('components/_gallery', null, [
      'title' => __('Áreas de Atuação', 'it9_mslaws'),
      'description' => __('Atuamos em diversas áreas do direito. Nós podemos te ajudar a resolver o seu problema jurídico em diversos setores e situações', 'it9_mslaws'),
    ]);
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
    get_template_part('components/_posts-cards', null, [
      'posts_args' => $posts_args,
    ]);
    ?>
  </div>
  <div class="bg-light mt-5">
    <?php get_template_part('components/_centered-hero'); ?>
  </div>
</div>