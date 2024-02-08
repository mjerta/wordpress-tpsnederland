<?php
if(! function_exists('theme_tps_setup')):
	
	function theme_tps_setup(){
		
		add_image_size('smallest', 50,50,true);
		add_image_size('middle', 300,300,true);
		add_image_size('largest', 800,800,true);
		
		load_theme_textdomain('tps', get_template_directory() . '/languages');

		add_theme_support('automatic-feed-links');

		add_theme_support('title-tag');
		
		add_theme_support('post-thumbnails');

		add_theme_support('menus');
		
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
		
		add_theme_support('customize-selective-refresh-widgets');
		
		add_theme_support('custom-logo', array(
			'height'		=>	90,
			'width'			=>  180,
			'flex-width'	=>	true,
			'flex-height'	=>	true,
		));
		
		register_nav_menus(
			array(
			'top-menu' => esc_html__('Primary Menu'),
			'footer-menu' => esc_html__('Footer Menu'),
			)
		);
	}
	add_action('after_setup_theme', 'theme_tps_setup');
endif;


function tps_content_width(){
	$GLOBALS['content-width'] = apply_filters('tps_content_width', 1140);
}
add_action('after_setup_theme', 'tps_content_width', 0);


function addWidgets(){

	register_sidebar(array(

		'name'		=>	'Sidebar',
		'id'		=>	'sidebar1'
	));
}
add_action('widgets_init', 'addWidgets');


function tps_add_editor_style(){
	add_editor_style('/style.css');
}
add_action('admin_init','tps_add_editor_style');



function include_jquery(){
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery',get_template_directory_uri().'/dist/js/jquery-3.4.1.min.js', false,'1',true);
	
	add_action('wp_enqueue_script', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function include_popper(){
	wp_register_script('popper', get_template_directory_uri().'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',false,'',true);
	wp_enqueue_script('popper');
}
add_action('wp_enqueue_script', 'include_popper');

function load_stylesheets(){

	wp_register_style('bootstrap', get_template_directory_uri().'/src/css/bootstrap.min.css', array(), false);
	wp_enqueue_style('bootstrap');

	wp_register_style('google-fonts', get_template_directory_uri().'https://fonts.googleapis.com/css?family=Raleway&display=swap', array(), false);
	wp_enqueue_style('google-fonts');
	
	wp_register_style('stylesheet', get_template_directory_uri().'/style.css', array(), false);
	wp_enqueue_style('stylesheet');	
	

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_scripts(){

	wp_register_script('customjs', get_template_directory_uri().'/dist/js/scripts.js', false,'1',true);
	wp_enqueue_script('customjs');
	
	wp_enqueue_script('bootstrap-hover', get_template_directory_uri().
	'/src/js/bootstrap-hover.js',array('jquery'),'1',true);

	wp_enqueue_script('bootstrap', get_template_directory_uri().'/src/js/bootstrap.min.js',array('jquery'), '3.4.1',true);

	
	wp_enqueue_script('nav-scroll', get_template_directory_uri().
	'/src/js/nav-scroll.js',array('jquery'),'1',true);
	
	if( is_singular() && comments_open() && get_option( 'thread_comments' )){
		wp_enqueue_script( 'comment-reply' );
	}
	

}
add_action('wp_enqueue_scripts', 'load_scripts');


//Bootstrap NavWalker File
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

require get_template_directory() . '/inc/widgets.php';

?>