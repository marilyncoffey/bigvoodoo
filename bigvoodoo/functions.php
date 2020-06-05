
<?php
/**
 * Automatically registers necessary menus under Appearance > Menus
 * @author Big Voodoo Interactive
 *
 */
if(function_exists('register_nav_menus')){
register_nav_menus(
	array(
		'top nav' => esc_html__( 'top nav', 'BigVoodoo' ),
		'main menu' => __( 'main menu', 'BigVoodoo' ),
	));
}

/**
* Post- Thumbnail
* User can select thumbnails for posts
**/

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

/**
 * Automatically registers widget areas under Appearance > Widgets
 * @author Big Voodoo Interactive
 */
if(function_exists('register_sidebar')) {
	//sidebar widget
	register_sidebar(array(
    'name' => __( 'Sidebar Widget'),
    'id' => 'sidebarwidget',
    'description' => __( 'Blog Sidebar Widget' ),
	) );
	// add additional widgets as necessary here
	// First footer widget area
  register_sidebar( array(
      'name' => __( 'First Footer Widget Area'),
      'id' => 'first-footer-widget-area',
      'description' => __( 'The first footer widget area' ),
  ) );
  // Second Footer Widget Area
  register_sidebar( array(
      'name' => __( 'Second Footer Widget Area'),
      'id' => 'second-footer-widget-area',
      'description' => __( 'The second footer widget area' ),
  ) );
  // Third Footer Widget Area
  register_sidebar( array(
      'name' => __( 'Third Footer Widget Area'),
      'id' => 'third-footer-widget-area',
      'description' => __( 'The third footer widget area' ),
  ) );
	// Contact widget area
	register_sidebar(array(
    'name' => __( 'Homepage Widget'),
    'id' => 'homepagewidget',
    'description' => __( 'Contact Form Widget' ),
  ) );
  // sidebar for blog
  register_sidebar(array(
    'name' => __('Header Widget'),
    'id' => 'header-widget',
    'description' => __( 'Header Widget Area' ),
  ) );
}

/*Nav Walker
* Helps fix bootstrap/Wordpress conflicts
*/

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Queues necessary JS scripts and CSS stylesheets
 * @author Big Voodoo Interactive
 *
 */
function bind_my_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/font-awesome.min.css' );
	wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css');
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js' );
	wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/parallax.min.js' );
}

add_action( 'wp_enqueue_scripts', 'bind_my_scripts' );
