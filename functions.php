<?php 
/**
 * Enqueues scripts and styles for front end.
 *
 * @package WordPress
 * @subpackage blank_bootstrap
 * @since Blank Theme with Bootstrap 1.0
 *
 * @return void
 */
  // Register Theme Features
  // Loads Custom Header setup file (taken from twentytwelve theme).
require( get_template_directory() . '/inc/custom-header.php' );
function wp_bootstrap_scripts_styles() {
  // Loads Bootstrap minified JavaScript file.
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'3.0.0', true );
  // Loads Bootstrap minified CSS file.
  wp_enqueue_style('bootstrapwp', get_template_directory_uri() . '/css/bootstrap.min.css', array( ), '3.0.0', false );
  // Loads our main stylesheet.
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array( ));
  // Loads holder.js.
  wp_enqueue_script('holder', get_template_directory_uri() . '/js/holder.js', array ('jquery'), null, true );
}
add_action('wp_enqueue_scripts', 'wp_bootstrap_scripts_styles');
// Adds the main menu
register_nav_menus( array(
      'main-menu' => __( 'Main Menu', 'wp_bootstrap_menu' ),
    ) );
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
?>