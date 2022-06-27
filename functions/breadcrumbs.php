<?php
/**
 * Conditionally Override Yoast SEO Breadcrumb Trail
 * http://plugins.svn.wordpress.org/wordpress-seo/trunk/frontend/class-breadcrumbs.php
 * -----------------------------------------------------------------------------------
 */

add_filter( 'wpseo_breadcrumb_links', 'wpse_100012_override_yoast_breadcrumb_trail' );

function wpse_100012_override_yoast_breadcrumb_trail( $links ) {
    global $post;

    //if ( is_singular( 'post' ) || is_archive() ) {
    if ( is_singular( 'post' ) ) {
        $breadcrumb[] = array(
            'url' => '/all-news',
            'text' => 'Combe Grove Journal',
        );

        array_splice( $links, 1, -2, $breadcrumb );
    }

    return $links;
}
