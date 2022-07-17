		<?php include 'includes/footer-content.php'; ?>
        <div class="js-events-overlay events-overlay"></div>
		<?php wp_footer(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/scripts/main.js?v=<?php echo time();?>"></script>
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
