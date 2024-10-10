<?php
/*
Template Name: Single Popular dest
*/

get_header();
?>

<?php // Получаем ID текущего открытого поста
$post_id = get_the_ID();

// Получаем значение кастомного поля с ключом 'my_custom_field'
$descr = get_post_meta($post_id, 'popular-dest__descr', true);
$price = get_post_meta($post_id, 'popular-dest__price', true);
?>
<section class="popular-dest" style="background-color: #21899733;">
  <div class="container popular-dest__inner">
    <div class="popular-dest__desc desc">
      <h2 class="title"><?php the_title() ?></h2>

      <?php if ($descr) { ?>
        <p><?php echo esc_html($descr); ?></p>
      <?php } ?>

      <?php if ($price) { ?>
        <p><?php echo esc_html($price) . '$'; ?></p>
      <?php } ?>

      <?php the_content() ?>

    </div>
  </div>
</section>

<?php
do_shortcode('[modal-select-location]');
do_shortcode('[modal-contacts]');
get_footer();
