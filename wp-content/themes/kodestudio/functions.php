<?php
function load_scripts()
{
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.cs', [], '4.5.0', 'all');
    wp_enqueue_script('bootstrap-js', '"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', ['jquery'], '4.5.0', true);
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', [], '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');