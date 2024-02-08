<?php


function tps_widgets_init(){
	register_sidebar(array(
		'name'			=>	esc_html__('Right Sidebar', 'tps'),
		'id'			=> 	'right-sidebar',
		'description'	=>	esc_html__('Add widgets here.', 'tps'),
		'before_widget'	=>	'section id="%1$s" class="widget %2$s">',
		'after_widget'	=>	'</section>',
		'before_title'	=>	'<h2 class="widget-title">',
		'after_title'	=>	'</h2>',
	));
}
add_action('widget_init', 'tps_widgets_init');

?>