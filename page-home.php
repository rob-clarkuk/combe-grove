<?php
    // Template name: Home Page
    get_header();
?>
    <section class="home__carousel--wrapper">
        <div class="header__heading">
            <?php if (get_field('header_subheading')){;?>
                <h2 class="header__subheading"><?php the_field('header_subheading');?></h2>
            <?php };?>
        </div>
        




        <?php
			$use_header_video = get_field('use_header_video');
			if($use_header_video == "no"){
		?>
			<div class="js-carousel home__carousel">
	            <?php
	                if( have_rows('carousel') ):
	                    while ( have_rows('carousel') ) : the_row();
	                        echo '
	                            <div class="home__carousel--item" style="background-image: url(' . get_sub_field('image') . ');">
	                                <div class="home__carousel--content">
	                                    <p>' . get_sub_field('strapline') . '</p>';
	                                echo '</div>
	                            </div>
	                        ';

	                    endwhile;
	                endif;
	            ?>
	        </div>
 		<?php
	} elseif($use_header_video == "yes"){
		?>
			<style>
				.home__video {
					overflow: hidden;
				}

				.home__video video {
					object-fit: cover;
					height: 100vh;
					width: 100vw;
				}
			</style>
			<div class="home__carousel home__video">
				<video muted autoplay playsinline loop>
				    <source src="<?php the_field('video_file'); ?>" type="video/mp4"/>
				</video>
			</div>
		<?php } ?>

        <div class="home__strapline">
            <h2><?php the_field('header_strapline'); ?></h2>
        </div>

		<?php
			$add_video_play_button = get_field('add_video_play_button');
			if($add_video_play_button == "yes" && $use_header_video == "yes"){
		?>
			<a href="<?php the_field('popup_video_link'); ?>" data-fancybox class="home__video--play">View the video with sound</a>
		<?php } ?>
        <a href="" class="home__down-arrow js__home-scroll"></a>
    </section>

	<section class="module--2-cols">
		<div class="layout__inner">
			<?php
                if( have_rows('2_column_content') ):
                    while ( have_rows('2_column_content') ) : the_row();
                        echo '
                            <div class="columns-2__row">
								<img src="' . get_sub_field('image') . '" alt="' . get_sub_field('image_alt_text') . '" class="columns-2__image" />
                                <div class="columns-2__content">
                                    <h2>' . get_sub_field('title') . '</h2>
									' . get_sub_field('content');

									$button_text = get_sub_field('button_text');
									if($button_text != ""){
                                    	echo '<a href="'. get_sub_field('button_url') .'" class="button">'. get_sub_field('button_text') .'</a>';
									}
                                echo '</div>
                            </div>
                        ';

                    endwhile;
                endif;
            ?>
		</div>
	</section>

    <section class="content js__scroll-target">
	    <div class="content__tint">

            <div class="layout__inner layout__inner--wide">

            <?php
                // Promo Row
                if( have_rows('promos') ):
                    echo '<div class="promo__wrapper promo__wrapper--home">';
                    while( have_rows('promos') ): the_row();

                    $promo_image = get_sub_field('image');

                    if(!empty($promo_image))
                    {
                        // vars
                        $size = 'medium';
                        $thumb = $promo_image['sizes'][ $size ];

                        echo '
                            <a href="' . get_sub_field('link') . '" class="promo">
                                <img src="' . $thumb . '">
                                <h3>' . get_sub_field('title') . '</h3>
                            </a>';
                    }


                    endwhile;
                    echo '</div>';
                endif;
            ?>
			</div>

			<?php include 'includes/newsletter.php'; ?>

			<div class="layout__inner layout__inner--wide">

			<?php
                $location = get_field('location');
                if( $location['title'] != "" ):
            ?>
            	<div class="home__group">
                    <h2><?php echo $location['title']; ?></h2>
        			<p class="text__feature--red"><?php echo $location['strapline']; ?></p>
                    <p><?php echo $location['intro']; ?></p>
                    <div class="home__group--row">
                    	<img src="<?php echo $location['left_image']; ?>" class="no-mobile" />
                        <img src="<?php echo $location['centre_image']; ?>" />
                        <img src="<?php echo $location['right_image']; ?>" class="no-medium" />
                    </div>
            	</div>
            <?php endif; ?>

            <?php
                $eventsworkshop = get_field('events_workshops');
                if( $eventsworkshop ):
            ?>
            	<div class="home__group">
                    <?php
						if($eventsworkshop['title'] != ""){
					?>
						<h2><?php echo $eventsworkshop['title']; ?></h2>
					<?php } ?>
					<?php
						if($eventsworkshop['strapline'] != ""){
					?>
						<p class="text__feature--green"><?php echo $eventsworkshop['strapline']; ?></p>
					<?php } ?>
					<?php
						if($eventsworkshop['intro'] != ""){
					?>
						<p><?php echo $eventsworkshop['intro']; ?></p>
					<?php } ?>



                    <div class="home__group--row">
                        <ul class="listing listing__news home__listing">
                        <?php
                            $events = tribe_get_events( array(
                                'posts_per_page' => 2,
                                'start_date' => date( 'Y-m-d H:i:s' ),
								'tax_query'=> array(
									array(
										'taxonomy' => 'tribe_events_cat',
										'field' => 'slug',
										'terms' => 'combe-grove-events'
									)
								)
                            ) );

                            foreach ( $events as $event ) {
                        ?>
                        <li class="listing__news--item home__listing--item">
                            <div class="listing__shadow">
                                <a href="<?php echo esc_url( tribe_get_event_link($event) ); ?>">
                                    <div class="listing__item--content">
                                        <h3 class="fauxh2"><?php echo $event->post_title; ?> <i></i></h3>

                                        <p><?php echo $event->post_excerpt; ?></p>
                                    </div>
                                    <?php $thumb = ( has_post_thumbnail( $event->ID ) ) ? get_the_post_thumbnail( $event->ID, 'large' ) : '<img src="' . esc_url( trailingslashit( Tribe__Events__Pro__Main::instance()->pluginUrl ) . 'src/resources/images/tribe-related-events-placeholder.png' ) . '" alt="' . esc_attr( get_the_title( $post->ID ) ) . '" />'; ?>

                    			    <?php echo $thumb ?>
                                </a>
                                <div class="listing__item--meta">
                                    <time><?php
                                        if ( $event->post_type == Tribe__Events__Main::POSTTYPE ) {
                                            echo tribe_events_event_schedule_details( $event );
                                        }
                                    ?></time>
                                </div>
                            </div>
                        </li>

                        <?php } ?>
                        </ul>

                        <a href="<?php echo $eventsworkshop['promo_link']; ?>" class="home__promo home__promo--bottomalign">
                            <img src="<?php echo $eventsworkshop['promo_image']; ?>">
                            <div class="home__pullout--content">
                                <h3><?php echo $eventsworkshop['promo_title']; ?></h3>
                                <p><?php echo $eventsworkshop['promo_strapline']; ?> <i></i></p>
                            </div>
                        </a>

                    </div>

                    <?php
                        if( have_rows('call_to_action') ):
                            while( have_rows('call_to_action') ): the_row();

                            echo '
                            <div class="content__padded content__centered">
                                <a href="' . get_sub_field('button_link') . '" class="button button__cta button__feature--4">' . get_sub_field('button_text') . '</a>
                            </div>
                            ';
                            endwhile;
                        endif;
                    ?>
            	</div>
            <?php endif; ?>

            </div>

        </div>
    </section>

<?php get_footer(); ?>
