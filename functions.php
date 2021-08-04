<?php

class Homeet_Functions
{
    public function __construct()
    {
        // style and scripts
        add_action('wp_enqueue_scripts', [$this, 'bootscore_5_child_enqueue_styles']);
    }

    public function bootscore_5_child_enqueue_styles()
    {

        // style.css
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

        // custom.js
        wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
    }
}

function homeet()
{
    return new Homeet_Functions();
}

homeet();
