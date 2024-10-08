<form class="form hero__form">
  <!-- Поле выбора направления похода------------- -->
  <div class="select__wrapper">
    <label class="hero__form-label">
      <select name="location" class="form__input hero__form-input">
        <option value="none">
          <?php the_field('form-location__btn', 'option') ?>
        </option>

        <?php
        if (have_rows('form-location__repeater', 'option')):
          while (have_rows('form-location__repeater', 'option')) : the_row(); ?>

            <option value="<?php the_sub_field('location', 'option') ?>"><?php the_sub_field('location', 'option') ?></option>

        <?php
          endwhile;

        else :
          echo 'Поля не заданы!';
        endif;
        ?>

      </select>
      <span><?php the_field('form-location__btn-hint', 'option') ?></span>
    </label>
    <img
      src="./img/icons/arrow.svg"
      alt=""
      class="select__wrapper-img" />
  </div>
  <!-- Выбор даты похода--------------------------- -->
  <div class="select__wrapper">
    <!-- Кнопка выбора дат-------- -->
    <div class="select__date-btn">
      <p><?php the_field('form-location__date-btn', 'option') ?></p>
      <img
        src="./img/icons/date.svg"
        alt=""
        class="select__wrapper-img" />
    </div>

    <span><?php the_field('form-location__date-hint', 'option') ?></span>

    <!-- Выбор начала похода -->
    <div class="select__date-input">
      <div class="input__date-wrapper">
        <label class="hero__form-label">

          <p><?php the_field('form-location__start-date', 'option') ?></p>

          <input type="date" class="form__input-date" />
        </label>
        <!-- Выбор окончания похода -->
        <label class="hero__form-label">

          <p><?php the_field('form-location__finish-date', 'option') ?></p>

          <input type="date" class="form__input-date" />
        </label>
      </div>
    </div>
  </div>
  <div class="select__date-input--mobile">
    <div class="input__date-wrapper">
      <label class="hero__form-label">
        <p><?php the_field('form-location__start-date', 'option') ?></p>
        <input type="date" class="form__input-date" />
      </label>
      <!-- Выбор окончания похода -->
      <label class="hero__form-label">
        <p><?php the_field('form-location__finish-date', 'option') ?></p>
        <input type="date" class="form__input-date" />
      </label>
    </div>
  </div>
  <!-- Кол-во участников похода------------- -->
  <div class="select__wrapper">
    <label class="hero__form-label">
      <select
        name="participants_count"
        class="form__input hero__form-input">

        <option value="none"><?php the_field('form-location__btn-participants', 'option') ?></option>

        <?php
        if (have_rows('form-location__groups-repeater', 'option')):
          while (have_rows('form-location__groups-repeater', 'option')) : the_row(); ?>


            <option value="<?php echo get_sub_field('groups-repeater__count', 'option')['value'] ?>"><?php echo get_sub_field('groups-repeater__count', 'option')['label'] ?></option>

        <?php
          endwhile;

        else :
          echo 'Поля не заданы!';
        endif;
        ?>

      </select>
      <span><?php the_field('form-location__btn-participants-hint', 'option') ?></span>
    </label>
    <img
      src="./img/icons/arrow.svg"
      alt=""
      class="select__wrapper-img" />
  </div>
  <button class="btn header__form-btn" type="submit">
    <?php the_field('form-location__btn-find-program', 'option') ?>
  </button>
</form>
<button class="btn header__form-btn header__form-btn-mobile">
  <?php the_field('form-location__btn-find-program', 'option') ?>
</button>