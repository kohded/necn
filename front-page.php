<?php
/*
    Template NECN: Front Page
*/
?>
<?php get_header(); ?>

		
    		<!-- start front-page slider -->
    <div id="slider-home">
<?php 
    echo do_shortcode("[metaslider id=262]"); 
?>    </div>
    		<!-- end front-page slider -->        
<!-- start content -->
	<div class="content-area">		
  	<h3>
  		Neighboorhood Emergency Communications Network SEO keyword rich summary goes

here. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac

turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.

Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.
  	</h3>
  
        <!-- start posts -->            
            	
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?> 	   
		<article class="page-article-post">
			 
             <?php the_content(); ?>
   		 </article>
	<?php endwhile; ?>
<?php endif; ?>
		
<<<<<<< Updated upstream
						// Include the page content template.
			get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
			endwhile; endif;
			
		?>

=======
	
				<?php wp_link_pages(); ?>
>>>>>>> Stashed changes
             
  		</div>
 		<!-- end posts -->
        
<<<<<<< Updated upstream
		 		<!-- start right page sidebar -->
    
				
			<?php get_sidebar('primary'); ?>
		
		 		<!-- end right page sidebar -->
=======
		<div class="main-content-right">
			<?php get_sidebar("primary"); ?>	
		</div> 	
>>>>>>> Stashed changes
                
		<!-- end content -->
		<div class="footer-sidebar">
			<?php get_sidebar("footer"); ?>
		</div>
		
        
<?php get_footer(); ?>
