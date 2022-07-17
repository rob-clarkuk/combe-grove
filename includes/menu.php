<nav class="nav__main js-site-menu">
    <a href="" class="nav__close js-nav__close"></a>

    <ul class="nav__utility--expanded">
        <li>
            <a href="/" class="button__home nav__utility--home">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4242.089 3033.993 16.003 14.62"><g id="Group_1917" data-name="Group 1917" class="cls-1" transform="translate(-4242.089 3033.993)"><path id="Path_2482" data-name="Path 2482" class="cls-2" d="M0 6.915h1.976v7.705h4.346V9.286h3.359v5.334h4.347V6.915H16L8.021 0z"/><path id="Path_2483" data-name="Path 2483" class="cls-2" d="M55 2v1.185l1.581 1.383V2z" transform="translate(-44.134 -1.605)"/></g></svg>
            </a>
        </li>
        <li><a href="<?php the_field('book_now_url', 'options'); ?>" class="button button__feature button__feature--3" target="_blank">Book Now</a></li>
        <li><a href="<?php the_field('talk_to_us_button_link', 'options'); ?>" class="button button__feature button__feature--2">Talk to us</a></li>
    </ul>

    <ul class="nav__row nav__row--large">
        <li class="nav__title">
            <h4 class="nav__title--1"><?php the_field('column_1_menu_label', 'options'); ?></h4>
            <ul class="nav__row--submenu nav__row--submenu-1">
                <li><?php main_nav_1(); ?></li>
            </ul>
        </li>
        <li class="nav__title">
            <h4 class="nav__title--2"><?php the_field('column_2_menu_label', 'options'); ?></h4>
            <ul class="nav__row--submenu nav__row--submenu-2">
                <li><?php main_nav_2(); ?></li>
            </ul>
        </li>
        <li class="nav__title">
            <h4 class="nav__title--3"><?php the_field('column_3_menu_label', 'options'); ?></h4>
            <ul class="nav__row--submenu nav__row--submenu-3">
                <li><?php main_nav_3(); ?></li>
            </ul>
        </li>
        <li class="nav__title">
            <ul class="nav__row--submenu nav__row--submenu-4">
                <h4><?php the_field('column_4_menu_label', 'options'); ?></h4>
                <li><?php main_nav_4(); ?></li>
            </ul>
        </li>
    </ul>

</nav>

<nav class="nav__main js-club-menu">
    <a href="" class="nav__close js-nav__close"></a>
    <ul class="nav__row nav__row--large nav__row--responsive">
        <li class="nav__title">
            <h4 class="nav__title--1">Club</h4>
            <ul class="nav__row--submenu nav__row--submenu-1 nav__row--submenu-wide">
                <li><?php club_menu(); ?></li>
            </ul>
        </li>
        <li class="nav__title">
            <h4 class="nav__title--2">Activities</h4>
            <ul class="nav__row--submenu nav__row--submenu-1 nav__row--submenu-wide">
                <li><?php club_menu2(); ?></li>
            </ul>
        </li>
        <li class="nav__title">
            <h4 class="nav__title--3">Membership</h4>
            <ul class="nav__row--submenu nav__row--submenu-1 nav__row--submenu-wide">
                <li><?php club_menu3(); ?></li>
            </ul>
        </li>
    </ul>
</nav>


