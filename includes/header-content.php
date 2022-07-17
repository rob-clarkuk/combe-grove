<?php
	// $current = $post->ID;
	// $parent = $post->post_parent;
	// $grandparent_get = get_post($parent);
	// $grandparent = $grandparent_get->post_parent;
	// $pageTitle = get_the_title();
    //
	// if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {
	// 	$thisPageParent = get_the_title($grandparent);
	// } else {
	// 	$thisPageParent = get_the_title($parent);
	// 	$thisSection = get_the_title($parent);
	// }
    //
	// $thisPageParent = strToLower($thisPageParent);
	// $thisPageParent = str_replace(' ', '-', $thisPageParent);

?>
<?php// echo $thisPageParent; ?>
<div class="site-wrapper js-site-wrapper">

	<!-- header -->
	<header class="header js-header">

        <div class="header__fixed">
            <div class="layout__inner">
                <a class="js-menu menu__hamburger" href=""><span></span>MENU</a>
                <button class="action action--open" aria-label="Open Menu"></button>

                <nav class="nav__utility">
                    <ul>
                        <li>
                            <a href="/" class="button__home">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4242.089 3033.993 16.003 14.62"><g id="Group_1917" data-name="Group 1917" class="cls-1" transform="translate(-4242.089 3033.993)"><path id="Path_2482" data-name="Path 2482" class="cls-2" d="M0 6.915h1.976v7.705h4.346V9.286h3.359v5.334h4.347V6.915H16L8.021 0z"/><path id="Path_2483" data-name="Path 2483" class="cls-2" d="M55 2v1.185l1.581 1.383V2z" transform="translate(-44.134 -1.605)"/></g></svg>
                            </a>
                        </li>
                        <li class="no-mobile">
                            <div class="search">
                                <form class="search__form" method="get" action="<?php echo home_url(); ?>" role="search">
									<input type="hidden" name="search-type" value="normal" />
                                    <label for="searchForm">Search</label>
                                    <input id="searchForm" class="search__input" type="search" name="s" placeholder="Search">
                                    <button class="search__submit" type="submit" role="button">Search</button>
                                </form>
                            </div>
                        </li>
                        <li class="no-mobile">
                            <div class="social__wrapper social__wrapper--header">
                                <?php include 'social.php'; ?>
                            </div>
                        </li>
						<?php
							$show_button = get_field('show_button', 'options');
								if($show_button == "yes"){
								echo '<li><a href="'. get_field('book_now_url', 'options') .'" class="button button__feature button__feature--3">' . get_field('book_button_text', 'options') . '</a></li>';
							}
						?>

                        <li class="club__menu__wrapper">
                            <a href="/club" class="button button__feature js-club-menu-launch">Club Members</a>
                            <?php //club_menu(); ?>
                        </li>
                        <li class="mobile-only">
                            <a href="" class="search__mobile--button js-search__mobile__button">Search</a>
                            <div class="search__mobile js-search__mobile">
                                <form class="search__form" method="get" action="<?php echo home_url(); ?>" role="search">
									<input type="hidden" name="search-type" value="normal" />
                                    <label for="searchForm">Search</label>
                                    <input id="searchForm--mobile" class="search__input" type="search" name="s" placeholder="Search">
                                    <button class="search__submit" type="submit" role="button">Search</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="breadcrumb__wrapper">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<div class="breadcrumb layout__inner">','</div>' );
                }
            ?>
        </div>


	</header>
	<!-- /header -->

	<div class="site-wrapper--inner waypoint">
