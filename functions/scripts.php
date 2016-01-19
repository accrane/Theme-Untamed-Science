<?php
 // Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {
	if (!is_admin()) {
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3', true);
		wp_enqueue_script('jquery');
		
		// Custom Theme scripts...
		wp_register_script(
			'custom',
			get_bloginfo('template_directory') . '/js/custom.js',
			array('jquery'), '1.0'  );
		wp_enqueue_script('custom');
		
		
		// Homepage slider 'flexslider' scripts...
		wp_register_script(
			'flexslider',
			get_bloginfo('template_directory') . '/js/flexslider.js',
			array('jquery') , '1.0' , true );
		wp_enqueue_script('flexslider');
		
		// Isotpope...
		wp_register_script(
			'isotope',
			get_bloginfo('template_directory') . '/js/isotope.js',
			array('jquery') );
		wp_enqueue_script('isotope');
		
		
		// Images loaded...
		wp_register_script(
			'imagesloaded',
			get_bloginfo('template_directory') . '/js/images-loaded.js',
			array('jquery') );
		wp_enqueue_script('imagesloaded');
		
		// // Equal heights div...
		// wp_register_script(
		// 	'script',
		// 	get_bloginfo('template_directory') . '/js/script.js',
		// 	array('jquery') );
		// wp_enqueue_script('script');
		
		// // Colorbox...
		// wp_register_script(
		// 	'plugins',
		// 	get_bloginfo('template_directory') . '/js/plugins.js',
		// 	array('jquery') );
		// wp_enqueue_script('plugins');

		// other scripts...
		wp_register_script(
			'jcarousel',
			get_bloginfo('template_directory') . '/js/jquery.jcarousel.js',
			array('jquery') );
		wp_enqueue_script('jcarousel');

		wp_register_script(
			'wipe',
			get_bloginfo('template_directory') . '/js/wipe.js',
			array('jquery') );
		wp_enqueue_script('wipe');
		
	}
}
add_action('wp_enqueue_scripts', 'ineedmyjava');