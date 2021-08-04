<?php

class Homeet_Admin
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'main_menu']);
        add_action('admin_menu', [$this, 'presupuestos_menu']);
        add_action('admin_menu', [$this, 'categorias_menu']);
    }

    public function main_menu()
    {
        add_menu_page(
            __('Homeet', 'bootscore'),
            'Homeet',
            'manage_options',
            'homeet_options',
            [$this, 'main_page'],
            'dashicons-welcome-widgets-menus',
            2
        );
    }

    public function presupuestos_menu()
    {
        add_submenu_page(
            'homeet_options',
            __('Presupuestos', 'bootscore'),
            __('Presupuestos', 'bootscore'),
            'edit_posts',
            'edit.php?post_type=presupuestos'
        );
    }

    public function categorias_menu()
    {
        add_submenu_page(
            'homeet_options',
            __('Categorías', 'bootscore'),
            __('Categorías', 'bootscore'),
            'edit_posts',
            'edit-tags.php?taxonomy=categorias&post_type=presupuestos'
        );
    }

    public function main_page()
    {
        echo 'main page';
    }
}

function homeet_admin()
{
    return new Homeet_Admin();
}

homeet_admin();
