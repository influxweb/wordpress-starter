<?php
// Menus


// Register Navigation
function register_royco_menu(){
    register_nav_menus(array( 'header-menu' => __('Header Menu', 'royco') ));
}


// Remove the <div> surrounding the dynamic navigation to cleanup markup
function royco_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}
add_filter('wp_nav_menu_args', 'royco_menu_args');

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function royco_attributes_filter($var){
    return is_array($var) ? array() : '';
}


// Trimm down the amount of code the nav outputs navigation
function royco_nav() {
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '', 
		'container'       => '', 
		'container_class' => '', 
		'container_id'    => '',
		'menu_class'      => '', 
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
add_action('init', 'register_royco_menu');