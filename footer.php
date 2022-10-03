		<?php include 'includes/footer-content.php'; ?>
        <div class="js-events-overlay events-overlay"></div>
		<?php wp_footer(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/modernizr.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/carousels.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/classie.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/events.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/fancybox.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/header.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/menu.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/menu-moile.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/scroll-to-top.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/search.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/scroll-to-top.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/team.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/accordion.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/menu-mobile.js"></script>

		<script>
		  window.addEventListener('load', function() {

		    jQuery('.button__cta:contains("Book a tour")').click(function() {
		      gtag('event', 'conversion', {
		        'send_to': 'AW-370777111/xs1yCMGXv78CEJe45rAB'
		      });
		    });

		  });
		</script>
	</body>
</html>
