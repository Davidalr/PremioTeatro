<?php

/*
Description: WP Functions - Theme init
Theme: Premio Nacional de Teatro
*/

/* Add Menu */
add_action('init', 'register_my_menus');
function register_my_menus()
{
    register_nav_menus(
        array(
            'menuHeader' => __('Menu Header'),
            'menuFooter' => __('Menu Footer')
        )
    );
}
//add image in posts
add_theme_support('post-thumbnails');