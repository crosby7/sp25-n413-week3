<?php

function my_theme_assets()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_theme_assets');
