<footer class="footer">
  <section class="footer__top">
    <div class="container footer__top-inner">
      <div class="footer__col-about">
        <h4 class="footer__top-title"><?php the_field('footer__about-title', 'option') ?></h4>
        <p class="footer__top-text">
          <?php the_field('footer__about-descr', 'option') ?>
        </p>
        <address class="footer__top-address">
          <?php

          // проверяем есть ли в повторителе данные
          if (have_rows('footer__address-repeater', 'option')):

            // перебираем данные
            while (have_rows('footer__address-repeater', 'option')) : the_row();

              // отображаем вложенные поля
          ?>

              <a href="<?php echo get_sub_field('link')['url'] ?>"><?php echo get_sub_field('link')['title'] ?></a>

          <?php
            endwhile;

          else :

          // вложенных полей не найдено

          endif;

          ?>

        </address>
        <ul class="social__list">

          <li class="social__item" <?php if (!get_field('footer__isPinterest', 'option')) echo "style='display: none;'" ?>>
            <a class="social__link" href="<?php the_field('footer__pinterest-link', 'option') ?>">
              <svg
                width="32.000000"
                height="32.000000"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs>
                  <clipPath id="clip1_148">
                    <rect
                      id="mdi:pinterest"
                      rx="-0.500000"
                      width="31.000000"
                      height="31.000000"
                      transform="translate(0.500000 0.500000)"
                      fill="white"
                      fill-opacity="0" />
                  </clipPath>
                </defs>
                <rect
                  id="mdi:pinterest"
                  rx="-0.500000"
                  width="31.000000"
                  height="31.000000"
                  transform="translate(0.500000 0.500000)"
                  fill="#FFFFFF"
                  fill-opacity="0" />
                <g clip-path="url(#clip1_148)">
                  <path
                    id="Vector"
                    d="M12.05 28.71C13.33 29.1 14.62 29.33 16 29.33C19.53 29.33 22.92 27.92 25.42 25.42C27.92 22.92 29.33 19.53 29.33 15.99C29.33 14.24 28.98 12.51 28.31 10.89C27.64 9.27 26.66 7.8 25.42 6.57C24.19 5.33 22.72 4.35 21.1 3.68C19.48 3.01 17.75 2.66 16 2.66C14.24 2.66 12.51 3.01 10.89 3.68C9.27 4.35 7.81 5.33 6.57 6.57C4.07 9.07 2.66 12.46 2.66 15.99C2.66 21.66 6.22 26.53 11.25 28.45C11.13 27.41 11.01 25.69 11.25 24.5L12.78 17.91C12.78 17.91 12.4 17.14 12.4 15.91C12.4 14.07 13.54 12.7 14.85 12.7C16 12.7 16.53 13.54 16.53 14.62C16.53 15.77 15.77 17.41 15.38 18.98C15.16 20.29 16.08 21.43 17.41 21.43C19.78 21.43 21.62 18.9 21.62 15.33C21.62 12.13 19.33 9.94 16.04 9.94C12.28 9.94 10.06 12.74 10.06 15.69C10.06 16.83 10.44 17.99 11.05 18.75C11.17 18.83 11.17 18.94 11.13 19.14L10.74 20.59C10.74 20.82 10.6 20.9 10.37 20.74C8.66 19.99 7.67 17.57 7.67 15.61C7.67 11.39 10.66 7.57 16.42 7.57C21.01 7.57 24.58 10.86 24.58 15.23C24.58 19.82 21.74 23.5 17.68 23.5C16.38 23.5 15.12 22.81 14.66 21.99L13.77 25.15C13.46 26.3 12.62 27.83 12.05 28.75L12.05 28.71Z"
                    fill="#FFFFFF"
                    fill-opacity="1.000000"
                    fill-rule="nonzero" />
                </g>
              </svg>
            </a>
          </li>
          <li class="social__item" <?php if (!get_field('footer__isSkype', 'option')) echo "style='display: none;'" ?>>
            <a class="social__link" href="<?php the_field('footer__skype-link', 'option') ?>">
              <svg
                width="32.000000"
                height="32.000000"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs>
                  <clipPath id="clip1_150">
                    <rect
                      id="mdi:skype"
                      rx="-0.500000"
                      width="31.000000"
                      height="31.000000"
                      transform="translate(0.500000 0.500000)"
                      fill="white"
                      fill-opacity="0" />
                  </clipPath>
                </defs>
                <rect
                  id="mdi:skype"
                  rx="-0.500000"
                  width="31.000000"
                  height="31.000000"
                  transform="translate(0.500000 0.500000)"
                  fill="#FFFFFF"
                  fill-opacity="0" />
                <g clip-path="url(#clip1_150)">
                  <path
                    id="Vector"
                    d="M24 8C26.76 10.72 27.8 14.52 27.14 18.06C27.69 19.02 28 20.14 28 21.33C28 23.1 27.29 24.79 26.04 26.04C24.79 27.29 23.1 28 21.33 28C20.14 28 19.02 27.69 18.06 27.14C14.52 27.8 10.72 26.76 8 24C5.24 21.28 4.19 17.48 4.85 13.93C4.3 12.97 4 11.85 4 10.66C4 8.89 4.7 7.2 5.95 5.95C7.2 4.7 8.89 4 10.66 4C11.85 4 12.97 4.3 13.93 4.85C17.48 4.19 21.28 5.23 24 8ZM16.05 22.87C19.87 22.87 21.78 21.04 21.78 18.56C21.78 16.97 21.04 15.28 18.14 14.62L15.49 14.04C14.48 13.81 13.33 13.5 13.33 12.56C13.33 11.6 14.13 10.93 15.6 10.93C18.57 10.93 18.29 12.97 19.77 12.97C20.54 12.97 21.21 12.52 21.21 11.73C21.21 9.9 18.29 8.53 15.81 8.53C13.13 8.53 10.26 9.67 10.26 12.72C10.26 14.18 10.78 15.74 13.66 16.46L17.25 17.37C18.33 17.63 18.6 18.24 18.6 18.79C18.6 19.7 17.69 20.6 16.05 20.6C12.84 20.6 13.28 18.13 11.56 18.13C10.78 18.13 10.22 18.66 10.22 19.42C10.22 20.9 12 22.87 16.05 22.87Z"
                    fill="#FFFFFF"
                    fill-opacity="1.000000"
                    fill-rule="nonzero" />
                </g>
              </svg>
            </a>
          </li>
          <li class="social__item" <?php if (!get_field('footer__isVK', 'option')) echo "style='display: none;'" ?>>
            <a class="social__link" href="<?php the_field('footer__vk-link', 'option') ?>">
              <svg
                width="32.000000"
                height="32.000000"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs>
                  <clipPath id="clip1_146">
                    <rect
                      id="entypo-social:vk-with-circle"
                      rx="-0.500000"
                      width="31.000000"
                      height="31.000000"
                      transform="translate(0.500000 0.500000)"
                      fill="white"
                      fill-opacity="0" />
                  </clipPath>
                </defs>
                <rect
                  id="entypo-social:vk-with-circle"
                  rx="-0.500000"
                  width="31.000000"
                  height="31.000000"
                  transform="translate(0.500000 0.500000)"
                  fill="#FFFFFF"
                  fill-opacity="0" />
                <g clip-path="url(#clip1_146)">
                  <path
                    id="Vector"
                    d="M16.36 3C8.98 3 3 8.98 3 16.36C3 23.73 8.98 29.72 16.36 29.72C23.73 29.72 29.72 23.73 29.72 16.36C29.72 8.98 23.73 3 16.36 3ZM21.49 18.07C21.49 18.07 22.67 19.23 22.97 19.78C22.97 19.79 22.98 19.8 22.98 19.8C23.1 20 23.13 20.16 23.07 20.27C22.97 20.46 22.64 20.56 22.52 20.57L20.44 20.57C20.29 20.57 19.99 20.53 19.62 20.28C19.34 20.08 19.06 19.75 18.79 19.44C18.38 18.97 18.03 18.56 17.68 18.56C17.63 18.56 17.59 18.57 17.55 18.58C17.28 18.67 16.94 19.05 16.94 20.07C16.94 20.38 16.69 20.57 16.51 20.57L15.55 20.57C15.23 20.57 13.53 20.45 12.03 18.87C10.19 16.93 8.53 13.03 8.52 13C8.41 12.74 8.63 12.61 8.87 12.61L10.97 12.61C11.25 12.61 11.35 12.78 11.41 12.93C11.49 13.11 11.76 13.81 12.21 14.6C12.95 15.89 13.4 16.41 13.76 16.41C13.82 16.41 13.89 16.4 13.95 16.36C14.42 16.1 14.33 14.42 14.31 14.08C14.31 14.01 14.31 13.33 14.07 13C13.9 12.76 13.6 12.67 13.43 12.64C13.5 12.54 13.59 12.46 13.7 12.4C14.03 12.24 14.61 12.22 15.18 12.22L15.51 12.22C16.13 12.22 16.29 12.26 16.52 12.32C16.98 12.43 16.99 12.73 16.95 13.74C16.94 14.03 16.92 14.36 16.92 14.74C16.92 14.82 16.92 14.91 16.92 15.01C16.91 15.52 16.89 16.11 17.25 16.35C17.3 16.38 17.36 16.4 17.41 16.4C17.54 16.4 17.92 16.4 18.95 14.63C19.27 14.05 19.55 13.46 19.78 12.85C19.8 12.82 19.86 12.7 19.94 12.66C19.99 12.63 20.05 12.62 20.11 12.62L22.59 12.62C22.86 12.62 23.04 12.66 23.08 12.77C23.14 12.93 23.07 13.44 21.93 14.97L21.43 15.64C20.4 16.98 20.4 17.05 21.49 18.07Z"
                    fill="#FFFFFF"
                    fill-opacity="1.000000"
                    fill-rule="nonzero" />
                </g>
              </svg>
            </a>
          </li>
          <li class="social__item" <?php if (!get_field('footer__isTelegram', 'option')) echo "style='display: none;'" ?>>
            <a class="social__link" href="<?php the_field('footer__telegram-link', 'option') ?>">
              <svg
                width="32.000000"
                height="32.000000"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs>
                  <clipPath id="clip1_144">
                    <rect
                      id="ic:baseline-telegram"
                      rx="-0.500000"
                      width="31.000000"
                      height="31.000000"
                      transform="translate(0.500000 0.500000)"
                      fill="white"
                      fill-opacity="0" />
                  </clipPath>
                </defs>
                <rect
                  id="ic:baseline-telegram"
                  rx="-0.500000"
                  width="31.000000"
                  height="31.000000"
                  transform="translate(0.500000 0.500000)"
                  fill="#FFFFFF"
                  fill-opacity="0" />
                <g clip-path="url(#clip1_144)">
                  <path
                    id="Vector"
                    d="M16 2.66C8.63 2.66 2.66 8.63 2.66 15.99C2.66 23.35 8.63 29.33 16 29.33C23.36 29.33 29.33 23.35 29.33 15.99C29.33 8.63 23.36 2.66 16 2.66ZM22.18 11.73C21.98 13.83 21.12 18.95 20.68 21.31C20.49 22.31 20.12 22.65 19.77 22.69C19 22.75 18.41 22.18 17.66 21.69C16.49 20.91 15.82 20.43 14.69 19.69C13.37 18.82 14.22 18.34 14.98 17.57C15.18 17.37 18.6 14.26 18.66 13.98C18.67 13.94 18.67 13.9 18.66 13.85C18.65 13.81 18.62 13.77 18.6 13.74C18.52 13.67 18.41 13.7 18.32 13.71C18.2 13.74 16.33 14.98 12.69 17.43C12.16 17.79 11.68 17.98 11.25 17.97C10.77 17.95 9.86 17.7 9.18 17.47C8.34 17.21 7.69 17.06 7.74 16.59C7.77 16.35 8.1 16.11 8.73 15.86C12.62 14.17 15.21 13.05 16.5 12.51C20.21 10.97 20.97 10.7 21.48 10.7C21.58 10.7 21.84 10.73 22 10.86C22.13 10.97 22.17 11.11 22.18 11.22C22.17 11.3 22.2 11.54 22.18 11.73Z"
                    fill="#FFFFFF"
                    fill-opacity="1.000000"
                    fill-rule="nonzero" />
                </g>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="footer__col-nav-services">
        <h4 class="footer__top-title"><?php the_field('footer__our-services-title', 'option') ?></h4>
        <nav class="footer__nav">
          <ul class="footer__nav-list">
            <?php

            // проверяем есть ли в повторителе данные
            if (have_rows('footer__our-services-repeater', 'option')):

              // перебираем данные
              while (have_rows('footer__our-services-repeater', 'option')) : the_row();

                // отображаем вложенные поля
            ?>

                <li class="footer__nav-item">
                  <svg
                    width="5.874908"
                    height="10.000000"
                    viewBox="0 0 5.87491 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>Created with Pixso.</desc>
                    <defs />
                    <path
                      id="Vector"
                      d="M5.71 4.6L1.26 0.15C1.16 0.05 1.02 0 0.87 0C0.73 0 0.59 0.05 0.49 0.15L0.16 0.48C-0.05 0.7 -0.05 1.04 0.16 1.26L3.9 4.99L0.15 8.73C0.05 8.84 0 8.97 0 9.12C0 9.27 0.05 9.4 0.15 9.51L0.48 9.84C0.59 9.94 0.72 10 0.87 10C1.02 10 1.15 9.94 1.26 9.84L5.71 5.38C5.81 5.28 5.87 5.14 5.87 4.99C5.87 4.85 5.81 4.71 5.71 4.6Z"
                      fill="#FDFDFD"
                      fill-opacity="1.000000"
                      fill-rule="nonzero" />
                  </svg>
                  <a href="<?php echo get_sub_field('link')['url'] ?>" class="footer__nav-link nav__link"><?php echo get_sub_field('link')['title'] ?>
                    <button class="btn btn--new" <?php if (!get_sub_field('is-new')) echo 'style="display: none;"' ?>>new</button>
                  </a>

                </li>

            <?php
              endwhile;

            else :

            // вложенных полей не найдено

            endif;

            ?>

          </ul>
        </nav>
      </div>
      <div class="footer__col-nav-important">
        <h4 class="footer__top-title"><?php the_field('footer__important-title', 'option') ?></h4>
        <nav class="footer__nav">
          <ul class="footer__nav-list">
            <?php

            // проверяем есть ли в повторителе данные
            if (have_rows('footer__important-repeater', 'option')):

              // перебираем данные
              while (have_rows('footer__important-repeater', 'option')) : the_row();

                // отображаем вложенные поля
            ?>

                <li class="footer__nav-item">
                  <svg
                    width="5.874908"
                    height="10.000000"
                    viewBox="0 0 5.87491 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>Created with Pixso.</desc>
                    <defs />
                    <path
                      id="Vector"
                      d="M5.71 4.6L1.26 0.15C1.16 0.05 1.02 0 0.87 0C0.73 0 0.59 0.05 0.49 0.15L0.16 0.48C-0.05 0.7 -0.05 1.04 0.16 1.26L3.9 4.99L0.15 8.73C0.05 8.84 0 8.97 0 9.12C0 9.27 0.05 9.4 0.15 9.51L0.48 9.84C0.59 9.94 0.72 10 0.87 10C1.02 10 1.15 9.94 1.26 9.84L5.71 5.38C5.81 5.28 5.87 5.14 5.87 4.99C5.87 4.85 5.81 4.71 5.71 4.6Z"
                      fill="#FDFDFD"
                      fill-opacity="1.000000"
                      fill-rule="nonzero" />
                  </svg>
                  <a href="<?php echo get_sub_field('link')['url'] ?>"><?php echo get_sub_field('link')['title'] ?></a>
                </li>

            <?php
              endwhile;

            else :

            // вложенных полей не найдено

            endif;

            ?>
            <li class="footer__nav-item">
              <svg
                width="5.874908"
                height="10.000000"
                viewBox="0 0 5.87491 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs />
                <path
                  id="Vector"
                  d="M5.71 4.6L1.26 0.15C1.16 0.05 1.02 0 0.87 0C0.73 0 0.59 0.05 0.49 0.15L0.16 0.48C-0.05 0.7 -0.05 1.04 0.16 1.26L3.9 4.99L0.15 8.73C0.05 8.84 0 8.97 0 9.12C0 9.27 0.05 9.4 0.15 9.51L0.48 9.84C0.59 9.94 0.72 10 0.87 10C1.02 10 1.15 9.94 1.26 9.84L5.71 5.38C5.81 5.28 5.87 5.14 5.87 4.99C5.87 4.85 5.81 4.71 5.71 4.6Z"
                  fill="#FDFDFD"
                  fill-opacity="1.000000"
                  fill-rule="nonzero" />
              </svg>
              <a href="#" class="footer__nav-link nav__link">Как собрать в долгий поход?</a>
            </li>
            <li class="footer__nav-item">
              <svg
                width="5.874908"
                height="10.000000"
                viewBox="0 0 5.87491 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs />
                <path
                  id="Vector"
                  d="M5.71 4.6L1.26 0.15C1.16 0.05 1.02 0 0.87 0C0.73 0 0.59 0.05 0.49 0.15L0.16 0.48C-0.05 0.7 -0.05 1.04 0.16 1.26L3.9 4.99L0.15 8.73C0.05 8.84 0 8.97 0 9.12C0 9.27 0.05 9.4 0.15 9.51L0.48 9.84C0.59 9.94 0.72 10 0.87 10C1.02 10 1.15 9.94 1.26 9.84L5.71 5.38C5.81 5.28 5.87 5.14 5.87 4.99C5.87 4.85 5.81 4.71 5.71 4.6Z"
                  fill="#FDFDFD"
                  fill-opacity="1.000000"
                  fill-rule="nonzero" />
              </svg>
              <a href="#" class="footer__nav-link nav__link">Жизненно важные предметы для похода</a>
            </li>
            <li class="footer__nav-item">
              <svg
                width="5.874908"
                height="10.000000"
                viewBox="0 0 5.87491 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs />
                <path
                  id="Vector"
                  d="M5.71 4.6L1.26 0.15C1.16 0.05 1.02 0 0.87 0C0.73 0 0.59 0.05 0.49 0.15L0.16 0.48C-0.05 0.7 -0.05 1.04 0.16 1.26L3.9 4.99L0.15 8.73C0.05 8.84 0 8.97 0 9.12C0 9.27 0.05 9.4 0.15 9.51L0.48 9.84C0.59 9.94 0.72 10 0.87 10C1.02 10 1.15 9.94 1.26 9.84L5.71 5.38C5.81 5.28 5.87 5.14 5.87 4.99C5.87 4.85 5.81 4.71 5.71 4.6Z"
                  fill="#FDFDFD"
                  fill-opacity="1.000000"
                  fill-rule="nonzero" />
              </svg>
              <a href="#" class="footer__nav-link nav__link">Медицинская страховка, гарантии безопасности</a>
            </li>
            <li class="footer__nav-item">
              <svg
                width="5.874908"
                height="10.000000"
                viewBox="0 0 5.87491 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <desc>Created with Pixso.</desc>
                <defs />
                <path
                  id="Vector"
                  d="M5.71 4.6L1.26 0.15C1.16 0.05 1.02 0 0.87 0C0.73 0 0.59 0.05 0.49 0.15L0.16 0.48C-0.05 0.7 -0.05 1.04 0.16 1.26L3.9 4.99L0.15 8.73C0.05 8.84 0 8.97 0 9.12C0 9.27 0.05 9.4 0.15 9.51L0.48 9.84C0.59 9.94 0.72 10 0.87 10C1.02 10 1.15 9.94 1.26 9.84L5.71 5.38C5.81 5.28 5.87 5.14 5.87 4.99C5.87 4.85 5.81 4.71 5.71 4.6Z"
                  fill="#FDFDFD"
                  fill-opacity="1.000000"
                  fill-rule="nonzero" />
              </svg>
              <a href="#" class="footer__nav-link nav__link">Если вы врач - загляните сюда</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
  <section class="footer__bottom">
    <div class="container footer__bottom-inner">
      <p><?php echo get_field('footer__rights-name', 'option') . ' ' . date('Y') ?></p>
      <a href="<?php echo get_field('footer__politics', 'option')['url'] ?>"><?php echo get_field('footer__politics', 'option')['title'] ?></a>
    </div>
  </section>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>