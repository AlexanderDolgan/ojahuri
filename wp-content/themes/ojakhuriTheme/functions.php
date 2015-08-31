<?php

function theme_styles() {
    /* Bootstrap Core CSS -->*/
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    /* Custom Core CSS -->*/
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/creative.css');
    /* Plugin CSS -->*/
    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.min.css');
    /* font awesome CSS -->*/
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond', 'http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

    /*bootstrap core js*/
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

    /*plugin js*/
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script( 'easing_js', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'fittext_js', get_template_directory_uri() . '/js/jquery.fittext.js', array('jquery'), '', true );
    wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'yandex_map', '//api-maps.yandex.ru/2.1/?lang=ru_RU', array('jquery'), '', true );
    wp_enqueue_script( 'creative_js', get_template_directory_uri() . '/js/creative.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

add_theme_support( 'menus' );

//Get top ancestor for menu navigation

function get_top_ancestor_id() {

    global $post;

    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

// Navigation Menus
function register_theme_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu')
        )
    );
}

?>
