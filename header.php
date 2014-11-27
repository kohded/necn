<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- snippet for wp responsive design -->
		
		<!-- SEO get_my_title_tag -->
		<title><?php get_my_title_tag(); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
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

                        <a href="<?php bloginfo('url'); ?>"><img src="http://placehold.it/350x150"></a>
			<div class="right-column-header">
			<div class="right-column-top-header">	
				<ul>
					<li><a href="<?php bloginfo('home'); ?>/wp-login.php">Login</a></li>
					<li><?php get_search_form(); ?></li>
					<li> <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?></li>
				</ul>
			</div>
			
			</div><!--closing div for right_column_header-->
			<div class="clear"></div>
			
					<!-- add mobile nav below main nav within div, this generates the HTML for new menu location-->
				<div class="primary-nav">
					<?php display_multisite_global_menu(); ?>
				</div>
				<div class="primary-mobile-nav">
					<a class="show-menu">MENU</a>
					<?php display_multisite_global_menu(); ?>
				</div>
			<?php // wp_nav_menu($mainMenu);
			?>

			<div class="clear"></div>

			</div>
			<!-- end class content div-->
		</header>

		
	<!-- start content -->
        <div class="content">
