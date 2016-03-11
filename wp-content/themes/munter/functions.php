<?php

if (file_exists(dirname(__FILE__).'/redux-framework-master/ReduxCore/framework.php'  )) {
	include_once('redux-framework-master/ReduxCore/framework.php');
}

if (file_exists(dirname(__FILE__).'/redux-framework-master/sample/config.php' )) {
	include_once('redux-framework-master/sample/config.php');
}


if (file_exists(dirname(__FILE__).'/cmb2/init.php'  )) {
	include_once('cmb2/init.php');
}

if (file_exists(dirname(__FILE__).'/cmb2/functions.php' )) {
	include_once('cmb2/functions.php');
}

if ( ! function_exists( 'munter_setup' ) ) :

function munter_setup() {
	
	load_theme_textdomain( 'munter', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	
	add_theme_support( 'title-tag' );

	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 0, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'munter' ),
	) );

	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

}
endif; // munter_setup
add_action( 'after_setup_theme', 'munter_setup' );


function munter_scripts(){

	wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_register_style( 'fancybox', get_template_directory_uri().'/fancybox/jquery.fancybox-v=2.1.5.css' );
	wp_register_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_register_style( 'style', get_template_directory_uri().'/css/style.css' );

	wp_enqueue_style('bootstrap' );
	wp_enqueue_style('fancybox' );
	wp_enqueue_style('font-awesome' );
	wp_enqueue_style('style' );
	wp_enqueue_style('maincss', get_stylesheet_uri() );



}
add_action('wp_enqueue_scripts', 'munter_scripts' );














