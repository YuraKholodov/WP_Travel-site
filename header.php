<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<!-- Шапка сайта-------------------------- -->
		<header class="header">

			<div class="container header__inner">
				<a href="<?php the_field('header_logo-link', 'option') ?>" class="logo header__logo">
					<?php echo get_field('header_logo-svg', 'option') ?>
				</a>

				<?php wp_nav_menu([
					'theme_location'  => 'header_menu',
					'container'       => 'nav',
					'container_class' => 'nav header__nav',
					'menu_class'      => 'nav__list header__nav-list',
				]); ?>

				<button class="btn header__btn contacts-btn">Консультация</button>
				<button class="burger-icon">
					<span></span>
				</button>
			</div>
		</header>