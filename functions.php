<?php
if (function_exists('add_theme_support'))
{
    // Thumbnail Feature Image
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('full', '', '', true); // Full Thumbnail

}

//Registering Stylesheet
function web170_styles(){
    wp_register_style('web170', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('web170'); 
}

add_action('wp_enqueue_scripts', 'web170_styles'); // Register Style

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{   
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Sidebar Front Page'),
        'description' => __('Sidebar on Front Page'),
        'id' => 'sidebar-front-page',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Register Tags
function tags_support_all() { register_taxonomy_for_object_type('post_tag', 'page'); }
add_action('init', 'tags_support_all');






