<?php
/*
Author: Brian Foo
URL: htp://brianfoo.com/
*/

// add supported theme features
function foo_add_theme_support() {
  // add menus
  add_theme_support( 'menus' );
  register_nav_menus(
    array( 
      'main_nav' => 'The Main Menu',   // main nav in header
      'footer_links' => 'Footer Links' // secondary nav in footer
      // register more nav menus here
    )
  );  
}
add_action('after_setup_theme','foo_add_theme_support');  

// register sidebars
function foo_register_sidebars() {
  register_sidebar(array(
    'id' => 'sidebar',
    'name' => 'Main Sidebar',
    'description' => 'Used on every page with a sidebar.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  // register more sidebars here
}
add_action( 'widgets_init', 'foo_register_sidebars' );

// enqueue css
function foo_theme_css() {
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '2.3.0', 'all' );
  wp_register_style( 'bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.min.css', array('bootstrap'), '2.3.0', 'all' );
  wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array('bootstrap'), '3.0.2', 'all' );
  wp_register_style( 'foostrap', get_template_directory_uri() . '/style.css', array('bootstrap','bootstrap-responsive'), false, 'all' );
  wp_enqueue_style( 'bootstrap' );
  wp_enqueue_style( 'bootstrap-responsive' );
  wp_enqueue_style( 'font-awesome');
  wp_enqueue_style( 'foostrap');
}
add_action('wp_enqueue_scripts', 'foo_theme_css');

// enqueue jss
function foo_theme_js(){
  wp_deregister_script('jquery'); // initiate the function  
  wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.9.1.min.js', false, '1.9.1');
  wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '2.3.0');
  wp_register_script('foostrap', get_template_directory_uri().'/js/scripts.js', array('jquery','bootstrap'));
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap');
  wp_enqueue_script('foostrap');
}
add_action('wp_enqueue_scripts', 'foo_theme_js');

// navigation fallbacks if default menus are empty
function foo_main_nav_fallback() { }
function foo_footer_links_fallback() { }

?>