<nav id="ml-menu" class="nav__main--small menu">
    <ul class="nav__utility--expanded">
        <li>
            <a href="/" class="button__home button__home--mobile nav__utility--home">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4242.089 3033.993 16.003 14.62"><g id="Group_1917" data-name="Group 1917" class="cls-1" transform="translate(-4242.089 3033.993)"><path id="Path_2482" data-name="Path 2482" class="cls-2" d="M0 6.915h1.976v7.705h4.346V9.286h3.359v5.334h4.347V6.915H16L8.021 0z"/><path id="Path_2483" data-name="Path 2483" class="cls-2" d="M55 2v1.185l1.581 1.383V2z" transform="translate(-44.134 -1.605)"/></g></svg>
            </a>
        </li>
        <li><a href="<?php the_field('book_now_url', 'options'); ?>" class="button button__feature button__feature--3" target="_blank">Book Now</a></li>
        <li><a href="<?php the_field('talk_to_us_button_link', 'options'); ?>" class="button button__feature button__feature--2">Talk to us</a></li>
    </ul>
    <button class="action action--close" aria-label="Close Menu"></button>
    <div class="social--mobile">
        <?php include 'social.php'; ?>
    </div>
    <div class="menu__wrap">
        <ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
            <li class="nav__title menu__item">
                <h4 class="nav__title--1">
                    <a href="#" class="menu__link" data-submenu="submenu-1"><?php the_field('column_1_menu_label', 'options'); ?></a>
                </h4>
            </li>
            <li class="nav__title menu__item">
                <h4 class="nav__title--2">
                    <a href="#" class="menu__link" data-submenu="submenu-2"><?php the_field('column_2_menu_label', 'options'); ?></a>
                </h4>
            </li>
            <li class="nav__title menu__item">
                <h4 class="nav__title--3">
                    <a href="#" class="menu__link" data-submenu="submenu-3"><?php the_field('column_3_menu_label', 'options'); ?></a>
                </h4>
            </li>
            <li class="nav__title menu__item">
                <h4 class="nav__title--4">
                    <a href="#" class="menu__link" data-submenu="submenu-4"><?php the_field('column_4_menu_label', 'options'); ?></a>
                </h4>
            </li>
        </ul>

        <?php
            // Build top level links

            if( have_rows('nourish_relax', 'options') ):
                echo '<ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu" aria-label="Nourish &amp; Relax">';
                while ( have_rows('nourish_relax', 'options') ) : the_row();
                    $has_sub_menu = get_sub_field('has_sub_menu');
                    if($has_sub_menu == "yes"){
                        echo '<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-' . get_sub_field("sub_menu_id") . '" href="#">' . get_sub_field("menu_name") . '</a></li>';
                    } else {
                        // $links = get_sub_field('link_selector');
                        // if( $links ){
                    	// 	foreach( $links as $link ){
                        //         echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_permalink($link->ID) . '">' . get_sub_field("menu_name") . '</a></li>';
                    	// 	}
                        // }

						if( have_rows('link_list') ):
    						while ( have_rows('link_list') ) : the_row();

        						echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_sub_field('url') . '">' . get_sub_field('text') . '</a></li>';

    						endwhile;
						endif;
                    }
                endwhile;
                echo '</ul>';
            endif;

            if( have_rows('retreat_learn', 'options') ):
                echo '<ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Retreat &amp; Learn">';
                while ( have_rows('retreat_learn', 'options') ) : the_row();
                    $has_sub_menu = get_sub_field('has_sub_menu');
                    if($has_sub_menu == "yes"){
                        echo '<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-' . get_sub_field("sub_menu_id") . '" href="#">' . get_sub_field("menu_name") . '</a></li>';
                    } else {
                        // $links = get_sub_field('link_selector');
                        // if( $links ){
                    	// 	foreach( $links as $link ){
                        //         echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_permalink($link->ID) . '">' . get_sub_field("menu_name") . '</a></li>';
                    	// 	}
                        // }

						if( have_rows('link_list') ):
    						while ( have_rows('link_list') ) : the_row();

        						echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_sub_field('url') . '">' . get_sub_field('text') . '</a></li>';

    						endwhile;
						endif;
                    }
                endwhile;
                echo '</ul>';
            endif;

            if( have_rows('news_about', 'options') ):
                echo '<ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu" aria-label="News &amp; About">';
                while ( have_rows('news_about', 'options') ) : the_row();
                    $has_sub_menu = get_sub_field('has_sub_menu');
                    if($has_sub_menu == "yes"){
                        echo '<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-' . get_sub_field("sub_menu_id") . '" href="#">' . get_sub_field("menu_name") . '</a></li>';
                    } else {
                        // $links = get_sub_field('link_selector');
                        // if( $links ){
                    	// 	foreach( $links as $link ){
                        //         echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_permalink($link->ID) . '">' . get_sub_field("menu_name") . '</a></li>';
                    	// 	}
                        // }

						if( have_rows('link_list') ):
    						while ( have_rows('link_list') ) : the_row();

        						echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_sub_field('url') . '">' . get_sub_field('text') . '</a></li>';

    						endwhile;
						endif;
                    }
                endwhile;
                echo '</ul>';
            endif;

            if( have_rows('other', 'options') ):
                echo '<ul data-menu="submenu-4" id="submenu-4" class="menu__level" tabindex="-1" role="menu" aria-label="Other">';
                while ( have_rows('other', 'options') ) : the_row();
                    $has_sub_menu = get_sub_field('has_sub_menu');
                    if($has_sub_menu == "yes"){
                        echo '<li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-' . get_sub_field("sub_menu_id") . '" href="#">' . get_sub_field("menu_name") . '</a></li>';
                    } else {
                        // $links = get_sub_field('link_selector');
                        // if( $links ){
                    	// 	foreach( $links as $link ){
                        //         echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_permalink($link->ID) . '">' . get_sub_field("menu_name") . '</a></li>';
                    	// 	}
                        // }

						if( have_rows('link_list') ):
    						while ( have_rows('link_list') ) : the_row();

        						echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_sub_field('url') . '">' . get_sub_field('text') . '</a></li>';

    						endwhile;
						endif;
                    }
                endwhile;
                echo '</ul>';
            endif;

        ?>

        <?php
            // Build Sub menus

            if( have_rows('menu_sub_level_2s', 'options') ):

                while ( have_rows('menu_sub_level_2s', 'options') ) : the_row();
                    echo '<ul data-menu="submenu-' . get_sub_field("sub_menu_id") . '" id="submenu-' . get_sub_field("sub_menu_id") . '" class="menu__level" tabindex="-1" role="menu" aria-label="' . get_sub_field("sub_parent_menu_name") . '">';

                    // $articles = get_sub_field('link_selector');
                    // if( $articles ){
                	// 	foreach( $articles as $article ){
                    //         echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_permalink($article->ID) . '">' . $article->post_title . '</a></li>';
                	// 	}
                    // }

					if( have_rows('link_list') ):
						while ( have_rows('link_list') ) : the_row();

							echo '<li class="menu__item" role="menuitem"><a class="menu__link" href="' . get_sub_field('url') . '">' . get_sub_field('text') . '</a></li>';

						endwhile;
					endif;

                    echo '</ul>';
                endwhile;

            endif;

        ?>

    </div>
</nav>
