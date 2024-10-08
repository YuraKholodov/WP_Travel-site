<?php
get_header();
?>

<section class="blog">
  <div class="container blog__inner">
    <div class="blog__desc desc">
      <h2 class="title"><?php the_title() ?></h2>
      <?php
      if (has_post_thumbnail()) { ?>

        <img width="500px" height="500px" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

      <?php }
      ?>
      <?php the_content() ?>
    </div>
  </div>
</section>

<?php
do_shortcode('[modal-select-location]');
do_shortcode('[modal-contacts]');
get_footer();
