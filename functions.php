<?php

class Homeet_Functions
{
    public function __construct()
    {
        // style and scripts
        add_action('wp_enqueue_scripts', [$this, 'homeet_styles']);
        add_action('wp_enqueue_scripts', [$this, 'homeet_scripts']);

        //require styles
        $this->require();
    }

    public function homeet_styles()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    }

    public function homeet_scripts()
    {
        wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
    }

    public function require()
    {
        require __DIR__.'/inc/carbon.php';
    }
}

function homeet()
{
    return new Homeet_Functions();
}

homeet();
