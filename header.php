<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<script src="//use.typekit.net/scx6gfo.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<!-- snippet for wp responsive design -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- SEO get_my_title_tag -->
	<title><?php get_my_title_tag(); ?></title>

	<!-- Start Meta -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />

	<!-- Start Stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- start Google AC -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-36348141-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- end Google AC -->
	<?php wp_head(); ?>
</head>
<body <?php body_class($class) ?>>
<header>

	<!-- start class content div-->
	<div class="content">

		<div class="logo">
		<a href="<?php echo get_home_url('1','/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/necn-logo.png" alt="NECN Blog for Neighborhood Emergency Preparedness in Seattle, WA"></a>
		</div>
		<div class="right-column-header">
			<div class="right-column-top-header">
				<ul>
					<li><a href="<?php bloginfo('home'); ?>/wp-login.php">Login</a></li>
					<li><?php get_search_form(); ?></li>
					<li> <?php do_action('crafty-social-link-buttons'); ?></li>
				</ul>
			</div>

		</div><!--closing div for right_column_header-->
		<div class="clear"></div>

		<!-- add mobile nav below main nav within div, this generates the HTML for new menu location-->
		<div class="primary-nav">
			<?php display_multisite_global_menu(); ?>
		</div>
		<div class="primary-mobile-nav">
			<a href="#menu" class="show-menu"><img src="<?php bloginfo('template_url'); ?>/images/nav.png" alt="Menu"></a>

			<?php display_multisite_global_menu(); ?>
		</div>

	

	</div>
	<!-- end class content div-->
</header>


<!-- start content -->
<div class="content">