<?php
/**
 * deon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package deon
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deon_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on deon, use a find and replace
		* to change 'deon' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'deon', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'deon' ),
			'mobile' => esc_html__( 'Secondary', 'deon' ),
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
			'deon_custom_background_args',
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'deon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deon_content_width', 640 );
}
add_action( 'after_setup_theme', 'deon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deon_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'deon' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'deon' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'deon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 
 

  
  wp_enqueue_style( 'stylesheet2', get_template_directory_uri() . '/owl.carousel.min.css');
 
 wp_enqueue_style( 'stylesheet3', get_template_directory_uri() . '/owl.theme.default.min.css');
 
  wp_enqueue_style( 'bootstrapstylesheet', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
 
 function enqueue_custom_stylesheet() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/custom-style.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_stylesheet' );

 
 function abc_load_my_scripts() {
    wp_enqueue_script( 'boot8', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true );
    wp_enqueue_script( 'boot4', get_template_directory_uri() . '/js/gsap.min.js', array(), '', true );
    wp_enqueue_script( 'boot5', get_template_directory_uri() . '/js/ScrollMagic.js', array(), '', true );
    wp_enqueue_script( 'boot6', get_template_directory_uri() . '/js/animation.gsap.js', array(), '', true );
    wp_enqueue_script( 'boot7', get_template_directory_uri() . '/js/debug.addIndicators.js', array(), '', true );
    wp_enqueue_script( 'boot9', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '', true );
}
add_action( 'wp_footer', 'abc_load_my_scripts' );


 
 
function deon_scripts() {
	wp_enqueue_style( 'deon-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'deon-style', 'rtl', 'replace' );

	wp_enqueue_script( 'deon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deon_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function deon_customizer_sections($wp_customize) {
    $wp_customize->add_section('footer_section', array(
        'title' => 'Footer',
        'priority' => 30,
    ));
}
add_action('customize_register', 'deon_customizer_sections');

function deon_customizer_settings_2($wp_customize) {
    // Existing code for social media, phone numbers, and address settings

    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_setting('footer_description', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
	$wp_customize->add_setting('copyright_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add control for Footer Logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => 'Footer Logo',
        'section' => 'footer_section',
        'settings' => 'footer_logo',
    )));

    // Add control for Footer Description
    $wp_customize->add_control('footer_description', array(
        'label' => 'Footer Description',
        'section' => 'footer_section',
        'type' => 'textarea',
    ));
	$wp_customize->add_control('copyright_text', array(
        'label' => 'Copyright Text',
        'section' => 'footer_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'deon_customizer_settings_2');


function deon_customizer_settings($wp_customize) {
    $wp_customize->add_setting('facebook_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_setting('twitter_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_setting('linkedin_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_setting('instagram_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add control for Facebook URL
    $wp_customize->add_control('facebook_url', array(
        'label' => 'Facebook URL',
        'section' => 'footer_section',
        'type' => 'url',
    ));

    // Add control for Twitter URL
    $wp_customize->add_control('twitter_url', array(
        'label' => 'Twitter URL',
        'section' => 'footer_section',
        'type' => 'url',
    ));

    // Add control for LinkedIn URL
    $wp_customize->add_control('linkedin_url', array(
        'label' => 'LinkedIn URL',
        'section' => 'footer_section',
        'type' => 'url',
    ));

    // Add control for Instagram URL
    $wp_customize->add_control('instagram_url', array(
        'label' => 'Instagram URL',
        'section' => 'footer_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'deon_customizer_settings');

function deon_customizer_settings_1($wp_customize) {
    // Existing code for social media settings

    $wp_customize->add_setting('phone_number_1', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('phone_number_2', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for Phone Number 1
    $wp_customize->add_control('phone_number_1', array(
        'label' => 'Phone Number 1',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Add control for Phone Number 2
    $wp_customize->add_control('phone_number_2', array(
        'label' => 'Phone Number 2',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Add control for Address
    $wp_customize->add_control('address', array(
        'label' => 'Address',
        'section' => 'footer_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'deon_customizer_settings_1');
