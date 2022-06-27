<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/Combe-Grove-favicon.png">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/dist/images/Combe-Grove-OG.jpg" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="1200" />
		<meta name="facebook-domain-verification" content="3xg118z3ugasz8mvn2dypqrw1hs063" />

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles/main.css?v=9" />

		<?php // Fonts ?>
        <link rel="stylesheet" href="https://use.typekit.net/iiw8hvu.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100|Open+Sans+Condensed:300,700" rel="stylesheet">

		<?php wp_head(); ?>

        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bc98e65ddd6040011604e59 http://platform-api.sharethis.com/js/sharethis.js#property=5bc98e65ddd6040011604e59&product=social-ab' async='async'></script>

		<?php // Cookie message ?>
		<script type="text/javascript">
			var cpm = {};
			(function(h,u,b){
			var d=h.getElementsByTagName("script")[0],e=h.createElement("script");
			e.async=true;e.src='https://cookiehub.net/c2/832eca8e.js';
			e.onload=function(){u.cookiehub.load(b);}
			d.parentNode.insertBefore(e,d);
			})(document,window,cpm);
		</script>

        <?php /*<!-- Google Tag Manager -->
        <noscript>
            <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NZ8664" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NZ8664');
        </script>
        <!-- End Google Tag Manager -->
		*/ ?>

		<script type="text/javascript">

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			var tbb_ga =  'UA-66715242-1'
			var tbb_cid = 'CombeGroveHotelDirect'
			var tbb_domain = 'www.thebookingbutton.com.au';

			ga('create', tbb_ga, {'allowLinker': true});
			ga('require', 'linker');
			ga('linker:autoLink', [tbb_domain]);
			ga('send', 'pageview');

			ga(function(tracker) {
				window.linker = window.linker || new window.gaplugins.Linker(tracker);
				if(document.referrer.indexOf(document.domain)!=7) {
					var e = document.createElement('iframe');
					e.src = window.linker.decorate('//'+tbb_domain+'/'+tbb_cid+'/ga_proxy');
					e.setAttribute('style', 'display:none');
					var b = document.getElementsByTagName('body')[0];
					b.appendChild(e);
				}
			});

			// Automatically apply TBB prefix to thebookingbutton links
			// $(document).ready(function(){
			// 	$('a[href*="'+tbb_domain+'"]').each(function(){
			// 		this.href = this.href.replace(new RegExp(tbb_domain+'/properties', 'i'), tbb_domain+'/'+tbb_cid+'/properties');
			// 	});
			// });
		</script>

		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '302330161389131');
			fbq('track', 'PageView');
			</script>
			<noscript>
			<img height="1" width="1"
			src="https://www.facebook.com/tr?id=302330161389131&ev=PageView
			&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->




		<!-- Global site tag (gtag.js) - Google Ads: 370777111 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-370777111"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'AW-370777111');


		  if(window.location.pathname.indexOf('/club/become-a-member-thank-you') != -1)
		  {
		     gtag('event', 'conversion', {'send_to': 'AW-370777111/27P5CLP2vb8CEJe45rAB'});
		  }
		</script>


	</head>
	<body <?php body_class(); ?>>

		<?php include 'includes/header-content.php'; ?>
