<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- snippet for wp responsive design -->
		
		<title><?php bloginfo("name") . wp_title('|'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<meta name="viewport" content="width=device-width">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class($class) ?>>
		<header>
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

				<div class="primary-nav">
					<?php wp_nav_menu($mainMenu);?>
				</div>
			<?php // wp_nav_menu($mainMenu);
			?>
			<div class="clear"></div>
            </div>
	    </header>
		
	<!-- start content -->
        <div class="content">
