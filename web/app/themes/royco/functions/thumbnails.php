<?php

// Add post thumbnail support and sizes
if (function_exists('add_theme_support')){
    // Add Menu Support
    add_theme_support('menus');
    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('custom-size', 700, 200, true); 
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}