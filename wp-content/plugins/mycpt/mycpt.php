<?php
/**
Plugin Name: My CPT plugin
**/

//// Create recipes CPT
function quiz_post_type() {
    register_post_type( 'quiz',
        array(
            'labels' => array(
                'name' => __( 'Quiz' ),
                'singular_name' => __( 'Quiz' )
            ),
            'public' => true,
            'hierarchical'=>false,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'rewrite'   => array( 'slug' => 'my-quiz' ),
            'menu_position' => 5,
            'menu_icon' => 'dashicons-editor-ul',
        // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
        )
    );
    register_post_type( 'options',
        array(
            'labels' => array(
                'name' => __( 'Options' ),
                'singular_name' => __( 'Option' )
            ),
            'public' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'rewrite'   => array( 'slug' => 'my-options' ),
            'menu_position' => 5,
            'menu_icon' => 'dashicons-editor-ol',
        // 'taxonomies' => array('cuisines', 'post_tag') // this is IMPORTANT
        )
    );
}
add_action( 'init', 'quiz_post_type' );

//// Add cuisines taxonomy
function create_recipes_taxonomy() {
    register_taxonomy('cuisines','recipes',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Cuisines', 'taxonomy general name' ),
            'singular_name' => _x( 'Cuisine', 'taxonomy singular name' ),
            'menu_name' => __( 'Cuisines' ),
            'all_items' => __( 'All Cuisines' ),
            'edit_item' => __( 'Edit Cuisine' ), 
            'update_item' => __( 'Update Cuisine' ),
            'add_new_item' => __( 'Add Cuisine' ),
            'new_item_name' => __( 'New Cuisine' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    ));
    register_taxonomy('ingredients','recipes',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Ingredients', 'taxonomy general name' ),
            'singular_name' => _x( 'Ingredient', 'taxonomy singular name' ),
            'menu_name' => __( 'Ingredients' ),
            'all_items' => __( 'All Ingredients' ),
            'edit_item' => __( 'Edit Ingredient' ), 
            'update_item' => __( 'Update Ingredient' ),
            'add_new_item' => __( 'Add Ingredient' ),
            'new_item_name' => __( 'New Ingredient' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    ));
}
//add_action( 'init', 'create_recipes_taxonomy', 0 );