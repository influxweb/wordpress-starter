<?php
// Remove wordpress functions we dont want or dont need


// Remove NEW Emoji shizzle
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// Remove wordpress nofollow
remove_action( 'wp_head', 'noindex', 1 );


// Remove Admin bar
function remove_admin_bar(){
    return false;
}
add_filter('show_admin_bar', 'remove_admin_bar');


// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html ){
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10);
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); 


// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist){
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}
add_filter('the_category', 'remove_category_rel_from_category_list');


// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);