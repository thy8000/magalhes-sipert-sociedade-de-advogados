<?php
if (!defined('ABSPATH')) exit;

$posts_args = empty($args['posts_args']) ? false : $args['posts_args'];

if (empty($posts_args))
  return;

$wp_query = new WP_Query($posts_args);

if ($wp_query->have_posts()) {
?>
  <div class="posts-cards py-5">
    <!--<div class="posts-cards__background-shape position-absolute"></div>-->
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col-12 my-5 position-relative">
          <h2 class="text-center text-one fs-1 fw-bold lh-base">Notícias</h2>
          <h3 class="text-center text-secondary fs-5 fw-normal lh-base px-md-5 mx-md-5 px-0 mx-0">Fique por dentro das novidades e atualizações do mundo jurídico.</h2>
        </div>
        <?php
        while ($wp_query->have_posts()) {
          $wp_query->the_post();

          $post_thumbnail = '';
          $post_style_tag = '';
          $post_category = get_the_category();

          if (!empty($post_category))
            $post_category = $post_category[0]->name;

          if (has_post_thumbnail())
            $post_thumbnail = get_the_post_thumbnail_url();

          if (!empty($post_thumbnail))
            $post_style_tag = "style=\"background-image: url('{$post_thumbnail}') !important;\"";
        ?>
          <div class="col-lg-4 col-md-12 col-12 my-4 my-md-4 my-lg-0 d-flex align-items-stretch">
            <div class="card shadow-sm">
              <a href="<?php echo get_the_permalink(); ?>">
                <div class="posts-cards__thumbnail" <?php echo $post_style_tag; ?>></div>
              </a>
              <div class="card-body px-5">
                <div class="posts-cards__category my-4">
                  <?php
                  if (!empty($post_category)) {
                  ?>
                    <a href="<?php echo get_the_permalink(); ?>" role="button">
                      <div class="posts-cards__button posts-cards__category__link fw-normal lh-base">
                        <?php echo esc_html($post_category); ?>
                      </div>
                    </a>
                  <?php
                  }
                  ?>
                </div>
                <div class="posts-cards__date my-3">
                  <small class="text-muted text-secondary fw-normal lh-base">
                    <?php echo esc_html(get_the_date('d \d\e F \d\e Y')); ?>
                  </small>
                </div>
                <a href="<?php echo get_the_permalink(); ?>">
                  <h3 class="posts-cards__title text-one fs-3 fw-bold lh-base"><?php echo esc_html__(get_the_title(), 'it9_mslaws'); ?></h3>
                  <div class="card-text text-secondary">
                    <?php the_excerpt(); ?>
                  </div>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="<?php echo get_the_permalink(); ?>" type="button" class="posts-cards__button posts-cards__single__link fw-light lh-base">Saiba mais</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
<?php
}
?>