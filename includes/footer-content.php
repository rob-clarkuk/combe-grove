	</div> <!-- end site-wrapper-inner -->
    <?php
    if ( is_page_template( 'page-home.php' ) ) {
		include 'top-news-posts.php';
        include 'home-promos.php';
        include 'back-to-top.php';
    } else if ( is_page_template( 'page-find-us.php' ) ) {
        include 'newsletter.php';
    } else {
        include 'back-to-top.php';
        include 'newsletter.php';
    }
    ?>


	<footer class="footer">
		<div class="layout__inner footer__logomark">
            <a href="/" class="footer__logo">Combe Grove</a>
            <?php footer_nav(); ?>
            <div class="social__wrapper social__wrapper--footer">
                <?php include 'social.php'; ?>
            </div>
            <ul class="footer__logos">
                <li class="footer__logo--1">Apprenticeships, Good for business</li>
                <li class="footer__logo--2">Green Tourism</li>
				<li class="footer__logo--3">Good to go</li>
            </ul>
			<p>&copy; <?php the_date('Y'); ?> Combe Grove <span>&bull;</span> Website by: <a href="https://thecofoundry.co.uk" target="_blank">The Co-Foundry</a></p>
		</div>
	</footer>

</div> <!-- End: site-wrapper -->

<?php include 'menu.php'; ?>

<div id="overlay--loading"></div>
