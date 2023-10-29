<?php

function add_post_types()
{
    register_post_type('recipes', array(
        'capability_type' => 'recipes',
        'map_meta_cap' => true,
        'supports' => array('title', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'taxonomies'  => array('type'),
        'labels' => array(
            'name' => 'מתכונים',
            'add_new_item' => 'הוסף מתכון חדש',
            'add_new' => 'הוסף מתכון חדש',
            'edit_item' => 'עריכת מתכון',
            'all_items' => "כל המתכונים",
            'singular_name' => "מתכון"
        ),
        'menu_icon' => 'dashicons-text-page'
    ));
}

add_action('init', 'add_post_types');
