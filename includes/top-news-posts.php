<?php
    wp_reset_query();

    if (!isset($args2)) {
      $args2 = array(
        'posts_per_page'=> 4,
        'paged'     	=> $paged,
        'post_type'    	=> 'post',
        'post_status' 	=> 'publish',
        'order' 		=> 'DSC'
      );
    }

    $wp_query = new WP_Query( $args2 );

?>
<div class="content content__tint">
	<div class="layout__inner layout__inner--wide">
		<h2>Combe Grove Journal</h2>
		<ul class="listing listing__news">
		    <?php
		        query_posts($args2);
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
	</div>
</div>

<?php wp_reset_query(); ?>
