<?php

function myplugin_register_books_cpt()
{

    $labels = array(
        'name' => _x('Books', 'post type general name'),
        'singular_name' => _x('Book', 'post type singular name'),
        'menu_name' => __('Books'),
        'name_admin_bar' => __('Book'),
        'add_new' => __('Add new'),
        'add_new_item' => __('Add new book'),
        'new_item' => __('new book'),
        'edit_item' => __('edit book'),
        'view_item' => __('view book'),
        'all_items' => __('all books'),
        'search_items' => __('Search books'),
        'not_found' => __('No books found'),
        'not_found_in_trash' => __('No books in trash')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'books'),
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true,
    );

    register_post_type('book', $args);
}

add_action('init', 'myplugin_register_books_cpt');

function myplugin_register_book_taxonomies()
{
    register_taxonomy('genre', 'book', array(
        'labels' => array(
            'name' => _x('Genres', 'taxonomy general name', 'myplugin'),
            'singular_name' => _x('Genre', 'taxonomy singular name', 'myplugin'),
            'search_items' => __('Search Genres', 'myplugin'),
            'all_items' => __('All Genres', 'myplugin'),
            'parent_item' => __('Parent Genre', 'myplugin'),
            'parent_item_colon' => __('Parent Genre:', 'myplugin'),
            'edit_item' => __('Edit Genre', 'myplugin'),
            'update_item' => __('Update Genre', 'myplugin'),
            'add_new_item' => __('Add New Genre', 'myplugin'),
            'new_item_name' => __('New Genre Name', 'myplugin'),
            'menu_name' => __('Genres', 'myplugin'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'genre'),
        'show_in_rest' => true,
    ));


    register_taxonomy('author', 'book', array(
        'labels' => array(
            'name' => _x('Authors', 'taxonomy general name', 'myplugin'),
            'singular_name' => _x('Author', 'taxonomy singular name', 'myplugin'),
            'search_items' => __('Search Authors', 'myplugin'),
            'all_items' => __('All Authors', 'myplugin'),
            'edit_item' => __('Edit Author', 'myplugin'),
            'update_item' => __('Update Author', 'myplugin'),
            'add_new_item' => __('Add New Author', 'myplugin'),
            'new_item_name' => __('New Author Name', 'myplugin'),
            'menu_name' => __('Authors', 'myplugin')

        ),
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'author'),
        'show_in_rest' => true,
    ));

    register_taxonomy('age_recommendation', 'book', array(
        'labels' => array(
            'name' => _x('Age Recommendations', 'taxonomy general name', 'myplugin'),
            'singular_name' => _x('Age Recommendation', 'taxonomy singular name', 'myplugin'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'age'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'myplugin_register_book_taxonomies');
