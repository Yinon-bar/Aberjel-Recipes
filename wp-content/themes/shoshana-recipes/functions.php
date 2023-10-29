
<?php

function enqueue_scripts()
{
    wp_enqueue_style('mainStyle', get_template_directory_uri() . "/build/index.css");
    wp_enqueue_script('mainJs', get_template_directory_uri() . "/build/index.js", array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function theme_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('banner', 1920, 500, true);
    add_image_size('card', 300, 225, true);
    register_nav_menu('header-menu', 'מיקום תפריט ראשי');
}

add_action('after_setup_theme', 'theme_features');

// ביטול אופציית הקטגוריות
function alter_taxonomy_for_post()
{
    unregister_taxonomy_for_object_type('category', 'post');
}
add_action('init', 'alter_taxonomy_for_post');


/**
 * הוספת טוקסונומיות מותאמות אישית
 */
function add_custom_taxonomies()
{
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('type', 'recipe', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x('טוקסונומיות', 'taxonomy general name'),
            'singular_name' => _x('קטגוריה', 'taxonomy singular name'),
            'search_items' =>  __('Search Locations'),
            'all_items' => __('All Locations'),
            'parent_item' => __('Parent Location'),
            'parent_item_colon' => __('Parent Location:'),
            'edit_item' => __('Edit Location'),
            'update_item' => __('Update Location'),
            'add_new_item' => __('הוספת קטגוריה'),
            'new_item_name' => __('New Location Name'),
            'menu_name' => __('קטגוריית אוכל'),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'food_category', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
}
add_action('init', 'add_custom_taxonomies', 0);

add_filter('ai1wm_exclude_content_from_export', 'ignoreFiles');

function ignoreFiles($excludeFilters)
{
    $excludeFilters[] = 'themes/shoshana-recipes/node_modules';
    return $excludeFilters;
}
