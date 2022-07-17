<?php

require_once(get_template_directory().'/functions/init.php');
require_once(get_template_directory().'/functions/menus.php');
require_once(get_template_directory().'/functions/custom-post-type.php');
require_once(get_template_directory().'/functions/breadcrumbs.php');
require_once(get_template_directory().'/functions/sidebars.php');
require_once(get_template_directory().'/functions/pagination.php');
require_once(get_template_directory().'/functions/acf.php');
require_once(get_template_directory().'/functions/actions.php');
require_once(get_template_directory().'/functions/filters.php');
require_once(get_template_directory().'/functions/comments.php');
require_once(get_template_directory().'/functions/tribe.php');


                    // // Custom Excerpts
                    // function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
                    // {
                    //     return 10;
                    // }

                    // // Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
                    // function html5wp_custom_post($length)
                    // {
                    //     return 10;
                    // }

                    // // Create the Custom Excerpts callback
                    // function html5wp_excerpt($length_callback = '')
                    // {
                    //     global $post;
                    //     if (function_exists($length_callback)) {
                    //         add_filter('excerpt_length', $length_callback);
                    //     }
                    //     $output = get_the_excerpt();
                    //     $output = apply_filters('wptexturize', $output);
                    //     $output = apply_filters('convert_chars', $output);
                    //     $output = '<p>' . $output . '</p>';
                    //     echo $output;
                    // }

                    // /* Change Excerpt length */
                    // function custom_excerpt_length( $length ) {
                    //     return 10;
                    // }
                    // add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



// function content($limit) {
//   $content = explode(' ', get_the_content(), $limit);
//   if (count($content)>=$limit) {
//     array_pop($content);
//     $content = implode(" ",$content).'...';
//   } else {
//     $content = implode(" ",$content);
//   }
//   $content = preg_replace('/[.+]/','', $content);
//   $content = apply_filters('the_content', $content);
//   $content = str_replace(']]>', ']]&gt;', $content);
//   return $content;
// }






// // Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
// function remove_thumbnail_dimensions( $html )
// {
//     $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
//     return $html;
// }


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions




// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]





// function is_post_type($type){
//     global $wp_query;
//     if($type == get_post_type($wp_query->post->ID)) return true;
//     return false;
// }




// function shorten_string($string, $wordsreturned){
//   $retval = $string;
//   $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
//   $string = str_replace("\n", " ", $string);
//   $array = explode(" ", $string);
//   if (count($array)<=$wordsreturned)
//   {
//     $retval = $string;
//   }
//   else
//   {
//     array_splice($array, $wordsreturned);
//     $retval = implode(" ", $array)."...";
//   }
//   return $retval;
// }

?>
