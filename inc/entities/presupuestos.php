<?php

class Homeet_Presupuestos
{
    public function __construct()
    {
        add_action('init', [$this, 'cpts_presupuestos']);
        add_action('init', [$this, 'taxes_categorias']);
    }

    /**
     * Post Type: Presupuestos.
     */

    public function cpts_presupuestos()
    {

        /**
         * Post Type: Presupuestos.
         */

        $labels = [
            'name' => __('Presupuestos', 'bootscore'),
            'singular_name' => __('Presupuesto', 'bootscore'),
            'menu_name' => __('Presupuestos', 'bootscore'),
        ];

        $args = [
            'label' => __('Presupuestos', 'bootscore'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rest_base' => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => false,
            'show_in_menu' => false,
            'show_in_nav_menus' => false,
            'delete_with_user' => false,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => ['slug' => 'presupuestos', 'with_front' => true],
            'query_var' => true,
            'menu_icon' => 'dashicons-money',
            'supports' => ['title', 'editor'],
            'show_in_graphql' => true,
            'graphql_single_name' => 'Presupuesto',
            'graphql_plural_name' => 'Presupuestos',
        ];

        register_post_type('presupuestos', $args);
    }

    /**
     * Taxonomy: Categorías.
     */
    public function taxes_categorias()
    {



        $labels = [
            'name' => __('Categorías', 'bootscore'),
            'singular_name' => __('Categoría', 'bootscore'),
            'menu_name' => __('Categorías', 'bootscore'),
        ];


        $args = [
            'label' => __('Categorías', 'bootscore'),
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => false,
            'show_in_nav_menus' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'categorias', 'with_front' => true,  'hierarchical' => true,],
            'show_admin_column' => false,
            'show_in_rest' => true,
            'rest_base' => 'categorias',
            'rest_controller_class' => 'WP_REST_Terms_Controller',
            'show_in_quick_edit' => false,
            'show_in_graphql' => true,
            'graphql_single_name' => 'Categoría',
            'graphql_plural_name' => 'Categorías',
        ];
        register_taxonomy('categorias', ['presupuestos'], $args);
    }
}

function homeet_presupuestos()
{
    return new Homeet_Presupuestos();
}

homeet_presupuestos();
