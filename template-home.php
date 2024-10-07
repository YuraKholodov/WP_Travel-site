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
    </div>
  </section>

  <!-- Секция Explore=========================================== -->

  <section class="explore">
    <div class="container explore__inner">
      <div class="explore__video">
        <div class="explore__video-img explore__video-img--back">
          <img src="<?php echo get_field('explore__second-img')['url'] ?>" alt="<?php echo get_field('explore__second-img')['alt'] ?>" />
        </div>
        <div class="explore__video-img explore__video-img--front">
          <img src="<?php echo get_field('explore__first-img')['url'] ?>" alt="<?php echo get_field('explore__first-img')['alt'] ?>" />
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
        <span>наше предложение</span>
        <h2 class="title">Лучшие программы для тебя</h2>
        <p class="desc__text">
          Его корни уходят в один фрагмент классической латыни 45 года
          н.э., то есть более двух тысячелетий назад. Ричард МакКлинток,
          профессор латыни из колледжа.
        </p>
        <ul class="suggestion__list">
          <li class="suggestion__item">
            <img src="./img/icons/suggestion/sug-2.png" alt="" />
            <div class="suggestion__item-wrapper">
              <h5 class="suggestion__list-title">Опытный гид</h5>
              <p class="suggestion__list-text">
                Для современного мира базовый вектор развития предполагает
                независимые способы реализации соответствующих условий
                активизации.
              </p>
            </div>
          </li>
          <li class="suggestion__item">
            <img src="./img/icons/suggestion/sug-3.png" alt="" />
            <div class="suggestion__item-wrapper">
              <h5 class="suggestion__list-title">Безопасный поход</h5>
              <p class="suggestion__list-text">
                Для современного мира базовый вектор развития предполагает
                независимые способы реализации соответствующих условий
                активизации.
              </p>
            </div>
          </li>
          <li class="suggestion__item">
            <img src="./img/icons/suggestion/sug-1.png" alt="" />
            <div class="suggestion__item-wrapper">
              <h5 class="suggestion__list-title">Лояльные цены</h5>
              <p class="suggestion__list-text">
                Для современного мира базовый вектор развития предполагает
                независимые способы реализации соответствующих условий
                активизации.
              </p>
            </div>
          </li>
        </ul>
        <button class="btn desc__btn">Стоимость программ</button>
      </div>
      <div class="suggestion__pictures">
        <div class="suggestion__pictures-img">
          <img src="./img/content/suggestion/sug1.jpeg" alt="" />
        </div>
        <div class="suggestion__pictures-img">
          <img src="./img/content/suggestion/sug2.jpeg" alt="" />
        </div>
        <div class="suggestion__pictures-img">
          <img src="./img/content/suggestion/sug3.jpeg" alt="" />
        </div>
        <div class="suggestion__pictures-img">
          <img src="./img/content/suggestion/sug4.jpeg" alt="" />
        </div>
      </div>
    </div>
  </section>
  
  <section class="popular-dest">
    <div class="container popular-dest__inner">
      <div class="popular-dest__desc desc">
        <span>по версии отдыхающих</span>
        <h2 class="title">Популярные направления</h2>
      </div>
      <div class="popular-dest__gallery">
        <!-- Slider main container -->
        <div class="popular-dest__slider swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slide-1 -->
            <div class="popular-dest__slide swiper-slide">
              <div class="popular-dest__item">
                <div class="popular-dest__item-img">
                  <img
                    src="./img/content/popular-dest/dest1.jpeg"
                    alt="" />
                </div>
                <div class="popular-dest__item-desc">
                  <div class="popular-desc__item-top">
                    <div>
                      <h3 class="popular-dest__item-desc-title">
                        Озеро возле гор
                      </h3>
                      <p class="popular-dest__item-desc-text">
                        романтическое приключение
                      </p>
                    </div>
                    <div class="popular-dest__item-price">480 $</div>
                  </div>
                  <p class="popular-dest__item-desc-text">
                    Его корни уходят в один фрагмент классической латыни
                    45 года н.э., то есть более двух тысячелетий назад.
                    Ричард МакКлинток, профессор латыни из колледжа
                    Hampden-Sydney, штат Вирджиния, взял одно из самых
                    странных слов в Lorem Ipsum, "consectetur"и занялся
                    его поисками в классической латинской литературе.
                  </p>
                  <button class="btn popular-dest__btn">
                    Программа тура
                  </button>
                </div>
                <div class="rating popular-dest__rating">
                  <img src="./img/icons/star.png" alt="" />
                  <span>4.9</span>
                </div>
              </div>
            </div>
            <!-- Slide-2 -->
            <div class="popular-dest__slide swiper-slide">
              <div class="popular-dest__item">
                <div class="popular-dest__item-img">
                  <img
                    src="./img/content/popular-dest/dest2.jpeg"
                    alt="" />
                </div>
                <div class="popular-dest__item-desc">
                  <div class="popular-desc__item-top">
                    <div>
                      <h3 class="popular-dest__item-desc-title">
                        Ночь в горах
                      </h3>
                      <p class="popular-dest__item-desc-text">
                        в компании друзей
                      </p>
                    </div>
                    <div class="popular-dest__item-price">480 $</div>
                  </div>
                  <p class="popular-dest__item-desc-text">
                    Его корни уходят в один фрагмент классической латыни
                    45 года н.э., то есть более двух тысячелетий назад.
                    Ричард МакКлинток, профессор латыни из колледжа
                    Hampden-Sydney, штат Вирджиния, взял одно из самых
                    странных слов в Lorem Ipsum, "consectetur"и занялся
                    его поисками в классической латинской литературе.
                  </p>
                  <button class="btn popular-dest__btn">
                    Программа тура
                  </button>
                </div>
                <div class="rating popular-dest__rating">
                  <img src="./img/icons/star.png" alt="" />
                  <span>4.9</span>
                </div>
              </div>
            </div>
            <!-- Slide-3 -->
            <div class="popular-dest__slide swiper-slide">
              <div class="popular-dest__item">
                <div class="popular-dest__item-img">
                  <img
                    src="./img/content/popular-dest/dest3.jpeg"
                    alt="" />
                </div>
                <div class="popular-dest__item-desc">
                  <div class="popular-desc__item-top">
                    <div>
                      <h3 class="popular-dest__item-desc-title">
                        Йога в горах
                      </h3>
                      <p class="popular-dest__item-desc-text">
                        для тех, кто забоится о себе
                      </p>
                    </div>
                    <div class="popular-dest__item-price">230 $</div>
                  </div>
                  <p class="popular-dest__item-desc-text">
                    Его корни уходят в один фрагмент классической латыни
                    45 года н.э., то есть более двух тысячелетий назад.
                    Ричард МакКлинток, профессор латыни из колледжа
                    Hampden-Sydney, штат Вирджиния, взял одно из самых
                    странных слов в Lorem Ipsum, "consectetur"и занялся
                    его поисками в классической латинской литературе.
                  </p>
                  <button class="btn popular-dest__btn">
                    Программа тура
                  </button>
                </div>
                <div class="rating popular-dest__rating">
                  <img src="./img/icons/star.png" alt="" />
                  <span>4.9</span>
                </div>
              </div>
            </div>
            <!-- Slide-1 -->
            <div class="popular-dest__slide swiper-slide">
              <div class="popular-dest__item">
                <div class="popular-dest__item-img">
                  <img
                    src="./img/content/popular-dest/dest1.jpeg"
                    alt="" />
                </div>
                <div class="popular-dest__item-desc">
                  <div class="popular-desc__item-top">
                    <div>
                      <h3 class="popular-dest__item-desc-title">
                        Озеро возле гор
                      </h3>
                      <p class="popular-dest__item-desc-text">
                        романтическое приключение
                      </p>
                    </div>
                    <div class="popular-dest__item-price">480 $</div>
                  </div>
                  <p class="popular-dest__item-desc-text">
                    Его корни уходят в один фрагмент классической латыни
                    45 года н.э., то есть более двух тысячелетий назад.
                    Ричард МакКлинток, профессор латыни из колледжа
                    Hampden-Sydney, штат Вирджиния, взял одно из самых
                    странных слов в Lorem Ipsum, "consectetur"и занялся
                    его поисками в классической латинской литературе.
                  </p>
                  <button class="btn popular-dest__btn">
                    Программа тура
                  </button>
                </div>
                <div class="rating popular-dest__rating">
                  <img src="./img/icons/star.png" alt="" />
                  <span>4.9</span>
                </div>
              </div>
            </div>
            <!-- Slide-1 -->
            <div class="popular-dest__slide swiper-slide">
              <div class="popular-dest__item">
                <div class="popular-dest__item-img">
                  <img
                    src="./img/content/popular-dest/dest1.jpeg"
                    alt="" />
                </div>
                <div class="popular-dest__item-desc">
                  <div class="popular-desc__item-top">
                    <div>
                      <h3 class="popular-dest__item-desc-title">
                        Озеро возле гор
                      </h3>
                      <p class="popular-dest__item-desc-text">
                        романтическое приключение
                      </p>
                    </div>
                    <div class="popular-dest__item-price">480 $</div>
                  </div>
                  <p class="popular-dest__item-desc-text">
                    Его корни уходят в один фрагмент классической латыни
                    45 года н.э., то есть более двух тысячелетий назад.
                    Ричард МакКлинток, профессор латыни из колледжа
                    Hampden-Sydney, штат Вирджиния, взял одно из самых
                    странных слов в Lorem Ipsum, "consectetur"и занялся
                    его поисками в классической латинской литературе.
                  </p>
                  <button class="btn popular-dest__btn">
                    Программа тура
                  </button>
                </div>
                <div class="rating popular-dest__rating">
                  <img src="./img/icons/star.png" alt="" />
                  <span>4.9</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="btn popular__btn">Рейтинг направлений</button>
    </div>
  </section>
  <section class="blog">
    <div class="container blog__inner">
      <div class="blog__desc desc">
        <span>делимся впечатлениями</span>
        <h2 class="title">Блог о путешествиях</h2>
      </div>
      <div class="blog__body">
        <!-- Slider main container -->
        <div class="blog__slider swiper">
          <!-- Additional required wrapper -->
          <div class="blog__slider-wrapper swiper-wrapper">
            <!-- Slide-1 -->
            <div class="blog__slide swiper-slide">
              <div class="blog__item">
                <div class="blog__item-img">
                  <img src="./img/content/blog/blog4.jpeg" alt="" />
                </div>
                <div class="blog__item-desc">
                  <div class="blog__item-top">
                    <h3 class="blog__item-title">
                      Красивая Италя, какая она в реальности?
                    </h3>
                    <p class="blog__item-text">
                      Для современного мира базовый вектор развития
                      предполагает независимые способы реализации
                      соответствующих условий активизации.
                    </p>
                  </div>
                  <div class="blog__item-bottom">
                    <span class="blog__item-date">01/04/2023</span>
                    <a class="blog__item-link" href="#">читать статью</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-2 -->
            <div class="blog__slide swiper-slide">
              <div class="blog__item">
                <div class="blog__item-img">
                  <img src="./img/content/blog/blog1.jpeg" alt="" />
                </div>
                <div class="blog__item-desc">
                  <div class="blog__item-top">
                    <h3 class="blog__item-title">
                      Долой сомнения! Весь мир открыт для вас!
                    </h3>
                    <p class="blog__item-text">
                      Для современного мира базовый вектор развития
                      предполагает независимые способы реализации
                      соответствующих условий активизации.
                    </p>
                  </div>
                  <div class="blog__item-bottom">
                    <span class="blog__item-date">01/04/2023</span>
                    <a class="blog__item-link" href="#">читать статью</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-3 -->
            <div class="blog__slide swiper-slide">
              <div class="blog__item">
                <div class="blog__item-img">
                  <img src="./img/content/blog/blog2.jpeg" alt="" />
                </div>
                <div class="blog__item-desc">
                  <div class="blog__item-top">
                    <h3 class="blog__item-title">
                      Как подготовиться к путешествию в одиночку?
                    </h3>
                    <p class="blog__item-text">
                      Для современного мира базовый вектор развития
                      предполагает независимые способы реализации
                      соответствующих условий активизации.
                    </p>
                  </div>
                  <div class="blog__item-bottom">
                    <span class="blog__item-date">01/04/2023</span>
                    <a class="blog__item-link" href="#">читать статью</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-4 -->
            <div class="blog__slide swiper-slide">
              <div class="blog__item">
                <div class="blog__item-img">
                  <img src="./img/content/blog/blog3.jpeg" alt="" />
                </div>
                <div class="blog__item-desc">
                  <div class="blog__item-top">
                    <h3 class="blog__item-title">Индия ... летим?</h3>
                    <p class="blog__item-text">
                      Для современного мира базовый вектор развития
                      предполагает независимые способы реализации
                      соответствующих условий активизации.
                    </p>
                  </div>
                  <div class="blog__item-bottom">
                    <span class="blog__item-date">01/04/2023</span>
                    <a class="blog__item-link" href="#">читать статью</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-5 -->
            <div class="blog__slide swiper-slide">
              <div class="blog__item">
                <div class="blog__item-img">
                  <img src="./img/content/blog/blog4.jpeg" alt="" />
                </div>
                <div class="blog__item-desc">
                  <div class="blog__item-top">
                    <h3 class="blog__item-title">
                      Красивая Италя, какая она в реальности?
                    </h3>
                    <p class="blog__item-text">
                      Для современного мира базовый вектор развития
                      предполагает независимые способы реализации
                      соответствующих условий активизации.
                    </p>
                  </div>
                  <div class="blog__item-bottom">
                    <span class="blog__item-date">01/04/2023</span>
                    <a class="blog__item-link" href="#">читать статью</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-6 -->
            <div class="blog__slide swiper-slide">
              <div class="blog__item">
                <div class="blog__item-img">
                  <img src="./img/content/blog/blog4.jpeg" alt="" />
                </div>
                <div class="blog__item-desc">
                  <div class="blog__item-top">
                    <h3 class="blog__item-title">
                      Красивая Италя, какая она в реальности?
                    </h3>
                    <p class="blog__item-text">
                      Для современного мира базовый вектор развития
                      предполагает независимые способы реализации
                      соответствующих условий активизации.
                    </p>
                  </div>
                  <div class="blog__item-bottom">
                    <span class="blog__item-date">01/04/2023</span>
                    <a class="blog__item-link" href="#">читать статью</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="btn popular__btn">Другие материалы</button>
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