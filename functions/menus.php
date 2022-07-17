<?php

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function main_nav_1(){
	wp_nav_menu(
	array(
		'theme_location'  => 'main-menu-1',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'sub-list',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '<span class="js-menu-item-arrow menu-item-arrow"></span>',
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function main_nav_2(){
	wp_nav_menu(
	array(
		'theme_location'  => 'main-menu-2',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'sub-list',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '<span class="js-menu-item-arrow menu-item-arrow"></span>',
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function main_nav_3(){
	wp_nav_menu(
	array(
		'theme_location'  => 'main-menu-3',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'sub-list',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '<span class="js-menu-item-arrow menu-item-arrow"></span>',
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function main_nav_4(){
	wp_nav_menu(
	array(
		'theme_location'  => 'main-menu-4',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'sub-list',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '<span class="js-menu-item-arrow menu-item-arrow"></span>',
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function social_nav(){
    wp_nav_menu(
    array(
        'theme_location'  => 'social-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'utility-list',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function footer_nav(){
    wp_nav_menu(
    array(
        'theme_location'  => 'footer-menu-1',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'footer-links',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function club_menu(){
    wp_nav_menu(
    array(
        'theme_location'  => 'club-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'club__menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}
function club_menu2(){
    wp_nav_menu(
    array(
        'theme_location'  => 'club-menu2',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'club__menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}
function club_menu3(){
    wp_nav_menu(
    array(
        'theme_location'  => 'club-menu3',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'club__menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}


// Register HTML5 Blank Navigation
function register_html5_menu() {
    register_nav_menus(array( // Using array to specify more menus if needed
        'main-menu-1' => __('Main Menu Col 1', 'html5blank'), // Main Navigation
        'main-menu-2' => __('Main Menu Col 2', 'html5blank'), // Main Navigation
        'main-menu-3' => __('Main Menu Col 3', 'html5blank'), // Main Navigation
        'main-menu-4' => __('Main Menu Col 4', 'html5blank'), // Main Navigation
        'social-menu' => __('Social Menu', 'html5blank'), // Sidebar Navigation
        'club-menu' => __('Club Menu 1', 'html5blank'),
        'club-menu2' => __('Club Menu 2', 'html5blank'),
        'club-menu3' => __('Club Menu 3', 'html5blank'),
        'footer-menu-1' => __('Footer Menu', 'html5blank')

    ));
}


// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Filters and actions
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
