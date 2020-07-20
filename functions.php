<?php
    // *npm run css* pour compiler le css
    function blog_setup() {
        wp_register_style('main', get_stylesheet_directory_uri() . '/style.css');
        wp_enqueue_style('main', NULL, microtime(), true);

        wp_register_script('main_js', get_stylesheet_directory_uri() .'/assets/js/main.js');
        wp_enqueue_script('main_js', '', [], false, true);
        }
    add_action('wp_enqueue_scripts', 'blog_setup');
   
       
    //Load JS

    //Theme Options
    add_theme_support('menus');
    //add to upload an image
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    //To be able to use html5 for those 
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
    );
    add_theme_support('widgets');
    add_theme_support('custom-header', [
        'height' => 800,
        'width' => 1360
    ]);

    //Menus
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu Location',
            'footer-menu' => 'Footer Menu Location'
        )
    );

    //Manga post type
    function manga_custom_post_type(){
        register_post_type('mangas',
        array(
            'rewrite' => array('slug' => 'mangas'),
            'labels' => array(
                'name' => 'Mangas',
                'singular_name' => 'Manga',
                'add_new_item' => 'Add New Manga',
                'edit_item' => 'Edit Manga'
            ),
            'menu-icon' => 'dashicons-book-alt',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            ),
            'taxonomies' => array('category')   
            )
        );
    }
//Anime post type
    function anime_custom_post_type() {
        register_post_type('animes',
        array(
            'rewrite' => array('slug' => 'animes'),
            'labels' => array(
                'name' => 'Animes',
                'singular_name' => 'Anime',
                'add_new_item' => 'Add New Anime',
                'edit_item' => 'Edit Anime'
            ),
            'menu-icon' => 'dashicons-video-alt2',
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array('category'),
            'supports' => array('title', 'thumbnail', 'editor','excerpt', 'comments'),

            ),
        );
    }
    add_action('init','manga_custom_post_type');
    add_action('init', 'anime_custom_post_type');
    


    //Register sidebars
    function my_sidebars() {
       register_sidebar(
           array(
               'name' => 'Page Sidebar',
               'id' => 'page-sidebar',
               'before-title' => '<h4 class="widget-title">',
               'after_title' => '</h4>'
           )
           );
    }
    add_action('widgets_init', 'my_sidebars');

    ?>