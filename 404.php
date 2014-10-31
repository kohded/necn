<? php
/**
 * Displaying 404 pages (Not Found)
 * Theme: necn
 */
<? php
/**
* Displaying 404 pages (Not Found)
* Theme: necn
*/
<? php get_header(): ?>
<!-- start page content -->
<div id="content" class="content-area">
	
	<!--start main-->
	<main id="main" class="page-<?php the_ID(); ?>" role="main">
	
	<!-- start breadcrumbs -->
	<div id="breadcrumbs">
		<?php bcn_display(); ?>
	</div>
	<!--end breadcrumbs -->

		<h2>Error 404 - Not Found </h2>

<p>Sorry, this page does not exist. The page may have been deleted or moved and we apologize for any inconvenience.</p>
<p>You may use the search box in the right sidebar or you can go back to the <a href="<?php bloginfo('url'); ?>">homepage</a> and try again.</p>
	</main>
	<!-- end main -->
<? php // create sidebar call to primary
	if (is_front_page() ) :
	get_sidebar( 'primary' );
?>
</div>
<!-- end page content -->

<? php get_footer(); ?>
