<?php 
// Enquire Scripts and Styles Correctly


// Load scripts (header.php)
function royco_header_scripts(){
    if (!is_admin()) {
    	// Reove jquery and add latest version to footer only on the front end
    	wp_deregister_script('jquery');
    	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);
    	wp_enqueue_script('jquery');
    	
    	// Add our custom function file
        wp_register_script('roycoscripts', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true);
        wp_enqueue_script('roycoscripts');
        
        // Add another script
        //wp_register_script('scriptname', get_template_directory_uri() . '/js/.js', array(), '1.0.0', true);
        //wp_enqueue_script('scriptname');
    }
}
add_action('init', 'royco_header_scripts');

// Load CSS (header.php)
function royco_styles(){
   	wp_register_style('royco', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('royco');
}
add_action('wp_enqueue_scripts', 'royco_styles');


// Remove 'text/css' from our enqueued stylesheet
function royco_style_remove($tag){
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}
add_filter('style_loader_tag', 'royco_style_remove');