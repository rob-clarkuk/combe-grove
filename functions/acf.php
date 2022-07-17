<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Website Options',
        'menu_title'    => 'Website Options',
        'menu_slug'     => 'website-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Menu Constructor',
        'menu_title'    => 'Menu Constructor',
        'parent_slug'   => 'website-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => '404 Page',
        'menu_title'    => '404 Page',
        'parent_slug'   => 'website-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Events Page',
        'menu_title'    => 'Events Page',
        'parent_slug'   => 'website-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Social Settings',
        'menu_title'    => 'Social Settings',
        'parent_slug'   => 'website-general-settings',
    ));

}

/*------------------------------------*\
    Carousel Shortcode
\*------------------------------------*/

// function slideshow_embed($slideshow) {
//   return '<div class="carousel_hook"></div>';
// }
// add_shortcode('add_carousel', 'slideshow_embed');
