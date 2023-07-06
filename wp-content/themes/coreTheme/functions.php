<?php 

// theme support

	function coreTheme_theme_support(){

		add_theme_support('custom-logo');
		add_theme_support('menus');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('widgets');

	}
	add_action('after_setup_theme', 'coreTheme_theme_support');






	// css file links

	function theme_css_and_js_file(){


	$version = wp_get_theme()->get('Version');


	wp_enqueue_style( 'MyBootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '4.0', false );
	wp_enqueue_style( 'MyIcon', get_template_directory_uri().'/assets/vendors/linericon/style.css', array(), $version, false );
	wp_enqueue_style( 'MyFont_awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.0', false );
	wp_enqueue_style( 'MyOwl_carousel', get_template_directory_uri().'/assets/vendors/owl-carousel/owl.carousel.min.css', array(), '4.0', false );
	wp_enqueue_style( 'MyMagnific_popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', false );
	wp_enqueue_style( 'MyNice_select', get_template_directory_uri().'/assets/vendors/nice-select/css/nice-select.css', array(), '1.0', false );
	wp_enqueue_style( 'MyMain_css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', false );

	// js file links

	wp_enqueue_script( 'MyJquery', get_template_directory_uri().'/assets/js/jquery-3.2.1.min.js', '3.0', true );
	wp_enqueue_script( 'MyPopper', get_template_directory_uri().'/assets/js/popper.js', '1.0', true );
	wp_enqueue_script( 'MyBootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', '4.0', true );
	wp_enqueue_script( 'MyStellar', get_template_directory_uri().'/assets/js/stellar.js', '1.0', true );
	wp_enqueue_script( 'MySimplelightbox', get_template_directory_uri().'/assets/vendors/lightbox/simpleLightbox.min.js', '1.0', true );
	wp_enqueue_script( 'MyNice_select_min', get_template_directory_uri().'/assets/vendors/nice-select/js/jquery.nice-select.min.js', '1.0', true );
	wp_enqueue_script( 'MyImageloaded', get_template_directory_uri().'/assets/vendors/isotope/imagesloaded.pkgd.min.js', '1.0', true );
	wp_enqueue_script( 'MyIsotop', get_template_directory_uri().'/assets/vendors/isotope/isotope-min.js', '1.0', true );
	wp_enqueue_script( 'MyOwl_carousel_min_js', get_template_directory_uri().'/assets/vendors/owl-carousel/owl.carousel.min.js', '1.0', true );
	wp_enqueue_script( 'MyAjaxchimp', get_template_directory_uri().'/assets/js/jquery.ajaxchimp.min.js', '1.0', true );
	wp_enqueue_script( 'MyMail_script', get_template_directory_uri().'/assets/js/mail-script.js', '1.0', true );
	wp_enqueue_script( 'MyTheme_js', get_template_directory_uri().'/assets/js/theme.js', '1.0', true );


}
add_action('wp_enqueue_scripts','theme_css_and_js_file');

// register menu

function coreTheme_menus() {
  register_nav_menus(
    array(
      'header' => __( 'Header Menu' ),
      'footer' => __( 'footer Menu' ),
     )
   );
 }
 add_action( 'init', 'coreTheme_menus' );



 // sidebar register

 function coreTheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'coreTheme' ),
        'id'            => 'sidebar',
        'before_widget' => '<aside id="%1$s" class="single_sidebar_widget author_widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'footer', 'coreTheme' ),
        'id'            => 'footer',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action('widgets_init', 'coreTheme_widgets_init');

// redux framework files

require_once('inc\redux-core/framework.php');
require_once('inc\sample/sample-config.php');
 