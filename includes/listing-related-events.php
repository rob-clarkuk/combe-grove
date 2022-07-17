<?php
    wp_reset_query();

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    if (!isset($args)) {
      $args = array(
        'posts_per_page'=> 4,
        'paged'     	=> $paged,
        'post_type'    	=> 'events',
        'post_status' 	=> 'publish',
        'order' 		=> 'DSC'
      );
    }
    $wp_query = new WP_Query( $args );
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
                    <h3><?php the_title(); ?> <i></i></h3>
                    <time><?php the_time('d F Y'); ?></time>
                    <p><?php echo excerpt(20); ?></p>
                </div>
                <?php

                    $image = get_field('thumbnail');

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
                        echo '</li><li><span>|</span></li>';
                    }

                ?>
            </ul>
        </div>
    </li>
    <?php endwhile; ?>
    <?php endif; ?>
</ul>

<?php wp_reset_query(); ?>
