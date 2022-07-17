<?php

$posts = get_field('related_posts');

if( $posts ): ?>

    <h3 class="type__centered">Related Posts</h3>
    <ul class="listing listing__news js-pagination-container">
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li class="listing__news--item">
            <div class="listing__shadow">
                <a href="<?php the_permalink(); ?>">
                    <div class="listing__item--content">
                        <h2><?php the_title(); ?> <i></i></h2>
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
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
