<?php 
function custom_theme_styles() {
    
    wp_enqueue_style('global-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/home.css');
    wp_enqueue_style('aboutSite-style', get_template_directory_uri() . '/assets/aboutSite.css');
    wp_enqueue_style('articleSite-style', get_template_directory_uri() . '/assets/articleSite.css');
    wp_enqueue_style('eventSite-style', get_template_directory_uri() . '/assets/eventSite.css');
    wp_enqueue_style('gallerySite-style', get_template_directory_uri() . '/assets/gallerySite.css');
    wp_enqueue_style('patientStories-style', get_template_directory_uri() . '/assets/patientStories.css');
    wp_enqueue_style('videoSite-style', get_template_directory_uri() . '/assets/videoSite.css');
    


    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js');
    wp_enqueue_script('animejs', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_styles');