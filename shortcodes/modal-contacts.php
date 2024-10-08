<div class="modal-contacts">
  <div class="modal__window">
    <h2 class="contact__title title"><?php the_field('contact-form__title', 'option') ?></h2>
    <p class="contact__text">
    <?php the_field('contact-form__subtitle', 'option') ?>
    </p>
    <?php echo do_shortcode('[contact-form-7 id="8da2b2f" title="Контактная форма (Имя, Телефон)" html_class="contact__form"]') ?>
  </div>
</div>