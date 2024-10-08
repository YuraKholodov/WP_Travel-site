<?php
/*
Template Name: Шаблон Главной страницы
*/
get_header();
?>

<main class="main">

  <!-- Херо секция--------------------------------- -->
  <section class="hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container hero__inner">
      <h1 class="title hero__title">
        <?php the_field('hero__title') ?>
      </h1>
      <!-- Форма бронирования похода------------- -->
      <?php do_shortcode('[form-select-location]') ?>
    </div>
  </section>


  <!-- Секция Explore=========================================== -->

  <section class="explore">
    <div class="container explore__inner">

      <div class="explore__video">
        <div class="explore__video-img explore__video-img--back">
          <img loading="lazy" src="<?php echo get_field('explore__second-img')['sizes']['large'] ?>" alt="<?php echo get_field('explore__second-img')['alt'] ?>" />
        </div>
        <div class="explore__video-img explore__video-img--front">
          <img loading="lazy" src="<?php echo get_field('explore__first-img')['sizes']['large'] ?>" alt="<?php echo get_field('explore__first-img')['alt'] ?>" />
          <div class="video__control">
            <a
              data-fslightbox
              href="<?php the_field('explore__video') ?>"
              class="explore__video-btn">
              <svg
                width="13.734300"
                height="15.173340"
                viewBox="0 0 13.7343 15.1733"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs />
                <path
                  id="Vector"
                  d="M2.74 0.24C2.46 0.08 2.14 -0.01 1.82 0C1.5 0 1.19 0.08 0.91 0.24C0.63 0.4 0.4 0.63 0.24 0.91C0.08 1.19 0 1.51 0 1.83L0 13.34C0 13.66 0.08 13.97 0.24 14.25C0.4 14.53 0.63 14.76 0.91 14.92C1.19 15.08 1.5 15.17 1.82 15.17C2.14 15.17 2.46 15.09 2.74 14.93L12.81 9.17C13.09 9.01 13.32 8.78 13.48 8.5C13.64 8.22 13.73 7.9 13.73 7.58C13.73 7.26 13.64 6.94 13.48 6.66C13.32 6.38 13.09 6.15 12.81 5.99L2.74 0.24Z"
                  fill="#1A3E3E"
                  fill-opacity="1.000000"
                  fill-rule="nonzero" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="explore__desc desc">
        <span><?php the_field('explore__subtitle') ?></span>
        <h2 class="title">
          <?php the_field('explore__title') ?>
        </h2>
        <p class="desc__text">
          <?php the_field('explore__descr') ?>
        </p>
        <button class="btn desc__btn"><?php the_field('explore__btn') ?></button>
      </div>
    </div>
  </section>

  <!-- Секция Suggestion ==========================================-->

  <section class="suggestion">
    <div class="container suggestion__inner">
      <div class="suggestion__desc desc">
        <span><?php the_field('suggestion__subtitle') ?></span>
        <h2 class="title"><?php the_field('suggestion__title') ?></h2>
        <p class="desc__text">
          <?php the_field('suggestion__descr') ?>
        </p>
        <ul class="suggestion__list">
          <?php

          // проверяем есть ли в повторителе данные
          if (have_rows('suggestion-repeater')):

            // перебираем данные
            while (have_rows('suggestion-repeater')) : the_row();

              // отображаем вложенные поля
          ?>

              <li class="suggestion__item">
                <img loading="lazy" src="<?php echo get_sub_field('img')['sizes']['thumbnail'] ?>" alt="<?php echo get_sub_field('img')['alt'] ?>" />
                <div class="suggestion__item-wrapper">

                  <h5 class="suggestion__list-title"><?php the_sub_field('title') ?></h5>
                  <p class="suggestion__list-text">
                    <?php the_sub_field('descr') ?>
                  </p>
                </div>
              </li>

          <?php
            endwhile;

          else :

          // вложенных полей не найдено

          endif;

          ?>
        </ul>
        <a href="<?php echo get_field('suggestion__btn')['url'] ?>" class="btn desc__btn"><?php echo get_field('suggestion__btn')['title'] ?></a>
      </div>

      <?php

      $images = get_field('suggestion__gallery');

      if ($images): ?>
        <ul class="suggestion__pictures">
          <?php foreach ($images as $image): ?>
            <li class="suggestion__pictures-img">
              <img loading="lazy" src="<?php echo $image['sizes']['medium'] ?>" />
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

    </div>
  </section>

  <!-- Section popular dest ==========================================-->

  <section class="popular-dest">
    <div class="container popular-dest__inner">
      <div class="popular-dest__desc desc">
        <span><?php the_field('popular__subtitle') ?></span>
        <h2 class="title"><?php the_title() ?></h2>
      </div>
      <div class="popular-dest__gallery">
        <!-- Slider main container -->
        <div class="popular-dest__slider swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">

            <?php
            // Параметры запроса
            $args = array(
              'post_type' => 'popular-dest', // Тип записи
              'posts_per_page' => 10, // Количество записей на странице
              'orderby' => 'date', // Сортировка по дате
              'order' => 'DESC', // Сортировка по убыванию
              // 'category_name' => 'news', // Пример: записи из категории "news"
            );

            // Создаем новый экземпляр WP_Query
            $query = new WP_Query($args);

            // Проверяем, есть ли записи
            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
                if (has_post_thumbnail()) {
                  $thumbnail_id = get_post_thumbnail_id();
                  $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                }

            ?>

                <div class="popular-dest__slide swiper-slide">
                  <div class="popular-dest__item">
                    <div class="popular-dest__item-img">
                      <img
                        loading="lazy"
                        src="<?php the_post_thumbnail_url('large') ?>"
                        alt="<?php echo esc_attr($alt_text) ?>" />
                    </div>
                    <div class="popular-dest__item-desc">
                      <div class="popular-desc__item-top">
                        <div>
                          <h3 class="popular-dest__item-desc-title">
                            <?php the_title() ?>
                          </h3>
                          <p class="popular-dest__item-desc-text">
                            <?php the_field('popular-dest__descr') ?>
                          </p>
                        </div>
                        <div class="popular-dest__item-price"><?php the_field('popular-dest__price') ?> $</div>
                      </div>
                      <div class="popular-dest__item-desc-text">

                        <?php add_filter('excerpt_length', function () {
                          return 30;
                        }); ?>
                        <?php the_excerpt() ?>

                      </div>

                      <a href="<?php the_permalink() ?>" class="btn popular-dest__btn">
                        <?php the_field('popular-dest__btn') ?>
                      </a>

                    </div>

                    <div class="rating popular-dest__rating">
                      <img src="<?php echo get_field('popular-dest__rating-img')['sizes']['thumbnail'] ?>" />
                      <span><?php the_field('popular-dest__rating') ?></span>
                    </div>
                  </div>
                </div>
            <?php
              }
              // Восстанавливаем оригинальные данные записи
              wp_reset_postdata();
            } else {
              echo 'Записей не найдено.';
            }
            ?>

          </div>
        </div>
      </div>
      <a href="<?php echo get_field('popular__btn')['url'] ?>" class="btn popular__btn"><?php echo get_field('popular__btn')['title'] ?></a>
    </div>
  </section>

  <!-- Section blog =================================================== -->

  <section class="blog">
    <div class="container blog__inner">
      <div class="blog__desc desc">
        <span><?php the_field('blog__subtitle') ?></span>
        <h2 class="title"><?php the_field('blog__title') ?></h2>
      </div>
      <div class="blog__body">
        <!-- Slider main container -->
        <div class="blog__slider swiper">
          <!-- Additional required wrapper -->
          <div class="blog__slider-wrapper swiper-wrapper">

            <?php
            // The Query
            $query = new WP_Query(array(
              'post_type' => 'post', // Fetch posts of type 'post'
              // 'posts_per_page' => 5, // Fetch 5 posts
              'orderby' => 'date', // Order by date
              'order' => 'DESC' // Order in descending order (newest first)
            ));

            // The Loop
            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
                if (has_post_thumbnail()) {
                  $thumbnail_id = get_post_thumbnail_id();
                  $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                }
            ?>

                <div class="blog__slide swiper-slide">
                  <div class="blog__item">
                    <div class="blog__item-img">
                      <img src="<?php the_post_thumbnail_url('medium') ?>" alt="<?php if(!empty($alt_text)){echo esc_attr($alt_text);} ?>" />
                    </div>
                    <div class="blog__item-desc">
                      <div class="blog__item-top">
                        <h3 class="blog__item-title">
                          <?php the_title(); ?>
                        </h3>
                        <p class="blog__item-text">
                          <?php add_filter('excerpt_length', function () {
                            return 10;
                          }); ?>
                          <?php the_excerpt(); ?>
                        </p>
                      </div>
                      <div class="blog__item-bottom">
                        <span class="blog__item-date"><?php echo get_the_date('d.m.Y') ?></span>
                        <a class="blog__item-link" href="<?php the_permalink() ?>"><?php the_field('blog__link') ?></a>
                      </div>
                    </div>
                  </div>
                </div>

            <?php
              }
            } else {
              // no posts found
              echo 'No posts found.';
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>

          </div>
        </div>
      </div>
      <button class="btn popular__btn"><?php the_field('blog__btn') ?></button>
    </div>
  </section>
  <section class="impressions">
    <div class="container impressions__inner">
      <div class="impressions__desc desc">
        <span>фото-отчет</span>
        <h2 class="title">Делимся впечатлениями</h2>
      </div>
      <div class="impressions__gallery">
        <!-- Slider main container -->
        <div class="impressions__slider-1 swiper">
          <!-- Additional required wrapper -->
          <div class="impressions__slider-wrapper swiper-wrapper">
            <!-- Slide-1 -->
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp1.jpeg" alt="" />
            </div>
            <!-- Slide-1 -->
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp2.jpeg" alt="" />
            </div>
            <!-- Slide-1 -->
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp3.jpeg" alt="" />
            </div>
            <!-- Slide-1 -->
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp4.jpeg" alt="" />
            </div>
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp5.jpeg" alt="" />
            </div>
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp6.jpeg" alt="" />
            </div>
            <!-- Slide-1 -->
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp4.jpeg" alt="" />
            </div>
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp5.jpeg" alt="" />
            </div>
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp6.jpeg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="impressions__gallery">
        <!-- Slider main container -->
        <div class="impressions__slider-2 swiper">
          <!-- Additional required wrapper -->
          <div class="impressions__slider-wrapper swiper-wrapper">
            <!-- Slide-1 -->
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp3.jpeg" alt="" />
            </div>
            <!-- Slide-1 -->
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp4.jpeg" alt="" />
            </div>
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp5.jpeg" alt="" />
            </div>
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp6.jpeg" alt="" />
            </div>
            <!-- Slide-1 -->
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp4.jpeg" alt="" />
            </div>
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp5.jpeg" alt="" />
            </div>
            <div class="impressions__slide swiper-slide">
              <img src="./img/content/impressions/imp6.jpeg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <button class="btn impressions__btn">Наш pinterest</button>
      <div class="mailing">
        <div class="mailing__desc desc">
          <span>актуально</span>
          <h2 class="title mailing__title">
            Получайте полезные рассылки о путешествиях
          </h2>
        </div>
        <div class="mailing__body">
          <form class="mailing__form">
            <label>
              Введите e-mail адрес
              <input class="mailing__form-input" type="email" placeholder="Email" />
            </label>
            <button class="btn mailing__btn" type="submit">
              Подписаться на новости
            </button>
          </form>
          <span>подписываясь на новости, вы автоматически соглашаетесь с
            условиями обработки персональных данных и правилами рекламных
            рассылок</span>
        </div>
      </div>
    </div>
  </section>
</main>


<?php do_shortcode('[modal-select-location]') ?>
<?php do_shortcode('[modal-contacts]') ?>


<?php
get_footer();
?>