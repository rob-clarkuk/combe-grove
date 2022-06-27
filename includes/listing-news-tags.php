<?php

    //single_cat_title();
    function getUriSegments() {
        return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }

    function getUriSegment($n) {
        $segs = getUriSegments();
        return count($segs)>0&&count($segs)>=($n-1)?$segs[$n]:'';
    }

    //echo getUriSegment(2); //returns bar
?>
<?php
    wp_reset_query();

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    if (!isset($args)) {
      $args = array(
        'posts_per_page'=> 8,
        'paged'     	=> $paged,
        'post_type'    	=> 'post',
        'post_status' 	=> 'publish',
        'order' 		=> 'DSC',
        'tag'      => getUriSegment(2),
      );
    }

    $wp_query = new WP_Query( $args );

    $wp_query->query_vars[ 'paged' ] > 1 ? $current = $wp_query->query_vars[ 'paged' ] : $current = 1;
    //set the "paginate_links" array to do what we would like it it. Check the codex for examples http://codex.wordpress.org/Function_Reference/paginate_links

    $pagination = array(
        'base' => @add_query_arg( 'paged', '%#%' ),
        //'format' => '',
        'showall' => false,
        'end_size' => 4,
        'mid_size' => 4,
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'type' => 'plain'
    );

    //build the paging links
    if ( $wp_rewrite->using_permalinks() )
        $pagination[ 'base' ] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    //more paging links
    if ( !empty( $wp_query->query_vars[ 's' ] ) )
        $pagination[ 'add_args' ] = array( 's' => get_query_var( 's' ) );

?>
<ul class="listing listing__news js-pagination-container">
    <?php
        query_posts($args);
        if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

    <li class="listing__news--item">
        <div class="listing__shadow">
            <a href="<?php the_permalink(); ?>">
                <div class="listing__item--content">
                    <h2><?php the_title(); ?> <i></i></h2>
                    <?php /*<time><?php the_time('d F Y'); ?></time>*/ ?>
                    <p><?php echo excerpt(20); ?></p>
                </div>
                <?php

                    $image = get_field('background_image');

                    if( !empty($image) ):

                        // vars
                        $url = $image['url'];
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $caption = $image['caption'];

                        // thumbnail
                        $size = 'medium';
                        $thumb = $image['sizes'][ $size ];
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];

                    ?>

                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />

                <?php endif; ?>
            </a>
            <ul class="listing__item--meta">
                <?php
                    $cats = get_the_tags();
                    //$cat_name = $cats[0]->name;
                    //echo $cat_name;

                    for ($i = 0; $i < count($cats); ++$i) {
                        $cat_names = "";
                        $cat_url = "";

                        $cat_names .= $cats[$i]->name;
                        $cat_url .= $cats[$i]->slug;

                        echo '<li>';
                        echo '<a href="/tag/';
                            echo $cat_url;
                        echo '">';
                            echo $cat_names;
                        echo '</a> ';
                        echo '</li>';
                    }

                ?>
            </ul>
        </div>
    </li>
    <?php endwhile; ?>
    <?php endif; ?>
</ul>

<?php echo '<nav class="pagination">' . paginate_links($pagination) . '</nav>'; ?>

<?php wp_reset_query(); ?>
