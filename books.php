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