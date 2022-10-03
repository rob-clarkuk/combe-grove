<?php
    if( have_rows('row') ):
        while ( have_rows('row') ) : the_row();

            $content_type = get_sub_field('content_type');

            if($content_type == "oembed"){

                echo '
                <div class="layout__inner content__padded layout__inner--condensed layout--higher">
                    <div class="video__wrapper">
                    ' . get_sub_field('embed_content') . '
                    </div>
                </div>';

            } elseif($content_type == "gallery"){

                if( have_rows('gallery') ):
                    while( have_rows('gallery') ): the_row();

                    $title = get_sub_field('gallery_title');
                    $intro = get_sub_field('gallery_intro');
					$columns = get_sub_field('maximum_columns');

                    echo '
                    <div class="gallery__container layout--higher gallery__layout--' . $columns . '">
                        <div class="layout__inner content__padded layout__inner--condensed">';
                        if($title){
                            echo '<h3>' . $title . '</h3>';
                        }
                        if($intro){
                            echo '<p>' . $intro . '</p>';
                        }
                        echo '</div><div class="layout__inner">';

                            if( have_rows('images') ):
                                echo '<ul class="gallery__wrapper">';
                                while ( have_rows('images') ) : the_row();

                                    $image = get_sub_field('image');

                                    if(!empty($image))
                                    {
                                        // vars
                                        $size = 'thumbnail';
                                        $size2 = 'large';
	                                    $thumb = $image['sizes'][ $size ];
                                        $master = $image['sizes'][ $size2 ];

                                    	echo '<li class="gallery__item"><a data-fancybox="gallery" href="' . $master . '"><img src="' . $thumb . '"></a></li>';
                                    }

                                endwhile;
                                echo '</ul>';

                            endif;

                        echo '</div>
                    </div>';
                    endwhile;
                endif;

            } elseif($content_type == "content"){

                echo '<div class="layout__inner content__padded layout__inner--condensed layout--higher type__content">' . get_sub_field('content_block') . '</div>';

            } elseif($content_type == "accord"){

                get_template_part( 'includes/blocks/block', 'accordion' );

            } elseif($content_type == "cta"){

                if( have_rows('call_to_action') ):
                    while( have_rows('call_to_action') ): the_row();

                    echo '
                    <div class="content__padded content__centered layout--higher">
                        <a href="' . get_sub_field('button_link') . '" class="button button__cta">' . get_sub_field('button_text') . '</a>
                    </div>
                    ';
                    endwhile;
                endif;

            } elseif($content_type == "promos"){

                if( have_rows('promos') ):

                    echo '<div class="layout__inner layout__inner--wide layout--higher"><div class="promo__wrapper">';
                    while( have_rows('promos') ): the_row();

                    $promo_image = get_sub_field('image');

                    if(!empty($promo_image))
                    {
                        // vars
                        $size = 'medium';
                        $thumb = $promo_image['sizes'][ $size ];

                        echo '<a href="' . get_sub_field('link') . '" class="promo">
                                <img src="' . $thumb . '">
                                <h3>' . get_sub_field('title') . '</h3></a>';
                    }


                    endwhile;
                    echo '</div></div>';
                endif;

            }
        endwhile;
    endif;
?>
