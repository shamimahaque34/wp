<?php 

add_theme_support('title-tag');

//add_filter('show_admin_bar','__return_false');


function add_css_js(){
	
	//Load CSS
	
	//wp_enqueue_style('name',get_template_directory_uri().'/folder/sub_folder/file',array(),'version','all');
	
	
	wp_enqueue_style('style',get_template_directory_uri().'/styles/style.css',array(),'1.0.0','all');
	
	
	//Load Js
	
	//wp_enqueue_script('name',get_template_directory_uri().'/folder/sub_folder/file',array(),'version',true/false);
	
	// wp_enqueue_script('plugins',get_template_directory_uri().'/assets/js/plugins.js',array('jquery'),'version',true);
	// wp_enqueue_script('functions',get_template_directory_uri().'/assets/js/functions.js',array('jquery'),'version',true);
	
	
}
add_action('wp_enqueue_scripts','add_css_js');