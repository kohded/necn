<!DOCTYPE html>
<html <?php language_attributes(); ?>
	<head>
		<title><?php bloginfo("name") . wp_title('|'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class($class) ?>>
		<header>
			<a href="<?php bloginfo('url'); ?>"><img src="http://placehold.it/350x150"></a>
			<div class="right_column_header">
			<div class="right_column_top_header">
				<ul>
					<li>Search</li>
					<li>Login</li>
				</ul>
			</div>
			<div class="right_column_bottom_header">
				<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/google-plus.png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png">
			</div><!--closing div for right_column_bottom_header-->
			</div><!--closing div for right_column_header-->
<div class="clear"></div>
			<?php wp_nav_menu($mainMenu);?>
<div class="clear"></div>
	    </header>
		
	<div>