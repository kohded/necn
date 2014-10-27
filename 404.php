<? php
/**
 * Displaying 404 pages (Not Found)
 * Theme: necn
 */
<? php get_header(): ?>

	<!-- start page content -->
	<div id="content" class="content-area">
			<main id="main" class="page-<?php the_ID(); ?>" role="main">
	
		<!-- start breadcrumbs -->
		<div id="breadcrumbs">
			<?php bcn_display(); ?>
		</div>
		<!--end breadcrumbs -->
	
<h2>Error 404 - Not Found </h2>

			</main>
			<!-- end main -->

<? php // create sidebar call for each instance
	if (is_front_page() ) :
		get_sidebar( 'primary' ); 
	elseif ( is_index() ) :
		get_sidebar( 'content' ); 
			elseif (is_page() ) :
				get_sidebar( 'content' );
			elseif ( is_page() ) :
				get_sidebar( 'ballard' ); 
			elseif ( is_page() ) :
				get_sidebar( 'broadview' ); 
			elseif ( is_page() ) :
				get_sidebar( 'capital_hill' ); 
			elseif ( is_page() ) :
				get_sidebar( 'central_district' ); 
			elseif ( is_page() ) :
				get_sidebar( 'crown_hill' ); 
			elseif ( is_page() ) :
				get_sidebar( 'fremont' ); 
			elseif ( is_page() ) :
				get_sidebar( 'greenwood' ); 
			elseif ( is_page() ) :
				get_sidebar( 'interbay' ); 
			elseif ( is_page() ) :
				get_sidebar( 'lake_city' ); 
			elseif ( is_page() ) :
				get_sidebar( 'magnolia' ); 
			elseif ( is_page() ) :
				get_sidebar( 'maple_leaf' ); 
			elseif ( is_page() ) :
				get_sidebar( 'ne_seattle' ); 
			elseif ( is_page() ) :
				get_sidebar( 'queen_anne' ); 
			elseif ( is_page() ) :
				get_sidebar( 'rainier_beach' ); 
			elseif ( is_page() ) :
				get_sidebar( 'seattle' ); 
			elseif ( is_page() ) :
				get_sidebar( 'shilshole_bay' ); 
			elseif ( is_page() ) :
				get_sidebar( 'wallingford' ); 
			elseif ( is_page() ) :
				get_sidebar( 'wedgewood' );  
	else :
		get_sidebar( 'west_seattle' );
	endif;
?>


	</div>
	<!-- end page content -->

<? php get_footer(); ?>
