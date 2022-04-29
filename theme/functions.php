<?php
/**
 * duromediaacademy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package duromediaacademy
 */

if ( ! defined( 'DMACADEMY_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'DMACADEMY_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dmacademy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dmacademy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on duromediaacademy, use a find and replace
		 * to change 'duromediaacademy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'duromediaacademy', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'top-menu' => 'Top Menu Location',
				'mobile-menu' => 'Mobile Menu Location',
			  )
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'dmacademy_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 50,
				'width'       => 80,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
				'unlink-homepage-logo' => true, 
			)
		);	

		/**
		 * Add responsive embeds and block editor styles.
		 */
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'dmacademy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dmacademy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dmacademy_content_width', 640 );
}
add_action( 'after_setup_theme', 'dmacademy_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function dmacademy_scripts() {
	wp_enqueue_style( 'duromediaacademy-style', get_stylesheet_uri(), array(), DMACADEMY_VERSION );

	// stylesheet
	wp_enqueue_style('owl', get_template_directory_uri() . '/asset/css/owl.carousel.min.css', array(), false, 'all');
	wp_enqueue_style('owltheme', get_template_directory_uri() . '/asset/css/owl.theme.default.min.css', array(), false, 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/asset/css/animate.css', array(), false, 'all');
	wp_enqueue_style('main', get_template_directory_uri() . '/asset/css/main.css', array(), false, 'all');

	//js
	wp_enqueue_script('query', get_template_directory_uri() . '/asset/js/jquery-3.6.0.min.js', 'jquery', false, true);
	wp_enqueue_script('owl', get_template_directory_uri() . '/asset/js/owl.carousel.min.js', 'jquery', false, true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/asset/js/wow.min.js', 'jquery', false, true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/asset/js/custom.js', 'jquery', false, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dmacademy_scripts' );

function load_scripts() {
	// Load scripts:
	wp_enqueue_script('jquery'); # Loading the Wordpress bundled jQuery version.
	//may add more scripts to load like jquery-ui
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * TGMPA configuration.
 */
require get_template_directory() . '/inc/tgmpa/tgmpa-configuration.php';