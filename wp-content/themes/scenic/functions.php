<?php
/**
 * Scenic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Scenic
 */

if ( ! function_exists( 'scenic_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function scenic_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Scenic, use a find and replace
		 * to change 'scenic' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scenic', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'scenic' ),
            'footer' => esc_html__( 'Footer', 'scenic' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'scenic_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'scenic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scenic_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'scenic_content_width', 640 );
}
add_action( 'after_setup_theme', 'scenic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scenic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'scenic' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'scenic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'scenic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function scenic_scripts() {
	wp_enqueue_style( 'scenic-style', get_stylesheet_uri() );

    /**
    scenic - prefix, bootstrap.min - idintificator, name can choose myself
     */
	wp_enqueue_style( 'scenic-bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'scenic-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'scenic-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'scenic-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css' );
    wp_enqueue_style( 'scenic-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
    wp_enqueue_style( 'scenic-tooplate-style', get_template_directory_uri() . '/assets/css/tooplate-style.css' );


    /**
    query is in Wordpress, that is not nessesarity to include from our folder
     */
    wp_enqueue_script( 'jquery');
    /**
    ver - custom cersion for example 1.0 or other, true - include scripts in footer, its good solution
     */
    wp_enqueue_script( 'scenic-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true );
    wp_enqueue_script( 'scenic-jquery.parallax', get_template_directory_uri() . '/assets/js/jquery.parallax.js', array(), '1.0', true );
    wp_enqueue_script( 'scenic-owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true );
    wp_enqueue_script( 'scenic-jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0', true );
    wp_enqueue_script( 'scenic-magnific-popup-options', get_template_directory_uri() . '/assets/js/magnific-popup-options.js', array(), '1.0', true );
    wp_enqueue_script( 'scenic-modernizr.custom', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array(), '1.0', true );
    wp_enqueue_script( 'scenic-smoothscroll', get_template_directory_uri() . '/assets/js/smoothscroll.js', array(), '1.0', true );
    wp_enqueue_script( 'scenic-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true );

/**
	wp_enqueue_script( 'scenic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
 */
}
add_action( 'wp_enqueue_scripts', 'scenic_scripts' );

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


/**
 *  Add post type in admin panel
 */
add_action( 'init', 'scenic_customposttype_init' );
/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function scenic_customposttype_init() {
    $labels = array(
        'name'                  => _x( 'Studio', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Studio', 'Post type singular name', 'textdomain' ),

    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => array( 'slug' => 'studio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'studio', $args );


    $labels_ourpeople = array(
        'name'                  => _x( 'Our people', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Our people', 'Post type singular name', 'textdomain' ),

    );

    $args_ourpeople = array(
        'labels'             => $labels_ourpeople,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'people' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'our_people', $args_ourpeople );


}


