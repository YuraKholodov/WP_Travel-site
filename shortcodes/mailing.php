<section class="mailing">
  <div class="mailing__desc desc">
    <span><?php the_field('mailing__subtitle', 'option') ?></span>
    <h2 class="title mailing__title">
      <?php the_field('mailing__title', 'option') ?>
    </h2>
  </div>
  <div class="mailing__body">

    <?php echo do_shortcode('[contact-form-7 id="a4484d2" title="Форма рассылки писем" html_class="mailing__form"]', 'option') ?>

    <span><?php the_field('mailing__convention', 'option') ?></span>
  </div>
</section>