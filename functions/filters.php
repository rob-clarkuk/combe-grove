<?php

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar


/*------------------------------------*\
    Allow all post types on tag page
\*------------------------------------*/
function post_type_tags_fix($request) {
    if ( isset($request['tag']) && !isset($request['post_type']) )
    $request['post_type'] = 'any';
    return $request;
}
add_filter('request', 'post_type_tags_fix');

function add_search_results( $query ) {
 if ( $query->is_search ) { $query->set( 'post_type', array( 'work' )); }
 return $query;
}
add_filter( 'the_search_query', 'add_search_results' );


/*------------------------------------*\
    Allow Search to index ACF
\*------------------------------------*/
//
// Join posts and postmeta tables -  http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
//
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

///
// Modify the search query with posts_where -  http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
//
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

///
// Prevent duplicates - http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
//
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );



/*------------------------------------*\
    Disable responsive image support
\*------------------------------------*/

// Clean the up the image from wp_get_attachment_image()
add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['sizes'] ) )
        unset( $attr['sizes'] );

    if( isset( $attr['srcset'] ) )
        unset( $attr['srcset'] );

    return $attr;

 }, PHP_INT_MAX );

// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_empty_array',  PHP_INT_MAX );

// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_empty_array', PHP_INT_MAX );

// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );



// Add Filters
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
//add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height attributes to thumbnails
//add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height attributes to post images


// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether
