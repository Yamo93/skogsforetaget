<?php
    // Registrerar meny
    add_action('init', 'register_my_menus');

    function register_my_menus() {
        register_nav_menus(array(
            'main-menu' => 'Toppmeny',
            'footer_menu' => 'Fotmeny'
        ));
    }

    add_theme_support( 'post-thumbnails' ); 

    if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Sidebar Widgets',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="newsfeed__title">',
    'after_title' => '</h2>',
    )
    );

    function custom_excerpt_length( $length ) {
        return 15;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>