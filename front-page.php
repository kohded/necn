<?php
/*
    Template NECN: Front Page
*/
?>
<?php get_header(); ?>

		<!-- start content -->
	<div id="content-front-page" class="content-area">
    		<!-- start front-page slider -->
    <div id="slider-home">
    </div>
    		<!-- end front-page slider -->        
		
        <!-- start posts -->            
            	
		<?php 
		// Start the Loop
		if (have_posts()) : while (have_posts()) : the_post();
		
						// Include the page content template.
			get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
			endwhile; endif;
			
		?>

             
  		</div>
 		<!-- end posts -->
        
		 		<!-- start right page sidebar -->
    
				
			<?php get_sidebar('primary'); ?>
		
		 		<!-- end right page sidebar -->
                
	</div>
		<!-- end content -->
        
<?php get_footer(); ?>

