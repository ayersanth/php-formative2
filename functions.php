<?php 

	function retirement_script_enqueue() {
		wp_enqueue_style('retirementtheme', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all');
		wp_enqueue_script('customjs', get_template_directory_uri().'/js/script.js', array(), '1.0', true);
	}

	add_action('wp_enqueue_scripts', 'retirement_script_enqueue');

	function retirement_theme_setup() {
		add_theme_support('menus');

	}

	add_action('init', 'retirement_theme_setup'); /* init or after_setup_theme */
	

?>