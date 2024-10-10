<?php
if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

function tourism_setup()
{
	load_theme_textdomain('tourism', get_template_directory() . '/languages');

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'tourism_setup');

/**
 * Enqueue scripts and styles.
 */
function tourism_scripts()
{
	wp_enqueue_style('tourism-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), _S_VERSION);
	wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css', array(), _S_VERSION);
	wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), _S_VERSION);
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION);

	wp_enqueue_script('inputmask', get_template_directory_uri() . '/js/inputmask.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('fslightbox', get_template_directory_uri() . '/js/fslightbox.js', array(), _S_VERSION, true);
	wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'tourism_scripts');


if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки шапки',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки подвала',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

add_action('after_setup_theme', function () {
	register_nav_menus([
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
	]);
});

function add_button_to_nav_menu($items, $args)
{
	// Проверяем, что это именно то меню, которое вам нужно
	if ($args->theme_location == 'header_menu') {
		// Добавляем кнопку в конец меню
		$items .= '<button class="btn header__btn header__btn--mobile contacts-btn">Консультация</button>';
	}
	return $items;
}
add_filter('wp_nav_menu_items', 'add_button_to_nav_menu', 10, 2);

add_shortcode('modal-select-location', 'modalSelectLocation');

function modalSelectLocation()
{
	require 'shortcodes/modal-select-location.php';
}

add_shortcode('modal-contacts', 'modalContacts');

function modalContacts()
{
	require 'shortcodes/modal-contacts.php';
}

add_shortcode('form-select-location', 'formSelectLocation');

function formSelectLocation()
{
	require 'shortcodes/form-select-location.php';
}

add_shortcode('mailing', 'mailing');

function mailing()
{
	require 'shortcodes/mailing.php';
}

add_filter('excerpt_more', function ($more) {
	return '...';
});

function add_lazy_loading_to_thumbnail($attr)
{
	// Проверяем, поддерживает ли браузер lazy loading
	if (wp_lazy_loading_enabled('img', 'the_post_thumbnail')) {
		$attr['loading'] = 'lazy';
	}
	return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'add_lazy_loading_to_thumbnail');
