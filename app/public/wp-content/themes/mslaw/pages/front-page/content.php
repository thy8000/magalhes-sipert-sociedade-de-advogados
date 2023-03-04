<?php
$posts_args = [
  'posts_per_page' => 3,
  'post_type' => 'post',
  'orderby' => 'date',
  'order' => 'DESC',
];

$vertical_hero_list = get_field('vertical_hero_list');
?>
<div class="front-page">
  <?php
  get_template_part('components/_hero');

  if (!empty($vertical_hero_list)) {
  ?>
    <div class="bg-light">
      <?php
      foreach ($vertical_hero_list as $vertical_hero) {
        get_template_part('components/_vertical-hero', null, [
          'hero_image' => $vertical_hero['image']['url'] ?? '',
          'hero_title' => $vertical_hero['title'] ?? '',
          'hero_text' => $vertical_hero['description'] ?? '',
          'hero_button_text' => __('Entre em Contato', 'mslaw'),
          'is_inverted' => $vertical_hero['is_inverted'] ?? false,
        ]);
      }
      ?>
    </div>
  <?php
  }
  ?>

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