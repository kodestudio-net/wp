<?php
function load_scripts()
{
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', ['jquery'], '4.5.0', true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', [], '4.5.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', [], '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

function kodestudio_config()
{
    register_nav_menus([
        'kodestudio_main_menu' => 'Main Menu',
        'kodestudio_footer_menu' => 'Footer Menu'
    ]);
    $args = ['height' => 225, 'width' => 1920];
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['video', 'image', 'audio']);
}

add_action('after_setup_theme', 'kodestudio_config', 0);
add_action('widgets_init','kodestudio_sidebars');

function kodestudio_sidebars(){
    register_sidebar([
        'name'=>'Home Page Sidebar',
        'id'=>'sidebar-1',
        'description'=>'This is home page sidebar section',
        'before_widget'=>'<div class="widget-wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
    ]);
    register_sidebar([
        'name'=>'Blog Sidebar',
        'id'=>'sidebar-2',
        'description'=>'This is blog sidebar section',
        'before_widget'=>'<div class="widget-wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
    ]);
}