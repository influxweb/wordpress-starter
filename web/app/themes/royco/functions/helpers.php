<?php
// Helpers


// Add page slug to body class
function add_slug_to_body_class($classes){
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }
    return $classes;
}
add_filter('body_class', 'add_slug_to_body_class');

// Custom Excerpts
function royco_excerpt($length){
    return 20;
}


// Custom View Article link to Post
function royco_view_article($more){
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'royco') . '</a>';
}
add_filter('excerpt_more', 'royco_view_article');

// YouTube video width 100%
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;

function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}


// Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'do_shortcode');


// Remove <p> tags in Dynamic Sidebars (better!)
add_filter('widget_text', 'shortcode_unautop');


// Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'shortcode_unautop');


// Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode');

// Remove <p> tags from Excerpt altogether
remove_filter('the_excerpt', 'wpautop');