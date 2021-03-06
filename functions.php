<?php

show_admin_bar(false);

function innatePerspective_resources() {
    
    // load stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'innatePerspective_resources');

// load javascripts
function js_init() {
    if (!is_admin()) {
        // jquery
        wp_deregister_script('jquery');
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', false, '1.12.4', true);
        wp_enqueue_script('jquery');
        // common.js
        wp_enqueue_script('my_script', get_bloginfo('template_url') . '/js/dist/common.js', array('jquery'), '0.1.0', true);
    }
}
add_action('init', 'js_init');


// html layout - open grid-container tag
function openGridContainer() {
    echo "\n\t\t\t<div class=\"grid-container\">\n";
}

// html layout - close grid-container tag
function closeGridContainer() {
    echo "\t\t</div>";
}

// html layout - open content tag
function openContent() {
    echo "\t\t\t\t<section class=\"content\"><!-- BEGIN Page Content -->\n";
}

// html layout - close content tag
function closeContent() {
    echo "\t\t\t\t</section><!-- END Page Content -->\n";
}


// custom excerpt word count length
function custom_excerpt_length() {
    return 55;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// theme setup
function innatePerspective_setup() {
    
    // navigation menus
    register_nav_menus(array(
        'header_l' => __('Left Header Navigation Menu'),
        'header_r' => __('Right Header Navigation Menu'),
    ));
    
    // add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, array('left', 'top'));
    
    // add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
    
}
add_action('after_setup_theme', 'innatePerspective_setup');

// add custom logo support
function themeslug_theme_customizer( $wp_customize ) {
    
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    
    $wp_customize->add_setting( 'themeslug_logo' );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    ) ) );
    
}
add_action( 'customize_register', 'themeslug_theme_customizer' );