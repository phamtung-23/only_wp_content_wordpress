<?php
/**
 * phamtung functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package phamtung
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
function phamtung_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on phamtung, use a find and replace
		* to change 'phamtung' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'phamtung', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'phamtung' ),
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
			'phamtung_custom_background_args',
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
add_action( 'after_setup_theme', 'phamtung_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function phamtung_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'phamtung_content_width', 640 );
}
add_action( 'after_setup_theme', 'phamtung_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function phamtung_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'phamtung' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'phamtung' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'phamtung_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function phamtung_scripts() {
	wp_enqueue_style( 'phamtung-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'phamtung-main-style', get_template_directory_uri().'/assets/css/app.css', array(), _S_VERSION );
	wp_enqueue_style( 'phamtung-icon8-style','https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'phamtung-boostrap-style','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'phamtung-swiper-style','https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'phamtung-swiper-style','https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), _S_VERSION );
	wp_style_add_data( 'phamtung-style', 'rtl', 'replace' );

	wp_enqueue_script( 'phamtung-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'phamtung-popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'phamtung-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'phamtung-jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'phamtung-swiper','https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'phamtung-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'phamtung_scripts' );

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
// -==============================test=========================================
/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_event_init() {
	$labels = array(
		'name'                  => _x( 'Events', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Event', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Events', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Event', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Event', 'textdomain' ),
		'new_item'              => __( 'New Event', 'textdomain' ),
		'edit_item'             => __( 'Edit Event', 'textdomain' ),
		'view_item'             => __( 'View Event', 'textdomain' ),
		'all_items'             => __( 'All Events', 'textdomain' ),
		'search_items'          => __( 'Search Events', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Events:', 'textdomain' ),
		'not_found'             => __( 'No Events found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No Events found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Event Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Event archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into Event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter Events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'event' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon' => 'dashicons-admin-customizer', // Set the menu icon
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'event', $args );
}

add_action( 'init', 'wpdocs_codex_event_init' );


/**
 * Create two taxonomies, genres and writers for the post type "book".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_event_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
    'name' => _x( 'Event Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Event Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Custom Hierarchical Taxonomies' ),
    'all_items' => __( 'All Custom Hierarchical Taxonomies' ),
    'parent_item' => __( 'Parent Event Category' ),
    'parent_item_colon' => __( 'Parent Event Category:' ),
    'edit_item' => __( 'Edit Event Category' ), 
    'update_item' => __( 'Update Event Category' ),
    'add_new_item' => __( 'Add New Event Category' ),
    'new_item_name' => __( 'New Event Category Name' ),
    'menu_name' => __( 'Event Category' ),
  ); 	

	$args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'event-category' ),
  );

  register_taxonomy( 'event-category', array( 'event' ), $args );



	unset( $args );
	unset( $labels );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
    'name' => _x( 'Event tag', 'taxonomy general name' ),
    'singular_name' => _x( 'Event tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Event tag' ),
    'all_items' => __( 'All Event tag' ),
    'edit_item' => __( 'Edit Event tag' ), 
    'update_item' => __( 'Update Event tag' ),
    'add_new_item' => __( 'Add New Event tag' ),
    'new_item_name' => __( 'New Event tag Name' ),
    'menu_name' => __( 'Event tag' ),
  ); 	

  $args = array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'event-tags' ),
  );

  register_taxonomy( 'event-tags', array( 'event' ), $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wpdocs_create_event_taxonomies', 0 );


// function custom_meta_box(){
// 	add_meta_box('thong-tin', 'Thêm thông tin', 'Thongtin_output', 'post');
// }
// add_action('add_meta_boxes', 'custom_meta_box');

// function Thongtin_output($post){
// 	$link_facebook = get_post_meta($post->ID, '_link_FB', true);
// 	echo "<label for='link_connect'>Link facebook:</label>";
// 	echo "<input type='text' name='link_connect' id='link_connect' value='".$link_facebook."' />";
// }

// function save_thongtin_custom($post_id){
// 	$link_FB = sanitize_text_field($_POST['link_connect']);
// 	update_post_meta($post_id, '_link_FB', $link_FB);
// }
// add_action('save_post','save_thongtin_custom');


register_nav_menus(array('footer-menu'=>'Footer menu'));

if (function_exists('acf_add_options_page')){

	acf_add_options_page(
		array(
			'page_title'=>'Website Setting',
			'menu_title'=>'Website Setting',
			'menu_slug'=>'website-setting',
			'capability'=>'edit_posts',
			'icon_url'=>'dashicons-admin-tools'
		)
	);

}

