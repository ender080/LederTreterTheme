<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/**********************SOCIAL MENU*****************************/
//register

register_nav_menus( array(
'socialmenu' => __( 'Social Menu', 'meterlimittheme' ),
) );

/**
* Socialmenu shortcode
*/

function socialmenushortcode($atts) {
  ob_start();
  get_template_part('template-particles/socialmenu');
  return ob_get_clean();
}
add_shortcode('socialmenu', 'socialmenushortcode');

/**************************WIDGETS*******************************/

/*TOPBAR*/
function meterlimittheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Topbar', 'meterlimittheme' ),
		'id'            => 'topbar',
		'description'   => esc_html__( 'Add widgets here.', 'meterlimittheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

/*Footer 1*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer left', 'meterlimittheme' ),
		'id'            => 'footer_one',
		'description'   => esc_html__( 'Add widgets here.', 'meterlimittheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

/*Footer two*/

	register_sidebar( array(
		'name'          => esc_html__( 'Footer right', 'meterlimittheme' ),
		'id'            => 'footer_two',
		'description'   => esc_html__( 'Add widgets here.', 'meterlimittheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


/*Footer full*/

/*Footer 1*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer full', 'meterlimittheme' ),
		'id'            => 'footer_three',
		'description'   => esc_html__( 'Add widgets here.', 'meterlimittheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'meterlimittheme_widgets_init' );

$meterlimit_includes = array(
	'/excerpt.php',                  // Initialize excerpt
	'/postedon.php',                  // Posted on
);

foreach ( $meterlimit_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
